<?php
declare(strict_types=1);
require_once dirname(__DIR__, 2) . '/base-url.php';
gy_start_output_rewrite();
?>
<!DOCTYPE html><html lang="en" class="backgroundblendmode"><head><base href="__GY_BASE__/">
<!-- begin spin_special_output(head_start) -->
<script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/MHBiAvbtvk5Wb2eTZHoP1dUd/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-sqowHdlB0Wd7Pyivp8HlgVSUp0y72f9c+AA/LnYmxQ3ftGNyujn1FRgphnO7e4Oo" nonce="MjEyMDM5Nzc0YTljZTM2ZmQzMWE1ZjEzNjU3YWQ3ZTg1ODhlM2I1Mw=="></script><script type="text/javascript" wd_script_id="view_printable_script" nonce="MjEyMDM5Nzc0YTljZTM2ZmQzMWE1ZjEzNjU3YWQ3ZTg1ODhlM2I1Mw==">
	function view_printable() {
		var loc = window.location;
		var sep = (loc.search == "") ? "?" : "&";
		var url = loc.protocol+"//"+loc.host+loc.pathname+loc.search+sep+"printable"+loc.hash;
		window.open(url, "_blank", "");
	}
</script>
<link href="assets/news.goodyear.com/thirdparty/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" wd_script_id="font-awesome.min.css">
<style type="text/css" wd_script_id="toolbar_style" nonce="MjEyMDM5Nzc0YTljZTM2ZmQzMWE1ZjEzNjU3YWQ3ZTg1ODhlM2I1Mw==">
			div.wd_toolbar {
				border-top: 1px solid #cccccc;
				border-bottom: 1px solid #cccccc;
				margin: 15px 0px 15px 0px;
				padding: 5px;
				line-height: 1;
			}
			div.wd_toolbar-page {
				clear: both;
			}
			div.wd_toolbar ul.wd_tools {
				display: inline-block;
				width: 100%;
				margin: 0;
				padding: 5px 0;
			}
			div.wd_toolbar ul.wd_tools li.wd_tool {
				display: block;
				list-style-type: none;
				margin-right: 5px;
				padding: 0;
				float: right;
			}
			span.wd_tool_icon > a:link,
			span.wd_tool_icon > a:visited {
				border-radius: 2px;
				display: inline-block;
				width: 30px;
				height: 30px;
				box-sizing: border-box;
				margin: 0;
				padding: 7px;
				font-size: 16px;
				line-height: 1;
				text-align: center;
				color: #ffffff;
				background-color: #767676;
			} 
			span.wd_tool_icon > a:hover {
				color: #ffffff;
				background-color: #666666;
				text-decoration: none;
			}
			div.wd_toolbar ul.wd_tools li.wd_tool-addthis {
				float: left;
			}
		</style>
<link href="assets/news.goodyear.com/css/wd_wcag.css" type="text/css" rel="stylesheet" wd_script_id="wd_wcag.css">
<script type="text/javascript" src="assets/news.goodyear.com/js/jquery-webdriver.js" wd_script_id="jquery-webdriver.js" nonce="MjEyMDM5Nzc0YTljZTM2ZmQzMWE1ZjEzNjU3YWQ3ZTg1ODhlM2I1Mw=="></script>
<script type="text/javascript" src="assets/news.goodyear.com/js/webdriver.js" wd_script_id="webdriver.js" nonce="MjEyMDM5Nzc0YTljZTM2ZmQzMWE1ZjEzNjU3YWQ3ZTg1ODhlM2I1Mw=="></script>
<script type="text/javascript" src="assets/news.goodyear.com/js/wd_resize.js" wd_script_id="wd_resize.js" nonce="MjEyMDM5Nzc0YTljZTM2ZmQzMWE1ZjEzNjU3YWQ3ZTg1ODhlM2I1Mw=="></script>
<script type="text/javascript" wd_script_id="format_news_script" nonce="MjEyMDM5Nzc0YTljZTM2ZmQzMWE1ZjEzNjU3YWQ3ZTg1ODhlM2I1Mw==">
(function($) {
	webDriver.formatNews = function() {
		var $news = $(this);
		var print_url = $news.attr("wd_print_url");
		$news.find("table").each(function() {
			var $table = $(this);
			var $parent = $table.parent();
			if ($parent.innerWidth() < $table.outerWidth()) {
				if ($parent.hasClass("wd_news_table")) {
					$parent.find(".fullscreen-button").show();
				} else {
					var $btn = $("<button>View News Release Full Screen</button>")
						.addClass("fullscreen-button")
						.on("click", function() {
							if (print_url)
								window.open(print_url, "_blank", "");
							else
								view_printable();
						})
					;

					var $div = $("<div></div>)")
						.addClass("wd_news_table")
						.css("overflow-x", "auto")
						.append($btn)
					;

					$table.replaceWith($div);
					$div.append($table);
				}
			} else {
				if ($parent.hasClass("wd_news_table"))
					$parent.find(".fullscreen-button").hide();
			}
		});
	}
})(webDriver.jQuery);
</script>
<style type="text/css" wd_script_id="template_list_inline_style" nonce="MjEyMDM5Nzc0YTljZTM2ZmQzMWE1ZjEzNjU3YWQ3ZTg1ODhlM2I1Mw==">
						ul.wd_layout-inline {
							display: inline-block;
							list-style: none;
							padding: 0;
							margin: 0;
						}
						ul.wd_layout-inline li {
							display: inline-block;
							padding: 0;
							margin: 0 0 0 1em;
						}
					</style>
<style type="text/css" wd_script_id="template detail:newsfeed_releases:site style" nonce="MjEyMDM5Nzc0YTljZTM2ZmQzMWE1ZjEzNjU3YWQ3ZTg1ODhlM2I1Mw==">.wd_title {
	font-size: 1.3em;
	font-weight: bold;
}
.wd_subtitle {
	font-weight: bold;
}
table.wd_extimagetable {
	border-style: none; 
	border-spacing:0px;
	clear: right; 
	float: right; 
}
td.wd_extimagecell {
	text-align: right; 
	margin: 0px 0px 5px 5px;
	padding:0px;
}
td.wd_extimagecell img {
	padding-left:10px;
	padding-bottom:10px;
	border-style: none; 
}
blockquote.wd_pullquote {
	font-style: italic;
	width:200px;
	margin:0 0 20px 20px;
	line-height: 1.8em;
	float: right;
	clear: right;
}
blockquote.wd_pullquote:before {
	content: "“ ";
	font-size: xx-large;
}
blockquote.wd_pullquote:after {
	content: " ”";
	font-size: xx-large;
	float: right;
}
.fullscreen-button {
	border: 1px solid #d1d1d1;
	background: #e3e3e3 url(images/webdriver/view_full_screen_button_background.png) no-repeat;
	padding: 3px 3px 3px 30px;
	margin: 5px 0px 5px 0px;
	color: #727272;
	width: 220px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	cursor: pointer;
}
.wd_contact {
	margin: 1em 0;
}
.wd_release_data {
	margin: 1em 0;
}
.wd_caption {
	text-align: center;
	font-size: 0.72em;
	font-style: italic;
	margin: 1em 0 0 0;
}
</style>
<style type="text/css" wd_script_id="template teaser_list:newsfeed_releases:site style" nonce="MjEyMDM5Nzc0YTljZTM2ZmQzMWE1ZjEzNjU3YWQ3ZTg1ODhlM2I1Mw==">.wd_newsfeed_releases-teaser .wd_date {
	font-weight: bold;
}
.wd_newsfeed_releases-teaser .wd_title {
	font-weight: bold;
}
.wd_newsfeed_releases-teaser .subscribe_link {
	margin-bottom: 1em;
}
.wd_newsfeed_releases-teaser span.wd_subscribe_email-icon {  
	font-size: 1.2em; 
}</style>
<style type="text/css" wd_script_id="featureboxes_style" nonce="MjEyMDM5Nzc0YTljZTM2ZmQzMWE1ZjEzNjU3YWQ3ZTg1ODhlM2I1Mw==">
		.wd_featurebox_icon {
			display: inline;
		}
		.wd_featurebox_icon img {
			vertical-align: middle;
		}
		div.wd_featurebox_group div.wd_tabs_wrapper {
			border: none;
			border-bottom: 1px solid #E1E1E1;
			padding: 0 0 5px 0;
		}
		div.wd_featurebox_group div.wd_featurebox {
			border: none;
			padding: 8px 0 0 0;
		}
		div.wd_featurebox_group li.wd_tab {
			float: none;
			color: #666666;
		}
		div.wd_featurebox_group li.wd_tab-active {
			border: none;
			background-color: transparent;
			color: #000000;
			font-weight: bold;
		}
		div.wd_featurebox_group li.wd_tab-inactive {
			cursor: auto;
		}
	</style>

