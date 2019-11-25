<?php /** @var $field \GDO\DB\GDT_Decimal **/ ?>
<div class="form-group <?=$field->classError()?>">
  <?=$field->htmlTooltip()?>
  <?= $field->htmlIcon(); ?>
  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <input
   class="form-control"
   type="number"
   name="form[<?= $field->name; ?>]"
   <?= $field->htmlDisabled(); ?>
   <?= $field->htmlRequired(); ?>
   min="<?= $field->min; ?>"
   max="<?= $field->max; ?>"
   step="<?= $field->step; ?>"
   value="<?= $field->getVar(); ?>" />
  <?= $field->htmlError(); ?>
</div>
