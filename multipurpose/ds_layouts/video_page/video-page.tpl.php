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
	<?php if ($video || $details || $where): ?>
		<div class="vital-info">
		<?php if ($video): ?>
			<<?php print $video_wrapper ?> class="group-video<?php print $video_classes; ?>">
			<?php print $video; ?>
			</<?php print $video_wrapper ?>>
		<?php endif; ?>

		<?php if ($details): ?>
			<<?php print $details_wrapper ?> class="group-details<?php print $details_classes; ?>">
			  <?php print $details; ?>
			</<?php print $details_wrapper ?>>
		<?php endif; ?>
		</div>
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
