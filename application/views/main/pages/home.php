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
									Sahabat PNJ merupakan sebuah KSM yang bergerak dibidang pendidikan. Didalam KSM SPNJ terdapat 3 divisi utama. Yaitu
									divisi website, android, dan motion graphic. Kita dapat memilih
									salah satu dari ketiga divisi tersebut untuk belajar bersama-sama. Selain itu juga kita juga dapat menghasilkan karya-karya yang dapat dipamerkan sehingga membuat bangga diri kita dan TIK tentunya.
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
											Disini, kita akan belajar bagaimana membuat website mulai dari 0 hingga website secara keseluruhan.<br />
										</div>
									</div>
								</div>
								<div class="tentang-holder ">
									<img src="<?php echo base_url(); ?>assets/frontend/img/icon-4.png" alt="">
									<div class="tentang-content-holder">
										<div class="tentang-title">ANDROID</div>
										<div class="tentang-content">
											Disini, kita akan belajar bagaimana membuat aplikasi android mulai dari 0 hingga aplikasi secara keseluruhan.<br />
										</div>
									</div>
								</div>
								<div class="tentang-holder ">
									<img src="<?php echo base_url(); ?>assets/frontend/img/icon-2.png" alt="">
									<div class="tentang-content-holder">
										<div class="tentang-title">MOTION GRAPHIC</div>
										<div class="tentang-content">
											Disini, kita akan belajar bagaimana membuat sebuah video motion graphic mulai dari 0 hingga jadi secara keseluruhan.<br />
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

						<?php $no = 1; foreach ($template['berita'] as $data) { ?>
							<article class="relative berita-item-holder center-relative">
								<div class="num"><?php echo "0".$no; ?></div>
								<div class="info">
									<div class="author vcard "><?php echo $data->nama; ?></div>
									<div class="category-links">
										<ul>
											<li><a href="#"><?php echo $data->category; ?></a></li>
										</ul>
									</div>
								</div>
								<h3 class="entry-title">
									<a href="<?php echo base_url();?>index.php/berita/detail/<?php echo $data->id; ?>"><?php echo strip_tags(substr($data->judul,0,105)) ?></a>
								</h3>
								<div class="clear"></div>
							</article>
						<?php $no++; } ?>

						<div class="latest-post-bottom-text">
							<a href="<?php echo base_url();?>index.php/berita">SEMUA BERITA</a>
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
						<a data-rel="prettyPhoto[gallery1]" href="<?php echo base_url(); ?>uploads/galleries/DLg7BFhV4AAJxly.jpg">
							<img src="<?php echo base_url(); ?>uploads/galleries/DLg7BFhV4AAJxly.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">OPERN RECRUITMENT</p>
									
								</div>
							</div>
						</a>
					</div>
					<div class="grid-item element-item p_one_half">
						<a data-rel="prettyPhoto[gallery1]" href="<?php echo base_url(); ?>uploads/galleries/IMG-20171027-WA0007.jpg">
							<img src="<?php echo base_url(); ?>uploads/galleries/IMG-20171027-WA0007.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">BELAJAR</p>
									
								</div>
							</div>
						</a>
					</div>
					<div class="grid-item element-item p_one_half">
						<a data-rel="prettyPhoto[gallery1]" href="<?php echo base_url(); ?>uploads/galleries/29089581_155237701959776_6286609996989857792_n.jpg">
							<img src="<?php echo base_url(); ?>uploads/galleries/29089581_155237701959776_6286609996989857792_n.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">LINE SQUARE</p>
									
								</div>
							</div>
						</a>
					</div>
					<div class="grid-item element-item p_one_half">
						<a data-rel="prettyPhoto[gallery1]" href="<?php echo base_url(); ?>uploads/galleries/DLDdloRU8AIqIx0.jpg">
							<img src="<?php echo base_url(); ?>uploads/galleries/DLDdloRU8AIqIx0.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">OR</p>
									
								</div>
							</div>
						</a>
					</div>
					<div class="grid-item element-item p_one_half">
						<a data-rel="prettyPhoto[gallery1]" href="<?php echo base_url(); ?>uploads/galleries/z.jpg">
							<img src="<?php echo base_url(); ?>uploads/galleries/z.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">kerjasama</p>
									
								</div>
							</div>
						</a>
					</div>
					<div class="grid-item element-item p_one">
						<a data-rel="prettyPhoto[gallery1]" href="<?php echo base_url(); ?>uploads/galleries/DLgIEHCVoAAloBj.jpg">
							<img src="<?php echo base_url(); ?>uploads/galleries/DLgIEHCVoAAloBj.jpg" alt="">
							<div class="galeri-text-holder">
								<div class="galeri-text-wrapper">
									<p class="galeri-type">
										<!-- <img src="images/icon_post.svg" alt=""> -->
										<i class="fa fa-search" style="font-size: 4em;"></i>
									</p>
									<p class="galeri-text">wawancara</p>
									
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="clear"></div>
				<div class="block galeri-load-more-holder">
					<a target="_self" href="http://www.instagram.com/sahabat_pnj" class="more-posts">LOAD MORE</a>
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
				<?php foreach ($template['karya'] as $data) { ?>
					<div class="grid" id="galeri-grid">
						<div class="grid-sizer"></div>
						<div class="grid-item element-item p_one_half">
							<a href="<?php echo base_url();?>index.php/hasil/detail/<?php echo $data->id ?>">
								<img src="<?php echo base_url().$data->picture; ?>" alt="">
								<div class="galeri-text-holder">
									<div class="galeri-text-wrapper">
										<p class="galeri-type">
											<!-- <img src="images/icon_post.svg" alt=""> -->
											<i class="fa fa-search" style="font-size: 4em;"></i>
										</p>
										<p class="galeri-text"><?php echo $data->title ?></p>
										<p class="galeri-sec-text"><?php echo $data->category ?></p>
									</div>
								</div>
							</a>
						</div>
					</div>
				<?php } ?>

				<div class="clear"></div>
				<div class="block galeri-load-more-holder">
					<a target="_self" href="<?php echo base_url();?>index.php/hasil" class="more-posts">LOAD MORE</a>
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
                        	<?php foreach ($template['media'] as $data) { ?>
	                            <li class="fw-slide">
	                                <img src="<?php echo base_url().$data->picture;?>" alt="">
	                                <p class="fw-slide-text"><?php echo $data->title ?></p>
	                            </li>
                        	<?php } ?>
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