<?php /** @var $field \GDO\UI\GDT_Menu **/
use GDO\UI\GDT_Icon;
?>
<?php if (!empty($field->getFields())) : ?>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?=GDT_Icon::iconS('menu')?>
  </button>
  <div class="dropdown-menu">
<?php foreach ($field->getFields() as $gdoType) : ?>
	<?=$gdoType->render()?>
<?php endforeach; ?>
  </div>
</div>
<?php endif; ?>
