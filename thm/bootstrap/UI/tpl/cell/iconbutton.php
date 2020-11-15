<?php
/** @var $field \GDO\UI\GDT_IconButton **/
?>
<?php if ($field->href) : ?>
<div
 <?=$field->htmlDisabled()?>
 class="btn <?=$field->primaryButton?'btn-primary':'btn-secondary'?> gdt-button gdt-image-button">
  <a
   href="<?=$field->href?>"><?=$field->htmlIcon()?> <?=$field->displayLabel()?></a>
</div>
<?php endif; ?>
