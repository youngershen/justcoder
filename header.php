<?php
/**
 * PROJECT : justcoder
 * FILE    : header.php
 * AUTHOR  : Younger Shen
 * EMAIL   : younger.shen@hotmail.com
 * CELL    : 13811754531
 * TIME    : 2018/3/9 15:59
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/static/css/bundle.min.css">
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/js/bundle.min.js"></script>
    <?php wp_head(); ?>
</head>

<body  <?php body_class(); ?>>
    <div id="justcoder-container" class="container">
        <div class="justcoder-navbar " id="justcoder-navbar">
            <header class="justcoder-navbar-header">
                <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                    <a class="navbar-brand" href="<?php echo get_bloginfo('url')?>"><?php echo get_bloginfo('name')?></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item activee">
                                <a class="nav-link" href="#"><?php echo __('About', 'justcoder') ?> <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>
                        <form class="form-inline mt-2 mt-md-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="<?php echo __('Search', 'justcoder') ?>" aria-label="<?php echo __('Search', 'justcoder') ?>">
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><?php echo __('Search', 'justcoder') ?></button>
                        </form>
                    </div>
                </nav>
            </header>
        </div>
        <div id="justcoder-content" class="justcoder-content">
