<?php
function ds_pqiscreen_hub() {
  return array(
    'label' => t('PQI Screen: Hub'),
    'regions' => array(
      'header' => t('Header'),
  	  'column1' => t('Column 1'),
  	  'column2' => t('Column 2'),
  	  'column3' => t('Column 3'),
  	  'column4' => t('Column 4'),
  	  'column5' => t('Column 5'),
  	  'footer' => t('Footer'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}
