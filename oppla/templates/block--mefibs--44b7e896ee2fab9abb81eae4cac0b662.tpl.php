<?php
/**
 * @file
 * Returns the HTML for a block.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728246
 */
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> stacked"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
  <legend class="block_title"><?php print $title; ?></legend>
  
  <p>Choose keywords from the menus below and hit apply...</p>
  
  <?php endif; ?>
  <?php print render($title_suffix); ?>
 <?php if ($content): ?>
<div class="block-content">
<?php print $content; ?>
</div>
<?php endif; ?>
</fieldset>
</div>
