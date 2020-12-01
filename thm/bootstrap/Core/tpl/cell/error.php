<?php /** @var $field \GDO\Core\GDT_Error **/
use GDO\UI\GDT_Icon; ?>
<div class="alert alert-danger" role="alert">
  <?=GDT_Icon::iconS('error')?><?=$field->renderText()?>
</div>
