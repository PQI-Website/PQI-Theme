<?php

/**
 * @file
 * Display Suite 2 column template.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-profile <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>


  <div id="contact-wrap">
  <<?php print $photo_wrapper ?> class="group-photo<?php print $photo_classes; ?>">
    <?php print $photo; ?>
  </<?php print $photo_wrapper ?>>

  <<?php print $contact_wrapper ?> class="group-contact<?php print $contact_classes; ?>">
    <?php print $contact; ?>
	
	<<?php print $websites_wrapper ?> class="group-websites<?php print $websites_classes; ?>">
		<div class="field-label">Websites:&nbsp;</div>
		<?php print $websites; ?>
	</<?php print $websites_wrapper ?>>
  </<?php print $contact_wrapper ?>>
  </div>

  <<?php print $affiliation_wrapper ?> class="group-affiliation<?php print $affiliation_classes; ?>">
  <div class="block-title">Affiliation:</div>
    <?php print $affiliation; ?>
  </<?php print $affiliation_wrapper ?>>

  <<?php print $education_wrapper ?> class="group-education<?php print $education_classes; ?>">
  <div class="block-title">Education:</div>
    <?php print $education; ?>
  </<?php print $education_wrapper ?>>

  <<?php print $research_wrapper ?> class="group-research<?php print $research_classes; ?>">
  <div class="block-title">Research:</div>
    <?php print $research; ?>
  </<?php print $research_wrapper ?>>

  <div class="group-publications">
	  <?php if ($publications_left): ?>
	  <<?php print $publications_left_wrapper ?> class="group-publications_left<?php print $publications_left_classes; ?>">
		<?php print $publications_left; ?>
	  </<?php print $publications_left_wrapper ?>>
	  <?php endif; ?>
	  
	  <?php if ($publications_right): ?>
		  <<?php print $publications_right_wrapper ?> class="group-publications_right<?php print $publications_right_classes; ?>">
			<?php print $publications_right; ?>
		  </<?php print $publications_right_wrapper ?>>
	  <?php endif; ?>
  </div>

</<?php print $layout_wrapper ?>>

<?php if ($sidebar): ?>
	<<?php print $sidebar_wrapper ?> class="group-sidebar<?php print $sidebar_classes; ?>">
		<?php print $sidebar; ?>
	</<?php print $sidebar_wrapper ?>>
<?php endif; ?>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