<!-- end spin_special_output(head_start) -->

	<!-- OneTrust Cookies Consent Notice start for news.goodyear.com -->
	
	

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">

	<meta name="template" content="page-content">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google Tag Manager -->
	
	<!-- End Google Tag Manager -->

	<link rel="shortcut icon" href="https://corporate.goodyear.com/content/dam/goodyear-corp/component-images/brand/favicon.ico">

	

	<link rel="stylesheet" href="assets/news.goodyear.com/css/clientlib-base.lc-fdb3112dc1a6d8539c965b7c1031b6a2-lc.min.css" type="text/css">

	<link rel="stylesheet" href="assets/news.goodyear.com/css/clientlib-site.lc-6594afbb1fbdfcf62d7a59e864508bb1-lc.min.css" type="text/css">

	<link rel="stylesheet" href="https://use.typekit.net/wfl5xgw.css">

			<title>Goodyear Launches Global Racing Organization to Enhance Motorsport Strategy Worldwide - Sep 30, 2025</title>
		
 <meta name="keywords" content="">
 <meta name="description" content="Find breaking Goodyear news and press releases.">
 <meta name="twitter:card" content="summary">
 <meta name="twitter:title" content="Goodyear Launches Global Racing Organization to Enhance Motorsport Strategy Worldwide">
 <meta name="twitter:description" content="The Goodyear Tire &amp; Rubber Company (NASDAQ: GT) today announced the formation of its new Global Racing organization, a strategic initiative that unifies all motorsport operations under a single...">
 <meta name="twitter:image" content="https://mma.prnewswire.com/media/95226/goodyear_tire_and_rubber_company_logo.jpg?p=twitter">
 <meta property="og:site_name" content="Media | Goodyear Corporate">
 <meta property="og:url" content="2025-09-30-Goodyear-Launches-Global-Racing-Organization-to-Enhance-Motorsport-Strategy-Worldwide/index.html">
 <meta property="og:title" content="Goodyear Launches Global Racing Organization to Enhance Motorsport Strategy Worldwide">
 <meta property="og:description" content="The Goodyear Tire &amp; Rubber Company (NASDAQ: GT) today announced the formation of its new Global Racing organization, a strategic initiative that unifies all motorsport operations under a single...">
 <meta name="image" property="og:image" content="https://mma.prnewswire.com/media/95226/goodyear_tire_and_rubber_company_logo.jpg?p=facebook">
	
	<link href="assets/news.goodyear.com/thirdparty/font-awesome/css/all.min.css" type="text/css" rel="stylesheet" wd_script_id="all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/news.goodyear.com/css/template.css">
	<link rel="stylesheet" type="text/css" href="assets/news.goodyear.com/css/wdcontent.css">
	<link rel="stylesheet" type="text/css" href="assets/news.goodyear.com/css/megamenu.css">
	<link rel="alternate" href="index.html" type="application/rss+xml" title="News | Goodyear Corporate">

<!-- begin spin_special_output(head_end) -->
<!-- OneTrust Cookies Consent Notice start -->
<script src="" type="text/javascript" charset="UTF-8"></script>
<script type="text/javascript">
	function OptanonWrapper() { }
</script>
<!-- OneTrust Cookies Consent Notice end -->

<link rel="canonical" href="2025-09-30-Goodyear-Launches-Global-Racing-Organization-to-Enhance-Motorsport-Strategy-Worldwide/index.html">
<!-- end spin_special_output(head_end) -->





































<style id="offline-nav-patch">
  header, header nav, header nav ul, header nav li.offline-mega-li {
    overflow: visible !important;
  }
  li.offline-mega-li { position: relative; }
  .offline-mega-panel {
    display: none;
    position: absolute;
    left: 0;
    top: calc(100% + 8px);
    min-width: 240px;
    background: #fff;
    z-index: 10000;
    padding: 16px 20px;
    border-radius: 8px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
  }
  li.offline-mega-li.offline-mega-open > .offline-mega-panel,
  li.offline-mega-li:focus-within > .offline-mega-panel {
    display: block !important;
  }
  @media (min-width: 768px) {
    li.offline-mega-li:hover > .offline-mega-panel {
      display: block !important;
    }
  }
  .offline-mega-panel ul { list-style: none; margin: 0; padding: 0; }
  .offline-mega-panel li { margin: 0; padding: 0; }
  .offline-mega-panel a {
    display: block;
    padding: 10px 4px;
    color: #1a1a1a;
    text-decoration: none;
    font-size: 14px;
    line-height: 1.4;
  }
  .offline-mega-panel a:hover { color: #004ea8; }
  [class^="icon-"]::before,
  [class*=" icon-"]::before {
    font-family: global-icons !important;
    display: inline-block;
  }
  [class^="icon-"] > span[class*="path"],
  [class*=" icon-"] > span[class*="path"] {
    display: none !important;
  }
  #onetrust-consent-sdk,
  #onetrust-banner-sdk,
  #onetrust-pc-sdk,
  #ot-sdk-btn-floating,
  .onetrust-pc-dark-filter,
  .ot-floating-button,
  .ot-sdk-show-settings {
    display: none !important;
    visibility: hidden !important;
    pointer-events: none !important;
  }
  button[data-qa-id*="find-tires-header"],
  button#g001-search-icon,
  button[data-qa-id*="main-nav-search"],
  button#g001-account-icon,
  button[data-qa-id*="main-nav-my-account"],
  button#g001-cart-icon,
  button[data-qa-id*="mini-cart"] {
    display: none !important;
    visibility: hidden !important;
    pointer-events: none !important;
  }
  #embedded-messaging,
  .embedded-messaging,
  .embeddedMessagingConversationButton,
  .embeddedMessagingConversationButtonWrapper,
  #embeddedMessagingSiteContextFrame,
  #embeddedMessagingLiveRegion {
    display: none !important;
    visibility: hidden !important;
    pointer-events: none !important;
  }
  html {
    --header-stack-height: 156px;
  }
  .swiper.offline-carousel-ready .swiper-wrapper {
    transition: transform 0.35s ease;
  }
  .swiper.offline-carousel-ready .swiper-slide {
    flex-shrink: 0;
  }
</style></head>


