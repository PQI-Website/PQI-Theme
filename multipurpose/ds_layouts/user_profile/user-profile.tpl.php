<script type="text/javascript">
$(document).ready(function(){

	$("div.field-name-field-phone-basic input").intlTelInput({
	  initialCountry: "us",
	  allowDropdown: false
	});
	//$("div.field-name-field-phone-basic input").inputmask({"alias": "phone"});
	//$("div.field-name-field-phone-basic input").inputmask({"mask": "9(999) 999-9999"});
	$("div.field-name-field-phone-basic input").inputmask("[+999](999)-999-9999",{numericInput:true});
});
</script>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-2col-fluid <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
	<?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

<<?php print $account_login_wrapper ?> class="group-account-login<?php print $account_login_classes; ?>">
<div class="section-title">Login Information</div>
  <?php print $account_login; ?>
</<?php print $account_login_wrapper ?>>

<?php if ($personal_info): ?>
<<?php print $personal_info_wrapper ?> class="group-personal-info<?php print $personal_info_classes; ?>">
<div class="section-title">Personal Information</div>
<p style="margin-bottom: 0;">Filling out these optional fields will allow the website to automatically populate any forms/surveys you use on our site.
</p>
<p style="font-size: 11px;margin-left: 10px;">This information will not be publically visable unless you already have a public profile page on our site.<br />
If you have a public profile page, this information may be used to keep your contact information up to date.</p>
  <?php print $personal_info; ?>
</<?php print $personal_info_wrapper ?>>
<?php endif; ?>

<?php if ($affiliation): ?>
<<?php print $affiliation_wrapper ?> class="group-personal-info<?php print $affiliation_classes; ?>">
<div class="section-title">Current Affiliation</div>
  <?php print $affiliation; ?>
</<?php print $affiliation_wrapper ?>>
<?php endif; ?>

<?php if ($education): ?>
<<?php print $education_wrapper ?> class="group-personal-info<?php print $education_classes; ?>">
<div class="section-title">Education</div>
  <?php print $education; ?>
</<?php print $education_wrapper ?>>
<?php endif; ?>

<?php if ($research): ?>
<<?php print $research_wrapper ?> class="group-personal-info<?php print $research_classes; ?>">
<div class="section-title">Your Research</div>
  <?php print $research; ?>
</<?php print $research_wrapper ?>>
<?php endif; ?>

<?php if ($other): ?>
<<?php print $other_wrapper ?> class="group-other<?php print $other_classes; ?>">
<div class="section-title">Other Details</div>
  <?php print $other; ?>
</<?php print $other_wrapper ?>>
<?php endif; ?>

</<?php print $layout_wrapper ?>>


<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
