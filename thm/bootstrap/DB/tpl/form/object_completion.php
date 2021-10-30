<?php
/** @var $field \GDO\DB\GDT_Object **/
?>
<div
 data-gdt-config='<?=$field->displayConfigJSON()?>'
 class="form-group gdo-autocomplete <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label <?=$field->htmlForID()?>><?= $field->displayLabel(); ?></label>
  <input
   type="text"
   <?=$field->htmlID()?>
   <?=$field->htmlAutocompleteOff()?>
   class="form-control gdo-autocomplete-input"
   <?=$field->htmlFormName()?>
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   value="<?=$field->displayVar()?>" />
  <input type="hidden" id="nocompletion_<?=$field->name?>" name="nocompletion_<?=$field->name?>" value="1" />
  <input type="hidden" id="gdo-autocomplete-id-<?=$field->name?>" />
  <?= $field->htmlError(); ?>
</div>
