<?php get_header(); ?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/home-bg.jpg' ?>')">
  <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <div class="site-heading">
          <h1><?php bloginfo('name'); ?></h1>

          <span class="subheading"><?php bloginfo('description'); ?></span>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
  <div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7">
      <?php if(have_posts()): ?>
        <?php while(have_posts()): ?>
          <?php the_post(); ?>
          <?php get_template_part('template_parts/post'); ?>
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- Pager-->
      <div class="d-flex justify-content-end mb-4">
      
        <?php previous_posts_link('Página Anterior'); ?>
        <?php next_posts_link('Próxima Página'); ?>

        <!-- <a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a> -->
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>