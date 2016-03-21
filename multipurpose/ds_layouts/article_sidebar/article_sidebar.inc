<?php
function ds_article_sidebar() {
  return array(
    'label' => t('Article with Right Sidebar'),
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