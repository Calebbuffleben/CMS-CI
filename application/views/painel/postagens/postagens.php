<?php $this->load->view('template/header'); ?>
<div class="row">
    <div class="col-xs-12" style="margin: 1%;">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>    
                    <th><a href="<?php echo base_url('/postagens/form_show'); ?>?>"><span class="label label-danger">Cadastrar Nova Postagem</span></a></th>
                </tr>
                <tr>
                  <th>ID</th>
                  <th>Titulo</th>
                  <th>Texto destaque</th>  
                </tr>
                <?php
                    if($postagens = $this->postagens->get(15)){
                        foreach ($postagens as $linha):
                ?>
                <tr>
                  <td><?php echo $linha->id; ?></td>
                  <td><?php echo $linha->titulo; ?></td>
                  <td><?php echo $linha->texto_destaque; ?></td>
                  
                  <td><a href="<?php echo 'post/' . $linha->id; ?>"><span class="label label-primary" style="margin-left: -25%;">Ver postagem</span></a></td>
                  <td><a href="<?php echo 'mostrar/' . $linha->id; ?>"><span class="label label-success" style="margin-left: -20%;">Alterar</span></a></td>
                  <td><a href="<?php echo 'excluir/' . $linha->id; ?>"><span class="label label-danger" style="margin-left: -25%;">Excluir</span></a></td>
                  
                </tr>
                <?php
                        endforeach;
                    }
                    else{
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