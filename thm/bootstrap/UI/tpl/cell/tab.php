<?php
use GDO\UI\GDT_Tab;
$field instanceof GDT_Tab;
?>
<div class="container">
  <h5><?=$field->displayLabel()?></h5>
  <div>
<?php
foreach ($field->getFields() as $gdt)
{
	echo $cell ? $gdt->renderCell() : $gdt->renderForm();
}
?>
  </div>
</div>
