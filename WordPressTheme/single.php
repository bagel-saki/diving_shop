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
    <div class="p-single-container">
      <div class="l-blog-container l-inner">
        <div class="p-single-container__fish">
          <div class="c-img-fish c-img-fish--reverse"></div>
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="l-content">
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
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/blog1.jpg" alt="" /> -->
                      </div>
                      <?php the_content(); ?>
                      <!-- <p> ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。 </p>
                      <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/blog1.jpg" alt="" />
                      </div>
                      <p> ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。 </p>
                      <nav>
                        <ul>
                          <div class="c-img-starfish c-img-starfish--green"></div>
                          <li>リスト１</li>
                        </ul>
                        <ul>
                          <div class="c-img-starfish c-img-starfish--green"></div>
                          <li>リスト２</li>
                        </ul>
                        <ul>
                          <div class="c-img-starfish c-img-starfish--green"></div>
                          <li>リスト３</li>
                        </ul>
                      </nav>
                      <p> ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。 </p> -->
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
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>