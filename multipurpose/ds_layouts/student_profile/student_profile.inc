<?php
function ds_student_profile() {
  return array(
    'label' => t('Student Profile'),
    'regions' => array(
      'photo' => t('Profile Photo'),
      'contact' => t('Contact info'),
      'affiliation' => t('Affiliation'),
      'education' => t('Education'),
      'research' => t('Scholarly Work'),
      'websites' => t('Websites'),
      'sidebar' => t('Sidebar'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}
