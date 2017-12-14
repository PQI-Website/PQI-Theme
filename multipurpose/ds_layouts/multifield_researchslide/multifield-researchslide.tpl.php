<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-2col <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <<?php print $left_wrapper ?> class="group-left<?php print $left_classes; ?>">
    <?php print $left; ?>
  </<?php print $left_wrapper ?>>

  <<?php print $right_wrapper ?> class="group-right<?php print $right_classes; ?>" style="background-color: <?php print $content['field_slide_color'][0]['#markup']; ?>">
    <div class="arrow-left" style="border-right-color: <?php print $content['field_slide_color'][0]['#markup']; ?>"></div>
    <?php print $right; ?>
    <div id="logo"></div>
  </<?php print $right_wrapper ?>>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
