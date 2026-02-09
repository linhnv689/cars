<?php
/**
 * The template for displaying the footer
 *
 * @package Supercar
 */
?>

		<footer></footer>
	</div><!-- #page -->

	<div class="car-top default back_to_top_type-default">
		<span>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/car-top.png" alt="Top" title="Back to top" style="width: 74px;height: 114px;">
		</span>
	</div>


	<div id="overlay-wrap" class="overlay-body">
		<div class="loader">
			<div class="car-stage">
				<div id="road" class="road" aria-hidden="true"></div>

				<div id="carWrap" class="car-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
					<div class="wheel rear-wheel"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/wheel1-removebg-preview.png" alt="">
					</div>
					<div class="wheel front-wheel"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/wheel2-removebg-preview.png" alt="">
					</div>
				</div>

			</div>
		</div>
	</div><!-- .overlay-body -->
</div><!-- #jws_theme_wrapper -->
<?php wp_footer(); ?>

</body>
</html>
