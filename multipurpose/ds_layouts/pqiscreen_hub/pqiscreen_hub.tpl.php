<?php

/**
 * @file
 * 5 column stacked template.
 */
?>

<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-3col-stacked-equal <?php print $classes;?> clearfix">

  <div id="closearrow"></div>
  <script type="text/javascript">
    var cooldown = false;
    $( document ).ready(function() {
      $( "body" ).mousemove(function( event ) {
        if (!cooldown)
        {
          $("#closearrow").fadeIn().delay(3000).fadeOut();
          cooldown = true;
          setTimeout(resetCooldown, 10000)
        }
      });
    });
    function resetCooldown() {
        cooldown = false;
    }
  </script>

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <<?php print $header_wrapper ?> class="group-header<?php print $header_classes; ?>">
    <?php print $header; ?>
  </<?php print $header_wrapper ?>>

  <<?php print $column1_wrapper ?> class="column group-column1<?php print $column1_classes; ?>">
    <?php print $column1; ?>
  </<?php print $column1_wrapper ?>>

  <<?php print $column2_wrapper ?> class="column group-column2<?php print $column2_classes; ?>">
    <?php print $column2; ?>
  </<?php print $column2_wrapper ?>>

  <<?php print $column3_wrapper ?> class="column group-column3<?php print $column3_classes; ?>">
    <?php print $column3; ?>
  </<?php print $column3_wrapper ?>>

  <<?php print $column4_wrapper ?> class="column group-column4<?php print $column4_classes; ?>">
    <?php print $column4; ?>
  </<?php print $column4_wrapper ?>>

  <<?php print $column5_wrapper ?> class="column group-column5<?php print $column5_classes; ?>">
    <?php print $column5; ?>
  </<?php print $column5_wrapper ?>>

  <<?php print $footer_wrapper ?> class="group-footer<?php print $footer_classes; ?>">
    <?php print $footer; ?>
  </<?php print $footer_wrapper ?>>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
