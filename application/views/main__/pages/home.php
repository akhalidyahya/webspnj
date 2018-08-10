<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title><?php echo $template['title']?></title>
	<?php $this->load->view('main__/layout/head'); ?>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
    <!-- loader -->
	<?php $this->load->view('main__/layout/loader'); ?>
    <!-- END loader -->
    
<div class="wrapper">

  <!-- header -->
  <?php $this->load->view('main__/layout/header')?>
  <!-- END header -->

  <!-- sidebar -->
  <?php echo $template['sidebar']; ?>
  <!-- END sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- dashboard -->
  <?php echo $template['content']?>
  <!-- END dasboard -->
</div>
<!-- /.content-wrapper -->

  <!-- footer -->
  <?php $this->load->view('main__/layout/footer')?>
  <!-- END footer -->

</div>

    <!-- javascript -->
    <?php $this->load->view('main__/layout/javascript')?>
    <!-- END javascript -->
</body>
</html>