<body class="wd_pageid_20295 wd_item_page wd_item_123449 page basicpage  wd_category_783" id="page-2b792b9b24" data-cmp-data-layer-enabled="">

	<!-- Google Tag Manager (noscript) -->
	
	<!-- End Google Tag Manager (noscript) -->

	<script>
		window.adobeDataLayer = window.adobeDataLayer || [];
		adobeDataLayer.push({
			page: JSON.parse("{\x22page\u002D2b792b9b24\x22:{\x22@type\x22:\x22goodyear\u002Dcorp\/components\/page\x22,\x22repo:modifyDate\x22:\x222021\u002D08\u002D10T05:21:43Z\x22,\x22dc:title\x22:\x22Media | Goodyear Corporate\x22,\x22dc:description\x22:\x22Get up\u002Dto\u002Ddate company information and the latest on Goodyear innovation.\x22,\x22xdm:template\x22:\x22\/conf\/goodyear\u002Dcorp\/settings\/wcm\/templates\/page\u002Dcontent\x22,\x22xdm:language\x22:\x22en\x22,\x22xdm:tags\x22:[],\x22repo:path\x22:\x22\/content\/goodyear\u002Dcorp\/us\/en\/media.html\x22}}"),
			event: 'cmp:show',
			eventInfo: {
				path: 'page.page\u002D2b792b9b24'
			}
		});
	</script>


	<div class="root container responsivegrid" id="root">
		<div id="container-77a27e2a88" class="cmp-container">

			<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

				<!-- NAV -->
				<div class="experiencefragment aem-GridColumn aem-GridColumn--default--12">
					<div id="experiencefragment-1a39e84c7d" class="cmp-experiencefragment cmp-experiencefragment--header">

						<div id="container-fb682c1094" class="cmp-container">



							<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

								<div class="button cmp-button-right cmp-button--header-black-banner aem-GridColumn--default--none aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--offset--default--0">


									<a id="button-0447fb2438" class="cmp-button" href="index.html" data-cmp-clickable="" data-cmp-data-layer="{&quot;button-0447fb2438&quot;:{&quot;@type&quot;:&quot;goodyear-corp/components/button&quot;,&quot;repo:modifyDate&quot;:&quot;2024-06-05T19:33:36Z&quot;,&quot;dc:title&quot;:&quot;All Goodyear Sites&quot;,&quot;xdm:linkURL&quot;:&quot;index.html?expand=international">


										<span class="cmp-button__text">
											<img src="assets/news.goodyear.com/images/wing.png" alt="">
											<span class="hover-underline">All Goodyear Sites</span>
										</span>
										<i class="cta-arrow-icon" aria-hidden="true"></i>
									</a>





								</div>
								<div class="megamenu aem-GridColumn aem-GridColumn--default--12">



									<div class="cmp-mega-menu">
										<div class="cmp-mega-menu__container">
											<div class="cmp-mega-menu__logo-container">
												<a class="cmp-brandlogo" href="index.html" aria-label="Goodyear Corporate Logo">
													<span class="icon-goodyear-logo">
														<img src="assets/news.goodyear.com/images/logo.svg" alt="">
													</span>
												</a>
											</div>
											<div class="cmp-mega-menu__hamberger cmp-mega-menu__hamberger-open cmp-mega-menu__hamberger-close">
											</div> <a href="#" class="cross" style="display: none;"></a>
											<ul class="cmp-mega-menu__link-container ">
												<li class="cmp-mega-menu__item ">
													<a href="#" class="cmp-mega-menu__link desktop" data-link="Company" id="megaMenuLink">Company</a>
													<a href="index.html" class="cmp-mega-menu__link mobile" data-link="Company" id="megaMenuLink">Company</a>
												</li>

												<li class="cmp-mega-menu__item ">
													<a href="#" class="cmp-mega-menu__link desktop" data-link="Commitments" id="megaMenuLink">Commitments</a>
													<a href="index.html" class="cmp-mega-menu__link mobile" data-link="Commitments" id="megaMenuLink">Commitments</a>
												</li>

												<li class="cmp-mega-menu__item ">
													<a href="#" class="cmp-mega-menu__link desktop" data-link="Products &amp; Innovations" id="megaMenuLink">Products
														&amp; Innovations</a>
													<a href="index.html" class="cmp-mega-menu__link mobile" data-link="Products &amp; Innovations" id="megaMenuLink">Products
														&amp; Innovations</a>
												</li>

												<li class="cmp-mega-menu__item ">
													<a href="#" class="cmp-mega-menu__link desktop" data-link="Investors" id="megaMenuLink">Investors</a>
													<a href="index.html" class="cmp-mega-menu__link mobile" data-link="Investors" id="megaMenuLink">Investors</a>
												</li>

												<li class="cmp-mega-menu__item ">
													<a href="#" class="cmp-mega-menu__link desktop" data-link="Newsroom" id="megaMenuLink">Newsroom</a>
													<a href="index.html" class="cmp-mega-menu__link mobile" data-link="Newsroom" id="megaMenuLink">Newsroom</a>
												</li>
											</ul>

											<div class="shopping">
												<span class="gy-megamenu-search" id="gy-menu-search"></span>
												<a href="index.html" class="shopingHeader" data-link="index.html" id="shoppingLink">Shop</a>
											</div>
										</div>
										<div class="cmp-sub-nav" id="mySidenav">
											<div class="cmp-sub-nav__item" data-target="Company" style="display:none;">
												<div class="cmp-sub-nav__background">
													<a href="index.html" class="cmp-sub-nav__content">
														<div class="main_heading">Company</div>
														<p>At Goodyear, innovation isn't just what we do-it's who we
															are. Learn about what drives us and where we're headed next.
														</p>
													</a>
													<div class="cmp-sub-nav__container">
														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Strategy</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Working at Goodyear</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Awards</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Blimp</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Leadership</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Locations</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Contact Us</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">History</div>
														</a>
													</div>
												</div>
												<a href="#" class="cmp-sub-nav__close"></a>
											</div>

											<div class="cmp-sub-nav__item" data-target="Commitments" style="display:none;">
												<div class="cmp-sub-nav__background">
													<a href="index.html" class="cmp-sub-nav__content">
														<div class="main_heading">Commitments</div>
														<p>At Goodyear, we are focused on creating value for all our
															stakeholders—working with our customers to help them meet their
															own sustainability goals, reducing our impact on the
															environment, educating and engaging our associates in our
															sustainability journey and giving back to the community.</p>
													</a>
													<div class="cmp-sub-nav__container">
														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Acting with Integrity</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Sourcing Sustainably</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Operating Responsibly</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Engaging Associates &amp; Communities
															</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Report &amp; Policies</div>
														</a>

														<a href="https://secure.ethicspoint.com/domain/media/en/gui/39890/index.html" target="_blank" class="cmp-sub-nav__link">
															<div class="sub_heading">Integrity Hotline</div>
														</a>
													</div>
												</div>
												<a href="#" class="cmp-sub-nav__close"></a>
											</div>

											<div class="cmp-sub-nav__item" data-target="Products &amp; Innovations" style="display:none;">
												<div class="cmp-sub-nav__background">
													<a href="index.html" class="cmp-sub-nav__content">
														<div class="main_heading">Products &amp; Innovations</div>
														<p>Goodyear has always been at the forefront of tire technology,
															continuously producing products, services and solutions that
															enable mobility across various industries worldwide.</p>
													</a>
													<div class="cmp-sub-nav__container">
														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Tires</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Brands</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Services &amp; Solutions</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Technologies</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Collaborations</div>
														</a>
													</div>
												</div>
												<a href="#" class="cmp-sub-nav__close"></a>
											</div>

											<div class="cmp-sub-nav__item" data-target="Investors" style="display:none;">
												<div class="cmp-sub-nav__background">
													<a href="index.html" class="cmp-sub-nav__content">
														<div class="main_heading">Investors</div>
														<p>Goodyear has been an industry leader for more than 125 years, but
															we believe our best is yet to come.</p>
														<p> </p>
														<p> </p>
													</a>
													<div class="cmp-sub-nav__container">
														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Financial News</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Events &amp; Presentations</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Reports &amp; Filings</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Stock Information</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Governance</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Investor Contacts</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Investor Alerts</div>
														</a>
													</div>
												</div>
												<a href="#" class="cmp-sub-nav__close"></a>
											</div>

											<div class="cmp-sub-nav__item" data-target="Newsroom" style="display:none;">
												<div class="cmp-sub-nav__background">
													<a href="index.html" class="cmp-sub-nav__content">
														<div class="main_heading">Newsroom</div>
														<p>Get up-to-date company information and the latest in Goodyear
															innovation.</p>
													</a>
													<div class="cmp-sub-nav__container">
														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">All News</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">News Alerts</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Media Contacts</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link">
															<div class="sub_heading">Media Gallery</div>
														</a>

													</div>
												</div>
												<a href="#" class="cmp-sub-nav__close"></a>
											</div>
										</div>
										<ul class="cmp-sub-nav-mobile" id="mySidenav" style="display: none;">
											<li class="cmp-sub-nav__item cmp-sub-nav__background cmp-megamenu-mobile" data-target="Company">

												<a href="index.html" class="cmp-sub-nav__content cmp-sub-nav__content_mobile ">
													<div class="main_heading_mobile">Company</div>


												</a>

												<span class="cmp-content-open"></span>

												<span class="cmp-content-close" style="display: none;"></span>
												<!-- child Elements -->
												<ul class="cmp-sub-mobile" style="display:none;">
													<li class="cmp-sub-nav__container cmp-sub-nav__container_mobile">
														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Strategy</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Working at Goodyear</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Awards</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Blimp</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Leadership</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Locations</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Contact Us</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">History</div>
														</a>
													</li>
												</ul>

												<a href="#" class="cmp-sub-nav__close"></a>
											</li>

											<li class="cmp-sub-nav__item cmp-sub-nav__background cmp-megamenu-mobile" data-target="Commitments">

												<a href="index.html" class="cmp-sub-nav__content cmp-sub-nav__content_mobile ">
													<div class="main_heading_mobile">Commitments</div>


												</a>

												<span class="cmp-content-open"></span>

												<span class="cmp-content-close" style="display: none;"></span>
												<!-- child Elements -->
												<ul class="cmp-sub-mobile" style="display:none;">
													<li class="cmp-sub-nav__container cmp-sub-nav__container_mobile">
														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Acting with Integrity</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Sourcing Sustainably</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Operating Responsibly</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Engaging Associates &amp;
																Communities</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Report &amp; Policies</div>
														</a>

														<a href="https://secure.ethicspoint.com/domain/media/en/gui/39890/index.html" target="_blank" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Integrity Hotline</div>
														</a>
													</li>
												</ul>

												<a href="#" class="cmp-sub-nav__close"></a>
											</li>

											<li class="cmp-sub-nav__item cmp-sub-nav__background cmp-megamenu-mobile" data-target="Products &amp; Innovations">

												<a href="index.html" class="cmp-sub-nav__content cmp-sub-nav__content_mobile ">
													<div class="main_heading_mobile">Products &amp; Innovations</div>


												</a>

												<span class="cmp-content-open"></span>

												<span class="cmp-content-close" style="display: none;"></span>
												<!-- child Elements -->
												<ul class="cmp-sub-mobile" style="display:none;">
													<li class="cmp-sub-nav__container cmp-sub-nav__container_mobile">
														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Tires</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Brands</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Services &amp; Solutions</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Technologies</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Collaborations</div>
														</a>
													</li>
												</ul>

												<a href="#" class="cmp-sub-nav__close"></a>
											</li>

											<li class="cmp-sub-nav__item cmp-sub-nav__background cmp-megamenu-mobile" data-target="Investors">

												<a href="index.html" class="cmp-sub-nav__content cmp-sub-nav__content_mobile ">
													<div class="main_heading_mobile">Investors</div>


												</a>

												<span class="cmp-content-open"></span>

												<span class="cmp-content-close" style="display: none;"></span>
												<!-- child Elements -->
												<ul class="cmp-sub-mobile" style="display:none;">
													<li class="cmp-sub-nav__container cmp-sub-nav__container_mobile">
														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Financial News</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Events &amp; Presentations</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Reports &amp; Filings</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Stock Information</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Governance</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Investor Contacts</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Investor Alerts</div>
														</a>
													</li>
												</ul>

												<a href="#" class="cmp-sub-nav__close"></a>
											</li>

											<li class="cmp-sub-nav__item cmp-sub-nav__background cmp-megamenu-mobile" data-target="Newsroom">

												<a href="index.html" class="cmp-sub-nav__content cmp-sub-nav__content_mobile ">
													<div class="main_heading_mobile">Newsroom</div>


												</a>

												<span class="cmp-content-open"></span>

												<span class="cmp-content-close" style="display: none;"></span>
												<!-- child Elements -->
												<ul class="cmp-sub-mobile" style="display:none;">
													<li class="cmp-sub-nav__container cmp-sub-nav__container_mobile">
														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">All News</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">News Alerts</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Media Contacts</div>
														</a>

														<a href="index.html" class="cmp-sub-nav__link cmp-sub-nav-link-mobile">
															<div class="sub_heading_mobile">Media Gallery</div>
														</a>

													</li>
												</ul>

												<a href="#" class="cmp-sub-nav__close"></a>
											</li>
										</ul>

									</div>
								</div>


							</div>

						</div>

					</div>

				</div>
				<!-- NAV END -->

				<div class="teaser cmp-teaser--hero-banner aem-GridColumn aem-GridColumn--default--12">


					<div class="breadcrumb">
	<a href="index.html">Newsroom</a>
