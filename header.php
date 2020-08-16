<!doctype html>
<html <?php language_attributes(); ?>>
    <head> 
                
        <title><?php wp_title(); ?></title>
          
        <!-- Required meta tags -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="google-site-verification" content="YLQihgCVo22EoKTfvFY58VvdD0R6ZGrq6Odor2ypjcI" />

        <!-- Favicon -->
        <link rel='icon' href='<?php echo get_stylesheet_directory_uri(); ?>/images/all-programs-favicon.png' type='image/x-icon'/ >

        <!-- required Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

        <?php $timestamp = date('timestamp'); ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.min.css?ver=<?php echo $timestamp; ?>" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/utils.min.css?ver=<?php echo $timestamp; ?>" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css?ver=<?php echo $timestamp; ?>" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css?ver=<?php echo $timestamp; ?>" /> 
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/codemirror.css">

        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>> 
    
<header id="main_header" class="header_style1 bg-light fixed_top sticky-top shadow-sm">
    <div class="container">
    <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light w-100">
        <a class="navbar-brand p-0" href="<?php echo site_url('/'); ?>">
            <!-- <span class="text-uppercase mont_serrat text-primary"><?php //echo bloginfo('name'); ?></span> -->
            <img class="img-fluid logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/all-programs-logo.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
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
                    How to
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo site_url('/programs-category/angular'); ?>">Angular 7/8/9</a>
                        <a class="dropdown-item" href="<?php echo site_url('/programs-category/bootstrap'); ?>">Bootstrap</a>
                        <a class="dropdown-item" href="<?php echo site_url('/programs-category/html-and-css'); ?>">HTML and CSS</a>
                        <!-- <a class="dropdown-item" href="<?php echo site_url('/programs-category/html-and-css'); ?>">HTML & CSS</a> -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo site_url('/programs-category/wordpress'); ?>">WordPress</a>
                        <!-- <a class="dropdown-item" href="<?php echo site_url('/programs-category/angular'); ?>">Angular</a> -->
                        <!-- <a class="dropdown-item" href="<?php echo site_url('/programs-category/angular'); ?>">JavaScript</a> -->
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tutorials
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo site_url('/tutorial_cat/basics-of-php/'); ?>">Basics of PHP</a>
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
                <li class="nav-item"> <a class="nav-link pr-0" href="<?php echo site_url('/blog'); ?>">Blog</a></li>
            </ul>
        </div>
        </nav>
    </div>
    </div>
</header> 
    
