<?php

namespace Craft;

/**
 * Snaptcha Variable
 */
class SnaptchaVariable
{
  /**
   * Field
   */
  public function field()
  {
    return craft()->snaptcha->getField();
  }

  /**
   * Log
   */
  public function log()
  {
    // require login
    craft()->userSession->requireLogin();

    return craft()->snaptcha->getLog();
  }

  /**
   * Settings
   */
  public function settings()
  {
    // require login
    craft()->userSession->requireLogin();

    return craft()->plugins->getPlugin('snaptcha')->getSettings();
  }
}
