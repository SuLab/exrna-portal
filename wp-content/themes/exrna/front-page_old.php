<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>
<div class="home-bg">
	<div class="layer"></div>
		<div class="container layers">
			<div class="row">
				<div class="col-md-6">
					<h1>exRNA</h1>
					<p>Once thought to exist only within cells, RNA is now known to be exported from cells and play a role in newly discovered mechanisms of cell-to-cell communication. The Common Fund’s Extracellular RNA Communication (ERC) program aims to discover fundamental biological principles about the mechanisms of extracellular RNA (exRNA) generation, secretion, and transport; to identify and develop a catalogue of exRNA in normal human body fluids; and to investigate the potential for using exRNAs as therapeutic molecules or biomarkers of disease.</p>
					<a href="/about" class="btn btn-default">Read More</a>
				</div>
				<div class="col-md-6">
					<div class="video-container">
						<iframe style="margin-top:20px" width="560" height="315" src="//www.youtube.com/embed/bfMg3RhxNm8?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			
		</div>
		
	</div>
</div>
<div class="container">
	<div class="row ">
		<div class="col-md-6 pushtop">
			<img src="./media/banner-nihlogo.png" alt="" class="img-responsive imgcent">
		</div>
			<div class="col-md-6 pushtop">
				<div class="imgcent">
				<p class="lead cent">Get the latest news &amp; updates about exRNA:</p>
				<?php gravity_form('2', $display_title=false, $display_description=true, $display_inactive=false, $field_values=null, $ajax=false, $tabindex); ?>
				<script>
				$(document).ready(function(){
				    $('form').addClass('form-horizontal');
				    $('#gform_fields_2').find('li').addClass('col-md-6');
				    $('#gform_submit_button_2').addClass('btn btn-warning');
				    $('input[name$="input_1"]').attr('placeholder','Enter email');
				});
				</script>
			</div>	
		</div>
	</div>
</div>
	





<?php get_footer(); ?>
