<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="icon" type="image/png" href="<?=get_template_directory_URI()?>/img/favicon.png" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?=get_template_directory_URI()?>/style.css">

  <script>
    var baseURL = <?=site_url()?>;
  </script>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=243085426048812";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>

  <header class="header" data-animar>
    <div class="header-contato">
      <div class="container">
        <div class="header-contato-info">
          <a href="mailto:contato@draclaudiagalvao.com.br" target="_blank">
            <span>contato@draclaudiagalvao.com.br</span>
          </a>
          <a href="https://wa.me/+5531983668408" class="show-mobile" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#whatsapp"></use>
            </svg>
            <span>(31) 98366-8408</span>
          </a>
          <a href="tel:3125527788" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#tel"></use>
            </svg>
            <span>(31) 2552-7788</span>
          </a>
        </div>

        <div class="header-contato-search">
          <button class="search-icon">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#search"></use>
            </svg>
          </button>

          <div class="search-header">
            <form action="<?=site_url()?>" method="get">
              <input type="search" name="s" placeholder="Pesquisar..." value="<?php the_search_query(); ?>" />
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="header-navigation">
      <div class="container">
        <a href="<?=site_url()?>" class="logo-header">
          <img src="<?=get_template_directory_URI()?>/img/src/logo_header.svg" alt="Logotipo Cláudia Galvão" />
        </a>

        <div class="menu-wrapper" data-menu="menu">
          <nav class="menu">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'MenuTopo', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
          </nav>

          <div class="header-contato-midias">
            <a href="https://instagram.com/draclaudiagalvao/" target="_blank">
              <img src="<?=get_template_directory_URI()?>/img/src/insta.svg" />
            </a>

            <a href="https://facebook.com/claudiapenagalvao.anjos" target="_blank">
              <img src="<?=get_template_directory_URI()?>/img/src/face.svg" />
            </a>
          </div>
        </div>

        <div class="menu-hamb" data-menu="button">
          <span></span>
        </div>
      </div>
    </div>
  </header>