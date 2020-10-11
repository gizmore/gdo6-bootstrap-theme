<?php
/** @var $field \GDO\DB\GDT_Object **/
?>
<div
 class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <input
   class="form-control"
   type="number"
   step="1"
   name="form[<?= $field->name; ?>]"
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   value="<?=$field->displayVar()?>" />
  <?= $field->htmlError(); ?>
</div>
