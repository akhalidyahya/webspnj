<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Categories
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-random"></i> Home</a></li>
      <li class="active">Categories</li>
    </ol>
</section>

  <!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="box">
        <div class="box-header">
            <a class="btn btn-info" id="tambah-data"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        <div class="box-body">
            <table id="table-data" class="table table-striped">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody id="table-body">
                    <?php
                        foreach ($template['categories'] as $obj){
                            echo "<tr data-id='$obj[id]'>
                                <td><span class='span-category caption' data-id='$obj[id]'>$obj[category]</span> <input type='text' class='field-category form-control editor' value='$obj[category]' data-id='$obj[id]'/></td>

                                <td><button class='btn btn-xs btn-danger hapus' data-id='$obj[id]'><i class='glyphicon glyphicon-remove'></i> Hapus</button></td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
  <!-- /.content -->