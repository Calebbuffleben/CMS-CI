<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css'); ?>">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url('plugins/iCheck/square/blue.css'); ?>">

    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-box-body">
                <div class="container">
                    <h1>Login</h1>
                    <?php
                    //Criação de formulario
                    echo form_open("login");

                    echo form_label("Usuario", "usuario");
                    ?> <div class="form-group has-feedback"> <?php
                    echo form_input(array(
                        "name" => "username",
                        "id" => "username",
                        "class" => "form-control",
                        "style" => "max-width: 295px;"
                    ));
                    ?> </div> <?php
                    echo form_label("Senha", "senha");
                    ?> <div class="form-group has-feedback"> <?php
                        echo form_password(array(
                            "name" => "password",
                            "id" => "password",
                            "class" => "form-control",
                        "style" => "max-width: 295px;"
                        ));
                        ?> </div> <?php
                        ?> <div class="col-xs-4"> <?php
                        echo form_button(array(
                            "class" => "btn btn-primary btn-block btn-flat",
                            "content" => "Login",
                            "type" => "submit",
                            "style" => "max-width: 270px;"
                        ));
                        ?> </div> <?php
                    echo form_close();
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>


