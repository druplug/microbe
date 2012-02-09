<?php
// TODO: add documentation
?>
<div id="page" class="container-16 clearfix">

  <div id="site-header" class="clearfix">
    <div id="branding" class="grid-4 clearfix">
    <?php if ($linked_logo_img): ?>
      <span id="logo" class="grid-1 alpha"><?php print $linked_logo_img; ?></span>
    <?php endif; ?>
    <?php if ($linked_site_name): ?>
      <h1 id="site-name" class="grid-3 omega"><?php print $linked_site_name; ?></h1>
    <?php endif; ?>
    <?php if ($site_slogan): ?>
      <div id="site-slogan" class="grid-3 omega"><?php print $site_slogan; ?></div>
    <?php endif; ?>
    </div>

  <?php if ($main_menu_links || $secondary_menu_links): ?>
    <div id="site-menu" class="grid-12">
      <?php print $main_menu_links; ?>
      <?php print $secondary_menu_links; ?>
    </div>
  <?php endif; ?>

  </div>

  <div id="site-subheader" class="prefix-1 suffix-1 clearfix">
  <?php if ($page['header']): ?>
    <div id="header-region" class="region grid-14 clearfix">
      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>
  </div>


  <div id="main" class="column grid-16">
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>      
    <?php if ($tabs): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div id="main-content" class="region clearfix">
      <?php print render($page['content']); ?>
    </div>

  </div>

  <div id="footer" class="prefix-1 suffix-1">
    <?php if ($page['footer']): ?>
      <div id="footer-region" class="region grid-14 clearfix">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
  </div>

</div>
