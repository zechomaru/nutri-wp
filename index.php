<?php 
  get_header();
?>
<body class="green lighten-5">
  <header class="row white z-depth-1">

      <div style="height:100% !important;" class="col s2 l1">
        <h4 class="hide-on-small-only hide-on-med-only center-align">
          <a href="#!">
            <img src="http://nutri.com.ec/wp-content/uploads/2014/09/logo.png" class="responsive-img">
          </a>
        </h4>
        <a style="padding-top:10px;font-size:25px;" href="#" data-activates="mobile-demo" class="col s12 center-align button-collapse hide-on-large-only">
          <i class="blue-text fa fa-bars"></i>
        </a>
      </div>
  <?php include TEMPLATEPATH . "/templates/nav.php" ?>

  </header>

  <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
    <?php 
      the_content(); endwhile; endif;
     ?>


</body>
</html>




<?php
 get_footer();

 ?>