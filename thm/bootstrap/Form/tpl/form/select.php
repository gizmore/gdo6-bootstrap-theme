<?php /** @var $field \GDO\Form\GDT_Select **/ ?>
<div class="form-group <?=$field->htmlClass()?>">
  <?=$field->htmlIcon()?>
  <label><?= $field->displayLabel(); ?></label>
  <select
   class="selectpicker"
   data-width="100%"
   data-live-search="<?=count($field->choices) > 10 ? 'true' : 'false'?>"
<?php if ($field->multiple) : ?>
   name="form[<?=$field->name?>][]"
   multiple="multiple"
<?php else : ?>
   name="form[<?=$field->name?>]"
<?php endif; ?>
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlDisabled(); ?>
   class="form-control">
    <?php if ($field->emptyLabel) : ?>
    <option
     data-content='<?=$field->displayEmptyLabel()?>'
     <?=$field->htmlSelected($field->emptyValue)?>	   
     value="<?=$field->emptyValue?>">
     <?=$field->displayEmptyLabel()?>
    </option>
    <?php endif; ?>
	<?php foreach ($field->choices as $value => $choice) : ?>
	  <option
	   data-content='<?=$field->renderChoice($choice)?>'
       <?=$field->htmlSelected($value)?>	   
	   value="<?= htmlspecialchars($value); ?>">
		<?= $field->renderChoice($choice); ?>
	  </option>
	<?php endforeach; ?>
  </select>
  <?=$field->htmlError()?>
</div>
