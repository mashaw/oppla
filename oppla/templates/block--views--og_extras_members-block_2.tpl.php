<?php
/**
 * @file
 * Returns the HTML for a block.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728246
 */
?>
<div id="<?php print $block_html_id; ?>" class="block" <?php print $attributes; ?>>

    <?php print render($title_prefix); ?>

    <h3 class="views-label">
        Group membership
        </h3>



        <div class="subscribe_link">

        <?php

if (arg(0) == 'node' && is_numeric(arg(1))) {
    $nid = arg(1);
    $node=node_load($nid);
}

$group_title = $node->title;
$group_id = $node->nid;



global $user;
if($user->uid==0)
{
    echo '<a href="/user/login?destination=group/node/';
    print $group_id;
    echo '/subscribe/og_user_node" class="btn">Log in to join ';
    print $group_title;
    echo '</a>';
}
else
{

    if ($node->uid == $user->uid) {
        echo '<h4>You are the group manager</h4>';

    }else {
  if (og_is_member('node',$nid)) {
      echo '<a href="/group/node/';
      print $group_id;
      echo '/unsubscribe" class="btn">Leave ';
      print $group_title;
      echo '</a>';

} else {
      echo '<a href="/group/node/';
      print $group_id;
      echo '/subscribe/og_user_node" class="btn">Join ';
      print $group_title;
      echo '</a>';
}
}
}?>
 </div>
 </div>
