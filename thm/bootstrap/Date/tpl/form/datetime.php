<?php
use GDO\Date\Time;
/** @var $field \GDO\Date\GDT_DateTime **/
?>
<div class="form-group <?=$field->htmlClass()?> <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label><?= $field->displayLabel(); ?></label>
  <input
   class="form-control"
   <?=$field->htmlFormName()?>
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   value="<?=Time::displayDateTime(Time::parseDateTimeDB($field->getVar()), 'local', '')?>"
   autocomplete="off"
   type="datetime-local" />
   <?=$field->htmlError()?>
</div>
