<?php
/** @var $field \GDO\DB\GDT_Object **/
?>
<div
 gdo-autocomplete-init='<?=$field->displayConfigJSON()?>'
 class="form-group gdt-auto-complete <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label <?=$field->htmlForID()?>><?= $field->displayLabel(); ?></label>
  <input
   <?=$field->htmlID()?>
   class="form-control"
   type="text"
   <?=$field->htmlFormName()?>
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   value="<?=$field->displayVar()?>" />
  <input type="hidden" name="nocompletion_<?=$field->name?>" value="1" />
  <?= $field->htmlError(); ?>
</div>
