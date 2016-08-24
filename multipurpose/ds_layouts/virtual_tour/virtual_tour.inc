<?php
function ds_virtual_tour() {
  return array(
    'label' => t('Virtual Tour'),
    'regions' => array(
      'left' => t('Tour'),
      'right' => t('Description'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}