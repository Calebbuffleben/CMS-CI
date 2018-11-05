<?php $this->load->view('template/header'); ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Responsive Hover Table</h3>

                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding" style="margin-left: 18%;">
                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Texto destaque</th>  
                    </tr>
                    <?php
                    if ($postagens = $this->postagens->get(15)) {
                        foreach ($postagens as $linha):
                            ?>
                            <tr>
                                <td><?php echo $linha->id; ?></td>
                                <td><?php echo $linha->titulo; ?></td>
                                <td><?php echo $linha->texto_destaque; ?></td>

                                <td><a href="<?php echo 'post/' . $linha->id; ?>"></a></td>
                                <td><a href="<?php echo 'mostrar/' . $linha->id; ?>"></a></td>
                                <td><a href="<?php echo 'excluir/' . $linha->id; ?>"></a></td>

                            </tr>
                            <?php
                        endforeach;
                    }
                    else {
                        echo '<tr><td>Noticia nao encontrada</td></tr>';
                    }
                    ?>

                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
<?php $this->load->view('template/footer'); ?>