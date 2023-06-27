<?php get_header(); ?>

  <main>
    <div class="p-lower-mv p-lower-mv--contact">
      <div class="p-lower-mv__content">
        <h1 class="p-lower-mv_title">contact</h1>
      </div>
    </div>
    <div class="l-inner">
    <?php get_template_part('breadcrumb'); ?>
    </div>
    <div class="l-lower-head">
      <div class="p-contact-form">
        <div class="p-contact-form__inner l-inner">
        <?php echo do_shortcode('[contact-form-7 id="91" title="コンタクトフォーム 1"]');?>
          <div class="p-contact-form__fish">
            <div class="c-img-fish c-img-fish--reverse"></div>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>