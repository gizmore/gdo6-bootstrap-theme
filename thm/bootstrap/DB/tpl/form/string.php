<?php /** @var $field \GDO\DB\GDT_String **/ ?>
<div class="form-group <?=$field->classError()?>">
  <?= $field->htmlIcon(); ?>
  <label <?=$field->htmlForID()?>><?= $field->displayLabel(); ?></label>
  <input
   <?=$field->htmlID()?>
   type="<?=$field->_inputType?>"
   class="form-control"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlPattern(); ?>
   <?= $field->htmlDisabled(); ?>
   min="<?= $field->min; ?>"
   max="<?= $field->max; ?>"
   size="<?= min($field->max, 32); ?>"
   <?=$field->htmlFormName()?>
   value="<?= $field->getVar(); ?>" />
  <?=$field->htmlError()?>
</div>
