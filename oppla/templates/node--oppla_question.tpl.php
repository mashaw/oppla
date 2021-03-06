<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>

<?php if ($unpublished): ?>
<mark class="unpublished"><?php print t('Unpublished'); ?></mark>
  <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php   // $view = views_get_view('profile_pictures_on_questions');
         //  print $view->preview('entity_view_1',array($node->nid));?>

           <div class="wrapper">

<?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
  ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>
</div>
 <?php if (!$page && $title): ?><hr/><?php endif; ?>
</article>
