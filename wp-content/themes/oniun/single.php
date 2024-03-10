<?php get_header(); ?>
<main>
  <section>
    <div class="backgroundGrey container-fluid"></div>
    <div class="container">
      <div class="row">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : ?>
            <?php the_post(); ?>

            <div class="postItem">
              <div class="post_item">
                <div class="post_title">
                  <?php the_title(); ?>
                </div>
                <div class="author d-flex">
                  <img id="author" src="https://oniun.com.br/blog/wp-content/uploads/2024/02/smoking-150x150.png" alt="author image" />
                  <div class="txt d-flex flex-column align-items-start justify-content-center">
                    <p>
                      <?php the_author(); ?>
                    </p>
                    <p class="date">
                      <?php echo get_the_date(); ?> | 30 min leitura
                    </p>
                  </div>
                </div>

                <div class="post_content">
                  <div class="card border-0">
                    <div class="row shared">
                      <div class="pl-0 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-start align-items-center">
                        <a href="<?php the_permalink(); ?>">
                          <div class="cateroy_item">
                            <div class="category">
                              <?php the_category(); ?>
                            </div>
                          </div>
                        </a>
                      </div>

                      <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-end align-items-center">
                        <div class="control w-25 d-flex justify-content-between align-items-center">
                          <img src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/images/blog_home/share.png" alt="">

                          <?php if (get_theme_mod('bo_whatsapp')) : ?>

                            <a href="<?php echo get_theme_mod('bo_whatsapp'); ?>" target="_blank">
                              <img src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/images/blog_home/whatsapp.png" alt="">
                            </a>

                          <?php endif; ?>

                          <?php if (get_theme_mod('bo_instagram')) : ?>

                            <a href="<?php echo get_theme_mod('bo_instagram'); ?>" target="_blank">
                              <img src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/images/blog_home/instagram.png" alt="">
                            </a>

                          <?php endif; ?>

                          <?php if (get_theme_mod('bo_facebook')) : ?>

                            <a href="<?php echo get_theme_mod('bo_facebook'); ?>" target="_blank">
                              <img src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/images/blog_home/facebook.png" alt="">
                            </a>

                          <?php endif; ?>

                        </div>
                      </div>
                    </div>
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>
            </div>

          <?php endwhile; ?>

          <div class="pag">
            <div class="previous_pag">
              <?php previous_post_link(); ?>
            </div>
            <div class="next_pag">
              <?php next_post_link(); ?>
            </div>
          </div>
          <div style="clear: both;"></div>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
