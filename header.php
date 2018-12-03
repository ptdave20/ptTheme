<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo get_bloginfo( 'name' ); ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a>
        <button class="navbar-toggler" type="button" data-target="#topNavbar" aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php wp_nav_menu(array(
            'menu_class' => 'navbar-nav',
            'walker' => new bs4Navwalker(),
        )); ?>
    </nav>
    