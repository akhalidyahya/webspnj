<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php if($this->session->userdata('picture')==""){echo base_url('assets/backoffice/img/default_avatar.png');}else{echo base_url().$this->session->userdata('picture');}?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('nama') ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="<?php if($this->uri->segment(1) == 'main__') { echo 'active open'; } ?>">
        <a href="<?php echo site_url('main__')?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="<?php if($this->uri->segment(1) == 'akun') { echo 'active open'; } ?>">
        <a href="<?php echo site_url('akun')?>">
          <i class="fa fa-users"></i> <span>Akun</span>
        </a>
      </li>
      <li class="<?php if($this->uri->segment(1) == 'categories') { echo 'active open'; } ?>">
        <a href="<?php echo site_url('categories')?>">
          <i class="fa fa-random"></i> <span>Categories</span>
        </a>
      </li>
      <li class="<?php if($this->uri->segment(1) == 'galleries') { echo 'active open'; } ?>">
        <a href="<?php echo site_url('galleries')?>">
          <i class="fa fa-photo"></i> <span>Galleries</span>
        </a>
      </li>
      <li class="<?php if($this->uri->segment(1) == 'karya') { echo 'active open'; } ?>">
        <a href="<?php echo site_url('karya')?>">
          <i class="fa fa-camera"></i> <span>karya</span>
        </a>
      </li>
      <li class="<?php if($this->uri->segment(1) == 'media') { echo 'active open'; } ?>">
        <a href="<?php echo site_url('media')?>">
          <i class="fa fa-film"></i> <span>Media</span>
        </a>
      </li>
      <li class="<?php if($this->uri->segment(1) == 'news') { echo 'active open'; } ?>">
        <a href="<?php echo site_url('news')?>">
          <i class="fa fa-newspaper-o"></i> <span>News</span>
        </a>
      </li>
          
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>