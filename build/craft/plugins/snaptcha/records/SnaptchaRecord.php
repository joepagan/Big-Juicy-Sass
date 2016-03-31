<?php

namespace Craft;

/**
 * Snaptcha Record
 *
 */
class SnaptchaRecord extends BaseRecord
{
  /**
   * Gets the database table name
   *
   * @return string
   */
  public function getTableName()
  {
    return 'snaptcha';
  }

  /**
   * Define columns for our database table
   *
   * @return array
   */
  public function defineAttributes()
  {
    return array(
      'key' => array(AttributeType::String, 'required' => true),
      'ipAddress' => array(AttributeType::String),
      'timestamp' => array(AttributeType::String),
    );
  }
}
