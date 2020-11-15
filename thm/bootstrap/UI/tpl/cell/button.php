<?phpuse GDO\UI\GDT_Button;/** @var $field GDT_Button **/$field->addClass("btn");
$field->addClass($field->primaryButton?"btn-primary":"btn-secondary");
$field->addClass("gdt-button");?>
<a href="<?=$href?>" <?=$field->htmlDisabled()?> <?=$field->htmlAttributes()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></a>
