<?php
use GDO\UI\GDT_Icon;

/** @var \GDO\UI\GDT_Accordeon $field **/
$n = 0;
$id = 'gdt-accordion-'.$field->name.'-'.($n++);
?>
<div class="accordion" id="<?=$id.'-accordion'?>">
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="<?=$id.'-head'?>">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?=$id?>"
          aria-expanded="true" aria-controls="collapseOne">
          <?=$field->renderTitle()?>
        </button>
      </h5>
    </div>
    <div id="<?=$id?>" class="collapse" aria-labelledby="headingOne"
      data-parent="#<?=$id.'-accordion'?>">
      <div class="card-body">
<?php if ($f = $field->getFields()) foreach ($f as $gdt) : ?>
        <?=$gdt->renderCell()?>
<?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

