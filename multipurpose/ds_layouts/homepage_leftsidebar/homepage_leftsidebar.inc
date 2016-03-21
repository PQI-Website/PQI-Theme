<?php
function ds_homepage_leftsidebar() {
  return array(
    'label' => t('Homepage with Left Sidebar'),
    'regions' => array(
      'mainheaderspan' => t('Main Header'),
	  'sidebar_events' => t('Events Block'),
	  'sidebar' => t('Left Sidebar'),
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