<?php

namespace Craft;

class SnaptchaPlugin extends BasePlugin
{
  public function init()
  {
    // template hooks
    craft()->templates->hook('sproutForms.modifyForm', array($this, 'getField'));

    // events
    craft()->on('users.beforeSaveUser', function($event) {
        // if is new user
        if ($event->params['isNewUser'])
        {
            $this->validate();
        }
    });
    craft()->on('contactForm.beforeSend', array($this, 'validate'));
    craft()->on('guestEntries.beforeSave', array($this, 'validate'));
    craft()->on('sproutForms.beforeSaveEntry', array($this, 'validate'));
  }

  public function getField()
  {
    // return field
    return craft()->snaptcha->getField();
  }

  public function validate()
  {
    // validate and throw exception for error
    craft()->snaptcha->validate(true);
  }

  public function getName()
  {
    return Craft::t('Snaptcha');
  }

  public function getVersion()
  {
    return '1.1.0';
  }

  public function getDeveloper()
  {
    return 'PutYourLightsOn (Ben Croker)';
  }

  public function getDeveloperUrl()
  {
    return 'http://www.putyourlightson.net';
  }

  protected function defineSettings()
  {
    return array(
      'enabled' => array(AttributeType::Bool, 'required' => true, 'default' => ''),
      'oneTimeKey' => array(AttributeType::Bool, 'required' => true, 'default' => '1'),
      'fieldName' => array(AttributeType::String, 'required' => true, 'default' => 'snaptcha'),
      'expirationTime' => array(AttributeType::Number, 'required' => true, 'default' => 60),
      'errorMessage' => array(AttributeType::String, 'required' => true, 'default' => 'Sorry, you have failed the security test. Please ensure that you have javascript enabled and that you refresh the page that you are trying to submit.'),
      'blacklist' => array(AttributeType::String),
    );
  }

  public function getSettingsHtml()
  {
    // if settings page was requested
    if (craft()->request->getPath() == 'settings/plugins/snaptcha')
    {
      // redirect to main snaptcha template
      craft()->request->redirect(UrlHelper::getUrl('snaptcha'));
    }

    // otherwise return true
    return true;
  }
}
