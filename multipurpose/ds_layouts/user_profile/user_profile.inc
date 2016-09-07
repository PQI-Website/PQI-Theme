<?php
function ds_user_profile() {
  return array(
    'label' => t('User Profile (edit page)'),
    'regions' => array(
      'account_login' => t('Login Details'),
      'personal_info' => t('Personal Information'),
      'undergrad_education' => t('Undergraduate Education'),
      'affiliation' => t('(Current) Affiliation'),
      'research' => t('Research'),
      'other' => t('Other'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}