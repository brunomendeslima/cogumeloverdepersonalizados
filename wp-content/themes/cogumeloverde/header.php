<?php
$home = get_template_directory_uri();
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?= geraTitle(); ?></title>
        <meta charset="utf-8"/>        
        <link rel="stylesheet" type="text/css" href="<?= $home; ?>/style.css"/>
        <!-- Bootstrap core CSS -->
        <link href="<?= $home; ?>/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?= $home; ?>/css/shop-homepage.css" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
        
            <nav class='navbar navbar-expand-lg navbar-dark bg-success'>
                <div class='container'>
                    <a class="navbar-brand" href="<?=get_site_url();?>"><?=bloginfo('name');?></a>
                    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                    </button>
                    <div class='collapse navbar-collapse' id='navbarResponsive'>
                        
                            <?php
                            $args = array(
                                'menu' => 'produto',
                                'theme_location' => 'header-menu',
                                'menu_class' => 'navbar-nav ml-auto',
                                'container' => 'ul'
                                //'walker' => new Walker_Principal_Menu()
                            );
                            wp_nav_menu($args);
                            ?>
                        
                    </div>
                </div>
            </nav>
        
        </header>
        <div class="container">

            <div class="row">

                <div class="col-lg-3">

                    <h1 class="my-4"><?= bloginfo('name')?></h1>
                    <div class="list-group">
                        <?php
                            $taxinomias = get_terms('categoria');
                            foreach ($taxinomias as $taxinomia) :
                        ?>
                        <a href="#" class="list-group-item"><?=$taxinomia->slug;?></a>
                        <?php
                            endforeach;                                                            
                        ?>
                        <!--<a href="#" class="list-group-item">Category 1</a>
                        <a href="#" class="list-group-item">Category 2</a>
                        <a href="#" class="list-group-item">Category 3</a>-->
                    </div>

                </div>

