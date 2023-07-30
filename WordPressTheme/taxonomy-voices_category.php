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
              <a href="<?php echo esc_url(get_post_type_archive_link('voices')); ?>" class="c-campaign-category js-campaign-category"> all </a>
            </div>
            <?php
            $taxonomy_terms = get_terms('voices_category');
            if (!empty($taxonomy_terms) && !is_wp_error($taxonomy_terms)) {
              foreach ($taxonomy_terms as $taxonomy_term) :
            ?>
                <div class="p-campaign-categories__item">
                  <a href="<?php echo get_term_link($taxonomy_term); ?>" class="c-campaign-category js-campaign-category 
                <?php if ($taxonomy_term->slug === $term) {
                  echo 'c-campaign-category--active';
                } ?>"><?php echo esc_html($taxonomy_term->name); ?>
                  </a>
                </div>
            <?php
              endforeach;
            } ?>
          </div>
        </div>

        <div class="p-archiveVoices-section__content">
          <ul class="p-lower-voiceCards">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <li class="p-lower-voiceCards__item">
                  <div class="p-lower-voiceCard">
                    <div class="p-lower-voiceCard__inner">
                      <div class="p-lower-voiceCard__head">
                        <div class="p-lower-voiceCard__info">
                          <div class="p-lower-voiceCard__meta">
                            <p class="p-lower-voiceCard__age">
                            <?php
                              $age = get_field('age');
                              $sex = get_field('sex');

                              if ($age != '選択しない' && $age != '') : ?>
                                <?php echo $age; ?>
                              <?php endif; ?>
                              <?php if ($sex != '選択しない' && $sex != '') : ?>
                                (<?php echo $sex; ?>)
                              <?php endif; ?>
                            </p>
                            <p class="p-lower-voiceCard__tag"><?php single_term_title(); ?></p>
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
                      <p class="p-lower-voiceCard__text"> <?php echo get_field('details'); ?></p>
                      </div>
                    </div>
                  </div>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>
        <?php if ($wp_query->max_num_pages > 1) : ?>
          <div class="p-archiveVoices-section__pagination">
            <div class="c-pagination" ontouchstart="">
              <div class="nav-links">
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
                echo paginate_links($args);
                ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
      <div class="p-archiveVoices-section__fish">
        <div class="c-img-fish c-img-fish--reverse"></div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>