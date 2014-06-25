<!DOCTYPE html>
<html>
<head>
<title>Blog Wordpress</title>
	<meta charset="UTF-8">
	<meta name="description" content="Le blog photo le plus stylé du cosmos intersidéral"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <?php wp_head(); ?>
   <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/html5.js" type="text/javascript"></script>
	<![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/scripts/responsive-nav/responsive-nav.css">
	<script src="<?php bloginfo('template_directory'); ?>/scripts/responsive-nav/responsive-nav.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/uikit.min.css">
	<link rel="stylesheet" type="<?php bloginfo('template_directory'); ?>/text/css" href="reset.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/uikit/js/uikit.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/main.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
</head>

<body>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<header>
            <h1> Titre du blog à trouver + police à changer </h1>
        
        <!-- NAVBAR CODEE A MANO

<nav class="navbar-default navbar-fixed-top" role="navigation"> 
                <div id="villes"> 
				<ul>
					<ib> <a class="villes" href="/newyroktest/">New-York</a> </ib>  
					<ib><a class="villes" href="#">Paris</a></ib>
					<ib><a class="villes" href="#">Melbourne</a></ib>
				</ul>
            </div>
			 
            <div id="languesreseaux">
                 <ul>
                    <ib class="langues"> <a href="#"> Fr </a></ib>  
                    <ib class="langues"><a href="#"> En </a></ib> 
                    <ib class="reseaux"> <a href="#"> <i class="fa fa-facebook"></i> </a></ib>  
                    <ib class="reseaux"><a href="#"><i class="fa fa-pinterest"></i></a></ib> 
                </ul>
			</div>
		</nav>
REMPLACEE PAR CE QUI EST CI-DESSOUS -->
     <nav class="navbar-default navbar-fixed-top" role="navigation"> 
        <?php
        wp_nav_menu( array(
            'theme_location' => 'top_menu',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'nav navbar-nav',
            'fallback_cb' => 'wp_page_menu',
            //Process nav menu using our custom nav walker
            'walker' => new wp_bootstrap_navwalker())
        );
        ?>
    </div><!-- /.navbar-collapse --> 	
     <?php 
		 wp_nav_menu( array(
				'theme_location' => 'primary-nav', 
				'menu_class' => 'primary-nav',
				'container'         => 'div',
	      		'container_id'      => 'villes',
				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				'walker'            => new wp_bootstrap_navwalker()
		 	) 
		 ); 
		 ?>

		      <?php 
		 wp_nav_menu( array(
				'theme_location' => 'secondary-nav', 
				'menu_class' => 'secondary-nav',
				'container'         => 'div',
	      		'container_id'      => 'languesreseaux',
				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				'walker'            => new wp_bootstrap_navwalker()
		 	) 
		 ); 
		 ?>
		 </nav>
	</header>