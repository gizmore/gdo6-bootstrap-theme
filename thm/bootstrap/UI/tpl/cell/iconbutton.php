<?php
/** @var $field \GDO\UI\GDT_IconButton **/
$field->addClass("gdt-button");
$field->addClass("gdt-iconbutton");
$field->addClass("btn");
$classes = [
	'btn-primary',
	'btn-outline-success',
	'btn-outline-danger',
];
$field->addClass($classes[$field->priority]);
?>
<div
 <?=$field->htmlAttributes()?>
><a
  <?=$field->htmlDisabled()?>
  href="<?=$field->gdoHREF()?>"><?=$field->htmlIcon()?>
<?=$field->displayLabel()?></a></div>
