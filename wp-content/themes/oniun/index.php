<?php get_header(); ?>
<main>
  <section>
    <div class="container" style="margin-top: 4%;">
      <div class="row">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : ?>

            <?php the_post(); ?>

            <?php get_template_part('template_parts/post_index'); ?>
           

          <?php endwhile; ?>

          <div class="pag w-100">
            
            <?php
              global $wp_query;
              echo paginate_links(array(
                'current' => max(1, get_query_var('paged')),
                'total' => $wp_query->max_num_pages,
                'show_all' => false,
                'end_size' => 1,
                'mid_size' => 1,
                'prev_next' => true,
                'prev_text' => '<',
                'next_text' => '>',
              ));
            ?>
          
            <!-- <div class="previous_pag d-flex justify-content-center align-items-center">
              <?php previous_posts_link('Página Anterior'); ?>
            </div>
            <div class="next_pag d-flex justify-content-center align-items-center">
              <?php next_posts_link('Próxima Página'); ?>
            </div> -->
          </div>
          <div style="clear: both;"></div>
        <?php endif; ?>
      </div>
    </div>
    <div class="videos container-fluid">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <p class="h5 font-weight-bold">VÍDEOS</p>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-end align-items-center">
            <a class="h6" href="https://oniun.com.br/blog/index.php/videos/">
              Ver mais <img class="ml-1" src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/images/blog_home/arrowBlue.svg" alt="seta imagem">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column">
            <video controls width="100%" height="auto" poster="https://oniun.com.br/blog/wp-content/uploads/2024/02/homem-usando-um-tablet-para-trabalhar-e-se-conectar-com-outras-pessoas-2@2x.png">
              <source type="video/mp4" src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/videos/nuvensDeChuva.mp4" />
            </video>
            <h3>Automatização de processos tributários</h3>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column">
            <video controls width="100%" height="auto" poster="https://oniun.com.br/blog/wp-content/uploads/2024/02/homem-usando-um-tablet-para-trabalhar-e-se-conectar-com-outras-pessoas-2@2x.png">
              <source type="video/mp4" src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/videos/nuvensDeChuva.mp4" />
            </video>
            <h3>Automatização de processos tributários</h3>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column">
            <video controls width="100%" height="auto" poster="https://oniun.com.br/blog/wp-content/uploads/2024/02/homem-usando-um-tablet-para-trabalhar-e-se-conectar-com-outras-pessoas-2@2x.png">
              <source type="video/mp4" src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/videos/nuvensDeChuva.mp4" />
            </video>
            <h3>Automatização de processos tributários</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="ebook container-fluid">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <p class="h5 font-weight-bold">E-BOOK</p>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-end align-items-center">
            <a class="h6" href="https://oniun.com.br/blog/index.php/e-book/">
              Ver mais <img class="ml-1" src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/images/blog_home/arrowBlue.svg" alt="seta imagem">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column">
            <video controls width="100%" height="auto" poster="https://oniun.com.br/blog/wp-content/uploads/2024/02/homem-usando-um-tablet-para-trabalhar-e-se-conectar-com-outras-pessoas-2@2x.png">
              <source type="video/mp4" src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/videos/nuvensDeChuva.mp4" />
            </video>

            <div class="control d-flex justify-content-start align-items-center w-100">
              <a href="<?php the_permalink(); ?>">
                <div class="cateroy_item">
                  <div class="category">
                    <?php the_category(); ?>
                  </div>
                </div>
              </a>
              <img src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/images/blog_home/share-1.svg" alt="shared icon">
            </div>

            <h3>Automatização de processos tributários</h3>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column">
            <video controls width="100%" height="auto" poster="https://oniun.com.br/blog/wp-content/uploads/2024/02/homem-usando-um-tablet-para-trabalhar-e-se-conectar-com-outras-pessoas-2@2x.png">
              <source type="video/mp4" src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/videos/nuvensDeChuva.mp4" />
            </video>

            <div class="control d-flex justify-content-start align-items-center w-100">
              <a href="<?php the_permalink(); ?>">
                <div class="cateroy_item">
                  <div class="category">
                    <?php the_category(); ?>
                  </div>
                </div>
              </a>
              <img src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/images/blog_home/share-1.svg" alt="shared icon">
            </div>

            <h3>Automatização de processos tributários</h3>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column">
            <video controls width="100%" height="auto" poster="https://oniun.com.br/blog/wp-content/uploads/2024/02/homem-usando-um-tablet-para-trabalhar-e-se-conectar-com-outras-pessoas-2@2x.png">
              <source type="video/mp4" src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/videos/nuvensDeChuva.mp4" />
            </video>

            <div class="control d-flex justify-content-start align-items-center w-100">
              <a href="<?php the_permalink(); ?>">
                <div class="cateroy_item">
                  <div class="category">
                    <?php the_category(); ?>
                  </div>
                </div>
              </a>
              <img src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/images/blog_home/share-1.svg" alt="shared icon">
            </div>

            <h3>Automatização de processos tributários</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>