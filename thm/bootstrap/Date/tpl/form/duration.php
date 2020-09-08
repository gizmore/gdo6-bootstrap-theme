<?php /** @var $field \GDO\Date\GDT_Duration **/ ?>
<div class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <input
   class="form-control"
   type="text"
   name="form[<?= $field->name; ?>]"
   <?= $field->htmlDisabled(); ?>
   <?= $field->htmlRequired(); ?>
   value="<?= $field->displayVar(); ?>" />
  <?=$field->htmlError()?>
</div>
