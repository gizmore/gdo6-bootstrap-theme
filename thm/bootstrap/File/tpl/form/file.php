<?php
use GDO\File\GDT_File;
use GDO\UI\GDT_Icon;
/** @var $field GDT_File **/
?>

<?php foreach ($field->getInitialFiles() as $file) : ?>
<?php $deleteButton = $field->noDelete ? '' : sprintf('<input type="submit" name="delete_%s[%s]" value="Remove File" onclick="return confirm(\'%s\')"/>', $field->name, $file->getID(), t('confirm_delete')); ?>
<?php if ($file && $file->isImageType()) : ?>
<div id="gdo-file-preview-<?=$file->getID()?>" class="form-group">
<?php if ($file->isImageType()) : ?>
  <img 
   class="gdt-file-image-preview"
<?php if ($file && $file->isPersisted()) : ?>
   src="<?=$field->displayPreviewHref($file)?>"
<?php endif; ?>
  />
<?php else : ?>
  <span class="gdt-file-preview"><?=$file->displayName()?> <?=$file->displaySize()?></span>
<?php endif; ?>
  <?=$deleteButton?>
  
</div>
<?php endif; ?>
<?php endforeach; ?>

<div id="gdt-file-preview-<?=$field->name?>">
</div>

<div class="form-group gdo-flow-file <?=$field->classError()?>">
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
     id="gdo-file-input-<?=$field->name?>"
     readonly />
  </div>
  <?= $field->htmlError(); ?>
</div>
