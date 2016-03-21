
<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-profile <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  

  
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
			<?php print $sidebar; ?>
		</<?php print $sidebar_wrapper ?>>
	</div>


  

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
