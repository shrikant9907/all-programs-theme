<!doctype html>
<html <?php language_attributes(); ?>>
    <head> 
                
        <title>Code Blog - Shrikant Yadav</title>
          
        <!-- Required meta tags -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="google-site-verification" content="YLQihgCVo22EoKTfvFY58VvdD0R6ZGrq6Odor2ypjcI" />


        <!-- required Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;900&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.min.css" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/utils.min.css" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" />

 
        <?php if(is_taxonomy('tutorial_cat') || is_taxonomy('tutorial_tag') || is_singular('tutorial')) { ?>
            <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/codemirror.css">
        <?php } ?>

        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>> 
    
<header id="main_header" class="bg-light">
    <div class="container">
    <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light w-100">
        <a class="navbar-brand" href="<?php echo site_url('/'); ?>">
            <span class="text-uppercase"><?php echo bloginfo('name'); ?></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse position-relative" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('/'); ?>">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Programs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo site_url('/programs-category/php/'); ?>">Programs in PHP</a>
                        <a class="dropdown-item" href="<?php echo site_url('/programs-category/python/'); ?>">Programs in Python</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <!-- <a class="dropdown-item" href="<?php echo site_url('/programs-category/c/'); ?>">Programs in C</a> -->
                        <!-- <a class="dropdown-item" href="<?php echo site_url('/programs-category/c-plus-plus/'); ?>">Programs in C++</a> -->
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tutorials
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo site_url('/tutorial_cat/php-development/'); ?>">PHP Tutorial</a>
                        <a class="dropdown-item" href="<?php echo site_url('/tutorial_cat/wordpress/'); ?>">WordPress Tutorial</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo site_url('/tutorial_cat/html/'); ?>">HTML & CSS Tutorial</a>
                        <!-- <a class="dropdown-item" href="<?php echo site_url('/tutorial_cat/css/'); ?>">CSS Tutorial</a> -->
                        <!-- <a class="dropdown-item" href="<?php echo site_url('/tutorial_cat/jquery/'); ?>">jQuery Tutorial</a> -->
                        <!-- <a class="dropdown-item" href="<?php echo site_url('/tutorial_cat/bootstrap/'); ?>">Bootstrap Tutorial</a> -->
                        <!-- <div class="dropdown-divider"></div> -->
                        <!-- <a class="dropdown-item" href="<?php echo site_url('/tutorial_cat/python/'); ?>">Python Tutorial</a> -->
                        <!-- <a class="dropdown-item" href="<?php echo site_url('/tutorial_cat/django/'); ?>">Django Tutorial</a> -->
                    </div>
                </li>
                <li class="nav-item dropdown d-none">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Examples
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo site_url('/examples-category/html-and-css/'); ?>">HTML & CSS Examples</a>
                        <a class="dropdown-item" href="<?php echo site_url('/examples-category/bootstrap/'); ?>">Bootstrap Examples</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <!-- <a class="dropdown-item" href="<?php echo site_url('/examples-category/php/'); ?>">PHP examples</a> -->
                        <!-- <a class="dropdown-item" href="<?php echo site_url('/examples-category/python/'); ?>">Python examples</a> -->
                        <!-- <div class="dropdown-divider"></div> -->
                        <!-- <a class="dropdown-item" href="<?php echo site_url('/examples-category/jquery/'); ?>">jQuery examples</a> -->
                        <!-- <a class="dropdown-item" href="<?php echo site_url('/examples-category/javascript/'); ?>">JavaScript examples</a> -->
                    </div>
                </li>
                <li class="nav-item dropdown  d-none">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Interview Questions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo site_url('/interview-questions-category/python/'); ?>">Web Design</a>
                        <a class="dropdown-item" href="<?php echo site_url('/interview-questions-category/django/'); ?>">Web Development</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo site_url('/interview-questions-category/html/'); ?>">Questions in HTML</a>
                        <a class="dropdown-item" href="<?php echo site_url('/interview-questions-category/css/'); ?>">Questions in CSS</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo site_url('/interview-questions-category/php/'); ?>">Questions in PHP</a>
                        <a class="dropdown-item" href="<?php echo site_url('/interview-questions-category/python/'); ?>">Questions in Python</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo site_url('/interview-questions-category/c/'); ?>">Questions in C</a>
                        <a class="dropdown-item" href="<?php echo site_url('/interview-questions-category/c-plus-plus/'); ?>">Questions in C++</a>
                    </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('/blog'); ?>">Blog</a></li>
            </ul>
        </div>
        </nav>
    </div>
    </div>
</header> 
    
