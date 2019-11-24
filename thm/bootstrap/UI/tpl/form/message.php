<?php /** @var $field \GDO\UI\GDT_Message **/
?>
<div class="form-group <?= $field->classError(); ?>">
  <?= $field->htmlIcon(); ?>
  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <textarea
   novalidate
   class="<?=$field->classEditor()?> form-control"
   name="form[<?= $field->name; ?>]"
   rows="6"
   maxRows="6"
   <?= $field->htmlDisabled(); ?>><?= $field->getVar(); ?></textarea>
  <?=$field->htmlError()?>
</div>