<a href="index.html" target="_self" class="nav">All News</a>
<span class="wd_current-page">News</span></div>
	
					<div class="wd_home_hero cmp-container--max-width">

												<div class="wd_hero-left" style="background-image: url(/image/goodyear-blimp-desktop.png);"></div>
						<div class="wd_hero-right">
							<div class="header-wrap">
							<div class="header-title">
								News							</div>
							<div class="header-desc">
								<p>Browse Goodyear’s latest news releases and sign up to receive updates for breaking Goodyear news.</p>
							</div>
							<div class="wd_date">Sep 30, 2025</div><div class="wd_title wd_language_left">Goodyear Launches Global Racing Organization to Enhance Motorsport Strategy Worldwide</div></div>
						</div>
						
					</div>
					
				</div>

				<!-- MAIN CONTENT -->

				<main class="container responsivegrid aem-GridColumn aem-GridColumn--default--12">		


									<div class="wd_content cmp-container--max-width">
																		<div class="wd_content-flex">
						<div id="wd_printable_content" class="fr-view">
<div class="wd_newsfeed_releases-detail">






			
		

			
		

<style type="text/css">


/* Style Definitions */
span.prnews_span
{
font-size:8pt;
font-family:"Arial";
color:black;
}
a.prnews_a
{
color:blue;
}
li.prnews_li
{
font-size:8pt;
font-family:"Arial";
color:black;
}
p.prnews_p
{
font-size:0.62em;
font-family:"Arial";
color:black;
margin:0in;
}

					span.prnews_span{
						font-size:inherit;
						font-family:inherit;
					}
					li.prnews_li{
						font-size: inherit;
						font-family: inherit;           
					}
					p.prnews_p{
						font-size: inherit;
						font-family: inherit;           
					}
				
					div.PRN_ImbeddedAssetReference{
						display: none;
					}
					div[id^="prni_dvprne"]{
						display: none;
					}
				</style>

<div class="wd_body wd_news_body fr-view" wd_resize="formatNews" wd_print_url="2025-09-30-Goodyear-Launches-Global-Racing-Organization-to-Enhance-Motorsport-Strategy-Worldwide/index.html?printable=1">
<p><span class="legendSpanClass"><span class="xn-location">AKRON, Ohio</span></span>, <span class="legendSpanClass"><span class="xn-chron">Sept. 30, 2025</span></span> /<a href="http://www.prnewswire.com/" target="_blank">PRNewswire</a>/ -- The Goodyear Tire &amp; Rubber Company (NASDAQ: GT) today announced the formation of its new Global Racing organization, a strategic initiative that unifies all motorsport operations under a single global structure. This milestone marks the beginning of a new chapter in Goodyear's racing legacy, reinforcing its commitment to innovation, performance and excellence on the track and beyond.</p>

    <div class="PRN_ImbeddedAssetReference" id="DivAssetPlaceHolder1">
                <p>
                        <a href="https://mma.prnewswire.com/media/95226/goodyear_tire_and_rubber_company_logo.html" target="_blank" rel="nofollow">
                    <img src="https://mma.prnewswire.com/media/95226/goodyear_tire_and_rubber_company_logo.jpg" title="The Goodyear Tire &amp; Rubber Company, Akron, Ohio, USA. (PRNewsFoto/Goodyear Tire &amp; Rubber Company)" alt="The Goodyear Tire &amp; Rubber Company, Akron, Ohio, USA. (PRNewsFoto/Goodyear Tire &amp; Rubber Company)">
                        </a>
                </p>

    </div>
<p><span class="xn-person">Xavier Fraipont</span> will lead the newly formed organization as vice president, Global Racing, effective <span class="xn-chron">October 1</span>. Fraipont will guide the team's strategic direction while aligning its efforts with Goodyear's broader product and brand vision. With nearly three decades of experience across Racing and Product Development, Fraipont brings deep industry knowledge and a proven track record in the Goodyear family of brands. His expertise well positions him to evolve and grow our motorsport strategy, unifying our teams supporting NASCAR, NHRA, WEC (LMGT3 class) and BTCC leaders into one cohesive effort.</p>
<p>To foster seamless collaboration between technical innovation and brand strategy, Fraipont will report jointly to <span class="xn-person">Chris Helsel</span>, senior vice president and chief technical officer, and <span class="xn-person">Will Roland</span>, senior vice president and chief marketing officer.</p>
<p>"Goodyear has been synonymous with car racing since the very beginning of our history," said Helsel. "With Xavier's deep expertise and leadership at the helm, we're advancing our commitment to innovation – enhancing performance and elevating our competitive edge worldwide."</p>
<p>Goodyear's motorsport legacy lives on through its role as the exclusive tire supplier for some of the world's most prestigious racing series. At the heart of this legacy is the iconic Eagle tire, a benchmark of performance and reliability that continues to set the standard across diverse racing disciplines.</p>
<p>"Motorsport is a central pillar of our brand strategy," said Roland. "It's where our technology, performance and brand identity converge. The best and fastest tires in the world have Goodyear written all over them, and racing provides the ultimate proving ground - demonstrating the speed, precision and reliability that define our products."</p>
<p>Backed by more than a century of racing heritage, Goodyear Racing is charting a unified, future-focused motorsport strategy designed to fuel innovation, amplify brand impact and drive strategic growth across the company.</p>
<p><b>About The Goodyear Tire &amp; Rubber Company&nbsp;<br></b>Goodyear is one of the world's largest tire companies. It employs about 68,000 people and manufactures its products in 53 facilities in 20 countries around the world. Its two Innovation Centers in <span class="xn-location">Akron, Ohio</span>, and Colmar-Berg, <span class="xn-location">Luxembourg</span>, strive to develop state-of-the-art products and services that set the technology and performance standard for the industry. For more information about Goodyear and its products, go to <a href="index.html" target="_blank" rel="nofollow">www.goodyear.com/corporate</a>.</p>
<p><b>CONTACT:&nbsp;</b><br><span class="xn-person">Sarah Factor</span><br>216-385-3433<br><a href="mailto:Sarah_Factor@goodyear.com" target="_blank" rel="nofollow">Sarah_Factor@goodyear.com</a></p>
<p>&nbsp;</p>





