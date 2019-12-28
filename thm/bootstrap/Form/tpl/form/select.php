<?php /** @var $field \GDO\Form\GDT_Select **/ ?>
<?php 
var_dump($field->getVar());

?>
<div class="form-group <?=$field->htmlClass()?>">
  <?=$field->htmlIcon()?>
  <label><?= $field->displayLabel(); ?></label>
  <select
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
     <?=$field->htmlSelected(null)?>	   
     <?=$field->htmlSelected($field->emptyValue)?>	   
     value="<?=$field->emptyValue?>">
     <?=$field->emptyLabel?>
    </option>
    <?php endif; ?>
	<?php foreach ($field->choices as $value => $choice) : ?>
	  <option
       <?=$field->htmlSelected($value)?>	   
	   value="<?= htmlspecialchars($value); ?>">
		<?= $field->renderChoice($choice); ?>
	  </option>
	<?php endforeach; ?>
  </select>
  <?=$field->htmlError()?>
</div>
