<?php get_header(); ?>
    <div class="Contact"> 
      <div class="Contact__header"> 
        <div class="Contact__headerInner">
          <h2 class="Common__sectionTitle"><span>CONTACT </span>お問い合わせ</h2>
        </div>
      </div>
      <div class="Contact__contents"> 
        <div class="Contact__container">
          <div class="Contact__message futo-go">
            <p>お問い合わせ、お見積もりのご依頼やご質問等は下記のフォームよりお気軽にお問い合わせください。</p>
            <p>こちらのフォームからのお問い合せに関しては、メールでご返答させていただきます。</p>
            <p> <span>*</span>がついているものは必須入力になります。</p>
          </div>
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>

  <script>
    var wpcf7Elm = document.querySelector( '.wpcf7' );
    wpcf7Elm.addEventListener( 'wpcf7invalid', function( event ) {
      let speed = 1000;
      let position = $('.Contact__form').offset().top - 100;
      jQuery("html, body").animate({scrollTop: position}, speed, "swing");
    }, false );
  </script>
<?php get_footer(); ?>