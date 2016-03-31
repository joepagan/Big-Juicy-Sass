<?php

namespace Craft;

/**
 * Snaptcha Log Record
 *
 */
class Snaptcha_LogRecord extends BaseRecord
{
  /**
   * Gets the database table name
   *
   * @return string
   */
  public function getTableName()
  {
    return 'snaptcha_log';
  }

  /**
   * Define columns for our database table
   *
   * @return array
   */
  public function defineAttributes()
  {
    return array(
      'date' => array(AttributeType::String, 'required' => true),
      'approved' => array(AttributeType::Number, 'default' => 0),
      'denied' => array(AttributeType::Number, 'default' => 0),
    );
  }
}
