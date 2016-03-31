<?php

namespace Craft;

/**
 * Snaptcha Service
 *
 */
class SnaptchaService extends BaseApplicationComponent
{
  private $settings;

  /**
   * Init
   */
  public function init()
  {
    parent::init();

    // get settings
    $this->settings = craft()->plugins->getPlugin('snaptcha')->getSettings();
  }

  /**
   * Get field
   */
  public function getField()
  {
    // create a new record
    $snaptchaRecord = new SnaptchaRecord;

    // set attributes
    $snaptchaRecord->key = StringHelper::randomString(13);
    $snaptchaRecord->ipAddress = craft()->request->getIpAddress();
    $snaptchaRecord->timestamp = time();

    // save record
    $snaptchaRecord->save();

    // create random field name id
    $fieldNameId = $this->settings['fieldName'].'_'.StringHelper::randomString(5);

    // create input field html
    $field = '
      <input type="hidden" id="'.$fieldNameId.'" name="'.$this->settings['fieldName'].'" value="" />
      <script type="text/javascript">document.getElementById("'.$fieldNameId.'").value = "'.$snaptchaRecord->key.'";</script>
    ';

    // get field in raw format
    $field = TemplateHelper::getRaw($field);

    return $field;
  }

  /**
   * Get log
   */
  public function getLog()
  {
    // get record from DB
    $snaptchaLogRecords = Snaptcha_LogRecord::model()->findAll();

    // populate models
    $snaptchaLogModels = Snaptcha_LogModel::populateModels($snaptchaLogRecords);

    // get totals
    $criteria = new \CDbCriteria;
    $criteria->select = 'SUM(approved) as approved, SUM(denied) as denied';
    $totals = Snaptcha_LogRecord::model()->find($criteria);

    $log = array(
      'items' => $snaptchaLogModels,
      'approved' => ($totals->approved ? $totals->approved : 0),
      'denied' => ($totals->denied ? $totals->denied : 0),
    );

    return $log;
  }

  /**
   * Validate
   */
  public function validate($throwException = false)
  {
    // fire an onBeforeValidate event
    $event = new Event($this);
    $this->onBeforeValidate($event);

    // check if the event is giving us the go-ahead
    if (!$event->performAction)
    {
      return true;
    }

    // check if validation is disabled
    if (!$this->settings['enabled'])
    {
      return true;
    }

    // check if this is a CP request
    if (craft()->request->isCpRequest())
    {
      return true;
    }

    // if ip address is in blacklist
    if (strpos($this->settings['blacklist'], craft()->request->getIpAddress()) !== false)
    {
      $this->_error('IP address is in blacklist', $throwException);

      return false;
    }

    // set min submit time
    $minTime = time() - 3;

    // set expiry time
    $expiryTime = time() - ($this->settings['expirationTime'] * 60);

    // delete all expired records
    SnaptchaRecord::model()->deleteAll('timestamp < '.$expiryTime);

    // if field value not found
    if (!$fieldValue = craft()->request->getPost($this->settings['fieldName']))
    {
      $this->_error('Snaptcha field not found', $throwException);

      return false;
    }

    // get record from DB
    $snaptchaRecord = SnaptchaRecord::model()->findByAttributes(array(
      'key' => $fieldValue,
      'ipAddress' => craft()->request->getIpAddress(),
    ));

    // if record not found
    if (!$snaptchaRecord)
    {
      $this->_error('Snaptcha field not found in database', $throwException);

      return false;
    }

    // if record's timestamp is within the minimum time
    if ($snaptchaRecord->timestamp > $minTime)
    {
      $this->_error('Snaptcha field submitted too soon', $throwException);

      return false;
    }

    // if record's timestamp is expired
    if ($snaptchaRecord->timestamp < $expiryTime)
    {
      $this->_error('Snaptcha field expired', $throwException);

      return false;
    }

    if ($this->settings['oneTimeKey'])
    {
      // delete this record
      $snaptchaRecord->delete();
    }

    // success
    $this->_success();

    // fire an onValidate event
    $this->onValidate(new Event($this));

    return true;
  }

  /**
   * On Before Validate Event
   */
  public function onBeforeValidate(Event $event)
  {
    $this->raiseEvent('onBeforeValidate', $event);
  }

  /**
   * On Validate Event
   */
  public function onValidate(Event $event)
  {
    $this->raiseEvent('onValidate', $event);
  }

  /**
   * Error
   */
  private function _error($message, $throwException = false)
  {
    // get log record
    $snaptchaLogRecord = $this->_getLogRecord();

    // increment denied count
    $snaptchaLogRecord->denied++;

    // save record
    $snaptchaLogRecord->save();


    // log error message
    SnaptchaPlugin::log(Craft::t($message).' ['.craft()->request->getHostInfo().craft()->request->getUrl().'] ['.craft()->request->getIpAddress().']', LogLevel::Error);


    // temporary fix for onBeforeSaveUser hook
    if (craft()->request->getParam('action') == 'users/saveUser')
    {
      // commit transaction to ensure record is saved
      craft()->db->getCurrentTransaction()->commit();

      die(Craft::t($this->settings['errorMessage']));
    }

    // if we should throw an exception
    if ($throwException)
    {
      throw new HttpException(403, Craft::t($this->settings['errorMessage']));
    }
  }

  /**
   * Success
   */
  private function _success()
  {
    // get log record
    $snaptchaLogRecord = $this->_getLogRecord();

    // increment approved count
    $snaptchaLogRecord->approved++;

    // save record
    $snaptchaLogRecord->save();
  }

  /**
   * Get log record
   */
  private function _getLogRecord($date = '')
  {
    // set date to today if not specified
    $date = $date ? $date : date('Y-m-d');

    // get log record from DB
    $snaptchaLogRecord = Snaptcha_LogRecord::model()->findByAttributes(array(
      'date' => date('Y-m-d'),
    ));

    // if record not found
    if (!$snaptchaLogRecord)
    {
      // create a new record
      $snaptchaLogRecord = new Snaptcha_LogRecord;

      // set attributes
      $snaptchaLogRecord->date = date('Y-m-d');
    }

    return $snaptchaLogRecord;
  }
}
