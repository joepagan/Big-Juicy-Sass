<?php
namespace Craft;

/**
 * Snaptcha Controller
 */
class SnaptchaController extends BaseController
{
  protected $allowAnonymous = array('actionValidate');
  
  /**
   * Validate
   */
  public function actionValidate()
  {
		craft()->snaptcha->validate(true);

		die('success');
  }

}
