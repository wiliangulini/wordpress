<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : ?>
    <?php the_post(); ?>

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('<?php
      if(has_post_thumbnail()) {
        echo get_the_post_thumbnail_url($post->ID, 'full');
      }
    ?>')">
      <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-md-10 col-lg-8 col-xl-7">
            <div class="post-heading">
              <h1><?php the_title(); ?></h1>
              <?php if(function_exists('the_subtitle')) : ?>
                <h2 class="subheading"><?php the_subtitle(); ?></h2>
              <?php endif; ?>
              <span class="meta">
                Postado por
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
                  <?php the_author(); ?>
                </a>
                em <?php echo get_the_date(); ?>
              </span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Post Content-->
    <article class="mb-4">
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-md-10 col-lg-8 col-xl-7">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </article>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>