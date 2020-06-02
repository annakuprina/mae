a:2:{s:4:"body";s:48301:"<!DOCTYPE html><html lang="en-GB" class="no-js"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0">  <script type="text/javascript">var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-7870337-1']);
        _gaq.push(['_setDomainName', 'none']);
        _gaq.push(['_setAllowLinker', true]);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

        _W.Analytics = _W.Analytics || {'trackers': {}};
        _W.Analytics.trackers.wGA = '_gaq';</script> <link media="all" href="https://maemoderators.co.uk/wp-content/cache/autoptimize/css/autoptimize_fa67679e099ef5bc1bda74cb556e2b8b.css" rel="stylesheet" /><link media="only screen and (max-width: 768px)" href="https://maemoderators.co.uk/wp-content/cache/autoptimize/css/autoptimize_dcb2de333eec7ab4ae31385ed8d6a393.css" rel="stylesheet" /><title>Shop | MAE Moderators - Part 2</title> <script type="text/javascript">var contactform = [];
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
		}</script><script  src="https://www.google.com/recaptcha/api.js?onload=renderGoogleInvisibleRecaptchaFront&render=explicit" async defer></script><script type='text/javascript'>function ctSetCookie(c_name, value, def_value){document.cookie = c_name + '=' + escape(value) + '; path=/';}ctSetCookie('ct_checkjs', '1005741527', '0');</script> <link rel="prev" href="https://maemoderators.co.uk/shop/" /> <script type="application/ld+json" class="aioseop-schema">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://maemoderators.co.uk/#organization","url":"https://maemoderators.co.uk/","name":"MAE Moderators","sameAs":[]},{"@type":"WebSite","@id":"https://maemoderators.co.uk/#website","url":"https://maemoderators.co.uk/","name":"MAE Moderators","publisher":{"@id":"https://maemoderators.co.uk/#organization"},"potentialAction":{"@type":"SearchAction","target":"https://maemoderators.co.uk/?s={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"CollectionPage","@id":"https://maemoderators.co.uk/shop/#collectionpage","url":"https://maemoderators.co.uk/shop/","inLanguage":"en-GB","name":"Shop","isPartOf":{"@id":"https://maemoderators.co.uk/#website"},"breadcrumb":{"@id":"https://maemoderators.co.uk/shop/#breadcrumblist"}},{"@type":"BreadcrumbList","@id":"https://maemoderators.co.uk/shop/#breadcrumblist","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://maemoderators.co.uk/","url":"https://maemoderators.co.uk/","name":"MAE Moderators"}},{"@type":"ListItem","position":2,"item":{"@type":"WebPage","@id":"https://maemoderators.co.uk/shop/","url":"https://maemoderators.co.uk/shop/","name":"Products"}}]}]}</script> <link rel="canonical" href="https://maemoderators.co.uk/shop/page/2/" /><link rel='dns-prefetch' href='//js.hs-scripts.com' /><link rel='dns-prefetch' href='//fonts.googleapis.com' /><link rel='dns-prefetch' href='//s.w.org' /><link rel="alternate" type="application/rss+xml" title="MAE Moderators &raquo; Feed" href="https://maemoderators.co.uk/feed/" /><link rel="alternate" type="application/rss+xml" title="MAE Moderators &raquo; Comments Feed" href="https://maemoderators.co.uk/comments/feed/" /><link rel="alternate" type="application/rss+xml" title="MAE Moderators &raquo; Products Feed" href="https://maemoderators.co.uk/shop/feed/" />  <script type="text/javascript" data-cfasync="false">var em_version         = '6.0.2';
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
			!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);</script> <link rel='stylesheet' id='gridlove-fonts-css'  href='https://fonts.googleapis.com/css?family=Cabin%3A400%2C700%7CLato%3A400%2C700&#038;subset=latin%2Clatin-ext&#038;ver=2.2.14' type='text/css' media='all' /> <script type='text/javascript' src='https://maemoderators.co.uk/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script> <script type='text/javascript'>var exactmetrics_frontend = {"js_events_tracking":"true","download_extensions":"zip,mp3,mpeg,pdf,docx,pptx,xlsx,rar","inbound_paths":"[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]","home_url":"https:\/\/maemoderators.co.uk","hash_tracking":"false"};</script> <script type='text/javascript'>var ctPublic = {"_ajax_nonce":"7e4f12af1e","_ajax_url":"https:\/\/maemoderators.co.uk\/wp-admin\/admin-ajax.php"};</script> <script type='text/javascript'>var ctNocache = {"ajaxurl":"https:\/\/maemoderators.co.uk\/wp-admin\/admin-ajax.php","info_flag":"","set_cookies_flag":"","blog_home":"https:\/\/maemoderators.co.uk\/"};</script> <script type='text/javascript'>var cnArgs = {"ajaxUrl":"https:\/\/maemoderators.co.uk\/wp-admin\/admin-ajax.php","nonce":"88c90452f0","hideEffect":"fade","position":"bottom","onScroll":"0","onScrollOffset":"100","onClick":"0","cookieName":"cookie_notice_accepted","cookieTime":"2592000","cookieTimeRejected":"2592000","cookiePath":"\/","cookieDomain":"","redirection":"0","cache":"1","refuse":"0","revokeCookies":"0","revokeCookiesOpt":"automatic","secure":"1","coronabarActive":"0"};</script> <script type='text/javascript'>var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View basket","cart_url":"https:\/\/maemoderators.co.uk\/cart\/","is_cart":"","cart_redirect_after_add":"no"};</script> <link rel='https://api.w.org/' href='https://maemoderators.co.uk/wp-json/' /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://maemoderators.co.uk/xmlrpc.php?rsd" /><link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://maemoderators.co.uk/wp-includes/wlwmanifest.xml" /><meta name="generator" content="WordPress 5.4.1" /><meta name="generator" content="WooCommerce 4.1.1" />  <script type="text/javascript">var _hsq = _hsq || [];
				_hsq.push(["setContentType", "listing-page"]);</script>    <script type="application/ld+json">[{"@context":"http:\/\/schema.org\/","@type":"WPHeader","url":"https:\/\/maemoderators.co.uk\/shop\/","headline":"Products","description":"This is where you can add new products to your store."},{"@context":"http:\/\/schema.org\/","@type":"WPFooter","url":"https:\/\/maemoderators.co.uk\/shop\/","headline":"Products","description":"This is where you can add new products to your store."}]</script> <script>document.documentElement.className = document.documentElement.className.replace( 'no-js', 'js' );</script> <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript><meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/> <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://maemoderators.co.uk/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><link rel="icon" href="https://maemoderators.co.uk/wp-content/uploads/2019/04/cropped-fav-32x32.png" sizes="32x32" /><link rel="icon" href="https://maemoderators.co.uk/wp-content/uploads/2019/04/cropped-fav-192x192.png" sizes="192x192" /><link rel="apple-touch-icon" href="https://maemoderators.co.uk/wp-content/uploads/2019/04/cropped-fav-180x180.png" /><meta name="msapplication-TileImage" content="https://maemoderators.co.uk/wp-content/uploads/2019/04/cropped-fav-270x270.png" /><link rel="apple-touch-startup-image" href="https://maemoderators.co.uk/wp-content/plugins/pwa-for-wp/images/logo.png"><link rel="apple-touch-icon" sizes="192x192" href="https://maemoderators.co.uk/wp-content/plugins/pwa-for-wp/images/logo.png"><link rel="apple-touch-icon" sizes="512x512" href="https://maemoderators.co.uk/wp-content/plugins/pwa-for-wp/images/logo-512x512.png"> <noscript><style type="text/css">.wpb_animate_when_almost_visible { opacity: 1; }</style></noscript> <script type='text/javascript'>var gaProperty = 'UA-48210049-1';
			var disableStr = 'ga-disable-' + gaProperty;
			if ( document.cookie.indexOf( disableStr + '=true' ) > -1 ) {
				window[disableStr] = true;
			}
			function gaOptout() {
				document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
				window[disableStr] = true;
			}</script> <script type='text/javascript'>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script', '//www.google-analytics.com/analytics.js','ga');ga( 'create', 'UA-48210049-1', 'www.maemoderators.co.uk' );
		ga( 'set', 'dimension1', 'no' );
