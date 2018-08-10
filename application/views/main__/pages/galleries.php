<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Galleries
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-photo"></i> Home</a></li>
      <li class="active">Galleries</li>
    </ol>
</section>

  <!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="box">
        <div class="box-header">
            <a href="<?php echo site_url('galleries/form_galleries')?>" class="btn btn-info"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Picture</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    $no=0;
                    foreach ($template['galleries']->result() as $obj)
                    {
                        $no++;
                        ?>
                                <tr>
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $obj->title;?></td>
                                    <td><img src="<?php echo base_url().$obj->picture;?>" class="thumbnail img-obj"/></td>
                                    <td>
                                        <a class="btn btn-xs btn-info" href="<?php echo site_url();?>/galleries/update_galleries/<?php echo $obj->id;?>"><i class='fa fa-edit'></i> Edit</a> 
                                        <a  class="btn btn-xs btn-danger" href="javascript:if(confirm('Apakah Anda yakin ingin menghapus ?')){document.location='<?php echo site_url();?>/galleries/delete_galleries/<?php echo $obj->id;?>';}"><i class='fa fa-close'></i> Hapus</a>
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