<?phpuse GDO\Form\GDT_Form;
/** @var $form GDT_Form **/
?>
<!-- Begin Form -->
<div class="gdt-form">
<?php if ($form->hasTitle()) : ?>
<h3><?=$form->renderTitle()?></h3>
<?php endif; ?>
<?php if ($form->info) : ?>
<p><?=$form->info?></p>
<?php endif; ?>
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
  <?= $form->actions()->renderCell(); ?>
</form>
</div>
<!-- End Form -->
