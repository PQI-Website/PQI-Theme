<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-profile <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>


  <<?php print $photo_wrapper ?> class="group-photo<?php print $photo_classes; ?>">
    <?php print $photo; ?>
  </<?php print $photo_wrapper ?>>

  <div id="contact-wrap">
  <<?php print $contact_wrapper ?> class="group-contact<?php print $contact_classes; ?>">
    <?php print $contact; ?>
  </<?php print $contact_wrapper ?>>
  </div>

  <<?php print $affiliation_wrapper ?> class="group-affiliation<?php print $affiliation_classes; ?>">
  <div class="section-title">Affiliation</div>
    <?php print $affiliation; ?>
  </<?php print $affiliation_wrapper ?>>

  <<?php print $education_wrapper ?> class="group-education<?php print $education_classes; ?>">
    <?php print $education; ?>
  </<?php print $education_wrapper ?>>

  <<?php print $research_wrapper ?> class="group-research<?php print $research_classes; ?>">
    <?php print $research; ?>
  </<?php print $research_wrapper ?>>

  <<?php print $websites_wrapper ?> class="group-websites<?php print $websites_classes; ?>">
		<?php print $websites; ?>
	</<?php print $websites_wrapper ?>>

</<?php print $layout_wrapper ?>>

<?php if ($sidebar): ?>
	<<?php print $sidebar_wrapper ?> class="group-sidebar<?php print $sidebar_classes; ?>">
		<?php print $sidebar; ?>
	</<?php print $sidebar_wrapper ?>>
<?php endif; ?>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
