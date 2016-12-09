<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title><?php   ?>  </title>
  <link rel="shortcut icon" href="<?php bloginfo('template_url')?>/img/favicon_pildora.ico">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/blogxavi.css">

</head>
<body>
  <div id="wrapper-xavi">

    <header class="night header">
      <nav class="nav">
        <div class="container">
          <div class="row center-xs middle-xs">
            <div class="col-xs-9 col-sm-3 col-md-3">
              <a href="">
                <img class="logo" src="<?php bloginfo('template_url')?>/img/logo_menu_bar_new.png" alt="">
              </a>
            </div>
            <input  id="nav-trigger" class="hidden-sm hidden-md hidden-lg" type="checkbox" name="" id="">
            <label for="nav-trigger" class="hamburger visible-xs-block hidden-sm hidden-md hidden-lg"></label>
            <div class="col-md-6 col-sm-9 col-md-9">
              <ul class="lists">
                <li class=""><a class="ancla" href="#header">Inicio</a></li>
                <li class=""><a class="ancla" href="#services">Pildora Web</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <div class="body container full-height">
        <div class="row center-xs middle-xs">

          <div class="col-xs-12">
            <div class="clima">
              <div class="element"></div>
            </div>
            <div class="perfil">
              <div class="nubes"></div>
                <img src="<?php bloginfo('template_url')?>/img/blogxavi/equipo-xavier.png" alt="">
            </div>
            <h3 id="hora">3:00 PM</h3>
            <h2 id="saludo">Buenas Tardes</h2>
            
          </div>
        </div>
      </div>

    </header>

    <div class="container">
      <section class="posts row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
          <div class="row center-lg">
            
          
          <!-- post 1 -->
          <?php if(have_posts()): while(have_posts()): the_post();?>

            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-5 post-list">
              <figure>
                <?php the_post_thumbnail( 'medium' ); ?>
              </figure>
              <header>
                <h1><a href=""></a><?php the_title() ?></h1>
                <p class="date">
                  <?php the_date(); ?>
                </p>
              </header>
              <p class="content">
               <?php echo(get_the_excerpt()); ?>
              </p>
              <footer>
                <!-- <p class="ver"><a href="">Ver +</a></p> -->
                <p class="redes">
                  <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                  <a href="#">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                  </a>
                </p>
              </footer>
            </article>

              <?php endwhile; ?>
            <?php else: ?>
          <?php endif; ?>



          </div>  
        </div>
      </section>
    </div>

<?php
 get_footer();
 ?>