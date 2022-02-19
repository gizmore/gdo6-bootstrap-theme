<?phpuse GDO\UI\GDT_Tab;
/** @var $cell boolean **//** @var $field GDT_Tab **/?> 
<div class="container">
  <div>
<?php
foreach ($field->getFieldsRec() as $gdt)
{
	echo $cell ? $gdt->renderCell() : $gdt->renderForm();
}
?>
  </div>
</div>
