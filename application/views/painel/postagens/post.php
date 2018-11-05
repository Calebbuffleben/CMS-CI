<?php $this->load->view('template/header');?>

<section class="content" style="margin-left: 5%; margin-right: 5%;">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $titulo;?></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <img width="1150" height="800" src="<?php echo base_url('uploads/'.$imagem); ?>"/>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
           <?php echo $texto;?>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>

<div class="navbar navbar-fixed-bottom navbar-static navbar-inverse" style="position: static;">
    <div class="navbar-inner">
        <div class="container" style="margin-top: 8px;">
            <p class="text-gray pull-left">&copy; <?php echo date('Y'); ?> - CMS</p>
            <p class="text-gray pull-right">Created by Caleb Buffleben</p>
        </div>
    </div>
</div>
</body>
</html>
    