<?php
  $id= "";
  $title = "";
  $description = "";
  $picture = "";
  $category_id = "";
  $team = "";
  if ($template['op']=="edit") {
    foreach ($template['sql']->result() as $obj) {
      $op = "edit";
      $id = $obj->id;
      $title = $obj->title;
      $description = $obj->description;
      $picture = $obj->picture;
      $category_id = $obj->category_id;
      $team = $obj->team;
    }
  }
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Form Karya
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-camera"></i> Home</a></li>
      <li>Karya</li>
      <li class="active">Form Karya</li>
    </ol>
</section>

  <!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="box">
        <div class="box-header">
            
        </div>
        <div class="box-body">
            <?php echo form_open_multipart('karya/create_karya/' , array('id' => 'img'));?>
                <input type="hidden" name="op" value="<?php echo $template['op'];?>">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" value="<?php echo $title;?>" class="form-control" placeholder="Title" required />
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="ckeditor" name="description" rows="10" cols="80"><?php echo $description;?></textarea>
                </div>
                <div class="form-group">
                  <label>Picture</label>
                  <img id="uploadPreview" style="display:block;margin-left:auto;margin-right:auto;max-width:100%;max-height:300px;" class="thumbnail" src="<?php if($template['op']=="tambah"){$picture="";}else {echo base_url().$picture;}?>" required/>
                  <input id="uploadImage" type="file" name="picture" onchange="PreviewImage();" required/>
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" id="form-field-select-1" name="category" required>
                    <option value=""> </option>
                      <?php foreach ($template['karya']->result() as $obj1) 
                      {
                      ?>
                          <option value="<?php echo $obj1->id ?>" <?php if($category_id==$obj1->id){echo 'selected';}?>><?php echo $obj1->category?></option>";
                      <?php
                      } 
                      ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Team</label>
                  <input type="text" name="team" value="<?php echo $team;?>" class="form-control" placeholder="Team" required />
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