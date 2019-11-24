<?php
use GDO\Mail\GDT_Email;
use GDO\UI\GDT_Icon;
$field instanceof GDT_Email;
?>
<div class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label for="form[<?= $field->name; ?>]"><?=$field->displayLabel()?></label>
  <input
   type="email"
   name="form[<?= $field->name; ?>]"
   value="<?= $field->displayVar(); ?>"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlDisabled(); ?> />
  <?= $field->htmlError(); ?>
</div>
