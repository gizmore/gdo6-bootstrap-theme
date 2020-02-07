<?php /** @var $page \GDO\UI\GDT_Page **/
use GDO\Core\Website;
use GDO\Util\Javascript;
use GDO\UI\GDT_Bar;
use GDO\Core\Module_Core;
use GDO\Avatar\GDO_Avatar;
use GDO\User\GDO_User;
$user = GDO_User::current();
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

<div class="page-wrapper chiller-theme">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
    
      <div class="sidebar-brand">
        <a href="<?=href(GWF_MODULE, GWF_METHOD)?>"><?=sitename()?></a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <!-- sidebar-brand -->
      
      <?php if ($user->isAuthenticated()) : ?>      
      <div class="sidebar-header">
        <?php if (module_enabled('Avatar')) : ?>
        <div class="user-pic">
          <?=GDO_Avatar::renderAvatar($user)?>
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
  
        <?=GDT_Bar::make()->vertical()->yieldHook('LeftBar')?>

        <hr/>
  
        <ul>
          <li class="header-menu">
            <span><?=t('private')?></span>
          </li>
        </ul>

        <?=GDT_Bar::make()->vertical()->yieldHook('RightBar')?>

        <hr/>
  
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
  </nav>

  <!-- Top Nav -->
  <nav
   class="navbar navbar-expand-lg navbar-light bg-light"
   style="padding-left: 36px;"><?=GDT_Bar::make()->horizontal()->yieldHook('TopBar')?></nav>
  <!-- Top Nav -->

  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <?=$page->html?>
  </main>
  <!-- page-content" -->

  <!-- Footer -->
  <footer class="page-footer font-small blue fixed-bottom"><?=GDT_Bar::make()->horizontal()->yieldHook('BottomBar')?></footer>
  <!-- Footer -->

</div>
<!-- page-wrapper -->

<!-- JS finish -->
<?= Javascript::displayJavascripts(Module_Core::instance()->cfgMinifyJS() === 'concat'); ?>
</body>
</html>
