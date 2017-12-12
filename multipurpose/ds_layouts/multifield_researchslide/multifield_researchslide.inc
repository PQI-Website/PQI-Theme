<?php
function ds_multifield_research() {
  return array(
    'label' => t('Multifield Research Slide'),
    'regions' => array(
      'left' => t('Slide graphic'),
      'right' => t('Slide details')
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}
