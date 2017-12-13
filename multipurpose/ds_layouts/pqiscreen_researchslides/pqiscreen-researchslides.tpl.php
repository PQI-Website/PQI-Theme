<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-3col-stacked-equal <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <<?php print $slides_wrapper ?> class="slides-container<?php print $slides_classes; ?>">
    <?php print $slides; ?>
  </<?php print $slides_wrapper ?>>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
