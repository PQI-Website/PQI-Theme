<script>
  $(".field-name-field-research-slideshow .field-items > div.field-item:gt(0)").hide();
  function LoadSlide() {
    $('.field-name-field-research-slideshow .field-items > div.field-item:first')
      .fadeOut(1000)
      .next()
      .fadeIn(1000)
      .end();
      //.appendTo('.field-name-field-research-slideshow .field-items');
  }
  setInterval(LoadSlide(), 3000);
</script>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

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
