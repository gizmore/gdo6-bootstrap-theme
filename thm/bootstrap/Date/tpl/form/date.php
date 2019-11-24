<?php
/** @var $field \GDO\Date\GDT_Date **/
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
 