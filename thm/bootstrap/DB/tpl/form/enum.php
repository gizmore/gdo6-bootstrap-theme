<?php
use GDO\DB\GDT_Enum;
/** @var $field GDT_Enum **/
$field instanceof GDT_Enum;
?>
<div class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label><?= $field->displayLabel(); ?></label>
  <select
   class="form-control"
   <?=$field->htmlFormName()?>>
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlDisabled(); ?>>
	<?php if ($field->emptyLabel) : ?>
	  <option
	  <?=$field->htmlSelected($field->emptyValue);?>
	   value="<?= $field->emptyValue; ?>">
	    <?= $field->displayEmptyLabel(); ?>
	  </option>
	<?php endif; ?>
	<?php foreach ($field->enumValues as $enumValue) : ?>
	  <option
	   <?=$field->htmlSelected($enumValue);?>
	   value="<?= $enumValue; ?>">
	    <?= t('enum_'.$enumValue); ?>
	  </option>
	<?php endforeach; ?>
  </select>
  <?=$field->htmlError()?>
</div>
