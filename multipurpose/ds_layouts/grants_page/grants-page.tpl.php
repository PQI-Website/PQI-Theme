<?php

/**
 * @file
 * Display Suite 2 column template.
 */

  // Add sidebar classes so that we can apply the correct width in css.
  if (($left && !$right) || ($right && !$left)) {
    $classes .= ' group-one-column';
  }
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-2col-fluid <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

<<?php print $left_wrapper ?> class="group-left<?php print $left_classes; ?>">
	<?php if ($logo): ?>
		<<?php print $logo_wrapper ?> class="group-logo<?php print $logo_classes; ?>">
		<?php print $logo; ?>
		<div class="spacer" style="clear: both;"></div>
		</<?php print $logo_wrapper ?>>
	<?php endif; ?>
	<?php if ($topleft): ?>
		<<?php print $topleft_wrapper ?> class="group-topleft<?php print $topleft_classes; ?>">
		<?php print $topleft; ?>
		<div class="spacer" style="clear: both;"></div>
		</<?php print $topleft_wrapper ?>>
	<?php endif; ?>
	<?php if ($topright): ?>
		<<?php print $topright_wrapper ?> class="group-topright<?php print $topright_classes; ?>">
		<?php print $topright; ?>
		<div class="spacer" style="clear: both;"></div>
		</<?php print $topright_wrapper ?>>
	<?php endif; ?>

  <?php print $left; ?>
</<?php print $left_wrapper ?>>

  <?php if ($right): ?>
    <<?php print $right_wrapper ?> class="group-right<?php print $right_classes; ?>">
      <?php print $right; ?>
    </<?php print $right_wrapper ?>>
  <?php endif; ?>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
