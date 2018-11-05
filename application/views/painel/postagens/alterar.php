<?php $this->load->view('painel/postagens/header_form'); ?>

<div class="box box-primary" style="padding: 3%;">
    <div class="box-header with-border">
        <h3 class="box-title"><?php $h2; ?></h3>
    </div>
    <?php
    echo form_open_multipart('postagens/editar');
    ?>
    <div class="form-group">
        <?php
        $data = array(
            'value' => $id,
            'name' => 'id',
            'class' => 'form-control',
            'id' => 'exampleInputEmail1',
            'readonly' => 'readonly'
        );
        echo form_input($data);
        ?>

    </div>
    <div class="form-group">
        <?php
        $data = array(
            'value' => $titulo,
            'name' => 'titulo',
            'placeholder' => 'Titulo da postagem',
            'class' => 'form-control',
            'id' => 'exampleInputEmail1'
        );
        echo form_input($data);
        ?>

    </div>
    <div class="form-group">
        <?php
        $data = array(
            'value' => $texto_destaque,
            'name' => 'texto_destaque',
            'placeholder' => 'Texto destaque',
            'class' => 'form-control',
            'id' => 'exampleInputEmail1'
        );
        echo form_input($data);
        ?>
    </div>
    </br></br>

    <?php
    $data = array(
        'value' => $texto,
        'name' => 'texto',
        'class' => 'textarea',
        'id' => 'ckeditor',
        'style' => 'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;'
    );
    echo form_textarea($data);
    ?>

    </br>
    <?php
    $data = array(
        'name' => 'imagem',
        'class' => 'input_box',
       
        'type' => 'file',
        'id' => 'exampleInputFile'
    );
    echo form_upload($data);

//   echo form_label('Imagem da postagem:', 'imagem');
//   echo form_upload('imagem');
    ?>
    <div class="box-footer">
        <?php
        $data = array(
            'type' => 'submit',
            'value' => 'Submit',
            'class' => 'btn btn-primary'
        );
        echo form_submit($data);
        ?>
    </div>
</div>
<?php echo form_close(); ?>
<?php $this->load->view('painel/postagens/footer_form'); ?>

