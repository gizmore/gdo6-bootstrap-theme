<?php /** @var $field \GDO\Core\GDT_Success **/
use GDO\UI\GDT_Icon; ?>
<div class="alert alert-success" role="alert">
  <?=GDT_Icon::iconS('check')?><?= $field->html; ?>
</div>
