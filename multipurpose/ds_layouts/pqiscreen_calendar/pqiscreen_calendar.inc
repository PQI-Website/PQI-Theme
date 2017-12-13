<?php
function ds_pqiscreen_calendar() {
  return array(
    'label' => t('PQI Screen: Calendar'),
    'regions' => array(
      'header' => t('Header'),
  	  'left' => t('Left'),
  	  'middle' => t('Middle'),
  	  'right' => t('Right'),
  	  'footer' => t('Footer'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}
