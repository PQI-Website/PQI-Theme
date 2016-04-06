<?php
function ds_right_sidebar_footer() {
  return array(
    'label' => t('Right Sidebar with Spanned Footer'),
    'regions' => array(
      'left' => t('Top Left'),
      'right' => t('Top Right'),
      'bottom' => t('Bottom'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}