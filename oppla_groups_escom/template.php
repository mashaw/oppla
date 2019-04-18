<?php function oppla_groups_escom_preprocess_node(&$variables) {
if (module_exists('og')) {
  if (og_is_member('node', $variables['nid'])) {
    // We do not alter "You are the group manager" text.
    // Assuming that group admin will only have permission to administer group.

    if (!og_user_access('node', $variables['nid'], 'administer group')) {
      $variables['content']['group_group'][0]['#title'] = t('Leave ESCom');
		  $variables['content']['group_group'][0]['#options']['attributes']['class'][] = 'btn small';
		  // unset($variables['content']['group_group'][0]);
    }
  }
  else {
    $variables['content']['group_group'][0]['#title'] = t('Join ESCom');
    $variables['content']['group_group'][0]['#options']['attributes']['class'][] = 'btn small';
   // unset($variables['content']['group_group'][0]);

  }
}
}
?>