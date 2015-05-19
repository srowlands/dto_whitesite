<?php

/**
 * @file
 * Theme settings.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function dto_whitesite_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {

  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  // Create the form using Forms API: http://api.drupal.org/api/7
  // Delete this line if you want to use this setting
  // $form['agency_whitesite_example'] = array(
  // '#type' => 'checkbox',
  // '#title' => t('agency_whitesite sample setting'),
  // '#default_value' => theme_get_setting('agency_whitesite_example'),
  // );
  //

  // Remove some of the base theme's settings.
  /* -- Delete this line if you want to turn off this setting.
  // We don't need to toggle wireframes on this site.
  unset($form['themedev']['zen_wireframes']);
  // */

  // We are editing the $form in place, so we don't need to return anything.
}
