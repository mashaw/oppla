<?php
/**
 * @file
 * Returns HTML for a region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728112
 */
?>

<div class="<?php print $classes; ?>">
  <script type="text/javascript">

(function($) {
    // This jQuery function is called when the document is ready
    $(function() {
       $('a.toggler').click(function() {
          $("body").toggleClass("open");
        });
    });
  })(jQuery);
  </script>

   

<?php if ($content): ?>


  <?php print $content; ?>
    <?php endif; ?>
    
 <a href="#" class="toggler" title="Oppla main menu" role="button" aria-controls="navigation"><span>Menu</span></a>
 </div>

