<?php
use GDO\Date\GDT_DateTime;
$field instanceof GDT_DateTime;
?>
<div class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label><?= $field->displayLabel(); ?></label>
  <input
   class="form-control"
   <?=$field->htmlFormName()?>
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   value="<?= $field->getVar(); ?>" 
   type="text" />
   <?=$field->htmlError()?>
</div>
