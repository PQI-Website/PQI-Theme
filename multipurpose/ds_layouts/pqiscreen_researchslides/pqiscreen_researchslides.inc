<?php
function ds_pqiscreen_researchslides() {
  return array(
    'label' => t('PQI Screen: Research Slides'),
    'regions' => array(
      'slides' => t('Slides Container')
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}
