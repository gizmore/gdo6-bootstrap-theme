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
   <?=$field->htmlValue()?>
   type="date" />
   <?=$field->htmlError()?>
</div>
 