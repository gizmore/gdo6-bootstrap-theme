<?php /** @var GDT_DeleteButton $field **/ ?>
<input
 type="submit"
 onclick="return confirm('<?=t('confirm_delete')?>')"
 class="btn btn-secondary"
 name="<?= $field->name; ?>"
 value="<?= $field->displayLabel(); ?>"
 <?= $field->htmlDisabled(); ?> /></input>
