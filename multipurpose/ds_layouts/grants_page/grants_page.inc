<?php
function ds_grants_page() {
  return array(
    'label' => t('Grants Page'),
    'regions' => array(
      'logo' => t('Logo'),
      'topleft' => t('Top Left'),
      'topright' => t('Top Right'),
      'left' => t('Body'),
      'right' => t('Sidebar'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}