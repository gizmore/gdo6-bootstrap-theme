<?php /** @var $field \GDO\UI\GDT_Panel; **/ ?>
<div class="card">
  <div class="card-body">
    <p class="card-text"><?=$field->html?></p>
<?php foreach($field->fields as $field) : ?>
    <?=$field->renderCell()?>
<?php endforeach;?>
  </div>
</div>
