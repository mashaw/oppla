<?php
/**
 * @file
 * Returns the HTML for comments.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728216
 */
?>
<article class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <div class="comment-text">
    <div class="submitted">
  <p><?php // print $submitted; ?> <?php   if ($new): ?>
          <mark class="new"><?php   print $new; ?></mark>
        <?php   endif; ?>  <a href=<?php print '"#comment-' . $comment->cid . '"' ?> class="comment-id"><?php print '#' . $id . ' ' ?></a><?php print $title ; ?></p>
</div>
        <?php hide($content['links']);
    print render($content);
  ?>
  <?php   print render($content['links']) ?>
  <div class="links"><?php // print comment_abuse_get_link(t("Report this comment"), $comment->cid); ?></div>



  </div>
  <hr/>
</article>


