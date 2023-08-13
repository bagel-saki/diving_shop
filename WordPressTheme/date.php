<?php get_header(); ?>
<main>
  <div class="p-lower-mv p-lower-mv--blog">
    <div class="p-lower-mv__content">
      <h1 class="p-lower-mv_title">blog</h1>
    </div>
  </div>
  <div class="l-inner">
    <?php get_template_part('breadcrumb'); ?>
  </div>
  <div class="l-lower-head">
    <div class="p-column">
      <div class="p-column__flex l-inner">
        <div class="p-column__fish">
          <div class="c-img-fish c-img-fish--reverse"></div>
        </div>
        <div class="p-column__main">
          <div class="p-home-section">
            <div class="p-home-section__inner">
              <div class="p-home-section__content">
                <ul class="p-lower-blogCards">
                  <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                      <li class="p-lower-blogCards__item">
                        <a href="<?php the_permalink(); ?>" class="p-blog-card">
                          <figure class="p-blog-card__img">
                            <?php if (has_post_thumbnail()) : ?>
                              <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/noimage.jpg" alt="no image">
                            <?php endif; ?>
                          </figure>
                          <div class="p-blog-card__body">
                            <time class="p-blog-card__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                            <div class="p-blog-card__titleBox">
                              <h3 class="p-blog-card__title"><?php the_title(); ?></h3>
                            </div>
                            <p class="p-blog-card__text"><?php echo get_the_excerpt(); ?></p>
                          </div>
                        </a>
                      </li>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </ul>
              </div>
              <div class="p-home-section__pagination">
                <div class="c-pagination" ontouchstart="">
                    <?php
                    $args = array(
                      'mid_size' => 3,
                      'prev_text' => '<span></span>',
                      'next_text' => '<span></span>',
                    );
                    if (wp_is_mobile()) {
                      $args['mid_size'] = 1;
                    }
                    else {
                      $args['mid_size'] = 3;
                    }
                    the_posts_pagination($args);
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-column__right">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>