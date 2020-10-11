<?php /** @var $field \GDO\UI\GDT_Message **/
?>
<div class="form-group <?= $field->classError(); ?>">
  <?= $field->htmlIcon(); ?>
  <label <?=$field->htmlForID()?>><?= $field->displayLabel(); ?></label>
  <textarea
   <?=$field->htmlID()?>
   novalidate="novalidate"
   class="<?=$field->classEditor()?> form-control"
   <?=$field->htmlFormName()?>
   rows="6"
   maxRows="6"
   <?= $field->htmlDisabled(); ?>><?= $field->getVar(); ?></textarea>
  <?=$field->htmlError()?>
</div>
