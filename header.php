<?php
/**
 * PROJECT : blog
 * FILE    : header.php
 * AUTHOR  : Younger Shen
 * EMAIL   : younger.shen@hotmail.com
 * CELL    : 13811754531
 * TIME    : 2018/3/9 15:59
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/static/css/bundle.min.css">
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/js/bundle.min.js"></script>
    <?php wp_head(); ?>
</head>