</div>




 
				
			

<ul class="wd_layout-inline wd_category_link_list"><li class="wd_category_link"><a href="index.html">Racing</a></li></ul>
<!-- ITEMDATE: 2025-09-30 08:30:00 EDT -->

</div>
</div><div class="wd_featureboxes_right_side wd_featureboxes-vertical fr-view"><div class="wd_toolbar wd_toolbar-detail"><div class="wd_featurebox_title">Share Article</div><ul class="wd_tools"><li class="wd_tool wd_tool-print"><span class="wd_tool_icon"><a onclick="view_printable(); return false;" rel="nofollow" href="#print" title="Open a printable version of this page"><span class="fa fa-print"></span><span class="wd_sr-only wd_sr-only-focusable">Open a printable version of this page</span></a></span></li><li class="wd_tool wd_tool-email"><span class="wd_tool_icon"><a onclick="window.location.href = 'mailto:?subject=Goodyear%20Launches%20Global%20Racing%20Organization%20to%20Enhance%20Motorsport%20Strategy%20Worldwide%20-%20Sep%2030%2C%202025&amp;body='+encodeURIComponent(window.location.href);return false;" href="#email" title="Email the URL of this page to a friend"><span class="fa fa-envelope"></span><span class="wd_sr-only wd_sr-only-focusable">Email the URL of this page to a friend</span></a></span></li><li class="wd_tool wd_tool-socialshare_linkedin"><span class="wd_tool_icon">
                    <a href="https://www.linkedin.com/" target="_blank" title="Linkedin Share" style="background-color:#0077B5;">
                    <span class="fa fa-linkedin"></span>
		    <span class="wd_sr-only wd_sr-only-focusable">Share this page on LinkedIn</span>
                    </a>
                </span></li><li class="wd_tool wd_tool-socialshare_twitter"><span class="wd_tool_icon">
                    <a href="https://x.com/" target="_blank" title="X Share" style="background-color:#000;">
                    <span class="fa fa-twitter"></span>
		    <span class="wd_sr-only wd_sr-only-focusable">Share this page on X</span>
                    </a>
                </span></li><li class="wd_tool wd_tool-socialshare_facebook"><span class="wd_tool_icon">
                    <a href="https://www.facebook.com/" target="_blank" title="Facebook Share" style="background-color:#4267B2;">
                    <span class="fa fa-facebook"></span>
		    <span class="wd_sr-only wd_sr-only-focusable">Share this page on Facebook</span>
                    </a>
                </span></li></ul></div>
<div id="wd_featurebox-teaser_1379" class="wd_featurebox_container wd_featurebox-teaser"><div class="wd_featurebox_title">More Stories</div><div class="wd_featurebox">
<div class="wd_newsfeed_releases-teaser">
<div class="subscribe_link"><a href="index.html"><span class="wd_subscribe_email-icon fa fa-envelope-o"></span></a> <a href="index.html">News Alerts</a></div>

	
		<a class="wd_link-wrap" href="index.html"><div class="item">
			
			<div class="item-inner">
			<div class="wd_title"><a href="index.html">Goodyear Announces First Quarter 2026 Results</a></div>
			<div class="wd_date">May 6, 2026</div>
</div>
		</div></a>
	
		<a class="wd_link-wrap" href="index.html"><div class="item">
			<div class="wd_thumbnail"><a href="index.html"><img src="https://mma.prnewswire.com/media/2971059/Fast_Is_In_Us___Czinger_Goodyear.jpg?p=thumbnail" border="0"></a></div>
			<div class="item-inner">
			<div class="wd_title"><a href="index.html">Did Someone Say Horsepower? Goodyear Launches Global Campaign Celebrating Eagle Performance Tire</a></div>
			<div class="wd_date">May 1, 2026</div>
</div>
		</div></a>
	
		<a class="wd_link-wrap" href="index.html"><div class="item">
			
			<div class="item-inner">
			<div class="wd_title"><a href="index.html">Goodyear to Announce First Quarter 2026 Financial Results</a></div>
			<div class="wd_date">Apr 29, 2026</div>
</div>
		</div></a>
	
		<a class="wd_link-wrap" href="index.html"><div class="item">
			<div class="wd_thumbnail"><a href="index.html"><img src="https://mma.prnewswire.com/media/2959648/Travis_Parman_headshot.jpg?p=thumbnail" border="0"></a></div>
			<div class="item-inner">
			<div class="wd_title"><a href="index.html">GOODYEAR NAMES TRAVIS PARMAN AS CHIEF COMMUNICATIONS OFFICER</a></div>
			<div class="wd_date">Apr 21, 2026</div>
</div>
		</div></a>
	


</div>
<p class="more"><a href="index.html" class="wd_anim wd_primary"><span>All News</span></a></p>
</div></div></div>
						</div>
						<div class="wd_featureboxes_right_side wd_featureboxes-vertical fr-view"><div class="wd_toolbar wd_toolbar-detail"><div class="wd_featurebox_title">Share Article</div><ul class="wd_tools"><li class="wd_tool wd_tool-print"><span class="wd_tool_icon"><a onclick="view_printable(); return false;" rel="nofollow" href="#print" title="Open a printable version of this page"><span class="fa fa-print"></span><span class="wd_sr-only wd_sr-only-focusable">Open a printable version of this page</span></a></span></li><li class="wd_tool wd_tool-email"><span class="wd_tool_icon"><a onclick="window.location.href = 'mailto:?subject=Goodyear%20Launches%20Global%20Racing%20Organization%20to%20Enhance%20Motorsport%20Strategy%20Worldwide%20-%20Sep%2030%2C%202025&amp;body='+encodeURIComponent(window.location.href);return false;" href="#email" title="Email the URL of this page to a friend"><span class="fa fa-envelope"></span><span class="wd_sr-only wd_sr-only-focusable">Email the URL of this page to a friend</span></a></span></li><li class="wd_tool wd_tool-socialshare_linkedin"><span class="wd_tool_icon">
                    <a href="https://www.linkedin.com/" target="_blank" title="Linkedin Share" style="background-color:#0077B5;">
                    <span class="fa fa-linkedin"></span>
		    <span class="wd_sr-only wd_sr-only-focusable">Share this page on LinkedIn</span>
                    </a>
                </span></li><li class="wd_tool wd_tool-socialshare_twitter"><span class="wd_tool_icon">
                    <a href="https://x.com/" target="_blank" title="X Share" style="background-color:#000;">
                    <span class="fa fa-twitter"></span>
		    <span class="wd_sr-only wd_sr-only-focusable">Share this page on X</span>
                    </a>
                </span></li><li class="wd_tool wd_tool-socialshare_facebook"><span class="wd_tool_icon">
                    <a href="https://www.facebook.com/" target="_blank" title="Facebook Share" style="background-color:#4267B2;">
                    <span class="fa fa-facebook"></span>
		    <span class="wd_sr-only wd_sr-only-focusable">Share this page on Facebook</span>
                    </a>
                </span></li></ul></div>
<div id="wd_featurebox-teaser_1379" class="wd_featurebox_container wd_featurebox-teaser"><div class="wd_featurebox_title">More Stories</div><div class="wd_featurebox">
<div class="wd_newsfeed_releases-teaser">
<div class="subscribe_link"><a href="index.html"><span class="wd_subscribe_email-icon fa fa-envelope-o"></span></a> <a href="index.html">News Alerts</a></div>

	
		<a class="wd_link-wrap" href="index.html"><div class="item">
			
			<div class="item-inner">
			<div class="wd_title"><a href="index.html">Goodyear Announces First Quarter 2026 Results</a></div>
			<div class="wd_date">May 6, 2026</div>
