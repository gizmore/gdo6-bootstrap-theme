<?php
/** @var $field \GDO\UI\GDT_Card **/
use GDO\Profile\GDT_ProfileLink;
?>
<?php if ($field->gdo) : ?>
<a name="card-<?=$field->gdo->getID()?>"></a>
<?php endif; ?>

<div class="card w-100">

  <div class="card-header">
<?php if ($field->withCreator) : ?>
	<md-card-avatar><?=GDT_ProfileLink::make()->forUser($field->gdoCreator())->render()?></md-card-avatar>
<?php endif; ?>  
    <h4><?=$field->title?></h4>
    <h5><?=$field->subtitle?></h5>
  </div>

  <div class="card-body text-primary">
    <p class="card-text">
<?php foreach ($field->getFields() as $gdt) : ?>
	<?=$gdt->render()?>
<?php endforeach; ?>
    </p>
  </div>

<?php if ($field->getActions()) : ?>
  <div class="actions">
	<?=$field->getActions()->render()?>
  </div>
<?php endif; ?>

</div>
