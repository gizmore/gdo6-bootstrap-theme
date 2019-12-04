<?php /** @var $field \GDO\Form\GDT_Enum **/ ?>
<div class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label><?= $field->displayLabel(); ?></label>
  <select
   class="form-control"
   name="form[<?= $field->name?>]">
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlDisabled(); ?>>
	<?php if ($field->emptyLabel) : ?>
	  <option value="<?= $field->emptyValue; ?>"><?= $field->emptyLabel; ?></option>
	<?php endif; ?>
	<?php foreach ($field->enumValues as $enumValue) : ?>
	  <option value="<?= $enumValue; ?>"><?= t('enum_'.$enumValue); ?></option>
	<?php endforeach; ?>
  </select>
  <?=$field->htmlError()?>
</div>