ga( 'require', 'ec' );</script> </head><body class="archive paged post-type-archive post-type-archive-product paged-2 post-type-paged-2 theme-gridlove cookies-not-set woocommerce woocommerce-page woocommerce-no-js unknown iphone wpb-js-composer js-comp-ver-5.6 vc_responsive"><div style="display:none;">cloudways</div><header id="header" class="gridlove-site-header hidden-md-down  gridlove-header-shadow"><div class="need-verification-text"><p>Your order can be collected from MAE /JMS Sporting  by appointment with your firearms documentation, or we can ship to your local RFD and for this option you will need to confirm the contact details including email of your RFD.<br/> These products cannot be sold to the end user without face to face verification of firearms documentation</p></div><div id="top-bar" class="header-top-payment"><div class="container container-custom"><div class="top-images-wrapper"><div class="payments-methods-text"><div>Pay with Cards via Stripe</div></div><div class="payments-images"><div class="top-images"> <noscript><img src="/wp-content/uploads/2019/10/Gateway_Stripe.png" alt="Gateway_Stripe"></noscript><img class="lazyload" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="/wp-content/uploads/2019/10/Gateway_Stripe.png" alt="Gateway_Stripe"><noscript><img src="/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg" class="stripe-visa-icon stripe-icon" alt="Visa"></noscript><img src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg" class="lazyload stripe-visa-icon stripe-icon" alt="Visa"><noscript><img src="/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg" class="stripe-mastercard-icon stripe-icon" alt="Mastercard"></noscript><img src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg" class="lazyload stripe-mastercard-icon stripe-icon" alt="Mastercard"><noscript><img src="/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg" class="stripe-amex-icon stripe-icon" alt="American Express"></noscript><img src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg" class="lazyload stripe-amex-icon stripe-icon" alt="American Express"></div></div></div><div class="collect-service-text" style="padding-left: 90px;">Please note we offer Click and collect service on this website</div><div class="top-contact-info"> <span class="top-contact-data"><a href="mailto:julian@jsavory.com" class="contact-info">julian@jsavory.com</a></span> <span class="top-contact-data"><a href="tel:07771962121" class="contact-info">07771962121</a></span></div></div></div><div class="gridlove-header-wrapper"><div class="gridlove-header-1 gridlove-header-middle container"><div class="gridlove-slot-l"><div class="gridlove-site-branding  "> <span class="site-title h1"><a href="https://maemoderators.co.uk/" rel="home"><noscript><img class="gridlove-logo" src="https://maemoderators.co.uk/wp-content/uploads/2019/04/1394018658.png" alt="MAE Moderators"></noscript><img class="lazyload gridlove-logo" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="https://maemoderators.co.uk/wp-content/uploads/2019/04/1394018658.png" alt="MAE Moderators"></a></span></div></div><div class="gridlove-slot-r"><nav class="gridlove-main-navigation"><ul id="menu-primary" class="gridlove-main-nav gridlove-menu"><li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-101"><a href="https://maemoderators.co.uk/">HOME</a></li><li id="menu-item-102" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-102"><a href="https://maemoderators.co.uk/products/">PRODUCTS</a><ul class="sub-menu"><li id="menu-item-115" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-115"><a href="https://maemoderators.co.uk/products/mae-over-barrel-moderator/">Over Barrel MAE Moderators</a><ul class="sub-menu"><li id="menu-item-118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-118"><a href="https://maemoderators.co.uk/products/mae-over-barrel-moderator/new-t-series-bushless/">The new MAE Moderator T Series Bushless</a><ul class="sub-menu"><li id="menu-item-941" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-941"><a href="https://maemoderators.co.uk/product/new-t-series-xtreme-bushless/">New T Series XTREME Bushless centre fire .22cal</a></li><li id="menu-item-940" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-940"><a href="https://maemoderators.co.uk/product/new-t-series-compact-bushless/">New T Series COMPACT Bushless moderator</a></li><li id="menu-item-939" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-939"><a href="https://maemoderators.co.uk/product/42-compact-t-series/">MAE Moderator – 42 Compact T Series</a></li></ul></li><li id="menu-item-943" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-943"><a href="https://maemoderators.co.uk/product/t12-st/">T12 Over Barrel</a></li><li id="menu-item-942" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-942"><a href="https://maemoderators.co.uk/product/t12-scout/">T12 Scout Over Barrel</a></li><li id="menu-item-944" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-944"><a href="https://maemoderators.co.uk/product/xtreme-i-new-release/">XTREME I NEW RELEASE 4</a></li></ul></li><li id="menu-item-103" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-103"><a href="https://maemoderators.co.uk/products/forward-fitting/">Forward Fitting MAE Moderators</a><ul class="sub-menu"><li id="menu-item-949" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-949"><a href="https://maemoderators.co.uk/product/6mm-30-st/">6MM 30STS</a></li><li id="menu-item-948" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-948"><a href="https://maemoderators.co.uk/product/224-st/">224 STS</a></li><li id="menu-item-947" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-947"><a href="https://maemoderators.co.uk/product/22-wm-st/">22 WM STS</a></li><li id="menu-item-946" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-946"><a href="https://maemoderators.co.uk/product/lr-22-st/">LR 22 STS</a></li><li id="menu-item-945" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-945"><a href="https://maemoderators.co.uk/product/lr-22-ab/">MAE Moderator – Mighty mouse LR 22 AB</a></li></ul></li><li id="menu-item-1634" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-1634"><a href="https://maemoderators.co.uk/product-category/service-replacements/">Service &#038; Replacements</a><ul class="sub-menu"><li id="menu-item-1635" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-1635"><a href="https://maemoderators.co.uk/product/replacement-moderator-bush/">Replacement Moderator bush</a></li></ul></li></ul></li><li id="menu-item-92" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-92"><a href="https://maemoderators.co.uk/about/">ABOUT</a><ul class="sub-menu"><li id="menu-item-93" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93"><a href="https://maemoderators.co.uk/about/benefits/">Benefits</a></li><li id="menu-item-96" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96"><a href="https://maemoderators.co.uk/about/technology/">Technology</a></li><li id="menu-item-95" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95"><a href="https://maemoderators.co.uk/about/research-development/">Research &#038; Development</a></li><li id="menu-item-94" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-94"><a href="https://maemoderators.co.uk/about/disclaimer-cookies-privacy-statement/">Disclaimer, Cookies &#038; Privacy Statement</a></li></ul></li><li id="menu-item-99" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99"><a href="https://maemoderators.co.uk/faq/">FAQ</a></li><li id="menu-item-124" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124"><a href="https://maemoderators.co.uk/warranty-registration/">WARRANTY REGISTRATION</a></li><li id="menu-item-100" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-100"><a href="https://maemoderators.co.uk/gallery/">MAE Moderator – GALLERY</a></li><li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98"><a href="https://maemoderators.co.uk/contact/">CONTACT</a></li></ul></nav></div></div></div></header><div id="gridlove-header-responsive" class="gridlove-header-responsive hidden-lg-up"><div class="container"><div class="gridlove-site-branding mini"> <span class="site-title h1"><a href="https://maemoderators.co.uk/" rel="home"><noscript><img class="gridlove-logo-mini" src="https://maemoderators.co.uk/wp-content/uploads/2019/04/1394018658.png" alt="MAE Moderators"></noscript><img class="lazyload gridlove-logo-mini" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="https://maemoderators.co.uk/wp-content/uploads/2019/04/1394018658.png" alt="MAE Moderators"></a></span></div><ul class="gridlove-actions gridlove-menu"><li class="gridlove-actions-button"> <span class="gridlove-sidebar-action"> <i class="fa fa-bars"></i> </span></li></ul></div></div><div id="content" class="gridlove-site-content container gridlove-sidebar-none"><div class="row"><div class="gridlove-content"><div class="gridlove-box box-vm box-inner-p"><nav class="woocommerce-breadcrumb"><a href="https://maemoderators.co.uk">Home</a>&nbsp;&#47;&nbsp;<a href="https://maemoderators.co.uk/shop/">Shop</a>&nbsp;&#47;&nbsp;Page 2</nav><header class="woocommerce-products-header"><h1 class="woocommerce-products-header__title page-title">Shop</h1></header><div class="woocommerce-notices-wrapper"></div><p class="woocommerce-result-count"> Showing 11&ndash;12 of 12 results</p><form class="woocommerce-ordering" method="get"> <select name="orderby" class="orderby" aria-label="Shop order"><option value="menu_order"  selected='selected'>Default sorting</option><option value="popularity" >Sort by popularity</option><option value="date" >Sort by latest</option><option value="price" >Sort by price: low to high</option><option value="price-desc" >Sort by price: high to low</option> </select> <input type="hidden" name="paged" value="1" /></form><ul class="products columns-4"><li class="product type-product post-1627 status-publish first instock product_cat-service-replacements has-post-thumbnail taxable shipping-taxable purchasable product-type-simple"> <a href="https://maemoderators.co.uk/product/replacement-moderator-bush/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><noscript><img width="300" height="300" src="https://maemoderators.co.uk/wp-content/uploads/2019/10/WhatsApp-Image-2019-10-11-at-13.42.15-300x300.jpeg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://maemoderators.co.uk/wp-content/uploads/2019/10/WhatsApp-Image-2019-10-11-at-13.42.15-300x300.jpeg 300w, https://maemoderators.co.uk/wp-content/uploads/2019/10/WhatsApp-Image-2019-10-11-at-13.42.15-150x150.jpeg 150w, https://maemoderators.co.uk/wp-content/uploads/2019/10/WhatsApp-Image-2019-10-11-at-13.42.15-100x100.jpeg 100w" sizes="(max-width: 300px) 100vw, 300px" /></noscript><img width="300" height="300" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20300%20300%22%3E%3C/svg%3E' data-src="https://maemoderators.co.uk/wp-content/uploads/2019/10/WhatsApp-Image-2019-10-11-at-13.42.15-300x300.jpeg" class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" data-srcset="https://maemoderators.co.uk/wp-content/uploads/2019/10/WhatsApp-Image-2019-10-11-at-13.42.15-300x300.jpeg 300w, https://maemoderators.co.uk/wp-content/uploads/2019/10/WhatsApp-Image-2019-10-11-at-13.42.15-150x150.jpeg 150w, https://maemoderators.co.uk/wp-content/uploads/2019/10/WhatsApp-Image-2019-10-11-at-13.42.15-100x100.jpeg 100w" data-sizes="(max-width: 300px) 100vw, 300px" /><h2 class="woocommerce-loop-product__title">Replacement Moderator bush</h2> <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>10.00</span></span> </a><a href="?add-to-cart=1627" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1627" data-product_sku="" aria-label="Add &ldquo;Replacement Moderator bush&rdquo; to your basket" rel="nofollow">Add to basket</a></li><li class="product type-product post-933 status-publish instock product_cat-over-barrel has-post-thumbnail taxable shipping-taxable purchasable product-type-variable"> <a href="https://maemoderators.co.uk/product/xtreme-i-new-release/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><noscript><img width="300" height="300" src="https://maemoderators.co.uk/wp-content/uploads/2019/04/5988256_orig-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://maemoderators.co.uk/wp-content/uploads/2019/04/5988256_orig-300x300.jpg 300w, https://maemoderators.co.uk/wp-content/uploads/2019/04/5988256_orig-100x100.jpg 100w, https://maemoderators.co.uk/wp-content/uploads/2019/04/5988256_orig-150x150.jpg 150w" sizes="(max-width: 300px) 100vw, 300px" /></noscript><img width="300" height="300" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20300%20300%22%3E%3C/svg%3E' data-src="https://maemoderators.co.uk/wp-content/uploads/2019/04/5988256_orig-300x300.jpg" class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" data-srcset="https://maemoderators.co.uk/wp-content/uploads/2019/04/5988256_orig-300x300.jpg 300w, https://maemoderators.co.uk/wp-content/uploads/2019/04/5988256_orig-100x100.jpg 100w, https://maemoderators.co.uk/wp-content/uploads/2019/04/5988256_orig-150x150.jpg 150w" data-sizes="(max-width: 300px) 100vw, 300px" /><h2 class="woocommerce-loop-product__title">XTREME I NEW RELEASE centre fire .17 to 204 cal</h2> <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>299.00</span> &ndash; <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>309.00</span></span> </a><a href="https://maemoderators.co.uk/product/xtreme-i-new-release/" data-quantity="1" class="button product_type_variable add_to_cart_button" data-product_id="933" data-product_sku="" aria-label="Select options for &ldquo;XTREME I NEW RELEASE centre fire .17 to 204 cal&rdquo;" rel="nofollow">Select options</a></li></ul><nav class="woocommerce-pagination"><ul class='page-numbers'><li><a class="prev page-numbers" href="https://maemoderators.co.uk/shop/page/1/">&larr;</a></li><li><a class="page-numbers" href="https://maemoderators.co.uk/shop/page/1/">1</a></li><li><span aria-current="page" class="page-numbers current">2</span></li></ul></nav></div></div></div></div><div class="float_contact"> <a href="https://maemoderators.co.uk/contact/" class="feedback">Contact Us</a></div><div id="footer" class="gridlove-footer"><div style="font-size: 23px; color: #fc0; line-height: 30px; text-align: center; padding-top: 45px; padding-bottom: 30px;  "> Other Hunting and Shooting Products from JMS Sporting</div><div style="border-top:1px solid #5c5b5b; width:60%; margin:0 auto;"></div><div class="container"><div class="row"style="border-bottom:1px solid #5c5b5b;"><div class="col-lg-4 col-md-6 col-sm-12"><div id="custom_html-4" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><a href="https://www.heck-pack.co.uk/" target="_blank" rel="noopener noreferrer"><div class='sg-title'> Make transporting your shot game easy with the game transporter</div> <noscript><img src="https://maemoderators.co.uk/wp-content/uploads/2019/10/heck-pack-logo.png" class="no-lazyload" /></noscript><img src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="https://maemoderators.co.uk/wp-content/uploads/2019/10/heck-pack-logo.png" class="lazyload no-lazyload" /> </a></div></div></div><div class="col-lg-4 col-md-6 col-sm-12"><div id="custom_html-3" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><a href="https://quickload.co.uk/" target="_blank" rel="noopener noreferrer"><div class='sg-title'> QuickLOAD for all your ballistics analysis</div> <noscript><img src="https://maemoderators.co.uk/wp-content/uploads/2019/04/8083890_orig.png" class="no-lazyload" /></noscript><img src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="https://maemoderators.co.uk/wp-content/uploads/2019/04/8083890_orig.png" class="lazyload no-lazyload" /> </a></div></div></div><div class="col-lg-4 col-md-6 col-sm-12"><div id="custom_html-5" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><a href="https://www.jmssporting.com/" target="_blank" rel="noopener noreferrer"><div class='sg-title'> JMS Sporting</div> <noscript><img src="https://maemoderators.co.uk/wp-content/uploads/2019/09/jmssporting.jpg" class="no-lazyload" /></noscript><img src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="https://maemoderators.co.uk/wp-content/uploads/2019/09/jmssporting.jpg" class="lazyload no-lazyload" /> </a></div></div></div></div></div><div class="gridlove-copyright"><div class="sg-social"> <a href="/contact/" class="fa fa-envelope" target="_blank"></a></div><div class="container"><p style="text-align: center"> <a href="/about/disclaimer-cokkies-privacy-statement/">Privacy and Web Terms Documents</a> - Copyright 2020 MAE / JMS Sporting</p></div></div></div><div class="gridlove-sidebar-action-wrapper"> <span class="gridlove-action-close"><i class="fa fa-times" aria-hidden="true"></i></span><div class="gridlove-sidebar-action-inside"><div class="hidden-lg-up widget gridlove-box widget_nav_menu"><ul id="menu-primary-1" class="gridlove-mobile-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-101"><a href="https://maemoderators.co.uk/">HOME</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-102"><a href="https://maemoderators.co.uk/products/">PRODUCTS</a><ul class="sub-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-115"><a href="https://maemoderators.co.uk/products/mae-over-barrel-moderator/">Over Barrel MAE Moderators</a><ul class="sub-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-118"><a href="https://maemoderators.co.uk/products/mae-over-barrel-moderator/new-t-series-bushless/">The new MAE Moderator T Series Bushless</a><ul class="sub-menu"><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-941"><a href="https://maemoderators.co.uk/product/new-t-series-xtreme-bushless/">New T Series XTREME Bushless centre fire .22cal</a></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-940"><a href="https://maemoderators.co.uk/product/new-t-series-compact-bushless/">New T Series COMPACT Bushless moderator</a></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-939"><a href="https://maemoderators.co.uk/product/42-compact-t-series/">MAE Moderator – 42 Compact T Series</a></li></ul></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-943"><a href="https://maemoderators.co.uk/product/t12-st/">T12 Over Barrel</a></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-942"><a href="https://maemoderators.co.uk/product/t12-scout/">T12 Scout Over Barrel</a></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-944"><a href="https://maemoderators.co.uk/product/xtreme-i-new-release/">XTREME I NEW RELEASE 4</a></li></ul></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-103"><a href="https://maemoderators.co.uk/products/forward-fitting/">Forward Fitting MAE Moderators</a><ul class="sub-menu"><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-949"><a href="https://maemoderators.co.uk/product/6mm-30-st/">6MM 30STS</a></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-948"><a href="https://maemoderators.co.uk/product/224-st/">224 STS</a></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-947"><a href="https://maemoderators.co.uk/product/22-wm-st/">22 WM STS</a></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-946"><a href="https://maemoderators.co.uk/product/lr-22-st/">LR 22 STS</a></li><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-945"><a href="https://maemoderators.co.uk/product/lr-22-ab/">MAE Moderator – Mighty mouse LR 22 AB</a></li></ul></li><li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-1634"><a href="https://maemoderators.co.uk/product-category/service-replacements/">Service &#038; Replacements</a><ul class="sub-menu"><li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-1635"><a href="https://maemoderators.co.uk/product/replacement-moderator-bush/">Replacement Moderator bush</a></li></ul></li></ul></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-92"><a href="https://maemoderators.co.uk/about/">ABOUT</a><ul class="sub-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93"><a href="https://maemoderators.co.uk/about/benefits/">Benefits</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96"><a href="https://maemoderators.co.uk/about/technology/">Technology</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95"><a href="https://maemoderators.co.uk/about/research-development/">Research &#038; Development</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-94"><a href="https://maemoderators.co.uk/about/disclaimer-cookies-privacy-statement/">Disclaimer, Cookies &#038; Privacy Statement</a></li></ul></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99"><a href="https://maemoderators.co.uk/faq/">FAQ</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124"><a href="https://maemoderators.co.uk/warranty-registration/">WARRANTY REGISTRATION</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-100"><a href="https://maemoderators.co.uk/gallery/">MAE Moderator – GALLERY</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98"><a href="https://maemoderators.co.uk/contact/">CONTACT</a></li></ul></div></div></div><div class="gridlove-sidebar-action-overlay"></div> <script async type="text/javascript" src="//static.klaviyo.com/onsite/js/klaviyo.js?company_id=Q44MNE"></script> <script type="text/javascript">if ("") {
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
        }</script> <script type="application/ld+json">{"@context":"https:\/\/schema.org\/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"name":"Home","@id":"https:\/\/maemoderators.co.uk"}},{"@type":"ListItem","position":2,"item":{"name":"Shop","@id":"https:\/\/maemoderators.co.uk\/shop\/"}},{"@type":"ListItem","position":3,"item":{"name":"Page 2","@id":"https:\/\/maemoderators.co.uk\/shop\/page\/2\/"}}]}</script><noscript><style>.lazyload{display:none;}</style></noscript><script data-noptimize="1">window.lazySizesConfig=window.lazySizesConfig||{};window.lazySizesConfig.loadMode=1;</script><script async data-noptimize="1" src='https://maemoderators.co.uk/wp-content/plugins/autoptimize/classes/external/js/lazysizes.min.js?ao_version=2.7.2'></script> <script type="text/javascript">var c = document.body.className;
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
		})(jQuery);</script> <script type='text/javascript'>var leadin_wordpress = {"userRole":"visitor","pageType":"archive","leadinPluginVersion":"7.32.6"};</script> <script async defer id="hs-script-loader" type='text/javascript' src='//js.hs-scripts.com/6171576.js?integration=WordPress'></script> <script type='text/javascript'>var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};</script> <script type='text/javascript'>var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_666d458f07fc146968783a0db5ed643d","fragment_name":"wc_fragments_666d458f07fc146968783a0db5ed643d","request_timeout":"5000"};</script> <script type='text/javascript'>lazySizes.cfg.nativeLoading={setLoadingAttribute:false,disableListeners:{scroll:true}};lazySizes.init();</script> <script type='text/javascript'>var mailchimp_public_data = {"site_url":"https:\/\/maemoderators.co.uk","ajax_url":"https:\/\/maemoderators.co.uk\/wp-admin\/admin-ajax.php","language":"en"};</script> <script type='text/javascript'>var gridlove_js_settings = {"rtl_mode":"","header_sticky":"","header_sticky_offset":"10","header_sticky_up":"1","logo":"https:\/\/maemoderators.co.uk\/wp-content\/uploads\/2019\/04\/1394018658.png","logo_retina":"https:\/\/maemoderators.co.uk\/wp-content\/uploads\/2019\/04\/1394018658.png","logo_mini":"https:\/\/maemoderators.co.uk\/wp-content\/uploads\/2019\/04\/1394018658.png","logo_mini_retina":"https:\/\/maemoderators.co.uk\/wp-content\/uploads\/2019\/04\/1394018658.png","gridlove_gallery":"1"};</script> <script type='text/javascript'>var wcPvJson = {"phoneValidatorName":"_wc_pv_phone_validator","phoneValidatorErrName":"_wc_pv_phone_validator_err","parentPage":".woocommerce-checkout","currentPage":"checkout","utilsScript":"https:\/\/maemoderators.co.uk\/wp-content\/plugins\/woo-phone-validator\/assets\/vendor\/js\/utils.js"};</script>  <script type="text/javascript">jQuery(function($) { 

			ga( 'ec:addImpression', {
				'id': '1627',
				'name': 'Replacement Moderator bush',
				'category': 'Service &amp; Replacements',
				'list': 'Product List',
				'position': '1'
			} );
		


			$( '.products .post-1627 a' ).click( function() {
				if ( true === $(this).hasClass( 'add_to_cart_button' ) ) {
					return;
				}

				ga( 'ec:addProduct', {
					'id': '1627',
					'name': 'Replacement Moderator bush',
					'category': 'Service &amp; Replacements',
					'position': '1'
				});

				ga( 'ec:setAction', 'click', { list: 'Product List' });
				ga( 'send', 'event', 'UX', 'click', ' Product List' );
			});
		


			ga( 'ec:addImpression', {
				'id': '933',
				'name': 'XTREME I NEW RELEASE centre fire .17 to 204 cal',
				'category': 'Over Barrel',
				'list': 'Product List',
				'position': '2'
			} );
		


			$( '.products .post-933 a' ).click( function() {
				if ( true === $(this).hasClass( 'add_to_cart_button' ) ) {
					return;
				}

				ga( 'ec:addProduct', {
					'id': '933',
					'name': 'XTREME I NEW RELEASE centre fire .17 to 204 cal',
					'category': 'Over Barrel',
					'position': '2'
				});

				ga( 'ec:setAction', 'click', { list: 'Product List' });
				ga( 'send', 'event', 'UX', 'click', ' Product List' );
			});
		


					$( '.add_to_cart_button:not(.product_type_variable, .product_type_grouped)' ).click( function() {
						ga( 'ec:addProduct', {'id': ($(this).data('product_sku')) ? ($(this).data('product_sku')) : ('#' + $(this).data('product_id')),'quantity': $(this).data('quantity')} );
						ga( 'ec:setAction', 'add' );
						ga( 'send', 'event', 'UX', 'click', 'add to cart' );
					});
				

