<?php get_header(); ?>
    <article class="IndexFirstView">
      <div class="IndexFirstView__border js-firstView-01"></div>
      <div class="IndexFirstView__image"></div>
      <div class="IndexFirstView__message js-firstView-02">
        <p> <span>フキダシは稲沢・一宮エリアの中小企業に特化した</span><br><span>ホームページ制作会社です。</span></p>
      </div>
    </article>
    <section class="IndexAboutUs" id="aboutus">
      <div class="IndexAboutUs__container">
        <h2 class="Common__sectionTitle"><span>ABOUT US</span>私たちについて</h2>
        <div class="IndexAboutus__contentsContainer">
          <h3 class="Common__paragraphTitle">フキダシは、稲沢・一宮エリアの中小企業に特化した地元密着のホームページ制作会社です。</h3>
          <p class="Common__paragraph">地域密着をモットーに、地元の企業様のIT周りのお手伝いができればと思います。<br>デザインと制作を一手に引き受けていますので、制作時の連携がスムーズです。<br>既存のホームページの更新や、細かな修正も承っておりますので、お気軽にご相談ください。</p>
        </div>
      </div>
    </section>
    <section class="IndexService" id="service">
      <div class="IndexService__container">
        <h2 class="Common__sectionTitle"><span>SERVICE </span>私たちにできること</h2>
        <div class="IndexService__contentsContainer">
          <div class="IndexService__contentsList">
            <div class="IndexService__contents"><img src="<?php echo get_template_directory_uri(); ?>/img/Index/service01.png">
              <h3 class="Common__paragraph futo-go">新しくお店を始めるので<br class="-sp">集客したい</h3>
            </div>
            <div class="IndexService__contents"><img src="<?php echo get_template_directory_uri(); ?>/img/Index/service02.png">
              <h3 class="Common__paragraph futo-go">今あるホームページを<br class="-sp">リニューアルしたい</h3>
            </div>
            <div class="IndexService__contents"><img src="<?php echo get_template_directory_uri(); ?>/img/Index/service03.png">
              <h3 class="Common__paragraph futo-go">ホームページの更新を<br class="-sp">まかせたい</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="IndexPrice" id="price">
      <div class="IndexPrice__container">
        <h2 class="Common__sectionTitle"><span>PRICE</span>料金</h2>
        <div class="IndexPrice__contentsContainer"><img src="<?php echo get_template_directory_uri(); ?>/img/Index/priceTable.png" alt="料金表">
          <p class="Common__paragraph">上記は新規制作の料金になります。<br>既存のホームページのリニューアル、一部更新は別途お問い合わせください。</p>
        </div>
      </div>
    </section>
    <section class="IndexContact" id="contact">
      <div class="IndexContact__container">
        <h2 class="Common__sectionTitle"><span>CONTACT </span>お問い合わせ</h2>
        <div class="IndexContact__contentsContainer">
          <p class="IndexContent__paragraph Common__paragraph">制作のお問い合わせはお気軽にどうぞ。</p><a class="Common__button din-2014" href="<?php echo home_url('/contact'); ?>">CONTACT</a>
        </div>
      </div>
    </section>
<?php get_footer(); ?>