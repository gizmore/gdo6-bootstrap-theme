<?php
use GDO\Date\GDT_DateTime;
$field instanceof GDT_DateTime;
?>
<div class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label><?= $field->displayLabel(); ?></label>
  <input
   class="form-control"
   name="form[<?= $field->name; ?>]"
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   value="<?= $field->getVar(); ?>" 
   type="text" />
   <?=$field->htmlError()?>
</div>
