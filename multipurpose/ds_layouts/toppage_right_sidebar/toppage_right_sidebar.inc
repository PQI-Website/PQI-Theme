<?php
function ds_toppage_right_sidebar() {
  return array(
    'label' => t('Top Page, Right Sidebar'),
    'regions' => array(
      'left' => t('Body'),
      'right' => t('Sidebar'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}