</div>
		</div></a>
	
		<a class="wd_link-wrap" href="index.html"><div class="item">
			<div class="wd_thumbnail"><a href="index.html"><img src="https://mma.prnewswire.com/media/2971059/Fast_Is_In_Us___Czinger_Goodyear.jpg?p=thumbnail" border="0"></a></div>
			<div class="item-inner">
			<div class="wd_title"><a href="index.html">Did Someone Say Horsepower? Goodyear Launches Global Campaign Celebrating Eagle Performance Tire</a></div>
			<div class="wd_date">May 1, 2026</div>
</div>
		</div></a>
	
		<a class="wd_link-wrap" href="index.html"><div class="item">
			
			<div class="item-inner">
			<div class="wd_title"><a href="index.html">Goodyear to Announce First Quarter 2026 Financial Results</a></div>
			<div class="wd_date">Apr 29, 2026</div>
</div>
		</div></a>
	
		<a class="wd_link-wrap" href="index.html"><div class="item">
			<div class="wd_thumbnail"><a href="index.html"><img src="https://mma.prnewswire.com/media/2959648/Travis_Parman_headshot.jpg?p=thumbnail" border="0"></a></div>
			<div class="item-inner">
			<div class="wd_title"><a href="index.html">GOODYEAR NAMES TRAVIS PARMAN AS CHIEF COMMUNICATIONS OFFICER</a></div>
			<div class="wd_date">Apr 21, 2026</div>
</div>
		</div></a>
	


</div>
<p class="more"><a href="index.html" class="wd_anim wd_primary"><span>All News</span></a></p>
</div></div></div>
						
					
        <div class="wd_alert-cta">
            <h3>Get News Alerts</h3>
            <p>Sign up to receive automatic email alerts for breaking Goodyear news and updates.</p>
            <a href="index.html" class="wd_anim wd_primary">sign up</a>
        </div>
        </div>
				
				</main>
				<!-- MAIN CONTENT END -->

				<!-- FOOTER -->
				<div class="experiencefragment aem-GridColumn aem-GridColumn--default--12">
					<div id="experiencefragment-8a6e468fb5" class="cmp-experiencefragment cmp-experiencefragment--footer">



						<div id="container-236786830e" class="cmp-container">



							<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

								<div class="container responsivegrid aem-GridColumn aem-GridColumn--default--12">


									<div id="goodyear-footer" class="cmp-container">



										<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

											<div class="image aem-GridColumn aem-GridColumn--default--12">
												<div data-cmp-lazythreshold="0" data-cmp-src="/content/experience-fragments/goodyear-corp/us/en/site/footer/footer-v2/_jcr_content/root/container_1967570642/image.coreimg{.width}.svg/1683660255720/footer-bg.svg" data-asset="/content/dam/goodyear-corp/component-images/footer/footer-bg.svg" data-asset-id="941004df-3c8d-42b1-b584-fec255f30d5b" id="goodyear-footer-swish" data-cmp-data-layer="{&quot;goodyear-footer-swish&quot;:{&quot;@type&quot;:&quot;goodyear-corp/components/image&quot;,&quot;repo:modifyDate&quot;:&quot;2023-05-09T19:24:15Z&quot;,&quot;image&quot;:{&quot;repo:id&quot;:&quot;941004df-3c8d-42b1-b584-fec255f30d5b&quot;,&quot;repo:modifyDate&quot;:&quot;2023-04-28T18:16:05Z&quot;,&quot;@type&quot;:&quot;image/svg+xml&quot;,&quot;repo:path&quot;:&quot;/content/dam/goodyear-corp/component-images/footer/footer-bg.svg&quot;}}}" class="cmp-image" itemscope="" itemtype="http://schema.org/ImageObject">



													<img src="assets/news.goodyear.com/images/footer-bg.svg" class="cmp-image__image" itemprop="contentUrl" data-cmp-hook-image="image" alt="">





												</div>



											</div>
											<div class="container responsivegrid aem-GridColumn aem-GridColumn--default--12">




												<div id="goodyear-footer-bg" class="cmp-container">

													<div class="container responsivegrid">


														<div id="goodyear-footer-inner" class="cmp-container">



															<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 aem-Grid--phone--12 ">

																<div class="brandlogo aem-GridColumn aem-GridColumn--default--12">

																	<a class="cmp-brandlogo-footer" href="index.html" aria-label="Goodyear Corporate Logo">

																		<span class="icon-goodyear-logo"><img src="assets/news.goodyear.com/images/logo.svg" alt=""></span>

																	</a>

																</div>
																<div class="container responsivegrid aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0 aem-GridColumn--default--4">




																	<div id="container-7338eb35b0" class="cmp-container">

																		<div class="footerlinks">


																			<div class="cmp-footer-menu">
																				<div class="cmp-footer-menu__item" data-target="Company">
																					<a href="index.html" class="cmp-footer-menu__link">
																						Company
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Commitments">
																					<a href="index.html" class="cmp-footer-menu__link">
																						Commitments
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Careers">
																					<a href="index.html" target="_blank" class="cmp-footer-menu__link">
																						Careers
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Investors">
																					<a href="index.html" class="cmp-footer-menu__link">
																						Investors
																					</a>
																				</div>
																			</div>
																		</div>


																	</div>

																</div>
																<div class="container responsivegrid aem-GridColumn--default--none aem-GridColumn--phone--12 aem-GridColumn--phone--newline aem-GridColumn aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0 aem-GridColumn--default--4">




																	<div id="container-faa53a46aa" class="cmp-container">

																		<div class="footerlinks">


																			<div class="cmp-footer-menu">
																				<div class="cmp-footer-menu__item" data-target="Products &amp; Innovations">
																					<a href="index.html" class="cmp-footer-menu__link">
																						Products &amp; Innovations
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Newsroom">
																					<a href="index.html" class="cmp-footer-menu__link">
																						Newsroom
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Goodyear Suppliers">
																					<a href="index.html" class="cmp-footer-menu__link">
																						Goodyear Suppliers
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Insurance Verification">
																					<a href="index.html" class="cmp-footer-menu__link">
																						Insurance Verification
																					</a>
																				</div>
																			</div>
																		</div>


																	</div>

																</div>
																<div class="container responsivegrid aem-GridColumn--default--none aem-GridColumn--phone--12 aem-GridColumn--phone--newline aem-GridColumn aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0 aem-GridColumn--default--4">




																	<div id="container-70b1f73958" class="cmp-container">

																		<div class="footerlinks">


																			<div class="cmp-footer-menu">
																				<div class="cmp-footer-menu__item" data-target="Contact Us">
																					<a href="index.html" class="cmp-footer-menu__link">
																						Contact Us
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Governance">
																					<a href="index.html" class="cmp-footer-menu__link">
																						Governance
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Reports &amp; Policies">
																					<a href="index.html" class="cmp-footer-menu__link">
																						Reports &amp; Policies
																					</a>
																				</div>

																				<div class="cmp-footer-menu__item" data-target="Integrity Hotline">
																					<a href="https://secure.ethicspoint.com/domain/media/en/gui/39890/index.html" class="cmp-footer-menu__link" target="_blank">
																						Integrity Hotline
																					</a>
																				</div>

																			</div>
																		</div>


																	</div>

																</div>
																<div class="footersociallinks aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--11 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">

																	<div class="cmp-footer-social-links">
																		<div class="cmp-footer-social-links__text">
																		</div>
																		<div class="cmp-footer-social-links__container" current-path="/content/goodyear-corp/us/en/media" social-media-resource="TemplatedResourceImpl, type=goodyear-corp/components/footersociallinks, path=/content/experience-fragments/goodyear-corp/us/en/site/footer/footer-v2/jcr:content/root/container_1967570642/container/container_1414193570/footersociallinks">





																			<div class="cmp-footer-social-links__icons" page-path-url="/content/goodyear-corp/us/en/media" social-links-data="TemplatedResourceImpl, type=goodyear-corp/components/footersociallinks, path=/content/experience-fragments/goodyear-corp/us/en/site/footer/footer-v2/jcr:content/root/container_1967570642/container/container_1414193570/footersociallinks">
																				<a href="https://www.facebook.com/" class="cmp-footer-social-links__item" target="_blank">
																					<img src="assets/news.goodyear.com/images/social-icon-facebook.svg" alt="Facebook">
																				</a>

																				<a href="https://x.com/" class="cmp-footer-social-links__item" target="_blank">
																					<img src="assets/news.goodyear.com/images/social-icon-x.svg" alt="X Logo">
																				</a>

																				<a href="https://www.linkedin.com/" class="cmp-footer-social-links__item" target="_blank">
																					<img src="assets/news.goodyear.com/images/social-icon-linkedin.svg" alt="LinkedIn">
																				</a>

																				<a href="https://www.youtube.com/" class="cmp-footer-social-links__item" target="_blank">
																					<img src="assets/news.goodyear.com/images/social-icon-youtube.svg" alt="YouTube">
																				</a>

																				<a href="https://www.instagram.com/" class="cmp-footer-social-links__item" target="_blank">
																					<img src="assets/news.goodyear.com/images/social-icon-instagram.svg" alt="Instagram">
																				</a>
																			</div>


																		</div>
																	</div>




																</div>

																

																<div class="text aem-GridColumn--default--none aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--offset--default--0">
																	<div data-cmp-data-layer="{&quot;text-f6a37d2798&quot;:{&quot;@type&quot;:&quot;goodyear-corp/components/text&quot;,&quot;repo:modifyDate&quot;:&quot;2023-05-09T19:24:16Z&quot;,&quot;xdm:text&quot;:&quot;&lt;p&gt;© 2023 The Goodyear Tire &amp;amp; Rubber Company&lt;/p&gt;\r\n&quot;}}" id="text-f6a37d2798" class="cmp-text">
																		<p>© 2026 The Goodyear Tire &amp; Rubber Company
																		</p>

																		<div class="site-map">
																			<a class="cmp-footer-menu__link" href="index.html" target="_blank">International Site Directory</a><span class="footer-break">|</span>
																			<a class="cmp-footer-menu__link" href="index.html">Site Map</a><span class="footer-break">|</span>
																			<a class="cmp-footer-menu__link" href="index.html">Terms, Conditions &amp; Privacy Policy</a><span class="footer-break">|</span>
																			<button id="ot-sdk-btn" class="ot-sdk-show-settings">Do Not Sell or Share My Personal Information</button>

																		</div>

																	</div>



																</div>


															</div>

														</div>


													</div>


												</div>

											</div>


										</div>

									</div>


								</div>


							</div>

						</div>


					</div>


				</div>
				<!-- FOOTER END -->

			</div>

		</div>
	</div>

	<script src="assets/news.goodyear.com/js/jquery.lc-7842899024219bcbdb5e72c946870b79-lc.min.js"></script>
	<script src="assets/news.goodyear.com/js/utils.lc-e7bf340a353e643d198b25d0c8ccce47-lc.min.js"></script>
	<script src="assets/news.goodyear.com/js/granite.lc-543d214c88dfa6f4a3233b630c82d875-lc.min.js"></script>
	<script src="assets/news.goodyear.com/js/jquery.lc-dd9b395c741ce2784096e26619e14910-lc.min.js"></script>
	<script src="assets/news.goodyear.com/js/clientlib-base.lc-e6d9e95c45f8f5a772b2b100ca3038ce-lc.min.js"></script>
	<script src="assets/news.goodyear.com/js/clientlib-site.lc-5012930c82256ceb6f11b117b772f259-lc.min.js"></script>



	<script type="text/javascript" src="assets/news.goodyear.com/js/buttons.js"></script>



	<script src="assets/news.goodyear.com/js/api.js" async="" defer="defer"></script>



	<div class="modal fade gycorporate-modal js-contact-overlay-captcha">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<a href="#" class="close" data-dismiss="modal">
						<span class="icon-close"></span>
					</a>
				</div>
				<div class="modal-body">
					<div class="contact-overlay-captcha__content">
						<h2 class="modal-main-title">Contact Us</h2>
						<p class="error-message error-message-paragraph">Please make
							sure you've entered valid information for all required fields.</p>
						<p class="text-oblique">Note: All fields are required</p>
						<p class="text-to">To:</p>
						<h3 class="contact-overlay-captcha__sub-title js-sub-title"></h3>

						<form action="/services/mail" method="post" class="gy-form" enctype="text/plain">
							<input type="hidden" name="type" id="type" value="contact">
							<label for="contactName" class=""> <span class="input-name">Your Name</span> <input name="contactName" id="contactName" type="text" class="form-control required">
							</label> <label for="contactEmail" class=""> <span class="input-name">Email Address</span>
								<input name="contactEmail" id="contactEmail" type="text" class="form-control required-email">
							</label> <label for="message" class="">

								<div>
									<span class="small-text input-name" style="float: left">Message</span>
									<span class="remaining small-text" style="float: right">1000
										characters remaining</span>
								</div> <br> <textarea class="input message required" name="message" id="message" maxlength="1000" cols="55" rows="6"></textarea>

							</label>
							<input class="js-email-key" name="emailKey" id="emailKey" type="hidden">

							<div class="footer-form">
								<div id="captchaId" class="form-captcha" data-captcha-id="0">
									<div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
										<div class="grecaptcha-logo"><iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-ldaqjkhd0tyx" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="goodyear_files/anchor.html"></iframe></div>
										<div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
									</div><iframe style="display: none;"></iframe>
								</div>
								<input type="submit" value="SEND MESSAGE" class="cta"> <a class="cancel-cta" data-dismiss="modal" href="#">Cancel</a>
							</div>
						</form>
						<br>
						<div>
							<a class="policy" target="_blank" href="index.html">Privacy
								Policy</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<div>
		<div class="modal fade gycorporate-modal thank-you-overlay contact-overlay js-thank_you-overlay" style="display:none">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<a href="#" class="close" data-dismiss="modal"></a>
					</div>
					<div class="modal-body">
						<div class="thank-you-overlay__modal">
							<h2 class="modal-main-title--small">Thank you for your message.</h2>
							<p>Thanks for your interest in Goodyear. Your
								message has been forwarded to our experts. Our associates typically
								reply within 2 business days.</p>

							<a class="cta" data-dismiss="modal" href="#">CLOSE</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div>
			<div class="modal fade gycorporate-modal error-overlay contact-overlay js-error-overlay">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a href="#" class="close" data-dismiss="modal"><span class="icon-close"></span></a>
						</div>
						<div class="modal-body">
							<div class="contact-overlay__content">
								<h2 class="modal-main-title--small">Sorry! There seems to be a problem.</h2>
								<p>This action is temporarily unavailable. Please try again later.</p>

								<a class="cta" data-dismiss="modal" href="#">CLOSE</a>
							</div>
						</div>
					</div>
				</div>
			</div>



		</div>
	</div>

	<script type="text/javascript" src="assets/news.goodyear.com/thirdparty/font-awesome/v4-shims.min.js"></script>
	<script type="text/javascript" src="assets/news.goodyear.com/js/wd_script.js"></script>

