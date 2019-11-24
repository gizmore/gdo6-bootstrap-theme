<?php/** @var $field GDT_Button **/$field->addClass("btn");
$field->addClass($field->primary?"btn-primary":"btn-secondary");
$field->addClass("gdt-button");?>
<button <?=$field->htmlDisabled()?> <?=$field->htmlAttributes()?>>  <a href="<?=$href?>">
    <?=$field->htmlIcon()?>
    <?=$field->displayLabel()?>
  </a>
</button>
