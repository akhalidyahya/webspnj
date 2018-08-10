<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $template['title']?></title>
	<?php $this->load->view('main__/layout/head'); ?>
</head>
<body class="hold-transition login-page">
    <!-- loader -->
	<?php $this->load->view('main__/layout/loader'); ?>
    <!-- END loader -->
    
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo site_url();?>/main"><b>Sahabat</b>PNJ</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <?php echo form_open('login/ceklogin')?>
    <form>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="pass">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <?php echo form_close()?>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
    
    <!-- javascript -->
    <?php $this->load->view('main__/layout/javascript')?>
    <!-- END javascript -->
</body>
</html>