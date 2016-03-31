<?php

namespace Craft;

/**
 * Snaptcha Log Model
 */
class Snaptcha_LogModel extends BaseModel
{
  /**
   * Defines what is returned when someone puts this directly in their template.
   * 
   * @return string
   */
  public function __toString()
  {
    return $this->date;
  }

  /**
   * Define the attributes this model will have.
   *
   * @return array
   */
  public function defineAttributes()
  {
    return array(
      'date' => AttributeType::String,
      'approved' => AttributeType::Number,
      'denied' => AttributeType::Number,
    );
  }
}
