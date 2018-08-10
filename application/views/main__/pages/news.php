<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      News
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-newspaper-o"></i> Home</a></li>
      <li class="active">News</li>
    </ol>
</section>

  <!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="box">
        <div class="box-header">
            <a href="<?php echo site_url('news/form_news')?>" class="btn btn-info"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Picture</th>
                        <th>Date</th>
                        <th>Created by</th>
                        <th>Category</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    $no=0;
                    foreach ($template['news']->result() as $obj)
                    {
                        $no++;
                        ?>
                                <tr>
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $obj->judul;?></td>
                                    <td><?php echo $obj->description;?></td>
                                    <td><img src="<?php echo base_url().$obj->picture;?>" class="thumbnail img-obj"/></td>
                                    <td><?php echo $obj->date;?></td>
                                    <td><?php echo $obj->nama;?></td>
                                    <td><?php echo $obj->category;?></td>
                                    <td>
                                        <a class="btn btn-xs btn-info" href="<?php echo site_url();?>/news/update_news/<?php echo $obj->id;?>"><i class='fa fa-edit'></i> Edit</a> 
                                        <a  class="btn btn-xs btn-danger" href="javascript:if(confirm('Apakah Anda yakin ingin menghapus ?')){document.location='<?php echo site_url();?>/news/delete_news/<?php echo $obj->id;?>';}"><i class='fa fa-close'></i> Hapus</a>
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