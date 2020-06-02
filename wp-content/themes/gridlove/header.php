<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
   <!--  <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-48210049-1', 'maemoderators.co.uk');
        ga('send', 'pageview');

    </script> -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-7870337-1']);
        _gaq.push(['_setDomainName', 'none']);
        _gaq.push(['_setAllowLinker', true]);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

        _W.Analytics = _W.Analytics || {'trackers': {}};
        _W.Analytics.trackers.wGA = '_gaq';
    </script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div style="display:none;">cloudways</div>
	<?php $header_orientation_class = gridlove_get_option( 'header_orientation' ) == 'wide' ? 'gridlove-header-wide' : ''; ?>
	<?php $shadow_class = gridlove_get_option('header_shadow') ? 'gridlove-header-shadow' : ''; ?>

	<header id="header" class="gridlove-site-header hidden-md-down <?php echo esc_attr( $header_orientation_class ); ?> <?php echo esc_attr( $shadow_class ); ?>">
			<div class="need-verification-text">
				<p>Your order can be collected from MAE /JMS Sporting  by appointment with your firearms documentation, or we can ship to your local RFD and for this option you will need to confirm the contact details including email of your RFD.<br/>
				These products cannot be sold to the end user without face to face verification of firearms documentation</p>
			</div>
			<div id="top-bar" class="header-top-payment">
				<div class="container container-custom">
					<div class="top-images-wrapper">
					  <!-- <div class="payments-option-text">
					    Our payment options are:
					  </div> -->
					  <div class="payments-methods-text">
					   <!-- <div>Pay with PayPal and Cards via PayPal</div> -->
					   <div>Pay with Cards via Stripe</div>
					  </div>
					  <div class="payments-images">
					    <!-- <div class="top-images">
					    <img src="/wp-content/uploads/2019/10/cc-paypal.png" alt="cc-paypal"><img src="/wp-content/uploads/2019/10/cc-visa.png" alt="cc-visa"><img src="/wp-content/uploads/2019/10/cc-mastercard.png" alt="cc-mastercard"><img src="/wp-content/uploads/2019/10/discover.png" alt="discover"><img src="/wp-content/uploads/2019/10/amex_2.png" style="border: 1px solid #006e8a;" alt="amex_2"></div> -->
					    <div class="top-images">
					    <img src="/wp-content/uploads/2019/10/Gateway_Stripe.png" alt="Gateway_Stripe"><img src="/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg" class="stripe-visa-icon stripe-icon" alt="Visa"><img src="/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg" class="stripe-mastercard-icon stripe-icon" alt="Mastercard"><img src="/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg" class="stripe-amex-icon stripe-icon" alt="American Express"></div>
					  </div>
					</div>
					<div class="collect-service-text" style="padding-left: 90px;">Please note we offer Click and collect service on this website</div>
					<div class="top-contact-info">					 	
			            	<span class="top-contact-data"><a href="mailto:julian@jsavory.com" class="contact-info">julian@jsavory.com</a></span>
			            	<span class="top-contact-data"><a href="tel:07771962121" class="contact-info">07771962121</a></span>
					</div>
				</div>
			</div>
			
			<?php if( gridlove_get_option( 'header_top' ) ): ?>
				<?php get_template_part( 'template-parts/header/topbar' ); ?>
			<?php endif; ?>

			<?php get_template_part('template-parts/header/layout-'.gridlove_get_option( 'header_layout' )); ?>

			<?php if ( gridlove_get_option( 'header_sticky' ) ): ?>
				<?php get_template_part( 'template-parts/header/sticky' ); ?>
			<?php endif; ?>

	</header>

	<?php get_template_part( 'template-parts/header/responsive' ); ?>