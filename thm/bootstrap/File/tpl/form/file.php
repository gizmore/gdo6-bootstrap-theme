<?php /** @var $field \GDO\File\GDT_File **/ ?>
<div class="form-group gdo-flow-file <?=$field->classError()?>">
  <?=$field->htmlTooltip()?>
  <?=$field->htmlIcon()?>
  <?=$field->displayLabel()?>
  <div class="input-group">
    <label class="input-group-btn">
        <span class="btn btn-primary">
            Browse&hellip;
            <input
<?php if ($field->multiple) : ?>
             multiple="multiple"
<?php endif; ?>
             name="<?=$field->name?>"
             type="file"
             style="display:none;" />
        </span>
    </label>
    <input
     type="text"
     class="form-control"
     id="gdo-file-preview-<?=$field->name?>"
     readonly>
  </div>
  <?= $field->htmlError(); ?>
</div>
