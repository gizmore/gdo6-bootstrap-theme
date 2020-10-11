<?php
use GDO\Captcha\GDT_Captcha;
/** @var $field GDT_Captcha **/
?>
<div class="form-group">
  <?=$field->htmlIcon()?>
  <label <?=$field->htmlForID()?>><?= t('captcha'); ?></label>
  <input
   <?=$field->htmlID()?>
   autocomplete="off"
   type="text"
   pattern="[a-zA-Z]{5}"
   required="required"
   style="width:120px;"
   <?=$field->htmlFormName()?>
   value="<?= html($field->getVar()); ?>"/>
  <img
   class="gdo-captcha-img"
   src="<?= $field->hrefCaptcha(); ?>"
   onclick="this.src='<?= $field->hrefNewCaptcha(); ?>'+(new Date().getTime())" />
  <?=$field->htmlError()?>
</div>
