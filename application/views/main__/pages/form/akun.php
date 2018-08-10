<?php
  $id= "";
  $nama = "";
  $email = "";
  $password = "";
  $role = "";
  $picture = "";
  if ($template['op']=="edit") {
    foreach ($template['sql']->result() as $obj) {
      $op = "edit";
      $id = $obj->id;
      $nama = $obj->nama;
      $email = $obj->email;
      $password = $obj->password;
      $role = $obj->role;
      $picture = $obj->picture;
    }
  }
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Form Akun
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-users"></i> Home</a></li>
      <li>Akun</li>
      <li class="active">Form Akun</li>
    </ol>
</section>

  <!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="box">
        <div class="box-header">
            
        </div>
        <div class="box-body">
            <?php echo form_open_multipart('akun/create_akun/' , array('id' => 'img'));?>
                <input type="hidden" name="op" value="<?php echo $template['op'];?>">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" value="<?php echo $nama;?>" class="form-control" placeholder="Nama" required />
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" value="<?php echo $email;?>" class="form-control" placeholder="Email" required />
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" value="<?php echo $password;?>" class="form-control" placeholder="Password" required />
                </div>
                <div class="form-group">
                  <label>Hak Akses</label>
                  <select class="form-control" id="form-field-select-1" name="role" required>
                    <option value=""> </option>
                    <option value="admin" <?php if($role=="admin"){echo 'selected';}?>>Admin</option>
                    <option value="superadmin" <?php if($role=="superadmin"){echo 'selected';}?>>Super Admin</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Picture</label>
                  <img id="uploadPreview" style="display:block;margin-left:auto;margin-right:auto;max-width:100%;max-height:300px;" class="thumbnail" src="<?php if($template['op']=="tambah"){$picture="";}else {echo base_url().$picture;}?>" required/>
                  <input id="uploadImage" type="file" name="picture" onchange="PreviewImage();"/>
                </div>
                <button type="submit" class="btn btn-primary" id="img-submit" data-submit="Sending">Simpan</button>
            </form>
        </div>
    </div>
</section>
  <!-- /.content -->

<script type="text/javascript">
  function PreviewImage() 
  {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function (oFREvent) 
    {
      document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
  };
</script>