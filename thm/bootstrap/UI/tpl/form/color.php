<?php
use GDO\UI\GDT_Color;
$field instanceof GDT_Color;
?>
<div class="form-group <?= $field->classError(); ?>">
  <?= $field->htmlIcon(); ?>
  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <input
   type="color"
   name="form[<?= $field->name; ?>]"
   value="<?= html($field->getVar()); ?>"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlDisabled(); ?>/>
  <?=$field->htmlError()?>
</div>
