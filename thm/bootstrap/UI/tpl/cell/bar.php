<?php /** @var $bar \GDO\UI\GDT_Bar **/
$bar->addClass('gdt-bar');
$bar->addClass('gdt-bar-' . $bar->htmlDirection());
$bar->addClass('flx');
$bar->addClass('flx-' . $bar->htmlDirection());
?>
<?php if ($bar->fields) : ?>
<div <?=$bar->htmlAttributes()?>>
  <?php foreach ($bar->fields as $field) : ?>
	<?= $field->render(); ?>
  <?php endforeach; ?>
</div>  
<?php endif;?>
