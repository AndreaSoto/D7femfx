<?php 

/**
 * Override or insert variables into the page template.
 */
function femfxmkII_preprocess_page(&$vars) {

  $vars['path'] = base_path() . path_to_theme() . '/';
  // Prepare header.
  $site_fields = array();
  if (!empty($vars['site_name'])) {
    $site_fields[] = $vars['site_name'];
  }
  if (!empty($vars['site_slogan'])) {
    $site_fields[] = $vars['site_slogan'];
  }
  $vars['site_title'] = implode(' ', $site_fields);
  if (!empty($site_fields)) {
    $site_fields[0] = '<span>' . $site_fields[0] . '</span>';
  }
  $vars['site_html'] = implode(' ', $site_fields);

  // Set a variable for the site name title and logo alt attributes text.
  $slogan_text = $vars['site_slogan'];
  $site_name_text = $vars['site_name'];
  $vars['site_name_and_slogan'] = $site_name_text . ' ' . $slogan_text;
}

function femfxmkII_preprocess_comment(&$vars) {
	$vars['path'] = base_path() . path_to_theme() . '/';

    $comment = $vars['comment'];
    $vars['date'] = format_date($comment->created, 'custom', 'd/m/Y');

    $vars['submitted'] =  t('!username says at !datetime : ',
		array(
		'!username' => theme('username', array('account' => $comment)),
		'!datetime' => $vars['date'],
		));

}


function femfxmkII_preprocess_node(&$vars) {
	$vars['path'] = base_path() . path_to_theme() . '/';

    $node = $vars['node'];
    $vars['date'] = format_date($node->created, 'custom', 'l, d/m/Y');

    $vars['submitted'] =  t('Submitted on !datetime by !username',
		array(
		'!username' => $vars['name'],
		'!datetime' => $vars['date'],
		));

}
//Andreas attempt to change the Search Button & Post Button
function femfxmkII_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    //$form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
    //$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    //$form['search_block_form']['#size'] = 40;  // define size of the textfield
    //$form['search_block_form']['#value'] = t('AAAAAAAAAAAA'); // Set a default value for the textfield
    //$form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
    //$form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/icons/search.png');
		// Add extra attributes to the text box
   	// $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
    //$form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
  }
  //if ($form_id == 'ctc-create-form')
  //{
  //	 $form['actions']['submit']['#value'] = t('GO!'); 
  //}
} 

/*
* Override filter.module's theme_filter_tips() function to disable tips display.
*/
function femfxmkII_filter_tips($tips, $long = FALSE, $extra = '') {
	return '';
}

/**
 * Remove the comment filter's more information tips link
 */
function femfxmkII_tips_more_info () {
  return '';
}
function femfxmkII_privatemsg_new_block($count) {
  $newmsgs = format_plural($count, 'New',
                        '@count new messages',
                        array('@count' => $count));

  return l($newmsgs, 'messages', array('attributes' => array('id' => 'privatemsg-new-link')));
}


function femfxmkII_theme() {
  return array(
    'contact_mail_page' => array(
      'arguments' => array('form' => $form),
    ),
  );
}

function femfxmkII_contact_mail_page($form) {
  $output = drupal_render($form);
  $output .= '<div class="additional-text">'. t('Text to add to bottom of form GGG') .'</div>';
  return $output;
}