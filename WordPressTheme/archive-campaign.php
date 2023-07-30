<?php get_header(); ?>

<main>
  <div class="p-lower-mv p-lower-mv--campaign">
    <div class="p-lower-mv__content">
      <h1 class="p-lower-mv_title">campaign</h1>
    </div>
  </div>
  <div class="l-inner">
    <?php get_template_part('breadcrumb'); ?>
  </div>
  <div class="l-lower-head">
    <div class="p-archiveCampaign-section">
      <div class="p-archiveCampaign-section__inner l-inner">
        <div class="p-archiveCampaign-section__category">
          <div class="p-campaign-categories">
            <div class="p-campaign-categories__item">
              <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="c-campaign-category js-campaign-category c-campaign-category--active"> all </a>
            </div>
            <?php
            $taxonomy_terms = get_terms('campaign_category', array('hide_empty' => false));
            foreach ($taxonomy_terms as $taxonomy_term) :
            ?>
              <div class="p-campaign-categories__item">
                <a href="<?php echo esc_url(get_term_link($taxonomy_term, 'campaign_category')); ?>" class="c-campaign-category js-campaign-category "><?php echo esc_html($taxonomy_term->name); ?></a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="p-archiveCampaign-section__content">
          <ul class="p-lower-campaignCards">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <li class="p-lower-campaignCards__item">
                  <div class="p-lower-campaignCard">
                    <div class="p-lower-campaignCard__img">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('campaign'); ?>
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/noimage.jpg" alt="no image">
                      <?php endif; ?>
                    </div>
                    <div class="p-lower-campaignCard__head">
                      <?php
                      $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                      if ($taxonomy_terms) {
                        echo '<p class="p-campaign-card__tag">' . $taxonomy_terms[0]->name . '</p>';
                      }
                      ?>
                      <h3 class="p-lower-campaignCard__title"><?php the_title(); ?></h3>
                      <span class="p-lower-campaignCard__border"></span>
                    </div>
                    <div class="p-lower-campaignCard__body">
                      <p class="p-lower-campaignCard__text">全部コミコミ(お一人様)</p>
                      <div class="p-lower-campaignCard__price">
                        <?php
                        $original_price = get_field('original_price');
                        $new_price = get_field('new_price');
                        $details = get_field('details');
                        $beginning_date = get_field('beginning_date');
                        $end_date = get_field('end_date');
                        ?>
                        <?php if (!empty($original_price)) : ?>
                          <p class="p-lower-campaignCard__originalPrice">
                            ¥<?php echo number_format((int)str_replace(',', '', $original_price)); ?>
                          </p>
                        <?php endif; ?>
                        <?php if (!empty($new_price)) : ?>
                          <p class="p-lower-campaignCard__newPrice">
                            ¥<?php echo number_format((int)str_replace(',', '', $new_price)); ?>
                          </p>
                        <?php endif; ?>
                      </div>
                      <?php if (!empty($details)) : ?>
                        <p class="p-lower-campaignCard__details u-desktop"><?php echo $details; ?></p>
                      <?php endif; ?>
                    </div>
                    <div class="p-lower-campaignCard__bottom u-desktop">
                      <?php if (!empty($beginning_date) && !empty($end_date)) : ?>
                        <p class="p-lower-campaignCard__contactDate"><?php echo $beginning_date; ?>-<?php echo $end_date; ?></p>
                      <?php endif; ?>
                      <p class="p-lower-campaignCard__contactText">ご予約・お問い合わせはコチラ</p>
                      <div class="p-lower-campaignCard__btn">
                        <div class="c-btn" ontouchstart="">
                          <a href="<?php echo esc_url(home_url('/contact/')) ?>" class="c-btn__link"> Contact us<span></span>
                          </a>
                          <div class="c-btn__overlay"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>
        <div class="p-archiveCampaign-section__pagination">
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
        <div class="p-archiveCampaign-section__fish">
          <div class="c-img-fish c-img-fish--reverse"></div>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>