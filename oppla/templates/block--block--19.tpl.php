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
    $node = node_load($nid);
    //$ogId = $node->og_group_ref['und'][0]['target_id'];
}




if ($node->type == 'group')  {

$group_title = $node->title;
$group_gid = $node->nid;
$group_uid = $node->uid;
//print 'this is a group page';
//print_r($node);

} else {

$groups = og_get_entity_groups('node', $node);

foreach (og_get_entity_groups('node', $node) as $entity_type => $og_memberships) {
  foreach ($og_memberships as $membership_id => $entity_id) {
    if ($entity_type == 'node') {
      // Assuming we only want to deal with node groups, we can
      // access the group node with...
      $group_node = node_load($entity_id);
    }
  }
}

$group_title = $group_node->title;
$group_gid = $group_node->nid;
$group_uid = $group_node->uid;

//print 'this is a group content page';
//print_r($node);

}

//print $group_title;
//print $group_gid;
//print $group_uid;


global $user;
if($user->uid==0)
{
    echo '<a href="/user/login?destination=group/node/';
    print $group_gid;
    echo '/subscribe/og_user_node" class="btn" title="Log in or join group">Log in or join ';
    print $group_title;
    echo '</a>';
} else {
    if ($group_uid == $user->uid) {
        echo '<h4>You are the ';
        print $group_title;
        echo ' group manager</h4>';
    } else {
    echo '<a href="/group/node/';
    print $group_gid;
if (og_is_member('node',$group_gid)) {
      echo '/unsubscribe" class="btn" title="Leave group">Leave ';

  } else {
  echo '/subscribe/og_user_node" class="btn" title="Join group">Join ';
}
      print $group_title;
      echo '</a>';
}
}?>
 </div>
 </div>
