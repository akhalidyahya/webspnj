<?php
  $id= "";
  $title = "";
  $picture = "";
  if ($template['op']=="edit") {
    foreach ($template['sql']->result() as $obj) {
      $op = "edit";
      $id = $obj->id;
      $title = $obj->title;
      $picture = $obj->picture;
    }
  }
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Form Media
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-camera"></i> Home</a></li>
      <li>Media</li>
      <li class="active">Form Media</li>
    </ol>
</section>

  <!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="box">
        <div class="box-header">
            
        </div>
        <div class="box-body">
            <?php echo form_open_multipart('media/create_media/' , array('id' => 'img'));?>
                <input type="hidden" name="op" value="<?php echo $template['op'];?>">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" value="<?php echo $title;?>" class="form-control" placeholder="Title" required />
                </div>
                <div class="form-group">
                  <label>Picture</label>
                  <img id="uploadPreview" style="display:block;margin-left:auto;margin-right:auto;max-width:100%;max-height:300px;" class="thumbnail" src="<?php if($template['op']=="tambah"){$picture="";}else {echo base_url().$picture;}?>" required/>
                  <input id="uploadImage" type="file" name="picture" onchange="PreviewImage();" required/>
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