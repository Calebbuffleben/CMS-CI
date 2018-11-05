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

        <title><?php $titulo ?></title>
        <?php $this->load->view('header_site');?>
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


        
        
        <div class="section" style="margin-top: 5%;">
            <div class="container">
                <div class="row">
                    <!-- Blog Post -->
                    <div class="col-sm-12">
                        <div class="blog-post blog-single-post">
                            <div class="single-post-title">
                                <h2><?php echo $titulo ?></h2>
                            </div>

                            <div class="single-post-image">
                                <img width="800" height="400" src="<?php echo base_url('uploads/' . $imagem); ?>" alt="Post Title">
                            </div>
                            							
                            <div class="single-post-content">
                                <h3></h3>
                                <?php echo $texto ?>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Post -->
                    <!-- Sidebar -->
                    
                    <!-- End Sidebar -->
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="container">

                <div class="row">

                    <div class="col-footer col-md-4 col-xs-6">

                    </div>				
                    <div class="col-footer col-md-4 col-xs-6">
                    
                    </div>
                    <div class="col-footer col-md-4 col-xs-6">
                    </div>

                </div>
                <div class="row">
                    
                </div>
            </div>
        </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="<?php echo base_url('assets/assets_blog/js/bootstrap.min.js'); ?>"></script>

        <!-- Scrolling Nav JavaScript -->
        <script src="<?php echo base_url('assets/assets_blog/js/jquery.easing.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/assets_blog/js/scrolling-nav.js'); ?>"></script>		

    </body>
</html>