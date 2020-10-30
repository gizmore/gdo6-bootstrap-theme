<?php
/** @var $field \GDO\Date\GDT_Date **/
?>
<div class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label><?= $field->displayLabel(); ?></label>
  <input
   class="form-control"
   <?=$field->htmlFormName()?>
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   value="<?=$field->renderCell()?>" 
   type="text" />
   <?=$field->htmlError()?>
</div>
 