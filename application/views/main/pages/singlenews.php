<?php 
$judul="";
$desc="";
$pict="";
$date="";
$cat="";
$nama ="";
foreach ($template['berita'] as $data) {
    $judul = $data->judul;
    $desc = $data->description;
    $pict = $data->picture;
    $date = $data->date;
    $cat = $data->category;
    $nama = $data->nama;        
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>Sahabat PNJ | Berita</title>
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
                        <a class="absolute x-close" href="<?php echo base_url(); ?>#berita">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/icon_x.svg" alt="Close">
                        </a>
                        <div class="one margin-0">
                            <img src="<?php echo base_url().$pict; ?>" alt="">
                        </div>

                        <div class="clear"></div>
                        <br>
                        <br>
                        <br>
                        <div class="one center-text">
                            <p>
                                <span style="color: #adadad;">Penulis:</span> <?php echo $nama ?><br>
                                <span style="color: #adadad;">kategori:</span> <?php echo $cat ?><br>
                                <span style="color: #adadad;">Terbit:</span> <?php echo date('D, m M Y', strtotime($date)) ?>
                            </p>
                        </div>
                        <div class="one last" class="konten-berita">
                            <h1><?php echo $judul ?></h1>
                            <div class="teks-berita">
                                <?php echo $desc ?>
                            </div>
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
