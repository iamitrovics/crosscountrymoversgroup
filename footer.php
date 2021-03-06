<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

	<footer id="page-footer">
		<div id="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="footer-sitemap">
							<span class="footer-title"><?php the_field('block_title_footer', 'options'); ?></span>
							<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
						</div>
						<!-- /.footer-sitemap -->
					</div>
					<!-- /.col-md-4 -->
					<div class="col-md-4">
						<span class="footer-title"><?php the_field('block_title_footer_2', 'options'); ?></span>
						<div class="footer-contact" style="background-image:url(<?php the_field('map_world', 'options'); ?>">

							<div class="fc-item">
								<?php the_field('icon_code_address_footer', 'options'); ?>
								<p><strong><?php the_field('address_label_footer_contact', 'options'); ?></strong> <?php the_field('company_address_footer', 'options'); ?></p>
							</div>
							<!-- /.fc-item -->

							<div class="fc-item">
								<?php the_field('icon_code_email_footer', 'options'); ?>
								<p><strong><?php the_field('email_label_footer', 'options'); ?></strong> <a href="mailto:<?php the_field('email_address_footer', 'options'); ?>"><?php the_field('email_address_footer', 'options'); ?></a></p>
							</div>
							<!-- /.fc-item -->

							<div class="fc-item">
								<?php the_field('icon_code_phone_footer', 'options'); ?>
								<p><strong><?php the_field('phone_label_footer', 'options'); ?></strong> <?php the_field('phone_number_footer', 'options'); ?></p>
							</div>
							<!-- /.fc-item -->

						</div>
						<!-- /.footer-contact -->
					</div>
					<!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="footer-blogs">
							<span class="footer-title"><?php the_field('block_title_footer_3', 'options'); ?></span>

								<?php
								$loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3) ); ?>  
								<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

									<div class="blog-item">
										<div class="blog-content">
											<span class="blog-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></span>
											<div class="comments">
												<span class="icon-bubbles"></span> <?php echo get_the_date( 'F j, Y' ); ?>
											</div>
											<!-- /.comments -->
										</div>
										<!-- /.blog-content -->
									</div>
									<!-- /.blog-item -->

								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>      							

						</div>
						<!-- /.footer-blogs -->
					</div>
					<!-- /.col-md-4 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /#footer-top -->
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<small><?php the_field('copyright_text_footer', 'options'); ?><?php echo(date('Y'));?>. All Rights Reserved</small>
					</div>
					<!-- /.col-md-8 -->
					<div class="col-md-4">
						<div class="footer-socials">
							<ul>
								<?php if( have_rows('socials_list_gen', 'options') ): ?>
									<?php while( have_rows('socials_list_gen', 'options') ): the_row(); ?>

										<li><a href="<?php the_sub_field('link_to_socials'); ?>" target="_blank"><?php the_sub_field('icon_code'); ?></a></li>

									<?php endwhile; ?>
								<?php endif; ?>								
							</ul>
						</div>
						<!-- /.footer-socials -->
					</div>
					<!-- /.col-md-4 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.copyright -->
	</footer>
	<!-- /#page-footer -->

	<div id="cookie-notice">
		<div id="cookie-notice-in">
			<div class="notice-text">
				<?php the_field('notice_text_cookies', 'options'); ?>
			</div>
			<!-- /.notice-text -->
			<div class="notice-btns">
				<a href="#" id="accept-cookie"><?php the_field('button_1_label_cookies', 'options'); ?></a>
				<a href="<?php the_field('button_link_cooke_2', 'options'); ?>"><?php the_field('button_2_label_cooki', 'options'); ?></a>
			</div>
			<!-- /.notice-btns -->
			<a href="javascript:void(0);" id="close-notice"></a>
		</div>
		<!-- /#cookie-notice-in -->
	</div>
	<!-- /#cookie-notice -->

	<a id="go-to-top" href="javascript:;"><i class="fas fa-chevron-up"></i></a>
	<div class="modal-overlay disclaimer-modal" data-my-element="tooltip-modal">
		<div class="modal" data-my-element="tooltip-modal">
			<a class="close-modal">
				<img src="<?php bloginfo('template_directory'); ?>/img/ico/close.svg" alt="">
			</a>
			<!-- close modal -->
			<div class="disclaimer-modal-wrap">
				<?php the_field('tooltip_content_modal', 'options'); ?>
			</div>
			<!-- /.disclaimer-modal-wrap -->
		</div>
		<!-- modal -->
	</div>
	<!-- overlay -->

	<div id="fixed-cta">
		
		<a href="tel:<?php the_field('phone_number_general_cta', 'options'); ?>">
			<i class="icon-phone"></i>
			<div class="phone-text">
				<small class="label">Get a Free Estimate</small>
				<span><?php the_field('phone_number_general_cta', 'options'); ?></span>
			</div>
			<!-- // text  -->
		</a>

	</div>
	<!-- // fixed cta  -->		

	<?php wp_footer(); ?>

	<?php if( get_field('footer_code_snippet', 'options') ): ?>
		<?php the_field('footer_code_snippet', 'options'); ?>
	<?php endif; ?>

    <script>

