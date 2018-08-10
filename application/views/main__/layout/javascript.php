<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/backoffice/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/backoffice/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/backoffice/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/backoffice/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/backoffice/js/app.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/backoffice/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>assets/backoffice/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/backoffice/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url();?>assets/backoffice/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo base_url();?>assets/backoffice/plugins/chartjs/Chart.min.js"></script>
<!-- script__ -->
<script src="<?php echo base_url();?>assets/backoffice/js/script__.js"></script>
<script src="<?php echo base_url();?>assets/backoffice/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>assets/backoffice/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/backoffice/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/backoffice/plugins/ckeditor/ckeditor.js"></script>
    <!-- categories -->
    <script type="text/javascript">
            $(function(){
                $.ajaxSetup({
                    type:"post",
                    cache:false,
                    dataType:"json"
                })
                
                $(document).on("click","td",function(){
                    $(this).find("span[class~='caption']").hide();
                    $(this).find("input[class~='editor']").fadeIn().focus();
                });
                
    
                $("#tambah-data").click(function(){
                    $.ajax({
                    url:"<?php echo site_url('/categories/create_categories'); ?>",
                    success:function(a){
                    var ele="";
                    ele+="<tr data-id='"+a.id+"'>";
                    ele+="<td><span class='span-category caption' data-id='"+a.id+"'></span> <input type='text' class='field-category form-control editor' data-id='"+a.id+"'/></td>";
                        
                    ele+="<td><button class='btn btn-xs btn-danger hapus' data-id='"+a.id+"'><i class='glyphicon glyphicon-remove'></i> Hapus</button></td>";
                        
                    ele+="</tr>";
                    
                    var element=$(ele);
                        element.hide();
                        element.prependTo("#table-body").fadeIn(1500);

                    }
                    });
                    });
             
                $(document).on("keydown",".editor",function(e){
                    if(e.keyCode==13){
                        var target=$(e.target);
                        var value=target.val();
                        var id=target.attr("data-id");
                        var data={id:id,value:value};
                        if(target.is(".field-category")){
                            data.modul="category";
                        }
                        
                    $.ajax({
                        data:data,
                        url:"<?php echo site_url('/categories/update_categories'); ?>",
                        success: function(a){
                            target.hide();
                            target.siblings("span[class~='caption']").html(value).fadeIn();
                        }
                    })
                    }
                });
                
                $(document).on("click",".hapus",function(){
                    var id=$(this).attr("data-id");
                    swal({
                        title:"Hapus Akun",
                        text:"Yakin akan menghapus ini?",
                        type:"warning",
                        showCancelButton:true,
                        confirmButtonText:"Hapus",
                        closeOnConfirm: true,
                    },
       
                        function(){
                            $.ajax({
                                url:"<?php echo site_url('/categories/delete_categories'); ?>",
                                data:{id:id},
                                success: function(){
                                    $("tr[data-id='"+id+"']").fadeOut("fast",function(){
                                        $(this).remove();
                                    });
                                }
                            });
                        });
                });
            });
    </script>