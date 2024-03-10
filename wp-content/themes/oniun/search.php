<?php get_header(); ?>
<main>
  <section style="height: auto;">
    <div class="container" style="margin-top: 4%;">
      <div class="row">

        <h1>Pesquisou por: <?php echo get_search_query(); ?></h1>

        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : ?>

            <?php the_post(); ?>

            <?php get_template_part('template_parts/post'); ?>
           

          <?php endwhile; ?>

          <div class="pag w-100">
            <div class="previous_pag d-flex justify-content-center align-items-center">
              <?php previous_posts_link('Página Anterior'); ?>
            </div>
            <div class="next_pag d-flex justify-content-center align-items-center">
              <?php next_posts_link('Próxima Página'); ?>
            </div>
          </div>
          <div style="clear: both;"></div>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>