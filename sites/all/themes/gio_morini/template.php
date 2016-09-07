<?php
/**
 * @file
 * Contains theme override functions and process & preprocess functions for Gio Morini.
 */

// Add your own template_preprocess hooks here

/**
 * Implements template_preprocess_maintenance_page().
 */
function gio_morini_preprocess_maintenance_page(&$vars) {
  drupal_add_css(drupal_get_path('theme', 'gio_morini') . '/css/gio_morini-maintenance.css', array('group' => CSS_THEME, 'every_page' => TRUE));
}

/**
 * Implements template_preprocess_html().
 */
function gio_morini_preprocess_html(&$vars) {
  // Add CSS files for Internet Explorer-specific styles.
  drupal_add_css(path_to_theme() . '/css/ie/gio_morini-ielt9.css', array('group' => CSS_THEME, 'every_page' => TRUE, 'media' => 'screen', 'browsers' => array('IE' => 'lt IE 9', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/ie/gio_morini-ielt8.css', array('group' => CSS_THEME, 'every_page' => TRUE, 'media' => 'screen', 'browsers' => array('IE' => 'lt IE 8', '!IE' => FALSE), 'preprocess' => FALSE));
  
  /* Add your own custom logic in between the following lines:
	--------------------------------------------------------------------*/







  /* STOP!!!! Don't edit this function below this line!
	--------------------------------------------------------------------*/

  // The below code comments are placeholders for Zentropy optional components downloaded and installed via Drush.
  // For more information see the section "Advanced Drush Integration" in Zentropy's README.txt or the project page on drupal.org: http://drupal.org/project/zentropy
  
  // IMPORTANT: DO NOT EDIT OR REMOVE THE LINES BELOW!!!
  
  #modernizr#

  #selectivizr#

  #coolinput#
}