<?php
use GDO\Captcha\GDT_Captcha;
$field instanceof GDT_Captcha;
?>
<div class="form-group">
  <?=$field->htmlIcon()?>
  <label for="form[<?= $field->name; ?>]"><?= t('captcha'); ?></label>
  <input
   autocomplete="off"
   type="text"
   pattern="[a-zA-Z]{5}"
   required="required"
   style="width:120px; clear: both;"
   name="form[<?= $field->name; ?>]"
   value="<?= html($field->getVar()); ?>"/>
  <img
   class="gdo-captcha-img"
   src="<?= $field->hrefCaptcha(); ?>"
   onclick="this.src='<?= $field->hrefNewCaptcha(); ?>'+(new Date().getTime())" />
  <?=$field->htmlError()?>
</div>
