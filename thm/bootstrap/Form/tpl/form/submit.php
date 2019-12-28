<?php
use GDO\Form\GDT_Submit;
/** @var $field GDT_Submit **/
$field instanceof GDT_Submit;
?>
<input
 type="submit"
 class="btn btn-primary"
 name="<?=$field->name?>"
 value="<?=$field->displayLabel()?>"
 <?=$field->htmlAttributes()?>
 <?=$field->htmlDisabled()?> /></input>
