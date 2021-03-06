<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Sahabat PNJ</title>
	<meta charset="utf-8">
	<link rel="icon" href="images/favicon.png" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Web profile of Sahabat PNJ" />
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, SPNJ, TIK, PNJ, HIMATIK" />
    <meta name="author" content="SPNJ" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,400i,700,700i,900|Montserrat:400,700|PT+Serif' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css"  href='main.css' />
	<link rel="stylesheet" type="text/css"  href='css/clear.css' />
	<link rel="stylesheet" type="text/css"  href='css/font-awesome.min.css' />
	<link rel="stylesheet" type="text/css"  href='css/carouFredSel.css' />
	<link rel="stylesheet" type="text/css"  href='css/prettyPhoto.css' />
	<link rel="stylesheet" type="text/css"  href='css/common.css' />
	<link rel="stylesheet" type="text/css"  href='css/sm-clean.css' />
</head>
<body>
	<!-- loader -->
	<table class="loader">
		<tr>
			<td>
				<img src="images/ajax-document-loader.gif" alt="Loading..." />
			</td>
		</tr>
	</table>
	<!-- END loader -->

	<!-- Nav -->
	<div class="navigation-wrapper center-relative">
		<nav id="header-main-navigation">
			<div class="mob-navigation">MENU</div>
			<ul class="main-navigation sm sm-clean">
				<li><a class="scroll" href="#home">Home</a></li>
				<li><a class="scroll" href="#tentangkami">Tentang</a></li>
				<li><a class="scroll" href="#berita">Berita</a></li>
				<li><a class="scroll" href="#galeri">Galeri</a></li>
				<li><a class="scroll" href="#karya">Karya</a></li>
				<li><a class="scroll" href="#media">Media partner</a></li>
			</ul>
		</nav>
	</div>
	<!-- END Nav -->

	<!-- Home -->
	<div id="home" class="section intro-page">
		<div class="block content-1170 center-relative center-text">
			<img class="top-logo" src="images/logo-white.png" alt="SPNJ" />
			<br>
			<h1 class="big-title">We Craft Awesome Web And <span>Graphic Design Solutions</span></h1>
			<p class="title-desc">Support bright students today for a better tomorrow</p>
		</div>
	</div>
	<!-- END Home -->

	<!-- Tentang Kami -->
	<div id="tentangkami" class="section">
		<div class="block content-1170 center-relative">
			<div class="title-section-holder left">
				<div class="section-number">
					<span>01</span>
				</div>
				<h2 class="entry-title">Tentang Kami</h2>
			</div>
			<div class="section-content-holder right">
				<div class="content-wrapper">
					<script>
						var slider1_speed = "500";
						var slider1_auto = "false";
						var slider1_hover = "true";
					</script>
					<div class="image-slider-wrapper relative service slider1">
						<a id="slider1_next" class="text_slider_next" href ="#">NEXT <span class="fa fa-caret-right"></span></a>
						<!-- <a id="slider1_next" class="text_slider_next" href ="#"></a> -->

						<ul id="slider1" class="image-slider slides">
							<li>
								<div class="tentang-content">
									<h2>SEJARAH</h2>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									<div class="swipe pull-right">
										Swipe <i class="fa fa-caret-right"></i>
									</div>
								</div>
							</li>
							<li>
								<div class="tentang-holder ">
									<img src="demo-images/icon_03.png" alt="">
									<div class="tentang-content-holder">
										<div class="tentang-title">WEBSITE</div>
										<div class="tentang-content">
											Donecos arem ipsum sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut donecos dolore ipsum temporest.<br />
										</div>
									</div>
								</div>
								<div class="tentang-holder ">
									<img src="demo-images/icon_04.png" alt="">
									<div class="tentang-content-holder">
										<div class="tentang-title">ANDROID</div>
										<div class="tentang-content">
											Disum lorem sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut donecos dolore ipsum temporest.<br />
										</div>
									</div>
								</div>
								<div class="tentang-holder ">
									<img src="demo-images/icon_02.png" alt="">
									<div class="tentang-content-holder">
										<div class="tentang-title">MOTION GRAPHIC</div>
										<div class="tentang-content">
											Polor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut dolore magna labore eiusmod.<br />
										</div>
									</div>
								</div>
							</li>
						</ul>
						<div class = "clear"></div>
					</div>

				</div>
			</div>
			<div class='clear'></div>
		</div>
	</div>
	<!-- END Tentang Kami -->

	<!-- Berita -->
	<div id="berita" class="section">
		<div class="block content-1170 center-relative">
			<div class="title-section-holder right">
				<div class="section-number">
					<span>
						02
					</span>
				</div>
				<h2 class="entry-title">BERITA</h2>
			</div>
			<div class="section-content-holder left">
				<div class="content-wrapper">
					<div class="blog-holder block center-relative">

						<?php foreach ($berita as $data) { ?>
							<article class="relative berita-item-holder center-relative">
								<div class="num">01</div>
								<div class="info">
									<div class="author vcard ">Robert Williams</div>
									<div class="category-links">
										<ul>
											<li><a href="#">BRANDING</a></li>
										</ul>
									</div>
								</div>
								<h3 class="entry-title">
									<a href="#">Eiusmod tempor incididunt ut dolore magna labore eiusmod ipsum dolor</a>
								</h3>
								<div class="clear"></div>
							</article>
						<?php } ?>

						<div class="latest-post-bottom-text">
							<a href="#">SEMUA BERITA</a>
						</div>
					</div>

				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
    </div>
	<!-- END Berita -->

	<!-- Galeri -->
	<div id="galeri" class="section">
		<div class="block content-1170 center-relative">
			<div class="title-section-holder left">
				<div class="section-number">
					<span>03</span>
				</div>
				<h2 class="entry-title">Galeri</h2>
			</div>
			<div class="section-content-holder galeri-holder left">
				<div class="grid" id="galeri-grid">
					<div class="grid-sizer"></div>
					<div class="grid-item element-item p_one">
						<a data-rel="prettyPhoto[gallery1]" href="demo-images/portfolio_item_01.jpg">
							<img src="demo-images/portfolio_item_01.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">IMAGE TITLE</p>
									
								</div>
							</div>
						</a>
					</div>
					<div class="grid-item element-item p_one_half">
						<a data-rel="prettyPhoto[gallery1]" href="demo-images/portfolio_item_02.jpg">
							<img src="demo-images/portfolio_item_02.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">IMAGE TITLE</p>
									
								</div>
							</div>
						</a>
					</div>
					<div class="grid-item element-item p_one_half">
						<a data-rel="prettyPhoto[gallery1]" href="demo-images/about_img_01.jpg">
							<img src="demo-images/about_img_01.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">IMAGE TITLE</p>
									
								</div>
							</div>
						</a>
					</div>
					<div class="grid-item element-item p_one_half">
						<a data-rel="prettyPhoto[gallery1]" href="demo-images/portfolio_item_08.jpg">
							<img src="demo-images/portfolio_item_08.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">IMAGE TITLE</p>
									
								</div>
							</div>
						</a>
					</div>
					<div class="grid-item element-item p_one_half">
						<a data-rel="prettyPhoto[gallery1]" href="demo-images/portfolio_item_03.jpg">
							<img src="demo-images/portfolio_item_03.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">IMAGE TITLE</p>
									
								</div>
							</div>
						</a>
					</div>
					<div class="grid-item element-item p_one">
						<a data-rel="prettyPhoto[gallery1]" href="demo-images/portfolio_item_05.jpg">
							<img src="demo-images/portfolio_item_05.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">IMAGE TITLE</p>
									
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="clear"></div>
				<div class="block galeri-load-more-holder">
					<a target="_self" class="more-posts">LOAD MORE</a>
					<img src="images/icon_infinity.svg" alt="Load more">
				</div>
			</div>
			<div class="clear"></div>
		</div>
        <div class="clear"></div>
        <div class="block content-1170 center-relative">
        	<div class="extra-content-left">
        		<script> var text1_speed = "500";
        		var text1_auto = "false";
        		var text1_hover = "true";
        	</script>
        	<div class="text1 quotes-slider-holder slider-holder">
        		<div class="caroufredsel_wrapper">
        			<ul id="text1" class="slides quotes">
        				<li>
        					<div class="quotes-content">
        						<p class="quotes-text">The difference between a Designer and Developer, when it comes to design skills, is the difference between shooting a bullet and throwing it.</p>
        						<p class="quotes-author">SCOTT HANSELMAN</p>
        					</div>
        					<div class="clear">
        					</div>
        				</li>
        				<li style="width: 500px;">
        					<div class="quotes-content">
        						<p class="quotes-text">To create anything–whether a short story or a magazine profile or a film or a sitcom–is to believe, if only momentarily, you are capable of magic.</p>
        						<p class="quotes-author">TOM BISSEL</p>
        					</div>
        					<div class="clear"></div>
        				</li>
        				<li>
        					<div class="quotes-content">
        						<p class="quotes-text">As a profession, graphic designers have been shamefully remiss or ineffective about plying their craft for social or political betterment.</p>
        						<p class="quotes-author">STEVEN HELLER</p>
        					</div>
        					<div class="clear"></div>
        				</li>
        			</ul>
        		</div>
        		<a id="text1_next" class="carousel_text_next" href="#"></a>
        		<div class="clear"></div>
        	</div>
        	</div>
    	</div>
    </div>
	<!-- END Galeri -->

	<!-- Karya -->
	<div id="karya" class="section">
		<div class="block content-1170 center-relative">
			<div class="title-section-holder right">
				<div class="section-number">
					<span>04</span>
				</div>
				<h2 class="entry-title">Kar ya</h2>
			</div>
			<div class="section-content-holder galeri-holder left">
				<div class="grid" id="galeri-grid">
					<div class="grid-sizer"></div>
					<div class="grid-item element-item p_one_half">
						<a href="singlekarya.html">
							<img src="demo-images/portfolio_item_08.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">PRODUCT TITLE</p>
									<p class="galeri-sec-text">Android</p>
								</div>
							</div>
						</a>
					</div>
					<div class="grid-item element-item p_one_half">
						<a href="singlekarya.html">
							<img src="demo-images/portfolio_item_03.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">IMAGE TITLE</p>
									<p class="galeri-sec-text">Android</p>
								</div>
							</div>
						</a>
					</div>
					<div class="grid-item element-item p_one_half">
						<a href="singlekarya.html">
							<img src="demo-images/portfolio_item_02.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">IMAGE TITLE</p>
									<p class="galeri-sec-text">Website</p>
								</div>
							</div>
						</a>
					</div>
					<div class="grid-item element-item p_one_half">
						<a href="singlekarya.html">
							<img src="demo-images/about_img_01.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">IMAGE TITLE</p>
									<p class="galeri-sec-text">Website</p>
								</div>
							</div>
						</a>
					</div>
					<div class="grid-item element-item p_one_half">
						<a href="singlekarya.html">
							<img src="demo-images/portfolio_item_08.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">IMAGE TITLE</p>
									<p class="galeri-sec-text">Motion Graphic</p>
								</div>
							</div>
						</a>
					</div>
					<div class="grid-item element-item p_one_half">
						<a href="singlekarya.html">
							<img src="demo-images/portfolio_item_03.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">IMAGE TITLE</p>
									<p class="galeri-sec-text">Website</p>
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="clear"></div>
				<div class="block galeri-load-more-holder">
					<a target="_self" class="more-posts">LOAD MORE</a>
					<img src="images/icon_infinity.svg" alt="Load more">
				</div>
			</div>
			<div class="clear"></div>
		</div>
        <div class="clear"></div>
        <div style="padding-bottom: 50px;"></div>
    </div>
	<!-- END Karya -->

	<!-- MEDIA PARTNER -->
	<div id="media" class="section">
		<div class="block content-1170 center-relative">
			<div class="title-section-holder left">
				<div class="section-number">
					<span>05</span>
				</div>
				<h2 class="entry-title">MEDPART</h2>
			</div>
			<div class="section-content-holder galeri-holder left">
				<div class="extra-content-full-width">
                <script>
                    var fwslider1_speed = "500";
                    var fwslider1_auto = "false";
                    var fwslider1_hover = "true";
                    var fwslider1_start = "0";
                    var fwslider1_width = "400";
                    var fwslider1_num = "5";
                </script>
                <div class="fwslider1 fw-image-slider-holder list_carousel relative">
                    <div class="caroufredsel_wrapper">
                        <ul id="fwslider1" class="fw-image-slider">
                            <li class="fw-slide">
                                <img src="demo-images/icon_editing.png" alt="">
                                <p class="fw-slide-text">Video Editing</p>
                            </li>
                            <li class="fw-slide">
                                <img src="demo-images/icon_clear.png" alt="">
                                <p class="fw-slide-text">Premium Cleer</p>
                            </li>
                            <li class="fw-slide">
                                <img src="demo-images/icon_display.png" alt="">
                                <p class="fw-slide-text">For All Displays</p>
                            </li>
                            <li class="fw-slide">
                                <img src="demo-images/icon_time.png" alt="">
                                <p class="fw-slide-text">Right On Time</p>
                            </li>
                            <li class="fw-slide">
                                <img src="demo-images/icon_ideas.png" alt="">
                                <p class="fw-slide-text">Innovative Ideas</p>
                            </li>
                            <li class="fw-slide">
                                <img src="demo-images/icon_sound.png" alt="">
                                <p class="fw-slide-text">Perfect Sound</p>
                            </li>
                            <li class="fw-slide">
                                <img src="demo-images/icon_solution.png" alt="">
                                <p class="fw-slide-text">3D Solution</p>
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <div id="fwslider1_fw_image_slide_pager" class="fw_carousel_pagination"></div>
                </div>
                <div id="swipe-media">swipe <i class="fa fa-caret-right"></i></div>
                <a id="fwslider1_fw_next" class="carousel_fw_next" href="#"></a>
                <div class="clear"></div>
            </div>
			</div>
			<div class="clear"></div>
		</div>
        <div class="clear"></div>
    </div>
    <!-- END MEDPART -->

    <!-- Footer -->
    <footer style="background-color: #110d3e; color: #fff !important;">
    	<div class="footer content-1170 center-relative">
    		<ul style="color: #cecece !important;">
    			<li>Made with <i class="fa fa-heart"></i></li>
    			<li class="copyright-footer">
    				&copy; 2018 SPNJ | Follow us on:
    			</li>
    			<li class="social-footer">
    				<a href="#"><span class="fa fa-twitter"></span></a>
    				<a href="#"><span class="fa fa-instagram"></span></a>
    				<!-- <a href="#"><span class="fa fa-dribbble"></span></a> -->
    				<a href="#"><span class="fa fa-facebook"></span></a>
    				<!-- <a href="#"><span class="fa fa-rss"></span></a> -->
    			</li>
    		</ul>
    	</div>
    </footer>
    <!-- END Footer -->

</body>
<!--Load JavaScript-->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type='text/javascript' src='js/jquery.sticky-kit.min.js'></script>
<script type='text/javascript' src='js/jquery.smartmenus.min.js'></script>
<script type='text/javascript' src='js/jquery.sticky.js'></script>
<script type='text/javascript' src='js/jquery.dryMenu.js'></script>
<script type='text/javascript' src='js/isotope.pkgd.js'></script>
<script type='text/javascript' src='js/jquery.carouFredSel-6.2.0-packed.js'></script>
<script type='text/javascript' src='js/jquery.mousewheel.min.js'></script>
<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='js/imagesloaded.pkgd.js'></script>
<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
<script type='text/javascript' src='js/SmoothScroll.min.js'></script>
<script type='text/javascript' src='js/script.js'></script>
</html>