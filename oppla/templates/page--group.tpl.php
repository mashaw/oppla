<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

    <script>
  (function ($) {
    $(document).delegate('.views-reset-button .form-submit','click',function(event) {
      $reset = $(this);
      event.preventDefault();
      var $form = $reset.parents('form');
      $form.find('select option[selected]').removeAttr('selected');
      $form.find('input[type=text]').attr('value', '');
      $form.find('input[type=radio][checked]').removeAttr('checked');
      $form.find('input[type=checkbox][checked]').removeAttr('checked');
      $form.submit();
    });
  }(jQuery));
</script>
    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    $content_blocks = render($page['content_blocks']);
      $highlighted = render($page['highlighted']);
    $content_type = render($node->type);
    ?>


<div id="page">
<div  class="header_wrapper">
  <header class="header" id="header" role="banner">
    <?php print render($page['header']); ?>
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" class="header__logo-image" /></a>
    <?php endif; ?>
  </header>
  <div id="navigation">
    <?php print render($page['navigation']); ?>
  </div>
</div>
  <div id="main">
  <?php  print $breadcrumb; ?>
  
  
  <?php if ($messages): ?>
<?php print $messages; ?>
  <?php endif; ?>
  
<!-- 
  <?php print render($title_prefix); ?>
      <?php if ($title && !$is_front): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
          <?php print render($title_suffix); ?>
      <?php endif; ?>
 -->
         
 
       <?php if ($highlighted): ?>
          <aside class="highlighted filters clearfix">
        <?php print $highlighted; ?>
    </aside>
    <?php endif; ?>
    
    
      <?php if ($sidebar_first): ?>
      <aside class="sidebar">
      <?php print $sidebar_first; ?>
      </aside>
         <?php endif; ?>
      

    
    <div id="content" class="column" role="main">

      <a id="main-content"></a>
      
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      
    </div>
     
        <?php if ($sidebar_second): ?>
      <aside class="sidebar">
      <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>   

  </div>

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
