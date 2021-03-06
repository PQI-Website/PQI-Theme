<?php
function ds_touch_dashboard() {
  return array(
    'label' => t('Touchscreen Dashboard'),
    'regions' => array(
      'mainheaderspan' => t('Main Header'),
  	  'sidebar' => t('Left Sidebar'),
  	  'sidebar_events' => t('Events Block'),
  	  'sidebar_publications' => t('Publications Block'),
  	  'sidebar_members' => t('Members Block'),
      'rightmain' => t('Middle Pane'),
      'centerbottom' => t('Bottom Pane Center'),
      'centerright' => t('Bottom Pane Right'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}
