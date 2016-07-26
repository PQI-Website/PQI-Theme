<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-2col-fluid <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
	<?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

<div class="section-title">Login Information</div>
<<?php print $account_login_wrapper ?> class="group-account_login<?php print $account_login_classes; ?>">
  <?php print $account_login; ?>
</<?php print $account_login_wrapper ?>>

<?php if ($personal_info): ?>
<div class="section-title">Personal Information</div>
<<?php print $personal_info_wrapper ?> class="group-personal_info<?php print $personal_info_classes; ?>">
  <?php print $personal_info; ?>
</<?php print $personal_info_wrapper ?>>
<?php endif; ?>

<?php if ($other): ?>
<div class="section-title">Other Details</div>
<<?php print $other_wrapper ?> class="group-other<?php print $other_classes; ?>">
  <?php print $other; ?>
</<?php print $other_wrapper ?>>
<?php endif; ?>

</<?php print $layout_wrapper ?>>


<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
