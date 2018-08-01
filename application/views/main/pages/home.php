<!DOCTYPE html>
<html lang="en-US">
<head>
	<title><?php echo $template['title'] ?></title>
	<?php $this->load->view('main/layout/head'); ?>
</head>

	<body>
	<!-- loader -->
	<?php $this->load->view('main/layout/loader'); ?>
	<!-- END loader -->

	<!-- Nav -->
	<?php $this->load->view('main/layout/nav'); ?>
	<!-- END Nav -->

	<!-- Home -->
	<div id="home" class="section intro-page">
		<div class="block content-1170 center-relative center-text">
			<img class="top-logo" src="<?php echo base_url(); ?>assets/frontend/img/logo-white.png" alt="SPNJ" />
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
									<img src="<?php echo base_url(); ?>assets/frontend/img/icon-3.png" alt="">
									<div class="tentang-content-holder">
										<div class="tentang-title">WEBSITE</div>
										<div class="tentang-content">
											Donecos arem ipsum sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut donecos dolore ipsum temporest.<br />
										</div>
									</div>
								</div>
								<div class="tentang-holder ">
									<img src="<?php echo base_url(); ?>assets/frontend/img/icon-4.png" alt="">
									<div class="tentang-content-holder">
										<div class="tentang-title">ANDROID</div>
										<div class="tentang-content">
											Disum lorem sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut donecos dolore ipsum temporest.<br />
										</div>
									</div>
								</div>
								<div class="tentang-holder ">
									<img src="<?php echo base_url(); ?>assets/frontend/img/icon-2.png" alt="">
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

						<article class="relative berita-item-holder center-relative">
							<div class="num">02</div>
							<div class="info">
								<div class="author vcard ">Jim Davis</div>
								<div class="category-links">
									<ul>
										<li><a href="#">TECH</a></li>
									</ul>
								</div>
							</div>
							<h3 class="entry-title">
								<a href="#">Incididunt ut dolore magna labore eiusmod lorem ipsum dolor sit</a>
							</h3>
							<div class="clear"></div>
						</article>

						<article class="relative berita-item-holder center-relative">
							<div class="num">03</div>
							<div class="info">
								<div class="author vcard ">Ann Peterson</div>
								<div class="category-links">
									<ul>
										<li><a href="#">CRAFTING</a></li>
									</ul>
								</div>
							</div>
							<h3 class="entry-title">
								<a href="#">Labore eiusmod lorem ipsum dolor sit amet nunc labore incididunt ut dolore</a>
							</h3>
							<div class="clear"></div>
						</article>

						<article class="relative berita-item-holder center-relative">
							<div class="num">04</div>
							<div class="info">
								<div class="author vcard ">Robert Williams</div>
								<div class="category-links">
									<ul>
										<li><a href="#">CRAFTING</a></li>
									</ul>
								</div>
							</div>
							<h3 class="entry-title">
								<a href="#">Dolor sit amet nunc labore incididunt ut dolore magna labore eiusmod</a>
							</h3>
							<div class="clear"></div>
						</article>

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
						<a data-rel="prettyPhoto[gallery1]" href="<?php echo base_url(); ?>assets/frontend/img/demo-1.jpg">
							<img src="<?php echo base_url(); ?>assets/frontend/img/demo-1.jpg" alt="">
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
						<a data-rel="prettyPhoto[gallery1]" href="<?php echo base_url(); ?>assets/frontend/img/demo-2.jpg">
							<img src="<?php echo base_url(); ?>assets/frontend/img/demo-2.jpg" alt="">
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
						<a data-rel="prettyPhoto[gallery1]" href="<?php echo base_url(); ?>assets/frontend/img/demo-3.jpg">
							<img src="<?php echo base_url(); ?>assets/frontend/img/demo-3.jpg" alt="">
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
						<a data-rel="prettyPhoto[gallery1]" href="<?php echo base_url(); ?>assets/frontend/img/demo-4.jpg">
							<img src="<?php echo base_url(); ?>assets/frontend/img/demo-4.jpg" alt="">
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
						<a data-rel="prettyPhoto[gallery1]" href="<?php echo base_url(); ?>assets/frontend/img/demo-5.jpg">
							<img src="<?php echo base_url(); ?>assets/frontend/img/demo-5.jpg" alt="">
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
						<a data-rel="prettyPhoto[gallery1]" href="<?php echo base_url(); ?>assets/frontend/img/demo-6.jpg">
							<img src="<?php echo base_url(); ?>assets/frontend/img/demo-6.jpg" alt="">
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
					<img src="<?php echo base_url(); ?>assets/frontend/images/icon_infinity.svg" alt="Load more">
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
							<img src="<?php echo base_url(); ?>assets/frontend/img/demo-7.jpg" alt="">
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
							<img src="<?php echo base_url(); ?>assets/frontend/img/demo-8.jpg" alt="">
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
							<img src="<?php echo base_url(); ?>assets/frontend/img/demo-9.jpg" alt="">
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
							<img src="<?php echo base_url(); ?>assets/frontend/img/demo-10.jpg" alt="">
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
							<img src="<?php echo base_url(); ?>assets/frontend/img/demo-7.jpg" alt="">
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
							<img src="<?php echo base_url(); ?>assets/frontend/img/demo-8.jpg" alt="">
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
					<img src="<?php echo base_url(); ?>assets/frontend/images/icon_infinity.svg" alt="Load more">
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
                                <img src="<?php echo base_url(); ?>assets/frontend/img/icon_editing.png" alt="">
                                <p class="fw-slide-text">Video Editing</p>
                            </li>
                            <li class="fw-slide">
                                <img src="<?php echo base_url(); ?>assets/frontend/img/icon_clear.png" alt="">
                                <p class="fw-slide-text">Premium Cleer</p>
                            </li>
                            <li class="fw-slide">
                                <img src="<?php echo base_url(); ?>assets/frontend/img/icon_display.png" alt="">
                                <p class="fw-slide-text">For All Displays</p>
                            </li>
                            <li class="fw-slide">
                                <img src="<?php echo base_url(); ?>assets/frontend/img/icon_time.png" alt="">
                                <p class="fw-slide-text">Right On Time</p>
                            </li>
                            <li class="fw-slide">
                                <img src="<?php echo base_url(); ?>assets/frontend/img/icon_ideas.png" alt="">
                                <p class="fw-slide-text">Innovative Ideas</p>
                            </li>
                            <li class="fw-slide">
                                <img src="<?php echo base_url(); ?>assets/frontend/img/icon_sound.png" alt="">
                                <p class="fw-slide-text">Perfect Sound</p>
                            </li>
                            <li class="fw-slide">
                                <img src="<?php echo base_url(); ?>assets/frontend/img/icon_solution.png" alt="">
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
    <?php $this->load->view('main/layout/footer'); ?>
    <!-- END Footer -->

</body>

<!--Load JavaScript-->
<?php $this->load->view('main/layout/javascript'); ?>
</html>