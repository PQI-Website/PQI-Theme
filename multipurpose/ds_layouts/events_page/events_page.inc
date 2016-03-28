<?php
function ds_events_page() {
  return array(
    'label' => t('Events Page'),
    'regions' => array(
      'who' => t('Who'),
      'when' => t('When'),
      'where' => t('Where'),
      'left' => t('Body'),
      'right' => t('Sidebar'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}