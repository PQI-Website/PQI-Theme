<?php
function ds_member_profile() {
  return array(
    'label' => t('Member Profile'),
    'regions' => array(
      'photo' => t('Profile Photo'),
      'contact' => t('Contact info'),
      'websites' => t('Related sites'),
      'affiliation' => t('Affiliation'),
      'education' => t('Education'),
      'research' => t('Research'),
      'publications_left' => t('Publications Left'),
      'publications_right' => t('Publications Right'),
      'sidebar' => t('Sidebar'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}