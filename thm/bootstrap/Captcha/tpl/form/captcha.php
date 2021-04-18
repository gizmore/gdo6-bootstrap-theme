<?php
use GDO\Captcha\GDT_Captcha;
use GDO\Core\GDT_Template;
/** @var $field GDT_Captcha **/
?>
<div class="form-group">
  <?=$field->htmlIcon()?>
  <label <?=$field->htmlForID()?>><?= t('captcha'); ?></label>
  <?= GDT_Template::php('Captcha', 'form/captcha_inner.php', ['field' => $field])?>
  <?=$field->htmlError()?>
</div>
