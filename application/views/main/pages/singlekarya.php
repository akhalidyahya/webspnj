<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>Sahabat PNJ | Karya</title>
        <?php $this->load->view('main/layout/head'); ?>

        <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->

    </head>
    <body class="single-berita">

        <!-- loader -->
            <?php $this->load->view('main/layout/loader'); ?>
        <!-- END loader -->

        <!-- Nav -->
            <?php $this->load->view('main/layout/nav'); ?>
        <!-- END Nav -->


        <article id="singleberita" class="section portfolio">
            <div class="center-relative content-1170">
                <a href="index.html"><img class="nav-logo" src="<?php echo base_url(); ?>assets/frontend/img/logo-white.png" alt="SPNJ" /></a>
                <div class="entry-content">
                    <div class="content-wrap relative">
                        <a class="absolute x-close" href="index.html#karya">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/icon_x.svg" alt="Close">
                        </a>
                        <div class="one margin-0">
                            <img src="<?php echo base_url(); ?>assets/frontend/img/demo-11.jpg" alt="">
                        </div>

                        <div class="clear"></div>
                        <br>
                        <br>
                        <br>
                        <div class="one_half text-right">
                            <p>
                                <span style="color: #adadad;">Karya:</span> Handmade<br>
                                <span style="color: #adadad;">Kategori:</span> Est Lorem<br>
                            </p>
                            <br>
                            <br>
                        </div>
                        <div class="one_half last ">
                            <h1>Handmade for Everyone</h1>
                            <p>We choose to go to the moon in this decade and do the other things, not because they are easy.</p>
                            <br>
                            <p>
                                Because they are hard, because that goal will serve to organize and measure the best of our energies and skills, because that challenge is one that we are willing to accept, one we are unwilling to postpone and one.<br>
                            </p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <!-- Footer -->
            <?php $this->load->view('main/layout/footer'); ?>
            <!-- END Footer -->
        </article>


        <!--Load JavaScript-->
        <?php $this->load->view('main/layout/javascript'); ?>
    </body>
</html>
