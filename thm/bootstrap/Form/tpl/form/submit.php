<?php use GDO\Form\GDT_Submit; $field instanceof GDT_Submit; ?>
<input
 type="submit"
 class="btn btn-primary"
 name="<?= $field->name; ?>"
 value="<?= $field->displayLabel(); ?>"
 <?= $field->htmlDisabled(); ?> /></input>
