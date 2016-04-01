<?php
function ds_video_page() {
  return array(
    'label' => t('Video Page'),
    'regions' => array(
      'video' => t('Video Player Box'),
      'details' => t('Video Details'),
      'left' => t('Body'),
      'right' => t('Sidebar'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}