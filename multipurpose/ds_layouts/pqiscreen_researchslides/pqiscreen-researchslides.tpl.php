<script>
  //Hide all but first slide
  $( document ).ready(function() {
    $(".field-name-field-research-slideshow .field-items > div.field-item:not(:first-child)").hide();
  });


  function NextSlide() {
    var current = $('.field-name-field-research-slideshow .field-items > div.field-item:visible')
      .fadeOut(700, function() {
        if ($(current).next().length == 0)
          $('.field-name-field-research-slideshow .field-items > div.field-item:first-child').fadeIn(500);
        else
          $(current).next().fadeIn(500);
      });
  }
  setInterval(NextSlide, 7000);
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
