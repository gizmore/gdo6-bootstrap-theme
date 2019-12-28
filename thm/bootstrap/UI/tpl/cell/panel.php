<?php
use GDO\UI\GDT_Panel;
/**
 * @var $field GDT_Panel;
**/
$field instanceof GDT_Panel;
$field->addClass('card');
?>
<div <?=$field->htmlAttributes()?>">
  <div class="card-body">
    <p class="card-text"><?=$field->html?></p>
<?php foreach($field->fields as $field) : ?>
    <?=$field->renderCell()?>
<?php endforeach;?>
  </div>
</div>
