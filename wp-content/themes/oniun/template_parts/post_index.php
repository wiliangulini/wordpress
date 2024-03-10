<article class="article">

  <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 img">
    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('large', array(
        'class' => 'post_thumb'
      )); ?>
    <?php endif; ?>
  </div>
  <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 txt">
    <a href="<?php the_permalink(); ?>">
      <div class="cateroy_item">
        <div class="category">
          <?php the_category(); ?>
        </div>
      </div>
    </a>
    <a href="<?php the_permalink(); ?>">
      <div class="post_item">
        <div class="post_title">
          <?php the_title(); ?>
        </div>
        <div class="post_subtitle">
          <?php if (function_exists('the_subtitle')) : ?>
            <?php the_subtitle(); ?>
          <?php endif; ?>
        </div>
      </div>
    </a>
    <p class="date">
      <?php echo get_the_date(); ?> | 30 min de leitura
    </p>
    <p class="leiamais">
      <a href="<?php the_permalink(); ?>">Leia mais <img src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/images/blog_home/arrowWhite.svg" alt="arrow"></a>
    </p>

  </div>
</article>