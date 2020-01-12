<?php /** @var $bar \GDO\UI\GDT_Bar **/
$bar->addClass('gdt-bar');
$bar->addClass('gdt-bar-' . $bar->htmlDirection());
$bar->addClass('d-flex');
$bar->addClass('flex' . $bar->htmlDirection());
?>
<div <?=$bar->htmlAttributes()?>>
<?php if ($bar->fields) : ?>
  <?php foreach ($bar->fields as $field) : ?>
	<?= $field->render(); ?>
  <?php endforeach; ?>
<?php endif;?>
</div>  
