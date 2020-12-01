<?php
use GDO\UI\GDT_Panel;
/**
 * @var $field GDT_Panel
**/
$field->addClass('card');
?>
<div <?=$field->htmlAttributes()?>">
<?php if ($field->hasTitle()) : ?>
  <h3><?=$field->renderTitle()?></h3>
<?php endif; ?>
  <div class="card-body">
<?php foreach($field->fields as $field) : ?>
    <?=$field->renderCell()?>
<?php endforeach;?>
  </div>
</div>
