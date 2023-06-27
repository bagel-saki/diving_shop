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
                        <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
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
  <div class="l-lower-bottom">
    <section class="p-contact-section">
      <div class="p-contact-section__inner l-inner">
        <div class="p-contact-section__container">
          <div class="p-contact-section__head">
            <div class="p-contact-section__logo">
              <div class="c-logo c-logo--green"></div>
            </div>
            <div class="p-contact-section__access">
              <div class="p-contact-section__address">
                <p class="p-contact-section__addressText">沖縄県那覇市1-1</p>
                <p class="p-contact-section__addressText">TEL:0120-000-0000</p>
                <p class="p-contact-section__addressText">営業時間:8:30-19:00</p>
                <p class="p-contact-section__addressText">定休日:毎週火曜日</p>
              </div>
              <div class="p-contact-section__map">
                <div class="iframe-wrap">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9115.569389246235!2d127.67438112885138!3d26.214049447648904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e569900ff36f09%3A0x583dec31994d039e!2z5rOi44Gu5LiK44OT44O844OB!5e0!3m2!1sja!2sjp!4v1687379223556!5m2!1sja!2sjp" width="295" height="160" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="p-contact-section__body">
            <div class="p-contact-section__title">
              <div class="c-title c-title--large">
                <h2 class="c-title__en">contact</h2>
                <p class="c-title__ja">お問い合わせ</p>
              </div>
            </div>
            <p class="p-contact-section__contactText">ご予約・お問い合わせはコチラ</p>
            <div class="p-contact-section__btn">
              <div class="c-btn" ontouchstart="">
                <a href="page-contact.html" class="c-btn__link"> Contact us<span></span>
                </a>
                <div class="c-btn__overlay"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-contact-section__fish">
          <div class="c-img-fish"></div>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>