<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Karya
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-camera"></i> Home</a></li>
      <li class="active">Karya</li>
    </ol>
</section>

  <!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="box">
        <div class="box-header">
            <a href="<?php echo site_url('karya/form_karya')?>" class="btn btn-info"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Picture</th>
                        <th>Category</th>
                        <th>Team</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    $no=0;
                    foreach ($template['karya']->result() as $obj)
                    {
                        $no++;
                        ?>
                                <tr>
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $obj->title;?></td>
                                    <td><?php echo $obj->description;?></td>
                                    <td><img src="<?php echo base_url().$obj->picture;?>" class="thumbnail img-obj"/></td>
                                    <td><?php echo $obj->category;?></td>
                                    <td><?php echo $obj->team;?></td>
                                    <td>
                                        <a class="btn btn-xs btn-info" href="<?php echo site_url();?>/karya/update_karya/<?php echo $obj->id;?>"><i class='fa fa-edit'></i> Edit</a> 
                                        <a  class="btn btn-xs btn-danger" href="javascript:if(confirm('Apakah Anda yakin ingin menghapus ?')){document.location='<?php echo site_url();?>/karya/delete_karya/<?php echo $obj->id;?>';}"><i class='fa fa-close'></i> Hapus</a>
                                    </td>
                                </tr>
                        <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
  <!-- /.content -->