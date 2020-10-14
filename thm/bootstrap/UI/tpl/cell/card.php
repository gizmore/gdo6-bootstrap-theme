<?php
/** @var $field \GDO\UI\GDT_Card **/
use GDO\Profile\GDT_ProfileLink;
?>
<?php if ($field->gdo) : ?>
<a name="card-<?=$field->gdo->getID()?>"></a>
<?php endif; ?>

<?php $field->addClass('card')->addClass('w-100'); ?>

<div
 <?=$field->htmlAttributes()?>>

  <div class="card-header">
<?php if ($field->withCreator) : ?>
	<span class="card-creator"><?=GDT_ProfileLink::make()->withNickname()->forUser($field->gdoCreator())->renderCell()?></span>
<?php endif; ?>
<?php if ($field->withCreated) : ?>
    <span class="card-created"><?=$field->displayCreated()?></span>
<?php endif; ?>
    <h4><?=$field->title?></h4>
    <h5><?=$field->subtitle?></h5>
  </div>

  <div class="card-body text-primary">
    <div class="card-text">
<?php foreach ($field->getFields() as $gdt) : ?>
	<?=$gdt->renderCard()?>
<?php endforeach; ?>
    </div>
  </div>

<?php if ($field->getActions()) : ?>
  <div class="actions">
	<?=$field->getActions()->render()?>
  </div>
<?php endif; ?>

</div>
