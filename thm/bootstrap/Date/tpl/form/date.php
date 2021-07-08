<?php
/** @var $field \GDO\Date\GDT_Date **/
?>
<div class="form-group gdt-date <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label><?= $field->displayLabel(); ?></label>
  <input
   class="form-control"
   <?=$field->htmlFormName()?>
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   value="<?=$field->displayVar()?>"
   autocomplete="off"
   type="text" />
   <?=$field->htmlError()?>
</div>
 