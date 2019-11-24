<?php /** @var $field \GDO\Form\GDT_Select **/ ?>
<div class="form-group <?=$field->htmlClass()?>">
  <?=$field->htmlIcon()?>
  <label><?= $field->displayLabel(); ?></label>
  <select
   class="form-control"
<?php if ($field->multiple) : ?>
   multiple="multiple"
<?php endif; ?>
   name="form[<?= $field->name?>]">
	<?php foreach ($field->choices as $value => $choice) : ?>
	  <option value="<?= htmlspecialchars($value); ?>">
		<?= $field->renderChoice($choice); ?>
	  </option>
	<?php endforeach; ?>
  </select>
</div>
