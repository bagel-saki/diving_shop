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
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="p-column__main">
              <div class="p-single-section">
                <div class="p-single-section__inner">
                  <div class="p-single-section__content">
                    <div class="p-lower-singleBlog-info">
                      <time class="p-lower-singleBlog-info__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                      <h2 class="p-lower-singleBlog-info__title"><?php the_title(); ?></h2>
                    </div>
                    <div class="p-lower-singleBlog">
                      <div>
                        <?php the_post_thumbnail('blog', array('alt' => the_title_attribute('echo=0'))); ?>
                      </div>
                      <?php the_content(); ?>
                    </div>
                  </div>
                  <div class="p-single-section__pagination">
                    <div class="c-blog-pagination" ontouchstart="">
                      <?php the_post_navigation(array(
                        'prev_text' => '<span></span>',
                        'next_text' => '<span></span>',
                      ));
                      ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <div class="p-column__right">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>