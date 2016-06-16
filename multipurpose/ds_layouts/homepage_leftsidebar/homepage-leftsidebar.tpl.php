
<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-profile <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  

  <script type="text/javascript">
	jQuery(window).on('load resize', function(){
		if (jQuery(window).width() < 512){jQuery('div#left_sidebar div.group-sidebar_events div.section-title').text('Next Event');
			jQuery('#left_sidebar').insertBefore('#right_main');}
		else
			jQuery('#left_sidebar').insertAfter('#right_main');
	});
	
	jQuery(window).on('load', function(){
		jQuery("#ddblock-6 div.slider-inner").css("height", (jQuery("#ddblock-6 div.slider-inner div.slide:visible").actual( 'outerHeight', { includeMargin : true })) + "px");
		if (jQuery(window).width() < 512)
		{
			jQuery( "#ddblock-number-pager-6 ul li a" ).click(function() {
				setTimeout(function(){
					var blockHeight = jQuery("#ddblock-6 div.slider-inner div.slide:visible").actual( 'outerHeight', { includeMargin : true });
					//alert(blockHeight);
					jQuery("#ddblock-6 div.slider-inner").css("height", blockHeight + "px");
				}, 50);
				jQuery('html, body').animate({
					scrollTop: jQuery("div.field-name-field-featured-stories-content").offset().top
				}, 500);
			});
			
		}
	});
  </script>
  <div>
	<div id="main_header">
	<<?php print $mainheaderspan_wrapper ?> class="group-mainheaderspan<?php print $mainheaderspan_classes; ?>">
		<?php print $mainheaderspan; ?>
	</<?php print $mainheaderspan_wrapper ?>>
	</div>
  
	<div id="right_main">
		<div>
			<!--<div class="section-title">Featured Stories</div>-->
		  <<?php print $rightmain_wrapper ?> class="group-rightmain<?php print $rightmain_classes; ?>">
			<?php print $rightmain; ?>
		  </<?php print $rightmain_wrapper ?>>
		</div>
		
		<div id="center_pane">
		  <<?php print $centerbottom_wrapper ?> class="group-centerbottom<?php print $centerbottom_classes; ?>">
			<?php print $centerbottom; ?>
		  </<?php print $centerbottom_wrapper ?>>
		</div>
		<div id="right_pane">
			<<?php print $centerright_wrapper ?> class="group-centerright<?php print $centerright_classes; ?>">
			<?php print $centerright; ?>
			</<?php print $centerright_wrapper ?>>
		</div>
	</div>
	
	<div id="left_sidebar">  
		<<?php print $sidebar_wrapper ?> class="group-sidebar<?php print $sidebar_classes; ?>"> 
		
			<<?php print $sidebar_events_wrapper ?> class="group-sidebar_events<?php print $sidebar_events_classes; ?>">
				<?php print $sidebar_events; ?>
			</<?php print $sidebar_events_wrapper ?>>
		
			<<?php print $sidebar_publications_wrapper ?> class="group-sidebar_publications<?php print $sidebar_publications_classes; ?>">
				<?php print $sidebar_publications; ?>
			</<?php print $sidebar_publications_wrapper ?>>
		
			<<?php print $sidebar_members_wrapper ?> class="group-sidebar_members<?php print $sidebar_members_classes; ?>">
				<?php print $sidebar_members; ?>
			</<?php print $sidebar_members_wrapper ?>>
			
			<?php print $sidebar; ?>
		</<?php print $sidebar_wrapper ?>>
	</div>


  

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
