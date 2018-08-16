<?php 
$title="";
$desc="";
$pict="";
$cat="";
$team ="";
foreach ($template['berita'] as $data) {
    $title = $data->title;
    $desc = $data->description;
    $pict = $data->picture;
    $cat = $data->category;
    $team = $data->team;        
}
?>
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
                <a href="<?php echo base_url(); ?>"><img class="nav-logo" src="<?php echo base_url(); ?>assets/frontend/img/logo-white.png" alt="SPNJ" /></a>
                <div class="entry-content">
                    <div class="content-wrap relative">
                        <a class="absolute x-close" href="<?php echo base_url(); ?>#karya">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/icon_x.svg" alt="Close">
                        </a>
                        <div class="one margin-0">
                            <img src="<?php echo base_url().$pict; ?>" alt="">
                        </div>

                        <div class="clear"></div>
                        <br>
                        <br>
                        <br>
                        <div class="one_half text-right">
                            <p>
                                <span style="color: #adadad;">Karya:</span> <?php echo $team ?><br>
                                <span style="color: #adadad;">Kategori:</span> <?php echo $cat ?><br>
                            </p>
                            <br>
                            <br>
                        </div>
                        <div class="one_half last ">
                            <h1><?php echo $title ?></h1>
                            <?php echo $desc ?>
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
