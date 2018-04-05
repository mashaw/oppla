<?php
/**
 * @file
 * Returns the HTML for a wrapping container around comments.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728230
 */
?>
<hr/>

<?php $content['comment_form']['author']['homepage'] = null;

// Render the comments and form first to see if we need headings.
$comments = render($content['comments']);
$comment_form = render($content['comment_form']);
?>

<section id="comments" class="comments <?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if ($comments && $node->type != 'forum'): ?>
    <h3 class="comments__title title"><?php print t('Comments'); ?></h3>
  <?php endif; ?>

<?php print $comments; ?>

  <?php if ($comment_form): ?>
    <h3 class="comments__form-title title comment-form"><?php print t('Add your comment'); ?></h3>

<?php //   $view = views_get_view('profile_pictures_on_questions');
      //   print $view->preview('entity_view_4',$comment->cid);?>
<?php print $comment_form; ?>
<?php endif; ?>
</section>

<?php //   print $comment->cid  ?>
