<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>Sahabat PNJ | Berita</title>
        <?php $this->load->view('main/layout/head'); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/css/pagination.css">

        <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->

    </head>
    <body class="all-berita">

        <!-- loader -->
            <?php $this->load->view('main/layout/loader'); ?>
        <!-- END loader -->

        <!-- Nav -->
            <?php $this->load->view('main/layout/nav'); ?>
        <!-- END Nav -->


        <div id="allberita" class="all-berita-wrapper section portfolio">
            <div class="center-relative content-1170">
                <a href="index.html"><img class="nav-logo" src="<?php echo base_url(); ?>assets/frontend/img/logo-white.png" alt="SPNJ" /></a>
                    
                <div class="entry-content">
                    <div class="berita-wrapper">
                        <div class="content-wrap relative">
                            <a class="absolute x-close" href="index.html#berita">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/icon_x.svg" alt="Close">
                            </a>
                            <h1 class="berita-page-title">BERITA TERBARU</h1>
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

                                <article class="relative berita-item-holder center-relative">
                                    <div class="num">05</div>
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
                            </div>
                            <ul class="pagination">
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                
            </div>

            <!-- Footer -->
            <?php $this->load->view('main/layout/footer'); ?>
            <!-- END Footer -->
        </div>

        <!--Load JavaScript-->
        <?php $this->load->view('main/layout/javascript'); ?>
    </body>
</html>
