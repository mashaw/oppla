<?php

/**
 * @file
 * Default theme implementation to format the simplenews newsletter footer.
 *
 * Copy this file in your theme directory to create a custom themed footer.
 * Rename it to simplenews-newsletter-footer--[tid].tpl.php to override it for a
 * newsletter using the newsletter term's id.
 *
 * @todo Update the available variables.
 * Available variables:
 * - $build: Array as expected by render()
 * - $build['#node']: The $node object
 * - $language: language code
 * - $key: email key [node|test]
 * - $format: newsletter format [plain|html]
 * - $unsubscribe_text: unsubscribe text
 * - $test_message: test message warning message
 * - $simplenews_theme: path to the configured simplenews theme
 *
 * Available tokens:
 * - [simplenews-subscriber:unsubscribe-url]: unsubscribe url to be used as link
 *
 * Other available tokens can be found on the node edit form when token.module
 * is installed.
 *
 * @see template_preprocess_simplenews_newsletter_footer()
 */
?>
<?php if (!$opt_out_hidden): ?>
  <?php if ($format == 'html'): ?>
<div class="newsletter-footer" style="background-image:url('https://oppla.eu/sites/default/files/images/newsletter/oppla-footer-symbol.png')">

<p>You received this email because you are an Oppla member.</p>

<p>Change your preferences or <a href="https://oppla.eu/newsletter-subscriptions">unsubscribe here</a>.</p>

<p>Was this email forwarded to you? Sign up to <a href="https://oppla.eu/user/register?pk_campaign=Outline">Oppla</a> to receive Outline in your inbox.</p>

<p>Follow <a href="https://twitter.com/OpplaCommunity?pk_campaign=Outline">Oppla on Twitter</a> <img src="https://oppla.eu/sites/default/files/images/newsletter/twitter.png"   class="twitter"/>

<p><a href="https://oppla.eu/node/19144?pk_campaign=Outline">View in browser</a></p>

  <?php else: ?>
  -- <?php print $unsubscribe_text ?>: [simplenews-subscriber:unsubscribe-url]
  <?php endif ?>
<?php endif; ?>
</div>
<?php if ($key == 'test'): ?>
- - - <?php print $test_message ?> - - -
<?php endif ?>
</div>
