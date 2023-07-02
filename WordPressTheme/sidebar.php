<div class="l-sidebar">
    <aside class="p-sidebar">

        <div class="p-sidebar__popularArticle">
            <div class="p-sidebar-popularArticle">
                <div class="p-sidebar-popularArticle__title">
                    <h3 class="c-sidebar-title">人気記事</h3>
                </div>
                <div class="p-sidebar-popularArticle__cards">
                    <ul class="p-sidebar-articleCards">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'orderby' => 'comment_count'
                        );
                        $sidebar_posts = new WP_Query($args);
                        while ($sidebar_posts->have_posts()) {
                            $sidebar_posts->the_post();
                        ?>
                            <li class="p-sidebar-articleCards__item">
                                <div class="p-sidebar-articleCard">
                                    <a class="p-sidebar-articleCard__link" href="<?php the_permalink(); ?>">
                                        <div class="p-sidebar-articleCard__inner">
                                            <div class="p-sidebar-articleCard__img">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail('large'); ?>
                                                <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/noimage.jpg" alt="no image">
                                                <?php endif; ?>
                                            </div>
                                            <div class="p-sidebar-articleCard__body">
                                                <time datetime="<?php the_time('Y-m-d'); ?>" class="p-sidebar-articleCard__date"><?php the_time('Y/m/d'); ?></time>
                                                <div class="p-sidebar-articleCard__title"><?php the_title(); ?></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        <?php }
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="p-sidebar__review">
            <?php
            $random_post = new WP_Query(array(
                'post_type' => 'voices',
                'posts_per_page' => 1, // 取得する記事の数
                'orderby' => 'rand', // ランダムに並び替え
            ));

            if ($random_post->have_posts()) {
                while ($random_post->have_posts()) {
                    $random_post->the_post();
            ?>
                    <div class="p-sidebar-review">
                        <div class="p-sidebar-review__title">
                            <h3 class="c-sidebar-title">口コミ</h3>
                        </div>
                        <div class="p-sidebar-review__content">
                            <div class="p-sidebar-review__img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/noimage.jpg" alt="no image">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="p-sidebar-review__age"><?php echo get_field('age'); ?>(<?php echo get_field('sex'); ?>)</div>
                        <div class="p-sidebar-review__articleTitle"><?php the_title(); ?></div>
                        <div class="p-sidebar-review__btn">
                            <div class="c-btn" ontouchstart="">
                                <a href="<?php echo esc_url(home_url('/voices/')) ?>" class="c-btn__link"> View more<span></span>
                                </a>
                                <div class="c-btn__overlay"></div>
                            </div>
                        </div>
                    </div>
            <?php
                }
                wp_reset_postdata();
            }
            ?>
        </div>

        <div class="p-sidebar__campaign">
            <div class="p-sidebar-campaign">
                <div class="p-sidebar-campaign__title">
                    <h3 class="c-sidebar-title">キャンペーン</h3>
                </div>
                <div class="p-sidebar-campaign__cards">
                    <ul class="p-sidebar-campaignCards">
                        <?php
                        $campaign_card = new WP_Query(array(
                            'post_type' => 'campaign',
                            'posts_per_page' => 2, // 表示する記事の数
                            'orderby' => 'comment_count', // コメント数でソート
                        ));
                        if ($campaign_card->have_posts()) {
                            while ($campaign_card->have_posts()) {
                                $campaign_card->the_post();
                        ?>
                                <li class="p-sidebar-campaignCards__item">
                                    <div class="p-sidebar-campaignCard">
                                        <div class="p-sidebar-campaignCard__img">
                                            <?php the_post_thumbnail('large'); ?>
                                        </div>
                                        <div class="p-sidebar-campaignCard__head">
                                            <p class="p-sidebar-campaignCard__title"><?php the_title(); ?></p>
                                            <span class="p-sidebar-campaignCard__border"></span>
                                        </div>
                                        <div class="p-sidebar-campaignCard__body">
                                            <p class="p-sidebar-campaignCard__text">全部コミコミ(お一人様)</p>
                                            <div class="p-sidebar-campaignCard__price">
                                                <p class="p-sidebar-campaignCard__originalPrice">¥<?php echo get_field('original_price'); ?></p>
                                                <p class="p-sidebar-campaignCard__newPrice">¥<?php echo get_field('new_price'); ?></p>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                        <?php }
                            wp_reset_postdata();
                        } ?>
                    </ul>
                </div>
                <div class="p-sidebar-campaign__btn">
                    <div class="c-btn" ontouchstart="">
                        <a href="<?php echo esc_url(home_url('/campaign/')) ?>" class="c-btn__link"> View more<span></span>
                        </a>
                        <div class="c-btn__overlay"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-sidebar__archive">
            <div class="p-sidebar-archive">
                <div class="p-sidebar-archive__title">
                    <h3 class="c-sidebar-title">アーカイブ</h3>
                </div>
                <ul class="p-sidebar-archive__lists">
                    <?php wp_get_archives(); ?>
                </ul>
            </div>
        </div>
    </aside>
</div>