<?php
/** @var $field \GDO\UI\GDT_IconButton **/
$field->addClass("gdt-button");
$field->addClass("gdt-icon-button");
$field->addClass("btn");
$classes = [
	'btn-primary',
	'btn-outline-success',
	'btn-outline-danger',
];
$field->addClass($classes[$field->priority]);
?>
<?php if ($field->href) : ?>
<div
 <?=$field->htmlAttributes()?>
 <?=$field->htmlDisabled()?>
><a href="<?=$field->href?>"><?=$field->htmlIcon()?> <?=$field->displayLabel()?></a>
</div>
<?php endif; ?>