jQuery(document).ready(function($) {

    //Add pins on page load
    $('input[name="your-state"]').parent().addClass('pinned');
    $('input[name="your-stateto"]').parent().addClass('pinned');

    // Add pins when field has no value, either on change or blur (leaving the field)
    $('input[name="zip-from"]').on('change', function() {
      if ($(this).val().length === 0) {
        $(this).parent('span').siblings('span').addClass('pinned');
        $(this).parent('span').siblings('span').find('input[name="your-state"]').val('');
      }
    });
    $('input[name="zip-from"]').blur(function() {
      if ($(this).val().length === 0) {
        $(this).parent('span').siblings('span').addClass('pinned');
        $(this).parent('span').siblings('span').find('input[name="your-state"]').val('');
      }
    });
    $('input[name="zip-to"]').on('change', function() {
      if ($(this).val().length === 0) {
        $(this).parent('span').siblings('span').addClass('pinned');
        $(this).parent('span').siblings('span').find('input[name="your-stateto"]').val('');
      }
    });
    $('input[name="zip-to"]').blur(function() {
      if ($(this).val().length === 0) {
        $(this).parent('span').siblings('span').addClass('pinned');
        $(this).parent('span').siblings('span').find('input[name="your-stateto"]').val('');
      }
    });

    //Trigger API check for Zip from state
    $('input[name="zip-from"]').mouseout(function(){
        var zip = $(this).val();
        var stateFrom = $(this).parent('span').siblings('span').find('input[name="your-state"]');

        var api_key = 'AIzaSyAkitxoIA55jYyfHIt871IKgOUK4EV4KG0';
        if(zip.length){
            //make a request to the google geocode api with the zipcode as the address parameter and your api key
            $.get('https://maps.googleapis.com/maps/api/geocode/json?address='+zip+'&key='+api_key).then(function(response){
            //parse the response for a list of matching city/state
            var possibleLocalities = geocodeResponseToCityState(response, stateFrom);
            //Add state letters to State field
            $(stateFrom).val(possibleLocalities[0].state);
            });
        }
    });

    //Trigger API check for Zip to state
    $('input[name="zip-to"]').mouseout(function(){
        var zip = $(this).val();
        var stateTo = $(this).parent('span').siblings('span').find('input[name="your-stateto"]');

        var api_key = 'AIzaSyAkitxoIA55jYyfHIt871IKgOUK4EV4KG0';
        if(zip.length){
            //make a request to the google geocode api with the zipcode as the address parameter and your api key
            $.get('https://maps.googleapis.com/maps/api/geocode/json?address='+zip+'&key='+api_key).then(function(response){
            //parse the response for a list of matching city/state
            var possibleLocalities = geocodeResponseToCityState(response, stateTo);
            //fillCityAndStateFields(possibleLocalities, stateTo);
            $(stateTo).val(possibleLocalities[0].state);
            });
        }
    });


    function geocodeResponseToCityState(geocodeJSON, state) { //will return and array of matching {city,state} objects
      var parsedLocalities = [];
      $(state).parent().removeClass('pinned');
      //$('#state').parent().removeClass('pinned');
      if(geocodeJSON.results.length) {
        for(var i = 0; i < geocodeJSON.results.length; i++){
          var result = geocodeJSON.results[i];

          var locality = {};
          for(var j=0; j<result.address_components.length; j++){
            var types = result.address_components[j].types;
            for(var k = 0; k < types.length; k++) {
              if(types[k] == 'locality') {
                locality.city = result.address_components[j].long_name;
              } else if(types[k] == 'administrative_area_level_1') {
                locality.state = result.address_components[j].short_name;
              }
            }
          }
          parsedLocalities.push(locality);

          //check for additional cities within this zip code
          if(result.postcode_localities){
            for(var l = 0; l<result.postcode_localities.length;l++) {
              parsedLocalities.push({city:result.postcode_localities[l],state:locality.state});
            }
          }
        }
      } else {
        // $('#state').parent().addClass('pinned');
        // $('#state').val('');
        $(state).parent().addClass('pinned');
        $(state).val('');
        console.log('error: no address components found');
      }
      return parsedLocalities;
    }

});

  </script>

  <script>
    if (!sessionStorage.alreadyClicked) {
        jQuery('#cookie-notice').addClass('slide-up');
        sessionStorage.alreadyClicked = 1;
    }
  </script> 	


</body>
</html>

