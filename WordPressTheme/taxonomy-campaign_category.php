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
            <?php
            $taxonomy_terms = get_terms('campaign_category');
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
            }
            ?>
          </div>
        </div>

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $type = get_query_var('campaign_category'); // タクソノミーのスラッグ
        $args = array(
          'post_type' => 'campaign', // 投稿タイプスラッグ
          'paged' => $paged, // ページネーションがある場合に必要
          'posts_per_page' => 4, // 表示件数（変更不要）
          'tax_query' => array(
            array(
              'taxonomy' => 'campaign_category', // タクソノミーのスラッグ
              'field' => 'slug', // ターム名をスラッグで指定する（変更不要）
              'terms' => $type,
            ),
          ),
        );
        $wp_query = new WP_Query($args);
        ?>

        <div class="p-archiveCampaign-section__content">
          <ul class="p-lower-campaignCards">
            <?php if ($wp_query->have_posts()) : ?>
              <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <li class="p-lower-campaignCards__item">
                  <div class="p-lower-campaignCard">
                    <div class="p-lower-campaignCard__img">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/noimage.jpg" alt="no image">
                      <?php endif; ?>
                    </div>
                    <div class="p-lower-campaignCard__head">
                      <p class="p-lower-campaignCard__tag"><?php echo get_field('tag'); ?></p>
                      <h3 class="p-lower-campaignCard__title"><?php the_title(); ?></h3>
                      <span class="p-lower-campaignCard__border"></span>
                    </div>
                    <div class="p-lower-campaignCard__body">
                      <p class="p-lower-campaignCard__text">全部コミコミ(お一人様)</p>
                      <div class="p-lower-campaignCard__price">
                        <p class="p-lower-campaignCard__originalPrice">¥<?php echo get_field('original_price'); ?></p>
                        <p class="p-lower-campaignCard__newPrice">¥<?php echo get_field('new_price'); ?></p>
                      </div>
                      <p class="p-lower-campaignCard__details u-desktop"><?php echo get_field('details'); ?></p>
                    </div>
                    <div class="p-lower-campaignCard__bottom u-desktop">
                      <p class="p-lower-campaignCard__contactDate"><?php echo get_field('contact_date'); ?></p>
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

        <?php global $wp_rewrite;
        $paginate_base = get_pagenum_link(1);
        if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
          $paginate_format = '';
          $paginate_base = add_query_arg('paged', '%#%');
        } else {
          $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
            user_trailingslashit('page/%#%/', 'paged');;
          $paginate_base .= '%_%';
        }
        echo paginate_links(array(
          'base' => $paginate_base,
          'format' => $paginate_format,
          'total' => $wp_query->max_num_pages,
          'mid_size' => 1,
          'current' => ($paged ? $paged : 1),
          'prev_text' => '<',
          'next_text' => '>',
        ));
        ?>


        <?php if ($wp_query->max_num_pages > 1) : ?>
          <div class="p-archiveCampaign-section__pagination">
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
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
          </div>
      </div>
      <div class="p-archiveCampaign-section__fish">
        <div class="c-img-fish c-img-fish--reverse"></div>
      </div>
    </div>
  </div>
  </div>
<?php get_footer(); ?>