ga( 'send', 'pageview' ); 
 });</script> <div id="cookie-notice" role="banner" class="cookie-notice-hidden cookie-revoke-hidden cn-position-bottom" aria-label="Cookie Notice" style="background-color: rgba(0,0,0,1);"><div class="cookie-notice-container" style="color: #fff;"><span id="cn-notice-text" class="cn-text-container">We use cookies to ensure that we give you the best experience on our website. If you continue to use this site we will assume that you are happy with it.</span><span id="cn-notice-buttons" class="cn-buttons-container"><a href="#" id="cn-accept-cookie" data-cookie-set="accept" class="cn-set-cookie cn-button bootstrap button" aria-label="Ok">Ok</a></span><a href="javascript:void(0);" id="cn-close-notice" data-cookie-set="accept" class="cn-close-icon" aria-label="Ok"></a></div></div> <script type="text/javascript">jQuery('#tab-description > div:not(.vc_row )').remove();</script> <script defer src="https://maemoderators.co.uk/wp-content/cache/autoptimize/js/autoptimize_9d66ac91d72b203ab64bbba9b091f2de.js"></script></body></html>
<!-- Cache served by breeze CACHE - Last modified: Mon, 01 Jun 2020 15:23:42 GMT -->
";s:7:"headers";a:3:{i:0;a:2:{s:4:"name";s:14:"Content-Length";s:5:"value";i:48301;}i:1;a:2:{s:4:"name";s:12:"Content-Type";s:5:"value";s:24:"text/html; charset=utf-8";}i:2;a:2:{s:4:"name";s:13:"Last-Modified";s:5:"value";s:29:"Mon, 01 Jun 2020 15:23:42 GMT";}}}