<?php
/** @var $field \GDO\DB\GDT_Object **/
?>
<div
 gdo-autocomplete-init='<?=$field->displayJSON()?>'
 class="form-group gdt-auto-complete <?=$field->classError()?>">
  <?=$field->htmlTooltip()?>
  <?=$field->htmlIcon()?>
  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <input
   class="form-control"
   type="text"
   name="form[<?= $field->name; ?>]"
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   value="<?=$field->getVar()?>" />
  <input type="hidden" name="nocompletion_<?=$field->name?>" value="1" />
  <?= $field->htmlError(); ?>
</div>
