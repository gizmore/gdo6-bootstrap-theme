<?php
use GDO\Date\Time;
/** @var $field \GDO\Date\GDT_DateTime **/
?>
<div class="form-group gdt-datetime <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label><?= $field->displayLabel(); ?></label>
  <input
   class="form-control"
   <?=$field->htmlFormName()?>
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   value="<?=Time::displayDate($field->getVar(), 'local')?>"
   autocomplete="off"
   type="datetime-local" />
   <?=$field->htmlError()?>
</div>
