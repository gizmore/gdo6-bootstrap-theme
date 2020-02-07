<?php
use GDO\UI\GDT_SearchField;
use GDO\UI\GDT_Icon;
/** @var $field GDT_SearchField **/
$field instanceof GDT_SearchField;
?>
<div class="form-group <?=$field->classError()?>">
  <?= $field->htmlIcon(); ?>
  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <div class="input-group">
    <input
     type="<?=$field->_inputType?>"
     class="form-control"
     <?= $field->htmlRequired(); ?>
     <?= $field->htmlPattern(); ?>
     <?= $field->htmlDisabled(); ?>
     min="<?= $field->min; ?>"
     max="<?= $field->max; ?>"
     size="<?= min($field->max, 32); ?>"
     name="form[<?= $field->name; ?>]"
     value="<?= $field->getVar(); ?>" />
    <div class="input-group-append">
      <button type="submit" class="btn btn-secondary">
        <?=GDT_Icon::iconS('search')?>
      </button>
    </div>
  </div>
  <?=$field->htmlError()?>
</div>
