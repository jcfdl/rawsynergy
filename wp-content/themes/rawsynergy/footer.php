<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rawsynergy
 */

?>

	</div><!-- #content -->
	<div class="row site-location">
		<div class="col-md-6 location-img">
			<img class="pin-img" src="<?= get_template_directory_uri() . '/Assets/Icons/pin.svg'?>">
			<div class="img-round-bg">
				<img class="img-fluid" src="<?= get_template_directory_uri() . '/Assets/Icons/mask.svg'?>">
			</div>
		</div>
		<div class="col-md-6 location-description">
			<div class="location-header mb-3">Get in touch</div>
			<div class="location-info mb-3">
				Raw Synergy<br />
				170 Hancock Road, Ridgehaven,<br />
				Adelaide, SA
			</div>
			<div class="location-email mb-3">
				(08) 8263 0499<br />
				raw_synergy@adam.com.au
			</div>				
			<ul class="location-links mb-3">	
				<li><a href=" https://www.facebook.com/rawsynergyhairandbeauty/"><img src="<?= get_template_directory_uri() . '/Assets/Icons/facebook.svg'?>"></a></li>		
				<li><a href="#"><img src="<?= get_template_directory_uri() . '/Assets/Icons/instagram.svg'?>"></a></li>				
			</ul>
			<table class="location-hours">
				<tbody>
					<tr>
						<td>Monday</td>
						<td>Closed</td>
					</tr>
					<tr>
						<td>Tuesday</td>
						<td>9:00 - 21:00</td>
					</tr>
					<tr>
						<td>Wednesday</td>
						<td>9:00 - 17:00</td>
					</tr>
					<tr>
						<td>Thursday</td>
						<td>9:00 - 21:00</td>
					</tr>
					<tr>
						<td>Friday</td>
						<td>9:00 - 17:00</td>
					</tr>
					<tr>
						<td>Saturday</td>
						<td>9:00 - 17:00</td>
					</tr>
					<tr>
						<td>Sunday</td>
						<td>Closed</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			&copy; 2020 Raw Synergy
		</div><!-- .site-info -->
		<div class="privacy-policy">
			<a href="#">Privacy Policy</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
