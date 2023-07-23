<?php get_header(); ?>

<main>
  <div class="p-lower-mv p-lower-mv--faq">
    <div class="p-lower-mv__content">
      <h1 class="p-lower-mv_title">faq</h1>
    </div>
  </div>
  <div class="l-inner">
    <?php get_template_part('breadcrumb'); ?>
  </div>
  <div class="l-lower-head">
    <div class="p-faq-section">
      <div class="p-faq-section__inner l-inner">
        <div class="p-faq-section__content">
          <div class="p-faq-boxes">
            <ul class="p-faq-boxes__items">
              <?php
              $faq = SCF::get('faq_group');
              foreach ($faq as $fields) {
              ?>
                <li class="p-faq-boxes__item js-accordion-item">
                  <div class="p-faq-box">
                    <div class="p-faq-box__question js-accordion-question">
                      <p class="p-faq-box__question-text"><?php echo $fields['question']; ?></p>
                    </div>
                    <div class="p-faq-box__answer js-accordion-content">
                      <p class="p-faq-box__answer-text"><?php echo nl2br($fields['answer']); ?></p>
                    </div>
                  </div>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="p-faq-section__fish">
          <div class="c-img-fish c-img-fish--reverse"></div>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>