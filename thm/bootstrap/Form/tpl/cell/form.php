<?php $form instanceof GDO\Form\GDT_Form; ?>
<!-- Begin Form -->
<div class="gdt-form">
<h3><?=html($form->title)?></h3>
<form
 id="form_<?=$form->name;?>"
 action="<?= $form->action; ?>"
 method="<?= $form->method; ?>"
 enctype="<?= $form->encoding; ?>">
<?php if ($form->method === 'GET') : ?>
  <input type="hidden" name="mo" value="<?=html(mo())?>" />
  <input type="hidden" name="me" value="<?=html(me())?>" />
<?php endif; ?>
<?php foreach ($form->fields as $field) : ?>
  <?= $field->renderForm(); ?>
<?php endforeach; ?>
</form>
</div>
<!-- End Form -->
