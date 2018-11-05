<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
    <?php $this->load->view('header_site');?>
        <title><?php echo $h2; ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('assets/assets_blog/css/bootstrap.css'); ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/assets_blog/css/main.css'); ?>">
        

        <script src="//use.edgefonts.net/bebas-neue.js"></script>

        <!-- Custom Fonts & Icons -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url('assets/assets_blog/css/icomoon-social.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/assets_blog/css/font-awesome.min.css'); ?>">

        <script src="<?php echo base_url('assets/assets_blog/js/modernizr-2.6.2-respond-1.1.0.min.js'); ?>"></script>


    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


        

        <!-- Page Title -->
        <div class="section ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="row">
                    <?php
                    if ($postagens = $this->postagens->get(15)) {
                        foreach ($postagens as $linha):
                            ?>
                            <!-- Blog Post Excerpt -->
                            <div class="col-sm-6">
                                <div class="blog-post blog-single-post">
                                    <div class="single-post-title">
                                        <h2><?php echo $linha->titulo; ?> </h2>
                                    </div>

                                    <div class="single-post-image">
                                        <img src="<?php echo base_url('uploads/' . $linha->imagem); ?>" alt="Post Title">
                                    </div>
                                    <div class="single-post-content">
                                        <p>
                                            <?php echo $linha->texto_destaque; ?>
                                        </p>
                                        <?php echo anchor('home/mostrar/' . $linha->id, 'Ler Mais', 'class="btn"'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- End Blog Post Excerpt -->
                            <?php
                        endforeach;
                    }
                    ?>
                    <!-- End Blog Post Excerpt -->	

                    <!-- Pagination 
                    <div class="pagination-wrapper ">
                        <ul class="pagination pagination-sm">
                            <li class="disabled"><a href="#">Previous</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>-->
                </div>
            </div>
        </div>

        <!-- Footer -->
    <?php $this->load->view('footer_site');?>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="<?php echo base_url('assets/assets_blog/js/bootstrap.min.js'); ?>"></script>

        <!-- Scrolling Nav JavaScript -->
        <script src="<?php echo base_url('assets/assets_blog/js/jquery.easing.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/assets_blog/js/scrolling-nav.js'); ?>"></script>		

    </body>
</html>