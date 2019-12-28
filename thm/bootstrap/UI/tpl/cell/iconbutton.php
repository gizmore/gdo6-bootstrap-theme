<?php
/** @var $field \GDO\UI\GDT_IconButton **/
?>
<?php if ($href) : ?>
<div
 <?=$field->htmlDisabled()?>
 class="btn <?=$field->primary?'btn-primary':'btn-secondary'?> gdt-button">
  <a
   href="<?=$href?>"><?=$field->htmlIcon()?> <?=$field->displayLabel()?></a>
</div>
<?php endif; ?>
