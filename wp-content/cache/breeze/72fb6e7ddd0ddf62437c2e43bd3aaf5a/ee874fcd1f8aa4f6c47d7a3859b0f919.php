a:2:{s:4:"body";s:58866:"<!DOCTYPE html><html lang="en-GB" class="no-js"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0">  <script type="text/javascript">var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-7870337-1']);
        _gaq.push(['_setDomainName', 'none']);
        _gaq.push(['_setAllowLinker', true]);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

        _W.Analytics = _W.Analytics || {'trackers': {}};
        _W.Analytics.trackers.wGA = '_gaq';</script> <link media="all" href="https://maemoderators.co.uk/wp-content/cache/autoptimize/css/autoptimize_5c0479e7254e15f6047ae1df445aa2b8.css" rel="stylesheet" /><link media="only screen and (max-width: 768px)" href="https://maemoderators.co.uk/wp-content/cache/autoptimize/css/autoptimize_dcb2de333eec7ab4ae31385ed8d6a393.css" rel="stylesheet" /><title>Contact details for MAE Moderators UK | MAE Moderators</title> <script type="text/javascript">var contactform = [];
		var checkIfCalled = true;
		var renderGoogleInvisibleRecaptchaFront = function() {
			// prevent form submit from enter key
			jQuery("input[name=_wpcf7]").attr("class","formid");
				jQuery('.wpcf7-form').on('keyup keypress', "input", function(e) {
				  var keyCode = e.keyCode || e.which;
				  if (keyCode === 13) {
					e.preventDefault();
					return false;
				  }
				});

			jQuery('.wpcf7-submit').each(function(index){

				var checkexclude = 0;
				var form = jQuery(this).closest('.wpcf7-form');
				var value = jQuery(form).find(".formid").val();
				// check form exclude from invisible recaptcha
											if(value == 1106){
								checkexclude = 1;
								form.find('.wpcf7-submit').show();
							}
											if(value ==  1107){
								checkexclude = 1;
								form.find('.wpcf7-submit').show();
							}
								if(checkexclude == 0){
					// Hide the form orig submit button
					form.find('.wpcf7-submit').hide();

					// Fetch class and value of orig submit button
					btnClasses = form.find('.wpcf7-submit').attr('class');
					btnValue = form.find('.wpcf7-submit').attr('value');

					// Add custom button and recaptcha holder

					form.find('.wpcf7-submit').after('<input type="button" id="wpcf-custom-btn-'+index+'" class="'+btnClasses+'  recaptcha-btn recaptcha-btn-type-css" value="'+btnValue+'" title="'+btnValue+'" >');
					form.append('<div class="recaptcha-holder" id="recaptcha-holder-'+index+'"></div>');
					// Recaptcha rendenr from here
					var holderId = grecaptcha.render('recaptcha-holder-'+index,{
								'sitekey':'6LfG_p8UAAAAAMQ8WC7riyh86USTVqT7o8SQUSR7',
								'size': 'invisible',
								'badge' : 'bottomright', // possible values: bottomright, bottomleft, inline
								'callback' : function (recaptchaToken) {
									//console.log(recaptchaToken);
									var response=jQuery('#recaptcha-holder-'+index).find('.g-recaptcha-response').val();
									//console.log(response);
									//Remove old response and store new respone
									jQuery('#recaptcha-holder-'+index).parent().find(".respose_post").remove();
									jQuery('#recaptcha-holder-'+index).after('<input type="hidden" name="g-recaptcha-response"  value="'+response+'" class="respose_post">')
									grecaptcha.reset(holderId);

									if(typeof customCF7Validator !== 'undefined'){
										if(!customCF7Validator(form)){
											return;
										}
									}
									// Call default Validator function
									else if(contactFormDefaultValidator(form)){
										return;
									}
									else{
										// hide the custom button and show orig submit button again and submit the form
										jQuery('#wpcf-custom-btn-'+index).hide();
										form.find('input[type=submit]').show();
										form.find("input[type=submit]").click();
										form.find('input[type=submit]').hide();
										jQuery('#wpcf-custom-btn-'+index).attr('style','');
									}
								}
						},false);

					// action call when click on custom button
					jQuery('#wpcf-custom-btn-'+index).click(function(event){
						event.preventDefault();
						// Call custom validator function
						if(typeof customCF7Validator == 'function'){
							if(!customCF7Validator(form)){
								return false;
							}
						}
						// Call default Validator function
						else if(contactFormDefaultValidator(form)){
							return false;
						}
						else if(grecaptcha.getResponse(holderId) != ''){
							grecaptcha.reset(holderId);
						}
						else{
							// execute the recaptcha challenge
							grecaptcha.execute(holderId);
						}
					});
				}
			});
		}</script><script  src="https://www.google.com/recaptcha/api.js?onload=renderGoogleInvisibleRecaptchaFront&render=explicit" async defer></script><script type='text/javascript'>function ctSetCookie(c_name, value, def_value){document.cookie = c_name + '=' + escape(value) + '; path=/';}ctSetCookie('ct_checkjs', '1477053656', '0');</script> <meta name="description"  content="Contact details for MAE Moderators UK - Merrivale, Nursery Lane Warninglid, West Sussex, RH17 5JS, - STRICKLY APPOINTMENT ONLY Email: julian@jsavory.com" /> <script type="application/ld+json" class="aioseop-schema">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://maemoderators.co.uk/#organization","url":"https://maemoderators.co.uk/","name":"MAE Moderators","sameAs":[]},{"@type":"WebSite","@id":"https://maemoderators.co.uk/#website","url":"https://maemoderators.co.uk/","name":"MAE Moderators","publisher":{"@id":"https://maemoderators.co.uk/#organization"},"potentialAction":{"@type":"SearchAction","target":"https://maemoderators.co.uk/?s={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"WebPage","@id":"https://maemoderators.co.uk/contact/#webpage","url":"https://maemoderators.co.uk/contact/","inLanguage":"en-GB","name":"CONTACT","isPartOf":{"@id":"https://maemoderators.co.uk/#website"},"breadcrumb":{"@id":"https://maemoderators.co.uk/contact/#breadcrumblist"},"description":"Contact details for MAE Moderators UK - Merrivale, Nursery Lane\r\nWarninglid, West Sussex, RH17 5JS, - STRICKLY APPOINTMENT ONLY\r\nEmail: julian@jsavory.com","datePublished":"2019-04-12T06:45:17+00:00","dateModified":"2020-04-14T14:45:55+00:00"},{"@type":"BreadcrumbList","@id":"https://maemoderators.co.uk/contact/#breadcrumblist","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://maemoderators.co.uk/","url":"https://maemoderators.co.uk/","name":"MAE Moderators"}},{"@type":"ListItem","position":2,"item":{"@type":"WebPage","@id":"https://maemoderators.co.uk/contact/","url":"https://maemoderators.co.uk/contact/","name":"CONTACT"}}]}]}</script> <link rel="canonical" href="https://maemoderators.co.uk/contact/" /><link rel='dns-prefetch' href='//js.hs-scripts.com' /><link rel='dns-prefetch' href='//fonts.googleapis.com' /><link rel='dns-prefetch' href='//s.w.org' /><link rel="alternate" type="application/rss+xml" title="MAE Moderators &raquo; Feed" href="https://maemoderators.co.uk/feed/" /><link rel="alternate" type="application/rss+xml" title="MAE Moderators &raquo; Comments Feed" href="https://maemoderators.co.uk/comments/feed/" />  <script type="text/javascript" data-cfasync="false">var em_version         = '6.0.2';
	var em_track_user      = true;
	var em_no_track_reason = '';
	
	var disableStr = 'ga-disable-UA-48210049-1';

	/* Function to detect opted out users */
	function __gaTrackerIsOptedOut() {
		return document.cookie.indexOf(disableStr + '=true') > -1;
	}

	/* Disable tracking if the opt-out cookie exists. */
	if ( __gaTrackerIsOptedOut() ) {
		window[disableStr] = true;
	}

	/* Opt-out function */
	function __gaTrackerOptout() {
	  document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
	  window[disableStr] = true;
	}

	if ( 'undefined' === typeof gaOptout ) {
		function gaOptout() {
			__gaTrackerOptout();
		}
	}
	
	if ( em_track_user ) {
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','__gaTracker');

window.ga = __gaTracker;		__gaTracker('create', 'UA-48210049-1', 'auto');
		__gaTracker('set', 'forceSSL', true);
		__gaTracker('send','pageview');
		__gaTracker( function() { window.ga = __gaTracker; } );
	} else {
		console.log( "" );
		(function() {
			/* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
			var noopfn = function() {
				return null;
			};
			var noopnullfn = function() {
				return null;
			};
			var Tracker = function() {
				return null;
			};
			var p = Tracker.prototype;
			p.get = noopfn;
			p.set = noopfn;
			p.send = noopfn;
			var __gaTracker = function() {
				var len = arguments.length;
				if ( len === 0 ) {
					return;
				}
				var f = arguments[len-1];
				if ( typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function' ) {
					console.log( 'Not running function __gaTracker(' + arguments[0] + " ....) because you are not being tracked. " + em_no_track_reason );
					return;
				}
				try {
					f.hitCallback();
				} catch (ex) {

				}
			};
			__gaTracker.create = function() {
				return new Tracker();
			};
			__gaTracker.getByName = noopnullfn;
			__gaTracker.getAll = function() {
				return [];
			};
			__gaTracker.remove = noopfn;
			window['__gaTracker'] = __gaTracker;
			window.ga = __gaTracker;		})();
		}</script>  <script type="text/javascript">window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/maemoderators.co.uk\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.4.1"}};
			/*! This file is auto-generated */
			!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);</script> <link rel='stylesheet' id='gridlove-fonts-css'  href='https://fonts.googleapis.com/css?family=Cabin%3A400%2C700%7CLato%3A400%2C700&#038;subset=latin%2Clatin-ext&#038;ver=2.2.14' type='text/css' media='all' /> <script type='text/javascript' src='https://maemoderators.co.uk/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script> <script type='text/javascript'>var exactmetrics_frontend = {"js_events_tracking":"true","download_extensions":"zip,mp3,mpeg,pdf,docx,pptx,xlsx,rar","inbound_paths":"[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]","home_url":"https:\/\/maemoderators.co.uk","hash_tracking":"false"};</script> <script type='text/javascript'>var ctPublic = {"_ajax_nonce":"46d3633a4d","_ajax_url":"https:\/\/maemoderators.co.uk\/wp-admin\/admin-ajax.php"};</script> <script type='text/javascript'>var ctNocache = {"ajaxurl":"https:\/\/maemoderators.co.uk\/wp-admin\/admin-ajax.php","info_flag":"","set_cookies_flag":"","blog_home":"https:\/\/maemoderators.co.uk\/"};</script> <script type='text/javascript'>var cnArgs = {"ajaxUrl":"https:\/\/maemoderators.co.uk\/wp-admin\/admin-ajax.php","nonce":"d25c2ddd5b","hideEffect":"fade","position":"bottom","onScroll":"0","onScrollOffset":"100","onClick":"0","cookieName":"cookie_notice_accepted","cookieTime":"2592000","cookieTimeRejected":"2592000","cookiePath":"\/","cookieDomain":"","redirection":"0","cache":"1","refuse":"0","revokeCookies":"0","revokeCookiesOpt":"automatic","secure":"1","coronabarActive":"0"};</script> <script type='text/javascript'>var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View basket","cart_url":"https:\/\/maemoderators.co.uk\/cart\/","is_cart":"","cart_redirect_after_add":"no"};</script> <link rel='https://api.w.org/' href='https://maemoderators.co.uk/wp-json/' /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://maemoderators.co.uk/xmlrpc.php?rsd" /><link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://maemoderators.co.uk/wp-includes/wlwmanifest.xml" /><meta name="generator" content="WordPress 5.4.1" /><meta name="generator" content="WooCommerce 4.1.1" /><link rel='shortlink' href='https://maemoderators.co.uk/?p=30' /><link rel="alternate" type="application/json+oembed" href="https://maemoderators.co.uk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmaemoderators.co.uk%2Fcontact%2F" /><link rel="alternate" type="text/xml+oembed" href="https://maemoderators.co.uk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmaemoderators.co.uk%2Fcontact%2F&#038;format=xml" />  <script type="text/javascript">var _hsq = _hsq || [];
				_hsq.push(["setContentType", "standard-page"]);</script>    <script type="application/ld+json">[{"@context":"http:\/\/schema.org\/","@type":"WPHeader","url":"https:\/\/maemoderators.co.uk\/contact\/","headline":"CONTACT","description":"Address: Merrivale, Nursery Lane, Warninglid, West Sussex, RH17 5JS. STRICTLY APPOINTMENT ONLY Phone: 01444 400126 Fax:  01444 401153..."},{"@context":"http:\/\/schema.org\/","@type":"WPFooter","url":"https:\/\/maemoderators.co.uk\/contact\/","headline":"CONTACT","description":"Address: Merrivale, Nursery Lane, Warninglid, West Sussex, RH17 5JS. STRICTLY APPOINTMENT ONLY Phone: 01444 400126 Fax:  01444 401153...","copyrightYear":"2019"}]</script>  <script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"ContactPage","mainEntityOfPage":{"@type":"WebPage","@id":"https:\/\/maemoderators.co.uk\/contact\/"},"url":"https:\/\/maemoderators.co.uk\/contact\/","headline":"...","publisher":{"@type":"Organization","@id":"https:\/\/maemoderators.co.uk\/#organization","name":"MAE Moderators","logo":{"@type":"ImageObject","url":"https:\/\/maemoderators.co.uk\/wp-content\/uploads\/2019\/04\/1394018658.png","width":600,"height":60}},"description":"Address: Merrivale, Nursery Lane, Warninglid, West Sussex, RH17 5JS. STRICTLY APPOINTMENT ONLY Phone: 01444 400126 Fax:  01444 401153 Mobile: 07771 962121 Email: Julian@Jsavory.com * By appointment only please arrange via the contact form here many thanks MAE. Appointments can also be arranged by phone."}</script> <script>document.documentElement.className = document.documentElement.className.replace( 'no-js', 'js' );</script> <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript><meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/> <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://maemoderators.co.uk/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "item": {
                "@id": "https://maemoderators.co.uk",
                "name": "Home"
            }
        },
        {
            "@type": "ListItem",
            "position": 2,
            "item": {
                "@id": "https://maemoderators.co.uk/contact/",
                "name": "CONTACT"
            }
        }
    ]
}</script> <link rel="icon" href="https://maemoderators.co.uk/wp-content/uploads/2019/04/cropped-fav-32x32.png" sizes="32x32" /><link rel="icon" href="https://maemoderators.co.uk/wp-content/uploads/2019/04/cropped-fav-192x192.png" sizes="192x192" /><link rel="apple-touch-icon" href="https://maemoderators.co.uk/wp-content/uploads/2019/04/cropped-fav-180x180.png" /><meta name="msapplication-TileImage" content="https://maemoderators.co.uk/wp-content/uploads/2019/04/cropped-fav-270x270.png" /><link rel="apple-touch-startup-image" href="https://maemoderators.co.uk/wp-content/plugins/pwa-for-wp/images/logo.png"><link rel="apple-touch-icon" sizes="192x192" href="https://maemoderators.co.uk/wp-content/plugins/pwa-for-wp/images/logo.png"><link rel="apple-touch-icon" sizes="512x512" href="https://maemoderators.co.uk/wp-content/plugins/pwa-for-wp/images/logo-512x512.png"><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1586875529645{margin-top: -30px !important;background-image: url(https://maemoderators.co.uk/wp-content/uploads/2019/04/919117259.jpg?id=140) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1555056764038{margin-top: 5px !important;}</style><noscript><style type="text/css">.wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head><body class="page-template page-template-template-custom page-template-template-custom-php page page-id-30 theme-gridlove cookies-not-set woocommerce-no-js chrome wpb-js-composer js-comp-ver-5.6 vc_responsive"><div style="display:none;">cloudways</div><header id="header" class="gridlove-site-header hidden-md-down  gridlove-header-shadow"><div class="need-verification-text"><p>Your order can be collected from MAE /JMS Sporting  by appointment with your firearms documentation, or we can ship to your local RFD and for this option you will need to confirm the contact details including email of your RFD.<br/> These products cannot be sold to the end user without face to face verification of firearms documentation</p></div><div id="top-bar" class="header-top-payment"><div class="container container-custom"><div class="top-images-wrapper"><div class="payments-methods-text"><div>Pay with Cards via Stripe</div></div><div class="payments-images"><div class="top-images"> <noscript><img src="/wp-content/uploads/2019/10/Gateway_Stripe.png" alt="Gateway_Stripe"></noscript><img class="lazyload" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="/wp-content/uploads/2019/10/Gateway_Stripe.png" alt="Gateway_Stripe"><noscript><img src="/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg" class="stripe-visa-icon stripe-icon" alt="Visa"></noscript><img src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg" class="lazyload stripe-visa-icon stripe-icon" alt="Visa"><noscript><img src="/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg" class="stripe-mastercard-icon stripe-icon" alt="Mastercard"></noscript><img src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg" class="lazyload stripe-mastercard-icon stripe-icon" alt="Mastercard"><noscript><img src="/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg" class="stripe-amex-icon stripe-icon" alt="American Express"></noscript><img src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg" class="lazyload stripe-amex-icon stripe-icon" alt="American Express"></div></div></div><div class="collect-service-text" style="padding-left: 90px;">Please note we offer Click and collect service on this website</div><div class="top-contact-info"> <span class="top-contact-data"><a href="mailto:julian@jsavory.com" class="contact-info">julian@jsavory.com</a></span> <span class="top-contact-data"><a href="tel:07771962121" class="contact-info">07771962121</a></span></div></div></div><div class="gridlove-header-wrapper"><div class="gridlove-header-1 gridlove-header-middle container"><div class="gridlove-slot-l"><div class="gridlove-site-branding  "> <span class="site-title h1"><a href="https://maemoderators.co.uk/" rel="home"><noscript><img class="gridlove-logo" src="https://maemoderators.co.uk/wp-content/uploads/2019/04/1394018658.png" alt="MAE Moderators"></noscript><img class="lazyload gridlove-logo" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="https://maemoderators.co.uk/wp-content/uploads/2019/04/1394018658.png" alt="MAE Moderators"></a></span></div></div><div class="gridlove-slot-r"><nav class="gridlove-main-navigation"><ul id="menu-primary" class="gridlove-main-nav gridlove-menu"><li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-101"><a href="https://maemoderators.co.uk/">HOME</a></li><li id="menu-item-102" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-102"><a href="https://maemoderators.co.uk/products/">PRODUCTS</a><ul class="sub-menu"><li id="menu-item-115" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-115"><a href="https://maemoderators.co.uk/products/mae-over-barrel-moderator/">Over Barrel MAE Moderators</a><ul class="sub-menu"><li id="menu-item-118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-118"><a href="https://maemoderators.co.uk/products/mae-over-barrel-moderator/new-t-series-bushless/">The new MAE Moderator T Series Bushless</a><ul class="sub-menu"><li id="menu-item-941" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-941"><a href="https://maemoderators.co.uk/product/new-t-series-xtreme-bushless/">New T Series XTREME Bushless centre fire .22cal</a></li><li id="menu-item-940" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-940"><a href="https://maemoderators.co.uk/product/new-t-series-compact-bushless/">New T Series COMPACT Bushless moderator</a></li><li id="menu-item-939" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-939"><a href="https://maemoderators.co.uk/product/42-compact-t-series/">MAE Moderator – 42 Compact T Series</a></li></ul></li><li id="menu-item-943" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-943"><a href="https://maemoderators.co.uk/product/t12-st/">T12 Over Barrel</a></li><li id="menu-item-942" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-942"><a href="https://maemoderators.co.uk/product/t12-scout/">T12 Scout Over Barrel</a></li><li id="menu-item-944" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-944"><a href="https://maemoderators.co.uk/product/xtreme-i-new-release/">XTREME I NEW RELEASE 4</a></li></ul></li><li id="menu-item-103" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-103"><a href="https://maemoderators.co.uk/products/forward-fitting/">Forward Fitting MAE Moderators</a><ul class="sub-menu"><li id="menu-item-949" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-949"><a href="https://maemoderators.co.uk/product/6mm-30-st/">6MM 30STS</a></li><li id="menu-item-948" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-948"><a href="https://maemoderators.co.uk/product/224-st/">224 STS</a></li><li id="menu-item-947" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-947"><a href="https://maemoderators.co.uk/product/22-wm-st/">22 WM STS</a></li><li id="menu-item-946" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-946"><a href="https://maemoderators.co.uk/product/lr-22-st/">LR 22 STS</a></li><li id="menu-item-945" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-945"><a href="https://maemoderators.co.uk/product/lr-22-ab/">MAE Moderator – Mighty mouse LR 22 AB</a></li></ul></li><li id="menu-item-1634" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-1634"><a href="https://maemoderators.co.uk/product-category/service-replacements/">Service &#038; Replacements</a><ul class="sub-menu"><li id="menu-item-1635" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-1635"><a href="https://maemoderators.co.uk/product/replacement-moderator-bush/">Replacement Moderator bush</a></li></ul></li></ul></li><li id="menu-item-92" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-92"><a href="https://maemoderators.co.uk/about/">ABOUT</a><ul class="sub-menu"><li id="menu-item-93" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93"><a href="https://maemoderators.co.uk/about/benefits/">Benefits</a></li><li id="menu-item-96" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96"><a href="https://maemoderators.co.uk/about/technology/">Technology</a></li><li id="menu-item-95" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95"><a href="https://maemoderators.co.uk/about/research-development/">Research &#038; Development</a></li><li id="menu-item-94" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-94"><a href="https://maemoderators.co.uk/about/disclaimer-cookies-privacy-statement/">Disclaimer, Cookies &#038; Privacy Statement</a></li></ul></li><li id="menu-item-99" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99"><a href="https://maemoderators.co.uk/faq/">FAQ</a></li><li id="menu-item-124" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124"><a href="https://maemoderators.co.uk/warranty-registration/">WARRANTY REGISTRATION</a></li><li id="menu-item-100" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-100"><a href="https://maemoderators.co.uk/gallery/">MAE Moderator – GALLERY</a></li><li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-30 current_page_item menu-item-98"><a href="https://maemoderators.co.uk/contact/" aria-current="page">CONTACT</a></li></ul></nav></div></div></div></header><div id="gridlove-header-responsive" class="gridlove-header-responsive hidden-lg-up"><div class="container"><div class="gridlove-site-branding mini"> <span class="site-title h1"><a href="https://maemoderators.co.uk/" rel="home"><noscript><img class="gridlove-logo-mini" src="https://maemoderators.co.uk/wp-content/uploads/2019/04/1394018658.png" alt="MAE Moderators"></noscript><img class="lazyload gridlove-logo-mini" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="https://maemoderators.co.uk/wp-content/uploads/2019/04/1394018658.png" alt="MAE Moderators"></a></span></div><ul class="gridlove-actions gridlove-menu"><li class="gridlove-actions-button"> <span class="gridlove-sidebar-action"> <i class="fa fa-bars"></i> </span></li></ul></div></div><div id="content" class="gridlove-site-content container"><div class="gridlove-content gridlove-full-width"><article id="post-30" <?//php post_class('gridlove-box box-vm'); ?>><div><div class="entry-content"><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid sg-height vc_custom_1586875529645 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1555056764038"><div class="wpb_column vc_column_container vc_col-sm-8"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_btn3-container  btn1 vc_btn3-inline" > <a onmouseleave="this.style.borderColor='#f3c800'; this.style.backgroundColor='transparent'; this.style.color='#f3c800'" onmouseenter="this.style.color='#ffffff';" style="border-color:#f3c800; color:#f3c800;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom vc_btn3-icon-left" href="https://www.dropbox.com/sh/tlzlbbzowg8pf1c/4ny69nGXOB" title="" target="_blank"><i class="vc_btn3-icon fa fa-dot-circle-o"></i> Download Over 500 Targets</a></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper"><h1 style="font-size: 25px;color: #f3c800;text-align: left" class="vc_custom_heading" >Contact</h1><div class="wpb_text_column wpb_content_element  show-desktop" ><div class="wpb_wrapper"><div role="form" class="wpcf7" id="wpcf7-f544-p30-o1" lang="en-US" dir="ltr"><div class="screen-reader-response" aria-live="polite"></div><form action="/contact/#wpcf7-f544-p30-o1" method="post" class="wpcf7-form mailchimp-ext-0.5.20" novalidate="novalidate"><div style="display: none;"> <input type="hidden" name="_wpcf7" value="544" /> <input type="hidden" name="_wpcf7_version" value="5.1.9" /> <input type="hidden" name="_wpcf7_locale" value="en_US" /> <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f544-p30-o1" /> <input type="hidden" name="_wpcf7_container_post" value="30" /></div><p><label>First Name*<br /> <span class="wpcf7-form-control-wrap first-name"><input type="text" name="first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label><br /> <label>Last Name*<br /> <span class="wpcf7-form-control-wrap last-name"><input type="text" name="last-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label><br /> <label> Your Email*<br /> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </label><br /> <label> Your Phone*<br /> <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-phonetext wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></p><p><label> Subject<br /> <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </label></p><p><label> Your Message<br /> <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p><p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" /></p> <noscript><div class="wpcf7-response-output wpcf7-spam-blocked">Your browser does not support JavaScript!. Please enable javascript in your browser in order to get form work properly.</div> </noscript><script type='text/javascript'>if(contactform === undefined){
							var contactform = [];
						}
						var innerVal = [544,'mail_sent_ok','Thank you for your message. It has been sent.'];
						contactform.push(innerVal);
						var innerVal = [544,'mail_sent_ng','There was an error trying to send your message. Please try again later.'];
						contactform.push(innerVal);
						var innerVal = [544,'validation_error','One or more fields have an error. Please check and try again.'];
						contactform.push(innerVal);
						var innerVal = [544,'spam','There was an error trying to send your message. Please try again later.'];
						contactform.push(innerVal);
						var innerVal = [544,'accept_terms','You must accept the terms and conditions before sending your message.'];
						contactform.push(innerVal);
						var innerVal = [544,'invalid_required','The field is required.'];
						contactform.push(innerVal);
						var innerVal = [544,'invalid_too_long','The field is too long.'];
						contactform.push(innerVal);
						var innerVal = [544,'invalid_too_short','The field is too short.'];
						contactform.push(innerVal);
						var innerVal = [544,'invalid_date','The date format is incorrect.'];
						contactform.push(innerVal);
						var innerVal = [544,'date_too_early','The date is before the earliest one allowed.'];
						contactform.push(innerVal);
						var innerVal = [544,'date_too_late','The date is after the latest one allowed.'];
						contactform.push(innerVal);
						var innerVal = [544,'upload_failed','There was an unknown error uploading the file.'];
						contactform.push(innerVal);
						var innerVal = [544,'upload_file_type_invalid','You are not allowed to upload files of this type.'];
						contactform.push(innerVal);
						var innerVal = [544,'upload_file_too_large','The file is too big.'];
						contactform.push(innerVal);
						var innerVal = [544,'upload_failed_php_error','There was an error uploading the file.'];
						contactform.push(innerVal);
						var innerVal = [544,'invalid_number','The number format is invalid.'];
						contactform.push(innerVal);
						var innerVal = [544,'number_too_small','The number is smaller than the minimum allowed.'];
						contactform.push(innerVal);
						var innerVal = [544,'number_too_large','The number is larger than the maximum allowed.'];
						contactform.push(innerVal);
						var innerVal = [544,'quiz_answer_not_correct','The answer to the quiz is incorrect.'];
						contactform.push(innerVal);
						var innerVal = [544,'invalid_email','The e-mail address entered is invalid.'];
						contactform.push(innerVal);
						var innerVal = [544,'invalid_url','The URL is invalid.'];
						contactform.push(innerVal);
						var innerVal = [544,'invalid_tel','The telephone number is invalid.'];
						contactform.push(innerVal);
						var innerVal = [544,'gdpr',''];
						contactform.push(innerVal);</script><input type='hidden' id='ct_checkjs_cf7_38db3aed920cf82ab059bfccbd02be6a' name='ct_checkjs_cf7' value='0' /><script type='text/javascript'>window.addEventListener('load', function () {setTimeout(function(){                    apbct_sendAJAXRequest(                        {action: 'apbct_js_keys__get'},                        {callback: apbct_js_keys__set_input_value, input_name: 'ct_checkjs_cf7_38db3aed920cf82ab059bfccbd02be6a'}                    );                }, 1000);});</script><div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div><p style="display: none !important"><span class="wpcf7-form-control-wrap referer-page"><input type="hidden" name="referer-page" value="https://maemoderators.co.uk/" class="wpcf7-form-control wpcf7-text referer-page" aria-invalid="false"></span></p></form></div></div></div><div class="wpb_text_column wpb_content_element  show-mobile" ><div class="wpb_wrapper"><div role="form" class="wpcf7" id="wpcf7-f1106-p30-o2" lang="en-US" dir="ltr"><div class="screen-reader-response" aria-live="polite"></div><form action="/contact/#wpcf7-f1106-p30-o2" method="post" class="wpcf7-form mailchimp-ext-0.5.20" novalidate="novalidate"><div style="display: none;"> <input type="hidden" name="_wpcf7" value="1106" /> <input type="hidden" name="_wpcf7_version" value="5.1.9" /> <input type="hidden" name="_wpcf7_locale" value="en_US" /> <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1106-p30-o2" /> <input type="hidden" name="_wpcf7_container_post" value="30" /></div><p><label>First Name*<br /> <span class="wpcf7-form-control-wrap first-name"><input type="text" name="first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label><br /> <label>Last Name*<br /> <span class="wpcf7-form-control-wrap last-name"><input type="text" name="last-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label><br /> <label> Your Email*<br /> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </label><br /> <label> Your Phone*<br /> <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-phonetext wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></p><p><label> Subject<br /> <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </label></p><p><label> Your Message<br /> <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p><p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" /></p> <noscript><div class="wpcf7-response-output wpcf7-spam-blocked">Your browser does not support JavaScript!. Please enable javascript in your browser in order to get form work properly.</div> </noscript><script type='text/javascript'>if(contactform === undefined){
							var contactform = [];
						}
						var innerVal = [1106,'mail_sent_ok','Thank you for your message. It has been sent.'];
						contactform.push(innerVal);
						var innerVal = [1106,'mail_sent_ng','There was an error trying to send your message. Please try again later.'];
						contactform.push(innerVal);
						var innerVal = [1106,'validation_error','One or more fields have an error. Please check and try again.'];
						contactform.push(innerVal);
						var innerVal = [1106,'spam','There was an error trying to send your message. Please try again later.'];
						contactform.push(innerVal);
						var innerVal = [1106,'accept_terms','You must accept the terms and conditions before sending your message.'];
						contactform.push(innerVal);
						var innerVal = [1106,'invalid_required','The field is required.'];
						contactform.push(innerVal);
						var innerVal = [1106,'invalid_too_long','The field is too long.'];
						contactform.push(innerVal);
						var innerVal = [1106,'invalid_too_short','The field is too short.'];
						contactform.push(innerVal);
						var innerVal = [1106,'invalid_date','The date format is incorrect.'];
						contactform.push(innerVal);
						var innerVal = [1106,'date_too_early','The date is before the earliest one allowed.'];
						contactform.push(innerVal);
						var innerVal = [1106,'date_too_late','The date is after the latest one allowed.'];
						contactform.push(innerVal);
						var innerVal = [1106,'upload_failed','There was an unknown error uploading the file.'];
						contactform.push(innerVal);
						var innerVal = [1106,'upload_file_type_invalid','You are not allowed to upload files of this type.'];
						contactform.push(innerVal);
						var innerVal = [1106,'upload_file_too_large','The file is too big.'];
						contactform.push(innerVal);
						var innerVal = [1106,'upload_failed_php_error','There was an error uploading the file.'];
						contactform.push(innerVal);
						var innerVal = [1106,'invalid_number','The number format is invalid.'];
						contactform.push(innerVal);
						var innerVal = [1106,'number_too_small','The number is smaller than the minimum allowed.'];
						contactform.push(innerVal);
						var innerVal = [1106,'number_too_large','The number is larger than the maximum allowed.'];
						contactform.push(innerVal);
						var innerVal = [1106,'quiz_answer_not_correct','The answer to the quiz is incorrect.'];
						contactform.push(innerVal);
						var innerVal = [1106,'invalid_email','The e-mail address entered is invalid.'];
						contactform.push(innerVal);
						var innerVal = [1106,'invalid_url','The URL is invalid.'];
						contactform.push(innerVal);
						var innerVal = [1106,'invalid_tel','The telephone number is invalid.'];
						contactform.push(innerVal);
						var innerVal = [1106,'gdpr',''];
						contactform.push(innerVal);</script><input type='hidden' id='ct_checkjs_cf7_b53b3a3d6ab90ce0268229151c9bde11' name='ct_checkjs_cf7' value='0' /><script type='text/javascript'>window.addEventListener('load', function () {setTimeout(function(){                    apbct_sendAJAXRequest(                        {action: 'apbct_js_keys__get'},                        {callback: apbct_js_keys__set_input_value, input_name: 'ct_checkjs_cf7_b53b3a3d6ab90ce0268229151c9bde11'}                    );                }, 1000);});</script><div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div><p style="display: none !important"><span class="wpcf7-form-control-wrap referer-page"><input type="hidden" name="referer-page" value="https://maemoderators.co.uk/" class="wpcf7-form-control wpcf7-text referer-page" aria-invalid="false"></span></p></form></div></div></div></div></div></div><div class="contact-details wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 32px" ><span class="vc_empty_space_inner"></span></div><h1 style="font-size: 18px;color: #f3c800;text-align: left" class="vc_custom_heading" >JMS Sporting t/a MAE Moderators</h1><div class="vc_empty_space"   style="height: 32px" ><span class="vc_empty_space_inner"></span></div><div class="wpb_text_column wpb_content_element " ><div class="wpb_wrapper"><div class="sg-table"><div class="adress"><p>Address:</p><p>Merrivale, Nursery Lane, Warninglid, West Sussex, RH17 5JS. STRICTLY APPOINTMENT ONLY</p></div><div class="phone"><p>Phone:</p><p><a href="tel:01444 400126">01444 400126</a></div><div class="fax"><p>Fax:</p><p><a href="tel:01444 401153"> 01444 401153</a></div><div class="mobile"><p>Mobile:</p><p><a href="tel:07771 962121">07771 962121</a></div><div class="email"><p>Email:</p><p><a href="mailto:JMSARMSuk@gmail.com">Julian@Jsavory.com</a></div></div></div></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-8"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="wpb_text_column wpb_content_element " ><div class="wpb_wrapper"><p style="color: #fff;">* By appointment only please arrange via the contact form here many thanks MAE.<br /> Appointments can also be arranged by phone.</p></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="wpb_text_column wpb_content_element " ><div class="wpb_wrapper"></div></div></div></div></div></div></div></div></article></div></div><div class="float_contact"> <a href="https://maemoderators.co.uk/contact/" class="feedback">Contact Us</a></div><div id="footer" class="gridlove-footer"><div style="font-size: 23px; color: #fc0; line-height: 30px; text-align: center; padding-top: 45px; padding-bottom: 30px;  "> Other Hunting and Shooting Products from JMS Sporting</div><div style="border-top:1px solid #5c5b5b; width:60%; margin:0 auto;"></div><div class="container"><div class="row"style="border-bottom:1px solid #5c5b5b;"><div class="col-lg-4 col-md-6 col-sm-12"><div id="custom_html-4" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><a href="https://www.heck-pack.co.uk/" target="_blank" rel="noopener noreferrer"><div class='sg-title'> Make transporting your shot game easy with the game transporter</div> <noscript><img src="https://maemoderators.co.uk/wp-content/uploads/2019/10/heck-pack-logo.png" class="no-lazyload" /></noscript><img src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="https://maemoderators.co.uk/wp-content/uploads/2019/10/heck-pack-logo.png" class="lazyload no-lazyload" /> </a></div></div></div><div class="col-lg-4 col-md-6 col-sm-12"><div id="custom_html-3" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><a href="https://quickload.co.uk/" target="_blank" rel="noopener noreferrer"><div class='sg-title'> QuickLOAD for all your ballistics analysis</div> <noscript><img src="https://maemoderators.co.uk/wp-content/uploads/2019/04/8083890_orig.png" class="no-lazyload" /></noscript><img src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="https://maemoderators.co.uk/wp-content/uploads/2019/04/8083890_orig.png" class="lazyload no-lazyload" /> </a></div></div></div><div class="col-lg-4 col-md-6 col-sm-12"><div id="custom_html-5" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><a href="https://www.jmssporting.com/" target="_blank" rel="noopener noreferrer"><div class='sg-title'> JMS Sporting</div> <noscript><img src="https://maemoderators.co.uk/wp-content/uploads/2019/09/jmssporting.jpg" class="no-lazyload" /></noscript><img src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="https://maemoderators.co.uk/wp-content/uploads/2019/09/jmssporting.jpg" class="lazyload no-lazyload" /> </a></div></div></div></div></div><div class="gridlove-copyright"><div class="sg-social"> <a href="/contact/" class="fa fa-envelope" target="_blank"></a></div><div class="container"><p style="text-align: center"> <a href="/about/disclaimer-cokkies-privacy-statement/">Privacy and Web Terms Documents</a> - Copyright 2020 MAE / JMS Sporting</p></div></div></div><div class="gridlove-sidebar-action-wrapper"> <span class="gridlove-action-close"><i class="fa fa-times" aria-hidden="true"></i></span><div class="gridlove-sidebar-action-inside"><div class="hidden-lg-up widget gridlove-box widget_nav_menu"><ul id="menu-primary-1" class="gridlove-mobile-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-101"><a href="https://maemoderators.co.uk/">HOME</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-102"><a href="https://maemoderators.co.uk/products/">PRODUCTS</a><ul class="sub-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-115"><a href="https://maemoderators.co.uk/products/mae-over-barrel-moderator/">Over Barrel MAE Moderators</a><ul class="sub-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-118"><a href="https://maemoderators.co.uk/products/mae-over-barrel-moderator/new-t-series-bushless/">The new MAE Moderator T Series Bushless</a><ul class="sub-menu"><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-941"><a href="https://maemoderators.co.uk/product/new-t-series-xtreme-bushless/">New T Series XTREME Bushless centre fire .22cal</a></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-940"><a href="https://maemoderators.co.uk/product/new-t-series-compact-bushless/">New T Series COMPACT Bushless moderator</a></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-939"><a href="https://maemoderators.co.uk/product/42-compact-t-series/">MAE Moderator – 42 Compact T Series</a></li></ul></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-943"><a href="https://maemoderators.co.uk/product/t12-st/">T12 Over Barrel</a></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-942"><a href="https://maemoderators.co.uk/product/t12-scout/">T12 Scout Over Barrel</a></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-944"><a href="https://maemoderators.co.uk/product/xtreme-i-new-release/">XTREME I NEW RELEASE 4</a></li></ul></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-103"><a href="https://maemoderators.co.uk/products/forward-fitting/">Forward Fitting MAE Moderators</a><ul class="sub-menu"><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-949"><a href="https://maemoderators.co.uk/product/6mm-30-st/">6MM 30STS</a></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-948"><a href="https://maemoderators.co.uk/product/224-st/">224 STS</a></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-947"><a href="https://maemoderators.co.uk/product/22-wm-st/">22 WM STS</a></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-946"><a href="https://maemoderators.co.uk/product/lr-22-st/">LR 22 STS</a></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-945"><a href="https://maemoderators.co.uk/product/lr-22-ab/">MAE Moderator – Mighty mouse LR 22 AB</a></li></ul></li><li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-1634"><a href="https://maemoderators.co.uk/product-category/service-replacements/">Service &#038; Replacements</a><ul class="sub-menu"><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-1635"><a href="https://maemoderators.co.uk/product/replacement-moderator-bush/">Replacement Moderator bush</a></li></ul></li></ul></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-92"><a href="https://maemoderators.co.uk/about/">ABOUT</a><ul class="sub-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93"><a href="https://maemoderators.co.uk/about/benefits/">Benefits</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96"><a href="https://maemoderators.co.uk/about/technology/">Technology</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95"><a href="https://maemoderators.co.uk/about/research-development/">Research &#038; Development</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-94"><a href="https://maemoderators.co.uk/about/disclaimer-cookies-privacy-statement/">Disclaimer, Cookies &#038; Privacy Statement</a></li></ul></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99"><a href="https://maemoderators.co.uk/faq/">FAQ</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124"><a href="https://maemoderators.co.uk/warranty-registration/">WARRANTY REGISTRATION</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-100"><a href="https://maemoderators.co.uk/gallery/">MAE Moderator – GALLERY</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-30 current_page_item menu-item-98"><a href="https://maemoderators.co.uk/contact/" aria-current="page">CONTACT</a></li></ul></div></div></div><div class="gridlove-sidebar-action-overlay"></div> <script async type="text/javascript" src="//static.klaviyo.com/onsite/js/klaviyo.js?company_id=Q44MNE"></script> <script type="text/javascript">if ("") {
            var _learnq = _learnq || [];
            _learnq.push(["identify", {
                "$email": ""
            }]);
        } else {
            // See if current user is a commenter
            if ("") {
                _learnq.push(["identify", {
                    "$email": ""
                }]);
            }
        }</script> <noscript><style>.lazyload{display:none;}</style></noscript><script data-noptimize="1">window.lazySizesConfig=window.lazySizesConfig||{};window.lazySizesConfig.loadMode=1;</script><script async data-noptimize="1" src='https://maemoderators.co.uk/wp-content/plugins/autoptimize/classes/external/js/lazysizes.min.js?ao_version=2.7.2'></script> <script type="text/javascript">var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;</script> <script type='text/javascript'>var wpcf7 = {"apiSettings":{"root":"https:\/\/maemoderators.co.uk\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"cached":"1"};</script> <script type='text/javascript'>(function($) {
			$(function() {
				$(".wpcf7-countrytext").countrySelect({
					defaultCountry: "gb",
				});
				$(".wpcf7-phonetext").intlTelInput({
					autoHideDialCode: false,
					autoPlaceholder: "off",
					nationalMode: false,
					separateDialCode: false,
					hiddenInput: "full_number",
					initialCountry: "gb",	
				});
			});
		})(jQuery);</script> <script type='text/javascript'>var leadin_wordpress = {"userRole":"visitor","pageType":"page","leadinPluginVersion":"7.32.6"};</script> <script async defer id="hs-script-loader" type='text/javascript' src='//js.hs-scripts.com/6171576.js?integration=WordPress'></script> <script type='text/javascript'>var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};</script> <script type='text/javascript'>var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_666d458f07fc146968783a0db5ed643d","fragment_name":"wc_fragments_666d458f07fc146968783a0db5ed643d","request_timeout":"5000"};</script> <script type='text/javascript'>lazySizes.cfg.nativeLoading={setLoadingAttribute:false,disableListeners:{scroll:true}};lazySizes.init();</script> <script type='text/javascript'>var mailchimp_public_data = {"site_url":"https:\/\/maemoderators.co.uk","ajax_url":"https:\/\/maemoderators.co.uk\/wp-admin\/admin-ajax.php","language":"en"};</script> <script type='text/javascript'>var gridlove_js_settings = {"rtl_mode":"","header_sticky":"","header_sticky_offset":"10","header_sticky_up":"1","logo":"https:\/\/maemoderators.co.uk\/wp-content\/uploads\/2019\/04\/1394018658.png","logo_retina":"https:\/\/maemoderators.co.uk\/wp-content\/uploads\/2019\/04\/1394018658.png","logo_mini":"https:\/\/maemoderators.co.uk\/wp-content\/uploads\/2019\/04\/1394018658.png","logo_mini_retina":"https:\/\/maemoderators.co.uk\/wp-content\/uploads\/2019\/04\/1394018658.png","gridlove_gallery":"1"};</script> <script type='text/javascript'>var wcPvJson = {"phoneValidatorName":"_wc_pv_phone_validator","phoneValidatorErrName":"_wc_pv_phone_validator_err","parentPage":".woocommerce-checkout","currentPage":"checkout","utilsScript":"https:\/\/maemoderators.co.uk\/wp-content\/plugins\/woo-phone-validator\/assets\/vendor\/js\/utils.js"};</script>  <script type="text/javascript">jQuery(function($) { 

					$( '.add_to_cart_button:not(.product_type_variable, .product_type_grouped)' ).click( function() {
						ga( 'ec:addProduct', {'id': ($(this).data('product_sku')) ? ($(this).data('product_sku')) : ('#' + $(this).data('product_id')),'quantity': $(this).data('quantity')} );
						ga( 'ec:setAction', 'add' );
						ga( 'send', 'event', 'UX', 'click', 'add to cart' );
					});
				
 });</script> <div id="cookie-notice" role="banner" class="cookie-notice-hidden cookie-revoke-hidden cn-position-bottom" aria-label="Cookie Notice" style="background-color: rgba(0,0,0,1);"><div class="cookie-notice-container" style="color: #fff;"><span id="cn-notice-text" class="cn-text-container">We use cookies to ensure that we give you the best experience on our website. If you continue to use this site we will assume that you are happy with it.</span><span id="cn-notice-buttons" class="cn-buttons-container"><a href="#" id="cn-accept-cookie" data-cookie-set="accept" class="cn-set-cookie cn-button bootstrap button" aria-label="Ok">Ok</a></span><a href="javascript:void(0);" id="cn-close-notice" data-cookie-set="accept" class="cn-close-icon" aria-label="Ok"></a></div></div> <script type="text/javascript">jQuery('#tab-description > div:not(.vc_row )').remove();</script> <script defer src="https://maemoderators.co.uk/wp-content/cache/autoptimize/js/autoptimize_f9203b103709363567f2b49af1031c63.js"></script></body></html>
<!-- Cache served by breeze CACHE - Last modified: Mon, 01 Jun 2020 07:45:47 GMT -->
";s:7:"headers";a:3:{i:0;a:2:{s:4:"name";s:14:"Content-Length";s:5:"value";i:58866;}i:1;a:2:{s:4:"name";s:12:"Content-Type";s:5:"value";s:24:"text/html; charset=utf-8";}i:2;a:2:{s:4:"name";s:13:"Last-Modified";s:5:"value";s:29:"Mon, 01 Jun 2020 07:45:47 GMT";}}}