<!-- begin spin_special_output(body_end) -->
<script wd_script_id="piwik_tracking_code"></script>
<!-- Piwik Tracking Code -->

<noscript>
	<img src="https://stats.drivetheweb.com/piwik.php?idsite=6972&rec=1" style="border:0" alt="" />
</noscript>
<!-- End Piwik Tracking Code -->
		
<!-- end spin_special_output(body_end) -->
<iframe height="1" width="1" style="position: absolute; top: 0px; left: 0px; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; visibility: hidden;"></iframe>


<script type="text/javascript" class="optanon-category-2">
  var _paq = _paq || [];

  _paq.push(["setCustomVariable", 4, "News Release Feed ID", "202509300830PR_NEWS_USPR_____CL86539", "page"]);

  _paq.push(["setCustomVariable", 1, "Content Type", "News Releases Feed", "page"]);

  _paq.push(["setCustomVariable", 3, "Navigation Page", "News", "page"]);

  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);
  (function() {
    var u="//stats.drivetheweb.com/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", 6972]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0];
    g.type="text/javascript"; g.async=true; g.defer=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>






























<script id="offline-nav-script">
(function () {
  var BTN = 'button[data-qa-id^="RegularHeader-mainNavigation-meganav-"]';
  var CAROUSEL_QA = 'CardCarouselContainer-CardCarouselContainer';
  var PREV_QA = 'CardCarouselContainer-CardCarouselContainer-prev-button';
  var NEXT_QA = 'CardCarouselContainer-CardCarouselContainer-next-button';
  var RACING_READ_MORE_QA = 'TwoColumnContainer-ContentCard-ContentBlock-read-more-button';
  var RACING_NEWS_HREF = '2025-09-30-Goodyear-Launches-Global-Racing-Organization-to-Enhance-Motorsport-Strategy-Worldwide/index.html';
  var ENABLED_BTN = 'bg-action-color-primary text-action-text-btn-primary cursor-pointer hover:opacity-100';
  var DISABLED_BTN = 'bg-action-disabled-btn !bg-action-disabled-btn pointer-events-none text-action-disabled-disabled hover:opacity-100';

  function closeAll() {
    document.querySelectorAll('.offline-mega-open').forEach(function (el) {
      el.classList.remove('offline-mega-open');
    });
    document.querySelectorAll(BTN).forEach(function (btn) {
      btn.setAttribute('aria-expanded', 'false');
    });
  }

  function toggleMenu(btn) {
    var li = btn.closest('li.offline-mega-li');
    if (!li) return;
    var wasOpen = li.classList.contains('offline-mega-open');
    closeAll();
    if (!wasOpen) {
      li.classList.add('offline-mega-open');
      btn.setAttribute('aria-expanded', 'true');
    }
  }

  function setNavButtonState(btn, enabled) {
    if (!btn) return;
    btn.setAttribute('aria-disabled', enabled ? 'false' : 'true');
    btn.tabIndex = enabled ? 0 : -1;
    if (enabled) btn.removeAttribute('disabled');
    else btn.setAttribute('disabled', 'disabled');
    btn.classList.remove('bg-action-color-primary', 'text-action-text-btn-primary', 'cursor-pointer',
      'bg-action-disabled-btn', '!bg-action-disabled-btn', 'pointer-events-none', 'text-action-disabled-disabled');
    (enabled ? ENABLED_BTN : DISABLED_BTN).split(' ').forEach(function (cls) {
      if (cls) btn.classList.add(cls);
    });
  }

  function getMaxIndex(slides, swiper) {
    if (!slides.length) return 0;
    var maxOffset = 0;
    for (var i = slides.length - 1; i >= 0; i--) {
      var offset = slides[i].offsetLeft;
      if (offset <= slides[slides.length - 1].offsetLeft) {
        maxOffset = offset;
      }
    }
    var viewport = swiper.clientWidth;
    var total = slides[slides.length - 1].offsetLeft + slides[slides.length - 1].offsetWidth;
    if (total <= viewport) return 0;
    for (var j = slides.length - 1; j >= 0; j--) {
      var left = slides[j].offsetLeft;
      if (left + slides[j].offsetWidth > viewport - 1) {
        return j;
      }
    }
    return slides.length - 1;
  }

  function updateScrollbar(section, swiper, wrapper, offset) {
    var drag = section.querySelector('.swiper-scrollbar-drag');
    var track = section.querySelector('.swiper-scrollbar');
    if (!drag || !track) return;
    var maxScroll = Math.max(wrapper.scrollWidth - swiper.clientWidth, 0);
    var trackWidth = track.clientWidth;
    var dragWidth = maxScroll > 0 ? Math.max((swiper.clientWidth / wrapper.scrollWidth) * trackWidth, 24) : trackWidth;
    drag.style.width = dragWidth + 'px';
    var travel = Math.max(trackWidth - dragWidth, 0);
    drag.style.transform = maxScroll > 0
      ? 'translate3d(' + ((offset / maxScroll) * travel) + 'px, 0px, 0px)'
      : 'translate3d(0px, 0px, 0px)';
  }

  function markSlideStates(slides, activeIndex) {
    slides.forEach(function (slide, index) {
      slide.classList.remove('swiper-slide-active', 'swiper-slide-prev', 'swiper-slide-next');
      if (index === activeIndex) slide.classList.add('swiper-slide-active');
      else if (index === activeIndex - 1) slide.classList.add('swiper-slide-prev');
      else if (index === activeIndex + 1) slide.classList.add('swiper-slide-next');
      slide.setAttribute('aria-label', (index + 1) + ' / ' + slides.length);
    });
  }

  function initCarousel(section) {
    if (section.getAttribute('data-offline-carousel-init') === 'true') return;
    var swiper = section.querySelector('.swiper');
    var wrapper = section.querySelector('.swiper-wrapper');
    var slides = Array.prototype.slice.call(section.querySelectorAll('.swiper-slide'));
    var prevBtn = section.querySelector('[data-qa-id="' + PREV_QA + '"]');
    var nextBtn = section.querySelector('[data-qa-id="' + NEXT_QA + '"]');
    if (!swiper || !wrapper || slides.length < 2 || !prevBtn || !nextBtn) return;

    section.setAttribute('data-offline-carousel-init', 'true');
    swiper.classList.add('offline-carousel-ready');

    var state = {
      activeIndex: slides.findIndex(function (slide) {
        return slide.classList.contains('swiper-slide-active');
      }),
      slides: slides,
      wrapper: wrapper,
      swiper: swiper,
      prevBtn: prevBtn,
      nextBtn: nextBtn,
    };
    if (state.activeIndex < 0) state.activeIndex = 0;

    function goTo(index, animate) {
      var maxIndex = getMaxIndex(state.slides, state.swiper);
      state.activeIndex = Math.max(0, Math.min(index, maxIndex));
      var offset = state.slides[state.activeIndex].offsetLeft;
      state.wrapper.style.transition = animate === false ? 'none' : '';
      state.wrapper.style.transform = 'translate3d(' + (-offset) + 'px, 0px, 0px)';
      markSlideStates(state.slides, state.activeIndex);
      setNavButtonState(state.prevBtn, state.activeIndex > 0);
      setNavButtonState(state.nextBtn, state.activeIndex < maxIndex);
      updateScrollbar(section, state.swiper, state.wrapper, offset);
    }

    state.goTo = goTo;
    section.__offlineCarousel = state;

    window.addEventListener('resize', function () {
      goTo(state.activeIndex, false);
    });

    goTo(state.activeIndex, false);
  }

  function initCarousels() {
    document.querySelectorAll('[data-qa-id="' + CAROUSEL_QA + '"]').forEach(initCarousel);
  }

  function fixRemainingGoodyearAnchors() {
    document.querySelectorAll('a[href*="goodyear.com"]').forEach(function (anchor) {
      var href = anchor.getAttribute('href') || '';
      if (!href || href.indexOf('mailto:') === 0 || href.indexOf('localhost') !== -1) return;
      if (/news\.goodyear\.com\/news-alerts/i.test(href)) {
        anchor.setAttribute('href', 'index.html');
      }
    });
  }

  function fixGlobalRacingReadMore() {
    var btn = document.querySelector('[data-qa-id="' + RACING_READ_MORE_QA + '"]');
    if (!btn) return;
    var card = btn.closest('[data-qa-id="TwoColumnContainer-ContentCard"]');
    if (!card || card.textContent.indexOf('Global Racing Organization') === -1) return;
    var href = btn.getAttribute('href') || '';
    if (href.indexOf('road-trip-checklist') !== -1 || href.indexOf('2025-09-30-Goodyear-Launches-Global-Racing-Organization') === -1) {
      btn.setAttribute('href', RACING_NEWS_HREF);
    }
  }

  document.addEventListener('click', function (e) {
    var prev = e.target.closest('[data-qa-id="' + PREV_QA + '"]');
    var next = e.target.closest('[data-qa-id="' + NEXT_QA + '"]');
    if (prev || next) {
      var section = (prev || next).closest('[data-qa-id="' + CAROUSEL_QA + '"]');
      var state = section && section.__offlineCarousel;
      if (state) {
        e.preventDefault();
        e.stopImmediatePropagation();
        if (prev) state.goTo(state.activeIndex - 1, true);
        else state.goTo(state.activeIndex + 1, true);
      }
      return;
    }

    var btn = e.target.closest(BTN);
    if (btn) {
      e.preventDefault();
      e.stopImmediatePropagation();
      toggleMenu(btn);
      return;
    }
    if (!e.target.closest('.offline-mega-panel') && !e.target.closest('header nav')) {
      closeAll();
    }
  }, true);

  function boot() {
    fixGlobalRacingReadMore();
    fixRemainingGoodyearAnchors();
    initCarousels();
    window.setTimeout(function () {
      fixGlobalRacingReadMore();
      fixRemainingGoodyearAnchors();
      initCarousels();
    }, 300);
    window.setTimeout(function () {
      fixGlobalRacingReadMore();
      fixRemainingGoodyearAnchors();
      initCarousels();
    }, 1200);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();
</script></body></html>