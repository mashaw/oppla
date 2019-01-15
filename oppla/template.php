<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function oppla_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  oppla_preprocess_html($variables, $hook);
  oppla_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function oppla_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function oppla_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function oppla_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // oppla_preprocess_node_page() or oppla_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function oppla_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function oppla_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function oppla_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */

// function phptemplate_filter_tips_more_info() { return ''; }

function oppla_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'oppla_question_node_form') {
    $form['actions']['submit']['#value'] = t('Submit question');
  }
  if ($form_id == 'oppla_profile_node_form') {
    $form['actions']['submit']['#value'] = t('Submit profile');
  }
  if ($form_id == 'user_register_form') {
    $form['actions']['submit']['#value'] = t('Join Oppla');
  }
    if($form_id == "views_exposed_form"){
    if (isset($form['combine'])) {
            $form['combine']['#attributes'] = array('placeholder' => array(t('enter search terms:')));
    }
  }
//   if($form_id == "views_exposed_form_community_nodes_page"){
//     if (isset($form['combine'])) {
//             $form['combine']['#attributes'] = array('placeholder' => array(t('search the community:')));
//     }
//   }

  if ($form_id == 'oppla_product_node_form') {
    $form['actions']['submit']['#value'] = t('Submit product');
  }
  if ($form_id == 'case_study_node_form') {
    $form['actions']['submit']['#value'] = t('Submit case study');
  }
}


function oppla_form_comment_form_alter(&$form, &$form_state) {
  $form['actions']['submit']['#value'] = t('Submit comment');
};

/**
 * Remove the comment filters' tips
 */
function oppla_filter_tips($tips, $long = FALSE, $extra = '') {
  return '';
}
/**
 * Remove the comment filter's more information tips link
 */
function oppla_filter_tips_more_info () {
  return '';
}
function oppla_date_all_day_label() {
  return t('');
}

function oppla_preprocess_comment(&$variables){
  $variables['created'] = date('l, F d, Y', $variables['elements']['#node']->created);
  //$variables['changed'] = date('l, F d, Y', $variables['elements']['#node']->created);
}

function oppla_preprocess_page(&$variables) {
       if (!empty($variables['node']) && $variables['node']->type == 'oppla_question') {
           unset($variables['title']);
       }
       if (arg(0) == 'user') {
    switch (arg(1)) {
      case NULL:
        if (!user_is_logged_in()) drupal_set_title(t('Log in'));
        break;
      case 'register':
        drupal_set_title(t('Join Oppla'));
        break;
      case 'password':
        drupal_set_title(t('Request new password'));
        break;
      case 'login':
        drupal_set_title(t('Log in'));
        break;
    }
  }


  if (isset($variables['node']->type)) {
    // If the content type's machine name is "my_machine_name" the file
    // name will be "page--my-machine-name.tpl.php".
    $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;

}
  }










/**
 * Override status messages.
 *
 * Note: this overrides Zen's version of theme_status_messages().
 * @see zen_status_messages() (zen/template.php)
 *
 * Insert a '.messages-inner' div.
 */
function oppla_status_messages($variables) {
  $display = $variables['display'];
  $output = '';

  $status_heading = array(
    'status' => t('Status message'),
    'error' => t('Error message'),
    'warning' => t('Warning message'),
  );
  foreach (drupal_get_messages($display) as $type => $messages) {
    $output .= "<div class=\"messages--$type messages $type\"  role=\"alert\"><div class=\"messages-inner\">\n";
    if (!empty($status_heading[$type])) {
      $output .= '<h2 class="element-invisible">' . $status_heading[$type] . "</h2>\n";
    }
    if (count($messages) > 1) {
      $output .= " <ul class=\"messages__list\">\n";
      foreach ($messages as $message) {
        $output .= '  <li class=\"messages__item\">' . $message . "</li>\n";
      }
      $output .= " </ul>\n";
    }
    else {
      $output .= $messages[0];
    }
    $output .= "</div></div>\n";
  }
  return $output;
}
/*
* Add span tag around user menu links for icons
 */

function oppla_menu_link(array $variables) {
 	$element = $variables['element'];
	$sub_menu = '';

	if ($element['#below']) {
		$sub_menu = drupal_render($element['#below']);
	}

	if ($element['#original_link']['menu_name'] == 'user-menu') {
		$linkText = '<span>' . $element['#title'] . '</span>';
		$element['#localized_options']['html'] = true;
	} else {
		$linkText = $element['#title'];
	}

	$output = l($linkText, $element['#href'], $options = $element['#localized_options']);

	return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function oppla_preprocess_node($variables) {


  if (module_exists('og')) {
      unset($variables['content']['group_group']);

}

  if ($variables['node']->type == 'profile' && $variables['view_mode'] == 'community_node') {
    $variables['theme_hook_suggestions'][] = 'node__profile__community_node';
  }




}





function oppla_date_display_single($variables) {
  $date = $variables['date'];
  $timezone = $variables['timezone'];
  $attributes = $variables['attributes'];
  $show_remaining_days = isset($variables['show_remaining_days']) ? $variables['show_remaining_days'] : '';

  // Wrap the result with the attributes.
  $output = '<span class="date-display-single"' . drupal_attributes($attributes) . '>' . $date  . '</span>';

  if (!empty($variables['add_microdata'])) {
    $output .= '<meta' . drupal_attributes($variables['microdata']['value']['#attributes']) . '/>';
  }

  // Add remaining message and return.
  return $output . $show_remaining_days;
}


function oppla_form_user_register_form_alter(&$form, &$form_state) {
  $options = $default_value = $hidden = array();

  // Determine the lists to which a user can choose to subscribe.
  // Determine to which other list a user is automatically subscribed.

  foreach (simplenews_categories_load_multiple() as $list) {
    $subscribe_new_account = $list->new_account;
    $opt_inout_method = $list->opt_inout;
    if (($subscribe_new_account == 'on' || $subscribe_new_account == 'off') && ($opt_inout_method == 'single' || $opt_inout_method == 'double')) {
      $options[$list->tid] = check_plain(_simplenews_newsletter_name($list));
      if ($subscribe_new_account == 'on') {
        $default_value[] = $list->tid;
      }
    }
    else {
      if ($subscribe_new_account == 'silent' || ($subscribe_new_account == 'on' && $opt_inout_method == SIMPLENEWS_OPT_INOUT_HIDDEN)) {
        $hidden[] = $list->tid;
      }
    }
  }

  if (count($options)) {
    // @todo Change this text: use less words;
    $form['simplenews'] = array(
      '#type' => 'fieldset',
      '#description' => t('I would like to receive updates from Oppla by email'),
      '#weight' => 10,
    );
    $form['simplenews']['newsletters'] = array(
      '#type' => 'checkboxes',
      '#options' => $options,
      '#default_value' => $default_value,
    );
  }
  if (count($hidden)) {
    $form['simplenews_hidden'] = array(
      '#type' => 'hidden',
      '#value' => implode(',', $hidden),
    );
  }
}


?>
