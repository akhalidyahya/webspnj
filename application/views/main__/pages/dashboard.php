<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Dashboard
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
</section>

  <!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-photo"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Galleries</span>
            <span class="info-box-number"><?php echo $template['galleries']->num_rows();?> Post</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-camera"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Karya</span>
            <span class="info-box-number"><?php echo $template['karya']->num_rows();?> Post</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-film"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Media</span>
            <span class="info-box-number"><?php echo $template['media']->num_rows();?> Post</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="fa fa-newspaper-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">News</span>
            <span class="info-box-number"><?php echo $template['news']->num_rows();?> Post</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div>
          <h4 align="center">News per Category</h4>
          <?php
            foreach($template['grafik'] as $data){
                $category_id[] = $data->category_id;
                $category[] = $data->category;
                $id[] = $data->id;
          }
          ?>
          <canvas id="canvas" width="1050" height="320" style="display:block;margin-left:auto;margin-right:auto;"></canvas>
          </div>
        </div>
      </div>
    </div>
</section>
  <!-- /.content -->

  <script src="<?php echo base_url();?>assets/backoffice/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function () {
      var lineChartData = {
                labels : <?php echo json_encode($category);?>,
                datasets : [
                    {
                        fillColor: "#3C8DBC",
                        strokeColor: "rgba(90,10,100,0.7)",
                        pointCOlor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(100,25,120,1)",
                        data: <?php echo json_encode($id);?>
                    }
                ]
            }
            var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
});
  </script>