<?php get_header(); ?>

<main>
  <div class="l-lower-404">
    <section class="p-404-section">
      <div class="l-inner">
          <?php get_template_part('breadcrumb'); ?>
      </div>
      <div class="p-404-section__inner l-inner">
        <h1 class="p-404-section__title">404</h1>
        <div class="p-404-section__text"> 申し訳ありません。<br> お探しのページが見つかりません。 </div>
        <div class="p-404-section__btn">
          <div class="c-btn" ontouchstart="">
            <a href="404.html" class="c-btn__link c-btn__link--white"> Page&nbsp;Top<span></span>
            </a>
            <div class="c-btn__overlay c-btn__overlay--white"></div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>