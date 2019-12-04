<?php /** @var $page \GDO\UI\GDT_Page **/
use GDO\Core\Website;
use GDO\Util\Javascript;
use GDO\UI\GDT_Bar;
use GDO\Core\Module_Core;
use GDO\UI\GDT_Icon;
?>
<!DOCTYPE html>
<html>
  <head>
	<?= Website::displayMeta(); ?>
	<?= Website::displayLink(); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow" />
	<title><?=html($page->title)?></title>
  </head>
  <body>
   <div id="wrapSidebar">
    <nav id="sidebar">
       <div class="sidebar-header">
            <h3>Recalcolo</h3>
       </div>
      <?= GDT_Bar::make()->vertical()->yieldHook('LeftBar'); ?>
      <hr/>
      <?= GDT_Bar::make()->vertical()->yieldHook('RightBar'); ?>
    </nav>
  
    <div id="wrapContent">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
          <button type="button" id="sidebarLeftCollapse" class="btn btn-info">
            <?=GDT_Icon::iconS('bars')?>
          </button>
          <?= GDT_Bar::make()->horizontal()->yieldHook('TopBar'); ?>
        </div>

      </nav>

      <main role="main" id="pageContent" class="container">
        <?= $page->html; ?>
      </main>

      <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container">
          <?= GDT_Bar::make()->horizontal()->yieldHook('BottomBar'); ?>
        </div>
      </footer>


    </div>

   </div>
   
   <?= Javascript::displayJavascripts(Module_Core::instance()->cfgMinifyJS() === 'concat'); ?>

  </body>
</html>
