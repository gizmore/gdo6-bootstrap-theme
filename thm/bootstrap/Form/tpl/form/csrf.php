<?php
use GDO\Form\GDT_AntiCSRF;
$field instanceof GDT_AntiCSRF;
?>
<input
 type="hidden"
 <?=$field->htmlFormName()?>
 value="<?= $field->csrfToken(); ?>"></input>
<?=$field->htmlError()?>
