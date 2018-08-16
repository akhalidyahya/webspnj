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
                <a href="<?php echo base_url();?>"><img class="nav-logo" src="<?php echo base_url(); ?>assets/frontend/img/logo-white.png" alt="SPNJ" /></a>
                    
                <div class="entry-content">
                    <div class="berita-wrapper">
                        <div class="content-wrap relative">
                            <a class="absolute x-close" href="<?php echo base_url();?>#berita">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/icon_x.svg" alt="Close">
                            </a>
                            <h1 class="berita-page-title">BERITA TERBARU</h1>
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
                            </div>
                            <!-- <ul class="pagination">
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                            </ul> -->
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
