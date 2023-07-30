<?php get_header(); ?>

<main>
  <div class="p-lower-mv p-lower-mv--voice">
    <div class="p-lower-mv__content">
      <h1 class="p-lower-mv_title">voice</h1>
    </div>
  </div>
  <div class="l-inner">
    <?php get_template_part('breadcrumb'); ?>
  </div>
  <div class="l-lower-head">
    <div class="p-archiveVoices-section">
      <div class="p-archiveVoices-section__inner l-inner">
        <div class="p-archiveVoices-section__category">
          <div class="p-campaign-categories">
            <div class="p-campaign-categories__item">
              <a href="<?php echo esc_url(get_post_type_archive_link('voices')); ?>" class="c-campaign-category js-campaign-category c-campaign-category--active"> all </a>
            </div>
            <?php
            $taxonomy_terms = get_terms('voices_category', array('hide_empty' => false));
            foreach ($taxonomy_terms as $taxonomy_term) :
            ?>
              <div class="p-campaign-categories__item">
                <a href="<?php echo esc_url(get_term_link($taxonomy_term, 'voices_category')); ?>" class="c-campaign-category js-campaign-category "><?php echo esc_html($taxonomy_term->name); ?></a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="p-archiveVoices-section__content">
          <ul class="p-lower-voiceCards">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <?php
                $excerpt = get_the_excerpt(); // 抜粋を取得
                $limited_excerpt = mb_substr($excerpt, 0, 180) . '...'; // 表示する文字数を指定
                ?>
                <li class="p-lower-voiceCards__item">
                  <div class="p-lower-voiceCard">
                    <div class="p-lower-voiceCard__inner">
                      <div class="p-lower-voiceCard__head">
                        <div class="p-lower-voiceCard__info">
                          <div class="p-lower-voiceCard__meta">
                            <p class="p-lower-voiceCard__age"><?php echo get_field('age'); ?>(<?php echo get_field('sex'); ?>)</p>
                            <p class="p-lower-voiceCard__tag">
                              <?php
                              $taxonomy_terms = get_the_terms($post->ID, 'voices_category');
                              if ($taxonomy_terms) {
                                echo $taxonomy_terms[0]->name;
                              }
                              ?>
                            </p>
                          </div>
                          <h3 class="p-lower-voiceCard__title"><?php the_title(); ?></h3>
                        </div>
                        <div class="p-lower-voiceCard__img">
                          <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                          <?php else : ?>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/noimage.jpg" alt="no image">
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="p-lower-voiceCard__body">
                        <p class="p-lower-voiceCard__text">
                          <?php
                          $details = get_field('details'); // ACFのカスタムフィールドからテキストを取得
                          if (mb_strlen($details) > 100) {
                            $text = mb_substr(strip_tags($details), 0, 240, 'utf-8');
                            echo $text . '…';
                          } else {
                            echo strip_tags($details);
                          }
                          ?>
                        </p>
                      </div>


                    </div>
                  </div>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>
        <div class="p-archiveVoices-section__pagination">
          <div class="c-pagination" ontouchstart="">
            <?php
            $args = array(
              'mid_size' => 4,
              'prev_text' => '<span></span>',
              'next_text' => '<span></span>',
            );
            if (wp_is_mobile()) {
              $args['mid_size'] = 4;
            } else {
              $args['mid_size'] = 6;
            }
            the_posts_pagination($args);
            ?>
          </div>
        </div>
        <div class="p-archiveVoices-section__fish">
          <div class="c-img-fish c-img-fish--reverse"></div>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>