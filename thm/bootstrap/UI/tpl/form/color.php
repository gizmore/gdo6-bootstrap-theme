<?php
use GDO\UI\GDT_Color;
$field instanceof GDT_Color;
?>
<div class="form-group <?= $field->classError(); ?>">
  <?= $field->htmlIcon(); ?>
  <label <?=$field->htmlForID()?>><?= $field->displayLabel(); ?></label>
  <input
   <?=$field->htmlID()?>
   type="color"
   <?=$field->htmlFormName()?>
   value="<?= html($field->getVar()); ?>"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlDisabled(); ?>/>
  <?=$field->htmlError()?>
</div>
