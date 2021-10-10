<?php /** @var $page \GDO\UI\GDT_Page **/
use GDO\Core\Website;
use GDO\Util\Javascript;
use GDO\User\GDO_User;
use GDO\UI\GDT_Page;
use GDO\UI\GDT_Loading;
use GDO\Profile\GDT_ProfileLink;
use GDO\Javascript\Module_Javascript;
use GDO\Core\Application;
/** @var $page GDT_Page **/
$user = GDO_User::current();
$method = Application::instance()->getMethod();
$sidebar = $method->showSidebar();
?>
<!DOCTYPE html>
<html>
<head>
  <?= Website::displayHead(); ?>
  <?= Website::displayMeta(); ?>
  <?= Website::displayLink(); ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$page->renderTitle()?></title>
</head>
<body class="<?=$sidebar?'with-sidebar':'no-sidebar'?>">

 <div id="gdo-pagewrap" class="page-wrapper chiller-theme n" style="min-height: 100vh;">

<?php if ($sidebar) : ?>
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
<?php endif; ?>
  
<?php if ($sidebar) : ?>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
    
      <div class="sidebar-brand">
        <a href="<?=href(GDO_MODULE, GDO_METHOD)?>"><?=sitename()?></a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <!-- sidebar-brand -->
      
      <?php if ($user->isAuthenticated()) : ?>      
      <div class="sidebar-header">
        <?php if (module_enabled('Avatar')) : ?>
        <div class="user-pic">
          <?=GDT_ProfileLink::make()->forUser($user)->withAvatar()->withNickname(false)->renderCell()?>
        </div>
        <?php endif; ?>
        <div class="user-info">
          <span class="user-name"><?=$user->displayNameLabel()?></span>
          <span class="user-role"><?=$user->displayType()?></span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span><?=t('online')?></span>
          </span>
        </div>
      </div>
      <?php endif; ?>
      <!-- sidebar-header  -->
      
      <div class="sidebar-menu">

        <hr/>
  
        <?=$page->leftNav->render()?>

        <hr/>
  
        <ul>
          <li class="header-menu">
            <span><?=t('private')?></span>
          </li>
        </ul>

        <?=$page->rightNav->render()?>

        <hr/>
  
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
  </nav>
<?php endif; ?>

  <!-- sidebar-wrapper  -->
  <div class="d-flex flex-column" style="min-height: 100vh;">
<?php if ($sidebar) : ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <?=$page->topNav->render()?>
    </nav>
<?php endif; ?>
    <main class="page-content flex-fill">
      <?=$page->topTabs->render()?>
      <?=Website::renderTopResponse()?>
      <?=$page->html?>
    </main>
    <footer class="page-footer font-small blue"><?=$page->bottomNav->render()?></footer>
  </div>
  <!-- page-content" -->

 </div>
<!-- page-wrapper -->

 <?=GDT_Loading::make()->renderCell()?>

<!-- JS finish -->
<?= Javascript::displayJavascripts(Module_Javascript::instance()->cfgMinifyJS() === 'concat'); ?>
</body>
</html>
