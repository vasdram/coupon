<?php?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?= bloginfo('template_directory')?>/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="z">
<header class="header">
        <div class="wrapper header__wrapper">
          <div class="logo header__logo">
            <a href="">
              <img src="" alt="Logo" />
            </a>
          </div>
          <nav class="nav">
          <?php 
            $menu_args =  array('location'=>'primary',
            'menu_container'=>false,
            'menu_class'=>'nav__list',
            'menu_id'=>false);
            wp_nav_menu($menu_args);
            ?> 
            <!-- <ul class="nav__list">
              <li class="nav__list-item">
                <a href="" class="nav__list-link">Новости</a>
              </li>
              <li class="nav__list-item">
                <a href="" class="nav__list-link">Блог</a>
              </li>
            </ul> -->
          </nav>
        </div>
      </header>
