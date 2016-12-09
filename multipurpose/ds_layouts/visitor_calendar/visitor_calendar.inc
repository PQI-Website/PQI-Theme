<?php
function ds_visitor_calendar() {
  return array(
    'label' => t('Visitor Calendar Layout'),
    'regions' => array(
      'left' => t('Left'),
      'right' => t('Right'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}