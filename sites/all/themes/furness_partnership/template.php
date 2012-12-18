<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

/**
 * Preprocesses the wrapping HTML.
 *
 * @param array &$variables
 *   Template variables.
 */
function furness_partnership_preprocess_html(&$vars) {
  // Setup IE meta tag to force IE rendering mode
  $meta_ie_render_engine = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'http-equiv' => 'X-UA-Compatible',
      'content' =>  'IE=edge,chrome=1',
    ),
    '#weight' => '-99999',
  );

  // Add header meta tag for IE to head
  drupal_add_html_head($meta_ie_render_engine, 'meta_ie_render_engine');
}