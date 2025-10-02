<?php get_header(); ?>

<main id="top">
    <section class="fv">
        <div class="fv__content">
            <div class="fv__titleWrap">
                <h1 class="fv__text">raku.reforｍ</h1>
                <p class="fv__subTitle">価格と品質、どちらも妥協しない。</p>
                <p class="fv__title">リフォームの相談窓口</p>
            </div>
            <div class="fv__recordWrap">
                <div class="fv__record">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-record1.svg" alt="施工実績427件" width="184" height="70" loading="lazy">
                </div>
                <div class="fv__record">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-record2.svg" alt="顧客満足度98％" width="184" height="70" loading="lazy">
                </div>
                <div class="fv__record">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-record3.svg" alt="法人取引者数82社" width="184" height="70" loading="lazy">
                </div>
                <div class="fv__record">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-record4.svg" alt="職員数87人" width="184" height="70" loading="lazy">
                </div>
                <div class="fv__record">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-record5.svg" alt="10年保証" width="184" height="70" loading="lazy">
                </div>
            </div>
            <div class="fv__btnWrap">
                <a class="fv__btn --individual" type="button" href="<?php echo esc_url(home_url('/#individual')); ?>">個人のお客様はこちら</a>
                <a class="fv__btn --corporation" type="button" href="<?php echo esc_url(home_url('/#corporation')); ?>">法人のお客様はこちら</a>
            </div>
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="fv__cta">まずは一度無料相談！</a>              
        </div>
        <div class="fv__bg">
            <!-- スライダー -->
            <div class="fv__swiper swiper">
                <!-- スライド -->
                <div class="fv__swiper-wrapper swiper-wrapper">
                    <div class="fv__slide swiper-slide">
                        <picture>
                          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fv-bg1.webp" media="(min-width: 768px)">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-bg1-sp.webp" alt="">
                        </picture>
                    </div>
                    <div class="fv__slide swiper-slide">
                         <picture>
                          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fv-bg2.webp" media="(min-width: 768px)">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-bg2-sp.webp" alt="">
                        </picture>
                    </div>
                    <div class="fv__slide swiper-slide">
                         <picture>
                          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fv-bg3.webp" media="(min-width: 768px)">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-bg3-sp.webp" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 個人のお客様へ -->
    <div id="individual">
        <section class="about">
            <div class="inner about__inner">
                <h2 class="about__title">個人のお客様へ</h2>
                <p  class="about__text">
                    せっかくのリフォームが、
                    <span><span>“トラブル”</span>や<span>“不安”</span>で<br class="is-sp"><span>台無しに…</span></span>
                </p>
                <div class="about__itemWrap">
                    <div class="about__item">
                        <div class="about__itemImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-item1.webp" alt="" width="188" height="132" loading="lazy">
                        </div>
                        <p class="about__itemText">
                            <span>壁紙がすぐに剥がれたのに</span>
                            <span>業者の対応が</span>
                            <span class="bg-green">遅く不安に…</span>
                        </p>
                    </div>
                    <div class="about__item">
                        <div class="about__itemImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-item2.webp" alt="" width="188" height="132" loading="lazy">
                        </div>
                        <p class="about__itemText">
                            キッチンリフォームで<br>
                            想定外の追加費用が発生し<br>
                            <span class="bg-green">予算を大きく超えてしまった</span>
                        </p>
                    </div>
                    <div class="about__item">
                        <div class="about__itemImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-item3.webp" alt="" width="188" height="132" loading="lazy">
                        </div>
                        <p class="about__itemText">
                            完成した仕上がりが<br>
                            打ち合わせのイメージと違い、
                            <span class="bg-green">満足できなかった</span>
                        </p>
                    </div>
                </div>
                <p class="about__problem">
                    <span class="about__problemComment">アフターフォローの遅れ、<br class="is-sp">予算オーバー、<br class="is-sp">仕上がりのズレ…。</span>
                    <span>こうした悩みは、<br class="is-sp">多くのお客様が実際に抱えている</span>
                    <span><span class="bg-green">「リフォームの落とし穴」</span><br class="is-sp">です。</span>
                </p>
                        
            </div>
            <div class="about__answer">
                <div class="inner">
                    <p class="about__answerText">
                        リフォームの相談窓口として、
                        <span>“安心”を提供します。</span>
                    </p>
                    <div class="about__answerItemWrap">
                        <div class="about__answerItem">
                            <div class="about__answerItemImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-answer1.webp" alt="" width="296" height="160" loading="lazy">
                            </div>
                            <p class="about__answerItemText">
                                <span class="bg-green">専門スタッフ2名体制</span>
                                <span>の安心</span>
                            </p> 
                        </div>
                        <div class="about__answerItem">
                            <div class="about__answerItemImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-answer2.webp" alt="" width="296" height="160" loading="lazy">
                            </div>
                            <p class="about__answerItemText">
                                <span>契約から施工までを</span>
                                <span class="bg-green">完全定額制の安心</span>
                            </p> 
                        </div>
                        <div class="about__answerItem">
                            <div class="about__answerItemImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-answer3.webp" alt="" width="296" height="160" loading="lazy">
                            </div>
                            <p class="about__answerItemText">
                                <span>営業や調整まで含めて</span>
                                <span>専門スタッフが伴走し</span>
                                <span class="bg-green">確かな品質をお届け</span>
                            </p> 
                        </div>
                    </div>                  
                </div>
            </div>
        </section>

        <!-- サービス概要 -->
        <section class="service u-section">
           <div class="inner service__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">flow</p>
                    <h2 class="section__title">ご利用の流れ</h2>
                </div>
                <div class="service__itemWrap">
                    <!-- 1 -->
                    <div class="service__item --1">
                        <p class="service__step --1">step</p>
                        <h3 class="service__itemTitle">まずはご相談から</h3>
                        <p class="service__itemText">
                            リフォームに関するご希望やイメージを共有いただくだけで、最適なプランをご提案します。
                        </p>
                    </div>
                    <!-- arrow -->
                    <div class="service__arrow --1"></div>
                    <!-- 2 -->
                    <div class="service__item --2">
                        <p class="service__step --2">step</p>
                        <h3 class="service__itemTitle">最適な職人をアサイン</h3>
                        <p class="service__itemText">
                           直接雇用の職人ネットワークから条件に合う人材を選定。営業や調整まで専門スタッフが一貫管理し、取引を透明化します。
                        </p>
                    </div>
                    <!-- arrow -->
                    <div class="service__arrow --2"></div>
                    <!-- 3 -->
                    <div class="service__item --3">
                        <p class="service__step --3">step</p>
                        <h3 class="service__itemTitle">確かな技術で高品質施工</h3>
                        <p class="service__itemText">
                            経験豊富な職人が適正コストで丁寧に施工。施工後も保証とアフターサポートで安心が続きます。
                        </p>
                    </div>
                    <!-- arrow -->
                    <div class="service__arrow --3"></div>
                    <!-- 4 -->
                    <div class="service__item --4">
                        <p class="service__step --4">step</p>
                        <h3 class="service__itemTitle">現地調査</h3>
                        <p class="service__itemText">
                            お住まいにうかがい、現状を把握。夢を実現する大切なポイントです。
                        </p>
                    </div>
                    <!-- arrow -->
                    <div class="service__arrow --4"></div>
                    <!-- 5 -->
                    <div class="service__item --5">
                        <p class="service__step --5">step</p>
                        <h3 class="service__itemTitle">お見積り</h3>
                        <p class="service__itemText">
                            プランとお見積もりをご提案します。
                        </p>
                    </div>
                </div>
           </div>
        </section>

        <!-- 料金追加 -->
        <section class="price u-section" id="price">
            <div class="inner price__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">price list</p>
                    <h2 class="section__title">料金表追加</h2>
                </div>
                <div class="price__content">
                    
                    <div class="price__genreWrap">
                        <div class="price__tabWrap">
                            <button class="price__tab --individual is-active" data-target="genre1">内装</button>
                            <button class="price__tab --individual" data-target="genre2">水まわり</button>
                            <button class="price__tab --individual" data-target="genre3">外装</button>
                        </div>
                        <!-- 内装 -->
                        <div class="price__genre --individual" id="genre1">
                            <!-- 1 -->
                            <div class="price__genreItem">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre1-1.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre1-1-sp.webp" alt="" width="223" height="258" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">壁紙・クロス張り替え</p>
                                    <p class="price__genrePriceTitle">本体＋工事費 6畳間</p>
                                    <p class="price__genrePrice">
                                        総額<span>30,000</span>円〜
                                    </p>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="price__genreItem">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre1-2.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre1-2-sp.webp" alt="" width="223" height="258" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">床材張り替え</p>
                                    <p class="price__genrePriceTitle">本体＋工事費 6畳間</p>
                                    <p class="price__genrePrice">
                                        総額<span>35,000</span>円〜
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 水まわり -->
                        <div class="price__genre --individual" id="genre2">
                            <!-- 1 -->
                            <div class="price__genreItem">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-1.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-1-sp.webp" alt="" width="223" height="258" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">システムキッチン</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額<span>80,000</span>円〜
                                    </p>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="price__genreItem">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-2.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-2-sp.webp" alt="" width="223" height="258" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">お風呂<span>（浴室）</span></p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額<span>452,000</span>円〜
                                    </p>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="price__genreItem">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-3.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-3-sp.webp?ver1.2" alt="" width="223" height="258" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">トイレ</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額<span>70,000</span>円〜
                                    </p>
                                </div>
                            </div>
                            <!-- 4 -->
                            <div class="price__genreItem">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-4.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-4-sp.webp?ver1.2" alt="" width="223" height="258" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">洗面化粧台</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額<span>41,000</span>円〜
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 外装 -->
                        <div class="price__genre --individual" id="genre3">
                            <!-- 1 -->
                            <div class="price__genreItem">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-1.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-1-sp.webp" alt="" width="223" height="258" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">外壁塗装</p>
                                    <p class="price__genrePriceTitle">本体＋工事費 15坪平屋</p>
                                    <p class="price__genrePrice">
                                        総額<span>580,000</span>円〜
                                    </p>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="price__genreItem">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-2.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-2-sp.webp" alt="" width="223" height="258" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">屋根塗装・葺き替え</p>
                                    <p class="price__genrePriceTitle">本体＋工事費 15坪平屋</p>
                                    <p class="price__genrePrice">
                                        総額<span>148,000</span>円〜
                                    </p>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="price__genreItem">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-3.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-3-sp.webp" alt="" width="223" height="258" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">外構・エクステリア<br><span class="is-2row">（玄関・フェンス・カーポート等）</span></p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額<span>32,000</span>円〜
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="price__reform">
                        <h3 class="price__reformTitle">定額リフォーム</h3>
                        <ul class="price__reformItemWrap">
                            <!-- 1 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform1.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform1-sp.webp" alt="" width="268" height="235" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">壁紙・クロス張り替え</p>
                                <p class="price__reformItemPrice">材料別<span>880</span>円/m〜</p>
                            </li>
                            <!-- 2 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform2.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform2-sp.webp" alt="" width="268" height="235" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">床材張り替え</p>
                                <p class="price__reformItemPrice">材料別<span>3,000</span>円〜</p>
                            </li>
                            <!-- 3 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform3.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform3-sp.webp" alt="" width="268" height="235" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">キッチン</p>
                                <p class="price__reformItemPrice">材料別<span>150,000</span>円〜</p>
                            </li>
                            <!-- 4 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform4.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform4-sp.webp" alt="" width="268" height="235" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">お風呂</p>
                                <p class="price__reformItemPrice">材料別<span>50,000</span>円〜</p>
                            </li>
                            <!-- 5 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform5.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform5-sp.webp" alt="" width="268" height="235" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">トイレ</p>
                                <p class="price__reformItemPrice">材料別<span>20,000</span>円〜</p>
                            </li>
                            <!-- 6 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform6.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform6-sp.webp" alt="" width="268" height="235" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">洗面化粧台</p>
                                <p class="price__reformItemPrice">材料別<span>20,000</span>円〜</p>
                            </li>
                            <!-- 7 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform7.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform7-sp.webp" alt="" width="268" height="235" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">外壁塗装</p>
                                <p class="price__reformItemPrice --small">材料別<span>40,000</span>円/延べ床坪数〜</p>
                            </li>
                            <!-- 8 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform8.webp" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform8-sp.webp" alt="" width="268" height="235" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">屋根リフォーム</p>
                                <p class="price__reformItemPrice">材料別<span>15,000</span>/坪〜</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- 特徴一覧 -->
        <section class="features u-section">
           <div class="inner features__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">features</p>
                    <h2 class="section__title">特徴一覧</h2>
                </div>
                <div class="features__main">
                    <ul class="features__lists">
                        <!-- 1 -->
                        <li class="features__list --1 is-active">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img1-sp.webp" alt="" width="302" height="168" loading="lazy">
                            </div>
                            <div class="features__listTextWrap">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.3575 15.3586H28.6426C29.1173 15.3586 29.5036 14.9722 29.5036 14.4975V3.73145C29.5036 3.25662 29.1174 2.87028 28.6426 2.87028H24.6326V1.49389C24.6326 0.670215 23.9625 0 23.1387 0H18.8613C18.0376 0 17.3674 0.670215 17.3674 1.49389V2.87028H13.3574C12.8827 2.87028 12.4964 3.25662 12.4964 3.73145V14.4976C12.4965 14.9723 12.8827 15.3586 13.3575 15.3586ZM13.6867 14.1683V6.67264L19.4006 9.02124V9.70268C19.4006 10.5847 20.1181 11.3022 21 11.3022C21.882 11.3022 22.5995 10.5847 22.5995 9.70268V9.02124L28.3134 6.67264V14.1684H13.6867V14.1683ZM20.5907 9.70268V7.6383H21.4092V9.70268C21.4092 9.92832 21.2256 10.1119 20.9999 10.1119C20.7743 10.1119 20.5907 9.92832 20.5907 9.70268ZM18.5577 1.49389C18.5577 1.32929 18.6967 1.19028 18.8613 1.19028H23.1387C23.3033 1.19028 23.4423 1.32938 23.4423 1.49389V2.87028H18.5577V1.49389ZM28.3133 4.06057V5.38569L22.5995 7.73429V7.04316C22.5995 6.71447 22.3331 6.44802 22.0044 6.44802H19.9957C19.667 6.44802 19.4006 6.71447 19.4006 7.04316V7.73429L13.6867 5.38569V4.06057H28.3133ZM41.9444 30.6929L38.8808 17.3165C38.7507 16.7484 38.4058 16.264 37.9096 15.9528C37.4133 15.6415 36.827 15.5416 36.2589 15.6718L33.7969 16.2357C33.2288 16.3658 32.7444 16.7107 32.4331 17.2071C32.1218 17.7033 32.022 18.2895 32.1521 18.8576L32.257 19.3158L31.1274 19.8073C30.2985 20.1679 29.431 20.1186 28.6186 19.6649C27.8711 19.2472 27.2083 18.8584 26.6235 18.5154C23.9568 16.9508 22.4877 16.0891 20.3159 16.901C19.6871 17.1361 19.055 17.6106 18.3996 18.2387H9.89924C9.87756 17.877 9.7655 17.5237 9.5669 17.2071C9.25556 16.7107 8.7713 16.3658 8.20312 16.2357L5.74107 15.6718C5.17298 15.5415 4.5867 15.6414 4.09044 15.9528C3.59419 16.264 3.24919 16.7483 3.11911 17.3165L0.0556414 30.6929C-0.0744367 31.261 0.0252899 31.8472 0.336627 32.3435C0.647964 32.8397 1.13223 33.1848 1.70032 33.3148L4.16245 33.8788C4.3262 33.9163 4.48986 33.9342 4.65122 33.9342C5.64857 33.9342 6.5524 33.2465 6.78433 32.234L6.79207 32.2002L15.9122 41.2186C16.4161 41.7226 17.0881 42 17.8048 42H17.8053C18.5219 41.9999 19.194 41.7222 19.698 41.2184C20.0772 40.8392 20.3282 40.3647 20.4293 39.8476L21.6204 41.0388C22.1242 41.5428 22.7963 41.8204 23.513 41.8203H23.5134C24.2301 41.8202 24.9023 41.5425 25.4062 41.0387C25.7853 40.6596 26.0362 40.1851 26.1373 39.6682L26.2227 39.7536C26.7265 40.2576 27.3986 40.5351 28.1153 40.5351H28.1156C28.8322 40.5349 29.5045 40.2573 30.0084 39.7534C30.5122 39.2496 30.7897 38.5774 30.7898 37.8607C30.7898 37.6857 30.7733 37.5133 30.7409 37.3454C30.7653 37.3461 30.7896 37.3464 30.8141 37.3464H30.8144C31.5311 37.3462 32.2033 37.0687 32.7072 36.5648C33.2111 36.0609 33.4886 35.3887 33.4886 34.6721C33.4886 34.381 33.4421 34.0975 33.354 33.8295L35.4834 32.8896C35.6575 33.173 35.8959 33.4153 36.1868 33.5979C36.5411 33.82 36.941 33.9345 37.3477 33.9345C37.5107 33.9345 37.6748 33.9161 37.8374 33.8789L40.2994 33.3149C40.8675 33.1848 41.3518 32.8398 41.6632 32.3436C41.9747 31.8472 42.0744 31.2609 41.9444 30.6929ZM4.42822 32.7185L1.96609 32.1546C1.70789 32.0955 1.48735 31.9379 1.34494 31.7109C1.20262 31.4839 1.1568 31.2168 1.21589 30.9585L4.27935 17.5822C4.33853 17.3241 4.49607 17.1034 4.72298 16.961C4.88528 16.8593 5.06807 16.8069 5.25349 16.8069C5.32738 16.8069 5.40177 16.8152 5.47531 16.8321L7.93735 17.396C8.19556 17.4551 8.41618 17.6127 8.5585 17.8396C8.70082 18.0665 8.74664 18.3338 8.68756 18.592L5.62409 31.9683C5.50124 32.5048 4.96443 32.8413 4.42822 32.7185ZM31.8657 35.723C31.5865 36.0022 31.2132 36.1561 30.8144 36.1561C30.4157 36.1561 30.0424 36.0024 29.7633 35.7233L23.8722 29.8317C23.6398 29.5994 23.2629 29.5994 23.0306 29.8316C22.7982 30.064 22.7981 30.4409 23.0306 30.6733L28.9216 36.5648C28.978 36.6212 29.0364 36.6748 29.0969 36.7254C29.1172 36.755 29.1406 36.7832 29.1669 36.8094C29.446 37.0885 29.5997 37.4618 29.5996 37.8605C29.5995 38.2593 29.4458 38.6326 29.1668 38.9116C28.8876 39.1908 28.5143 39.3446 28.1154 39.3447C27.7167 39.3447 27.3434 39.191 27.0644 38.9119L25.437 37.2844C25.4267 37.2738 25.4165 37.2633 25.4061 37.2529C25.4012 37.248 25.3963 37.2433 25.3913 37.2386L20.7271 32.5741C20.4948 32.3418 20.1179 32.3418 19.8855 32.5741C19.6531 32.8065 19.6531 33.1833 19.8855 33.4157L24.5874 38.118C24.852 38.3943 24.9974 38.758 24.9973 39.1458C24.9973 39.5445 24.8435 39.9178 24.5645 40.1969C24.2854 40.476 23.912 40.6299 23.5132 40.6299C23.5131 40.6299 23.5131 40.6299 23.513 40.6299C23.1143 40.6299 22.7411 40.4762 22.4621 40.1971L19.721 37.4558C19.7134 37.4481 19.7058 37.4403 19.698 37.4327C19.6945 37.4291 19.6909 37.4256 19.6872 37.4222L17.3161 35.0509C17.0837 34.8185 16.7068 34.8185 16.4745 35.0508C16.242 35.2832 16.242 35.66 16.4745 35.8924L18.8734 38.2916C19.1419 38.5687 19.2894 38.9349 19.2893 39.3255C19.2893 39.7243 19.1355 40.0975 18.8565 40.3765C18.5773 40.6557 18.204 40.8095 17.8052 40.8096C17.8051 40.8096 17.805 40.8096 17.8049 40.8096C17.4064 40.8096 17.0331 40.6559 16.7517 40.3745L7.1046 30.8353L9.71696 19.4289H17.2688C16.8524 19.8981 16.4233 20.406 15.9773 20.9343C14.7713 22.3625 13.5243 23.8393 12.1674 24.9771C11.9162 25.1878 11.8826 25.562 12.0925 25.8139C13.3291 27.2996 14.7827 27.9185 16.4128 27.6535C17.8366 27.4222 19.2446 26.5511 20.5542 25.6443C21.7145 24.8409 23.2218 24.9767 24.2198 25.9748L31.8657 33.6208C32.1448 33.8999 32.2985 34.2733 32.2985 34.672C32.2985 35.0707 32.1448 35.444 31.8657 35.723ZM32.7073 32.779L25.0614 25.133C23.6722 23.7438 21.4916 23.5473 19.8766 24.6657C17.117 26.5766 15.2165 27.2866 13.3988 25.4819C14.6581 24.3416 15.8348 22.9479 16.8866 21.7023C18.3135 20.0126 19.6612 18.4166 20.7328 18.0159C22.3741 17.4022 23.4417 18.0285 26.0214 19.542C26.6112 19.8879 27.2797 20.2802 28.0382 20.704C29.1709 21.3367 30.4366 21.4059 31.6024 20.8988L32.5276 20.4963L35.106 31.7551L32.7306 32.8036C32.7228 32.7955 32.7153 32.787 32.7073 32.779ZM40.6551 31.7109C40.5127 31.9379 40.2921 32.0954 40.0339 32.1546L37.5719 32.7185C37.3136 32.7776 37.0465 32.7317 36.8195 32.5894C36.5926 32.447 36.4351 32.2264 36.3759 31.9682L33.3124 18.5919C33.2533 18.3337 33.299 18.0665 33.4414 17.8395C33.5838 17.6126 33.8044 17.4551 34.0626 17.3959L36.5247 16.832C36.5983 16.8151 36.6725 16.8068 36.7465 16.8068C36.9319 16.8068 37.1148 16.8592 37.277 16.9609C37.5039 17.1034 37.6615 17.324 37.7206 17.5821L40.7842 30.9585C40.8433 31.2168 40.7975 31.484 40.6551 31.7109Z" fill="#C4C4C4"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">2名体制での安心サポート</h3>
                                    <p class="features__listText">専門スタッフ2名体制で、お客様を最後までサポート</p>
                                </span>
                            </div>
                        </li>
                        <!-- 2 -->
                        <li class="features__list --2">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img2-sp.webp" alt="" width="302" height="168" loading="lazy">
                            </div>
                            <div class="features__listTextWrap">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2027_1843)">
                                    <path d="M30.1875 0.25C33.4382 0.25 36.355 0.90018 38.4502 1.86719C39.4983 2.35091 40.3306 2.9097 40.8975 3.49609C41.4651 4.08332 41.75 4.68058 41.75 5.25V30.1875C41.75 32.028 40.5197 33.6003 38.4268 34.7256C36.3993 35.8156 33.6008 36.4582 30.4795 36.4961L30.4844 36.4658H30.1924C29.4338 36.4658 28.697 36.4286 27.9814 36.3594C28.2421 35.6824 28.4594 34.9899 28.6318 34.2852C29.1385 34.3234 29.6597 34.3437 30.1953 34.3438C33.191 34.3438 35.7231 33.7393 37.4277 32.8223C39.1588 31.8893 39.6356 30.9014 39.6357 30.1562V26.0615L39.2451 26.3271C38.9774 26.5092 38.7007 26.678 38.417 26.834C36.4152 27.9245 33.5981 28.6035 30.1904 28.6035C29.8021 28.6035 29.4225 28.5923 29.0518 28.5752C28.9863 27.8497 28.8767 27.1377 28.7217 26.4385C29.1923 26.4695 29.682 26.4873 30.1904 26.4873C33.1475 26.4873 35.4795 25.9306 37.0859 25.1377L37.3975 24.9756C39.0491 24.0732 39.6326 23.0481 39.6328 22.2998V18.2041L39.2422 18.4697C39.1083 18.5608 38.972 18.6488 38.834 18.7334L38.415 18.9775C36.4131 20.0682 33.5956 20.7471 30.1875 20.7471C28.6926 20.7471 27.3237 20.6158 26.0801 20.3789C25.3074 19.2617 24.4082 18.2422 23.4043 17.3379C25.0062 18.1006 27.2963 18.6328 30.1826 18.6328C33.2619 18.6328 35.6515 18.0275 37.2705 17.1826L37.2803 17.1875L37.3945 17.124C39.0463 16.2216 39.6298 15.1966 39.6299 14.4482V10.3516L39.2393 10.6191C38.9749 10.7999 38.699 10.9689 38.4121 11.126C36.4156 12.2165 33.5929 12.8965 30.1846 12.8965C26.7764 12.8964 23.9589 12.2167 21.957 11.126H21.958C21.6743 10.97 21.3976 10.8012 21.1299 10.6191L20.7393 10.3535V14.4482C20.7393 14.7945 20.8661 15.199 21.1641 15.624C20.3602 15.1069 19.5111 14.6556 18.625 14.2744V5.25C18.625 4.68058 18.9099 4.08332 19.4775 3.49609C20.0444 2.9097 20.8767 2.35091 21.9248 1.86719C24.02 0.90018 26.9368 0.25 30.1875 0.25ZM30.1924 2.37207C28.6833 2.37211 27.0246 2.64365 25.6582 2.9541C24.2973 3.26332 23.2007 3.61721 22.8174 3.79395C22.5846 3.90071 22.3129 4.07069 22.0508 4.25098L21.793 4.43359C21.1089 4.92981 20.75 5.7364 20.75 6.5625C20.75 7.3081 21.3332 8.33632 22.9854 9.23633L22.9863 9.2373C24.6059 10.1118 27.0377 10.747 30.1924 10.7471C33.1492 10.7471 35.4814 10.1912 37.0879 9.39844L37.4004 9.23633C39.0522 8.33382 39.6357 7.30787 39.6357 6.55957V6.54395C39.6357 5.72915 39.2946 4.92629 38.6133 4.43359H38.6143C38.2915 4.19889 37.9159 3.95371 37.5684 3.79395H37.5674C35.7969 2.97347 33.1879 2.37207 30.1924 2.37207Z" fill="#C4C4C4" stroke="white" stroke-width="0.5"/>
                                    <path d="M11.8125 18.625C18.2107 18.625 23.375 23.7893 23.375 30.1875C23.375 36.5857 18.2107 41.75 11.8125 41.75C5.41432 41.75 0.25 36.5857 0.25 30.1875C0.25 23.7893 5.41432 18.625 11.8125 18.625ZM11.8125 20.75C6.60818 20.75 2.375 24.9832 2.375 30.1875C2.375 35.3918 6.60818 39.625 11.8125 39.625C17.0168 39.625 21.25 35.3918 21.25 30.1875C21.25 24.9832 17.0168 20.75 11.8125 20.75Z" fill="#C4C4C4" stroke="white" stroke-width="0.5"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_2027_1843">
                                    <rect width="42" height="42" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">価格の安さ</h3>
                                    <p class="features__listText">職人を直接雇用しているため中間マージンなし、適正価格を実現</p>
                                </span>
                            </div>
                        </li>
                        <!-- 3 -->
                        <li class="features__list --3">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img3-sp.webp" alt="" width="302" height="168" loading="lazy">
                            </div>
                            <div class="features__listTextWrap">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.125 5.25C24.5342 5.25 28.7629 7.00156 31.8806 10.1193C34.9984 13.2371 36.75 17.4658 36.75 21.875C36.75 26.2842 34.9984 30.5129 31.8806 33.6306C28.7629 36.7484 24.5342 38.5 20.125 38.5C15.7158 38.5 11.4871 36.7484 8.36935 33.6306C5.25156 30.5129 3.5 26.2842 3.5 21.875C3.5 17.4658 5.25156 13.2371 8.36935 10.1193C11.4871 7.00156 15.7158 5.25 20.125 5.25ZM20.125 7C16.1799 7 12.3964 8.56718 9.60679 11.3568C6.81718 14.1464 5.25 17.9299 5.25 21.875C5.25 25.8201 6.81718 29.6036 9.60679 32.3932C12.3964 35.1828 16.1799 36.75 20.125 36.75C22.0784 36.75 24.0127 36.3652 25.8174 35.6177C27.6221 34.8702 29.2619 33.7745 30.6432 32.3932C32.0245 31.0119 33.1202 29.3721 33.8677 27.5674C34.6152 25.7627 35 23.8284 35 21.875C35 17.9299 33.4328 14.1464 30.6432 11.3568C27.8536 8.56718 24.0701 7 20.125 7ZM19.25 12.25H21V21.735L29.225 26.4775L28.35 28L19.25 22.75V12.25Z" fill="#C4C4C4"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">24時間365日対応</h3>
                                    <p class="features__listText">いつでもご相談可能。急なトラブルにも迅速対応</p>
                                </span>
                            </div>
                        </li>
                        <!-- 4 -->
                        <li class="features__list --4">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img4-sp.webp" alt="" width="302" height="168" loading="lazy">
                            </div>
                            <div class="features__listTextWrap">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 34.8251C23.8292 33.9501 26.1917 32.2223 28.0875 29.6416C29.9833 27.0609 31.0917 24.1804 31.4125 21.0001H21V7.2521L11.207 10.8869C10.9818 10.9767 10.808 11.1114 10.6855 11.2911C10.5618 11.4708 10.5 11.6726 10.5 11.8966V20.1794C10.5 20.4057 10.5292 20.6793 10.5875 21.0001H21V34.8251ZM21 36.4736C20.8413 36.4736 20.6739 36.459 20.4978 36.4299C20.3216 36.4007 20.1582 36.3569 20.0077 36.2986C16.5626 34.9861 13.825 32.7601 11.795 29.6206C9.765 26.4811 8.75 23.0826 8.75 19.4251V11.9299C8.75 11.3349 8.92208 10.7964 9.26625 10.3146C9.61042 9.83277 10.0508 9.48277 10.5875 9.2646L20.0113 5.7646C20.3519 5.64093 20.6815 5.5791 21 5.5791C21.3185 5.5791 21.6487 5.64093 21.9905 5.7646L31.4125 9.2646C31.9492 9.48277 32.3896 9.83277 32.7337 10.3146C33.0779 10.7964 33.25 11.3349 33.25 11.9299V19.4251C33.25 23.0826 32.235 26.4811 30.205 29.6206C28.175 32.7601 25.4374 34.9861 21.9923 36.2986C21.8406 36.3569 21.6772 36.4007 21.5022 36.4299C21.3272 36.459 21.1598 36.4736 21 36.4736Z" fill="#C4C4C4"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">10年保証つき</h3>
                                    <p class="features__listText">施工後も長期保証で安心してご利用いただけます</p>
                                </span>
                            </div>
                        </li>
                        <!-- 5 -->
                        <li class="features__list --5">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img5-sp.webp" alt="" width="302" height="168" loading="lazy">
                            </div>
                            <div class="features__listTextWrap">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.0657 16.613C19.0112 16.4481 19.0242 16.2682 19.102 16.1129C19.1798 15.9576 19.316 15.8395 19.4808 15.7845L21.4495 15.1282C21.5481 15.0955 21.653 15.0866 21.7556 15.1024C21.8582 15.1181 21.9557 15.1579 22.0399 15.2186C22.1241 15.2793 22.1928 15.3591 22.2401 15.4515C22.2875 15.5439 22.3123 15.6462 22.3125 15.75V22.3125C22.3125 22.4865 22.2434 22.6535 22.1203 22.7765C21.9972 22.8996 21.8303 22.9688 21.6562 22.9688C21.4822 22.9688 21.3153 22.8996 21.1922 22.7765C21.0691 22.6535 21 22.4865 21 22.3125V16.6605L19.8942 17.028C19.7293 17.0826 19.5495 17.0695 19.3942 16.9917C19.2389 16.9139 19.1208 16.7777 19.0657 16.613ZM40.0312 34.125C40.0312 34.299 39.9621 34.466 39.839 34.589C39.716 34.7121 39.549 34.7812 39.375 34.7812H2.625C2.45095 34.7812 2.28403 34.7121 2.16096 34.589C2.03789 34.466 1.96875 34.299 1.96875 34.125C1.96875 33.951 2.03789 33.784 2.16096 33.661C2.28403 33.5379 2.45095 33.4688 2.625 33.4688H4.59375V17.0625C4.59375 16.5404 4.80117 16.0396 5.17038 15.6704C5.5396 15.3012 6.04036 15.0938 6.5625 15.0938H13.7812V9.1875C13.7812 8.66536 13.9887 8.1646 14.3579 7.79538C14.7271 7.42617 15.2279 7.21875 15.75 7.21875H26.25C26.7721 7.21875 27.2729 7.42617 27.6421 7.79538C28.0113 8.1646 28.2188 8.66536 28.2188 9.1875V21.6562H35.4375C35.9596 21.6562 36.4604 21.8637 36.8296 22.2329C37.1988 22.6021 37.4062 23.1029 37.4062 23.625V33.4688H39.375C39.549 33.4688 39.716 33.5379 39.839 33.661C39.9621 33.784 40.0312 33.951 40.0312 34.125ZM28.2188 22.9688V33.4688H36.0938V23.625C36.0938 23.451 36.0246 23.284 35.9015 23.161C35.7785 23.0379 35.6115 22.9688 35.4375 22.9688H28.2188ZM15.0938 33.4688H26.9062V9.1875C26.9062 9.01345 26.8371 8.84653 26.714 8.72346C26.591 8.60039 26.424 8.53125 26.25 8.53125H15.75C15.576 8.53125 15.409 8.60039 15.286 8.72346C15.1629 8.84653 15.0938 9.01345 15.0938 9.1875V33.4688ZM5.90625 33.4688H13.7812V16.4062H6.5625C6.38845 16.4062 6.22153 16.4754 6.09846 16.5985C5.97539 16.7215 5.90625 16.8885 5.90625 17.0625V33.4688Z" fill="#C4C4C4"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">施工実績 427件・顧客満足度98％</h3>
                                    <p class="features__listText">多数の施工経験と高い満足度が信頼の証</p>
                                </span>
                            </div>
                        </li>
                        <!-- 6 -->
                        <li class="features__list --6">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img6-sp.webp" alt="" width="302" height="168" loading="lazy">
                            </div>
                            <div class="features__listTextWrap">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M36.4549 23.3323V31.6358C36.4549 33.4589 34.9717 34.9421 33.1486 34.9421H19.8851V39.0775C19.8851 39.3393 19.7291 39.576 19.4885 39.679C19.4054 39.7145 19.3179 39.7318 19.231 39.7318C19.066 39.7318 18.9035 39.6695 18.7794 39.5512L13.9429 34.942H3.3883C1.56524 34.9421 0.0820312 33.4589 0.0820312 31.6358V17.1877C0.0820312 15.3645 1.56524 13.8813 3.3883 13.8813H29.7161C30.0774 13.8813 30.3703 14.1742 30.3703 14.5356C30.3703 14.8969 30.0774 15.1899 29.7161 15.1899H3.3883C2.28679 15.1899 1.39068 16.0861 1.39068 17.1876V31.6357C1.39068 32.7372 2.28687 33.6334 3.3883 33.6334H14.2048C14.3729 33.6334 14.5345 33.6981 14.6562 33.814L18.5766 37.55V34.2877C18.5766 33.9263 18.8695 33.6334 19.2308 33.6334H33.1487C34.2502 33.6334 35.1464 32.7372 35.1464 31.6357V23.3323C35.1464 22.971 35.4393 22.678 35.8007 22.678C36.162 22.678 36.4549 22.971 36.4549 23.3323ZM41.5806 10.8448L31.2578 28.7249C31.1892 28.8436 31.0852 28.9377 30.9604 28.9941L26.4833 31.0161C26.3974 31.0549 26.3056 31.0741 26.214 31.0741C26.1007 31.0741 25.9877 31.0446 25.8868 30.9864C25.7042 30.881 25.5838 30.6942 25.5629 30.4846L25.0765 25.5952C25.0629 25.459 25.0925 25.3218 25.161 25.2033L35.4841 7.3248C35.8268 6.72917 36.4121 6.29408 37.1316 6.10073C38.0493 5.85406 39.0958 6.01287 40.0027 6.53632C40.9093 7.05869 41.5706 7.88507 41.8164 8.80309C42.0094 9.52348 41.9256 10.2486 41.5806 10.8448ZM26.775 29.4485L29.2598 28.3263L26.505 26.7355L26.775 29.4485ZM38.9812 12.7298L35.1516 10.5175L26.6212 25.2915L30.4519 27.5035L38.9812 12.7298ZM40.5523 9.14171C40.398 8.56544 39.9482 8.01526 39.3489 7.66999C38.7491 7.32373 38.0472 7.20963 37.4713 7.3645C37.2013 7.43702 36.8342 7.60248 36.6178 7.97826L35.806 9.3842L39.6354 11.5965L40.4476 10.1898C40.6654 9.81346 40.6247 9.41209 40.5523 9.14171ZM2.68488 5.83552C2.76765 5.58057 2.99759 5.40191 3.26517 5.38468L5.9809 5.20979L6.98389 2.68118C7.08274 2.43188 7.32367 2.26815 7.59183 2.26807H7.59207C7.86015 2.26807 8.10108 2.43155 8.20009 2.68068L9.2053 5.20971L11.9214 5.38468C12.189 5.40191 12.419 5.58057 12.5017 5.83552C12.5846 6.09056 12.5034 6.3702 12.2971 6.54132L10.2025 8.27809L10.8759 10.9133C10.9422 11.173 10.8434 11.447 10.6265 11.6046C10.5121 11.6877 10.3771 11.7296 10.2418 11.7296C10.1205 11.7296 9.99903 11.6959 9.89198 11.6282L7.59224 10.1728L5.29487 11.628C5.06814 11.7717 4.77701 11.7622 4.5602 11.6047C4.34323 11.4471 4.24438 11.1731 4.31074 10.9133L4.98414 8.27809L2.88955 6.54132C2.68324 6.3702 2.60211 6.09056 2.68488 5.83552ZM4.99218 6.5848L6.13832 7.53513C6.33298 7.69657 6.4173 7.9557 6.35463 8.20073L5.98664 9.64079L7.24196 8.84566C7.34885 8.7779 7.4705 8.74411 7.59207 8.74411C7.71356 8.74411 7.83513 8.7779 7.94194 8.8455L9.20021 9.64177L8.83198 8.20081C8.7693 7.95578 8.85363 7.69657 9.04829 7.53521L10.1944 6.58488L8.70811 6.48915C8.45578 6.47291 8.23553 6.31278 8.14209 6.07793L7.59273 4.69545L7.04452 6.07735C6.95125 6.31253 6.73083 6.47282 6.47842 6.48907L4.99218 6.5848ZM13.3601 5.83552C13.4429 5.58057 13.6728 5.40191 13.9404 5.38468L16.6564 5.20971L17.6616 2.68068C17.7606 2.43155 18.0016 2.26807 18.2696 2.26807H18.2698C18.538 2.26815 18.7789 2.43188 18.8778 2.68118L19.8808 5.20979L22.5966 5.38468C22.8642 5.40191 23.0941 5.58057 23.1769 5.83552C23.2597 6.09056 23.1785 6.3702 22.9722 6.54132L20.8776 8.27809L21.551 10.9133C21.6174 11.1731 21.5185 11.4471 21.3015 11.6047C21.1872 11.6878 21.0522 11.7296 20.9169 11.7296C20.7956 11.7296 20.674 11.6959 20.5669 11.628L18.2694 10.1728L15.9698 11.6282C15.7432 11.7716 15.4521 11.7621 15.2353 11.6046C15.0184 11.447 14.9196 11.1731 14.986 10.9133L15.6594 8.27809L13.5648 6.54132C13.3585 6.3702 13.2773 6.09056 13.3601 5.83552ZM15.6674 6.5848L16.8135 7.53513C17.0082 7.69657 17.0925 7.9557 17.0299 8.20073L16.6616 9.64161L17.9197 8.84541C18.1335 8.71023 18.406 8.71006 18.6198 8.84558L19.8752 9.64071L19.5072 8.20065C19.4445 7.95562 19.5289 7.6964 19.7235 7.53505L20.8696 6.58471L19.3833 6.48898C19.1308 6.47274 18.9105 6.31237 18.8172 6.07727L18.269 4.69537L17.7196 6.07768C17.6262 6.31262 17.4059 6.47266 17.1536 6.4889L15.6674 6.5848ZM24.0352 5.83552C24.118 5.58057 24.3479 5.40191 24.6155 5.38468L27.3316 5.20971L28.3367 2.68068C28.4357 2.43155 28.6767 2.26807 28.9447 2.26807H28.945C29.2131 2.26815 29.4541 2.43188 29.5529 2.68109L30.556 5.20979L33.2717 5.38468C33.5393 5.40191 33.7692 5.58057 33.852 5.83552C33.9349 6.09056 33.8536 6.3702 33.6473 6.54132L31.5527 8.27809L32.2261 10.9133C32.2925 11.1731 32.1937 11.4471 31.9767 11.6047C31.8623 11.6878 31.7273 11.7296 31.592 11.7296C31.4707 11.7296 31.3491 11.6959 31.242 11.628L28.9446 10.1728L26.645 11.6282C26.4183 11.7716 26.1272 11.7621 25.9105 11.6046C25.6936 11.447 25.5947 11.1731 25.6611 10.9133L26.3345 8.27809L24.2399 6.54132C24.0336 6.3702 23.9525 6.09056 24.0352 5.83552ZM26.3425 6.5848L27.4887 7.53513C27.6833 7.69657 27.7677 7.9557 27.705 8.20073L27.3367 9.64161L28.5949 8.84541C28.8086 8.71023 29.0811 8.71006 29.2949 8.84558L30.5503 9.64071L30.1823 8.20065C30.1197 7.95562 30.204 7.6964 30.3986 7.53505L31.5448 6.58471L30.0585 6.48898C29.8061 6.47274 29.5857 6.31237 29.4924 6.07735L28.9442 4.69537L28.3948 6.07768C28.3014 6.31262 28.0811 6.47266 27.8288 6.4889L26.3425 6.5848ZM26.4584 18.7741C26.4584 18.4128 26.1654 18.1199 25.8041 18.1199H4.67611C4.31476 18.1199 4.02183 18.4128 4.02183 18.7741C4.02183 19.1355 4.31476 19.4284 4.67611 19.4284H25.8041C26.1654 19.4285 26.4584 19.1356 26.4584 18.7741ZM23.0664 21.8789H4.67611C4.31476 21.8789 4.02183 22.1719 4.02183 22.5332C4.02183 22.8946 4.31476 23.1875 4.67611 23.1875H23.0664C23.4277 23.1875 23.7206 22.8946 23.7206 22.5332C23.7206 22.1719 23.4277 21.8789 23.0664 21.8789ZM23.0664 25.6358H4.67611C4.31476 25.6358 4.02183 25.9288 4.02183 26.2901C4.02183 26.6514 4.31476 26.9444 4.67611 26.9444H23.0664C23.4277 26.9444 23.7206 26.6514 23.7206 26.2901C23.7206 25.9288 23.4277 25.6358 23.0664 25.6358ZM23.0664 29.3949H4.67611C4.31476 29.3949 4.02183 29.6878 4.02183 30.0492C4.02183 30.4105 4.31476 30.7035 4.67611 30.7035H23.0664C23.4277 30.7035 23.7206 30.4105 23.7206 30.0492C23.7206 29.6878 23.4277 29.3949 23.0664 29.3949Z" fill="#C4C4C4"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">実績と安心感</h3>
                                    <p class="features__listText">施工事例やレビューを公開し、納得して依頼できる透明性</p>
                                </span>
                            </div>
                        </li>
                    </ul>
                    <div class="features__imgs">
                        <!-- スライダー -->
                        <div class="features__swiper--individual swiper">
                            <!-- スライド -->
                            <div class="features__swiper-wrapper swiper-wrapper">
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img1.webp" alt="" width="461" height="540" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img2.webp" alt="" width="461" height="540" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img3.webp" alt="" width="461" height="540" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img4.webp" alt="" width="461" height="540" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img5.webp" alt="" width="461" height="540" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img6.webp" alt="" width="461" height="540" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </section>
        
        <!-- 比較表 -->
        <section class="comparison u-section">
            <div class="inner comparison__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">comparison</p>
                    <h2 class="section__title">比較表</h2>
                </div>
                <div class="comparison__content">
                    <p class="comparison__text">「リフォームの相談窓口」なら、<br class="is-sp">“費用の安心・スピード対応・<br class="is-sp">柔軟な提案・確かな品質”を<br class="is-sp">ワンストップで提供します。</p>
                    <div class="comparison__tableWrap">
                        <table class="comparison__table">
                            <thead class="comparison__thead">
                                <tr class="comparison__row">
                                    <th></th>
                                    <th>一般的な<br class="is-sp">リフォーム業者</th>
                                    <th>
                                        raku.reforｍ<br>
                                        リフォーム<br class="is-sp">の相談窓口
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="comparison__tbody">
                                <!-- 1 -->
                                <tr class="comparison__row">
                                    <th>費用</th>
                                    <td><span class="mark">△</span>下請けや仲介を挟むため中間マージンが発生し、総額が高くなりやすい</td>
                                    <td><span class="mark --2">〇</span>職人を直接雇用しているため<span>中間コストを削減</span></td>
                                </tr>
                                <!-- 2 -->
                                <tr class="comparison__row">
                                    <th>対応<br class="is-sp">スピード</th>
                                    <td><span class="mark">△</span>問い合わせ後に営業・下請けとの調整が必要で、対応が遅れがち</td>
                                    <td><span class="mark --2">〇</span>専門スタッフが<span>24時間365日対応</span></td>
                                </tr>
                                <!-- 3 -->
                                <tr class="comparison__row">
                                    <th>提案力</th>
                                    <td><span class="mark">×</span>提案が画一的で、デザインや機能性が希望とズレることも</td>
                                    <td>
                                        <span class="mark --3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/double-circle.svg" alt="◎" width="22" height="22" loading="lazy">
                                        </span>
                                        生活環境にあわせた提案で<span>顧客満足度98％</span>
                                    </td>
                                </tr>
                                <!-- 4 -->
                                <tr class="comparison__row">
                                    <th>保証・<br>アフター対応</th>
                                    <td><span class="mark">×</span>施工後の不具合対応が遅い／十分でないケースが多い</td>
                                    <td><span class="mark --2">〇</span>専門スタッフがリフォーム後も<span>専任サポート。<br>10年保証</span></td>
                                </tr>
                                <!-- 5 -->
                                <tr class="comparison__row">
                                    <th>施工実績・<br>安心感</th>
                                    <td class="is-center"><span class="mark">×</span>実績や口コミが不透明で品質にばらつきがある</td>
                                    <td>
                                        <span class="mark --3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/double-circle.svg" alt="◎" width="22" height="22" loading="lazy">
                                        </span>
                                        専門スタッフが<span>2名体制でサポート<br>施工実績427件の安心感 </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- サポート -->
        <section class="support">
            <div class="inner support__inner">
                <h2 class="support__title">
                    あなたに合った
                    <span>“サポート”を<br class="is-sp">ご用意しています</span>
                </h2>
                <div class="support__itemWrap">
                    <!-- 1 -->
                    <div class="support__item">
                        <div class="support__itemImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-img1.webp" alt="" width="358" height="217" loading="lazy">
                        </div>
                        <h3 class="support__itemTitle">完全定額制</h3>
                    </div>
                    <!-- 2 -->
                    <div class="support__item">
                        <div class="support__itemImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-img2.webp" alt="" width="358" height="217" loading="lazy">
                        </div>
                        <h3 class="support__itemTitle">地域密着・最短即日対応</h3>
                    </div>
                    <!-- 3 -->
                    <div class="support__item">
                        <div class="support__itemImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-img3.webp" alt="" width="358" height="217" loading="lazy">
                        </div>
                        <h3 class="support__itemTitle">複数見積比較で納得の意思決定</h3>
                    </div>
                </div>
                <div class="support__btnWrap">
                    <a class="support__btn --line" href="<?php echo esc_url('https://lin.ee/O1gcsoGG'); ?>" target="_blank">LINEで問い合わせ</a>
                    <a class="support__btn --mail" href="<?php echo esc_url(home_url('/#contact')); ?>">メールで問い合わせ</a>
                </div>
            </div>
        </section>

        <!-- 安心できる理由 -->
        <section class="reason u-section">
            <div class="inner reason__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">reason</p>
                    <h2 class="section__title">安心できる理由</h2>
                </div>
                <div class="reason__content">
                    <div class="reason__itemWrap">
                        <!-- 1 -->
                        <div class="reason__item">
                            <div class="reason__itemImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason-img1.webp" alt="" width="507" height="400" loading="lazy">
                            </div>
                            <div class="reason__itemTextWrap">
                                <h3 class="reason__itemTitle">契約フローの透明性</h3>
                                <ul class="reason__itemListWrap">
                                    <li class="reason__itemList">契約前に詳細な見積もりを提示し、不明瞭な追加費用が発生しない仕組みを徹底</li>
                                    <li class="reason__itemList">手付金不要で、途中解約にも柔軟に対応可能</li>
                                </ul>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="reason__item --reverse">
                            <div class="reason__itemImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason-img2.webp" alt="" width="507" height="400" loading="lazy">
                            </div>
                            <div class="reason__itemTextWrap">
                                <h3 class="reason__itemTitle">運営による一貫サポートと<br class="is-sp">保証制度</h3>
                                <ul class="reason__itemListWrap">
                                    <li class="reason__itemList">専任の担当者がヒアリングから施工完了までを一貫サポート</li>
                                    <li class="reason__itemList">施工後も保証とアフターケアを提供し、長期的な安心を確保走</li>
                                </ul>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="reason__item">
                            <div class="reason__itemImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason-img3.webp" alt="" width="507" height="400" loading="lazy">
                            </div>
                            <div class="reason__itemTextWrap">
                                <h3 class="reason__itemTitle">過去の豊富な施工実績</h3>
                                <ul class="reason__itemListWrap">
                                    <li class="reason__itemList">累計施工件数や高いリピート率を根拠に提示</li>
                                    <li class="reason__itemList">個人住宅から法人施設まで幅広い現場経験あり</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="reason__linkWrap">
                        <a class="reason__link" href="<?php echo esc_url(home_url('/#contact')); ?>">お見積り依頼する</a>
                    </div>
                </div>
           </div>
        </section>

        <!-- 実績・お客様の声 -->
        <section class="voice u-section" id="voice">
            <div class="inner voice__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">voice</p>
                    <h2 class="section__title">実績・お客様の声</h2>
                </div>
                <div class="voice__content">
                    <div class="voice__item">
                        <div class="voice__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice-img1.webp?ver1.1" alt="" width="140" height="140" loading="lazy">
                        </div>
                        <div class="voice__textWrap">
                            <p class="voice__mainName">山下様</p>
                            <p class="voice__mainText">
                                新築から15年経ち、キッチンリフォームをお願いしました。担当の方が私たちの希望を丁寧に聞き取り、生活動線やデザイン性まで考え抜いた提案をしてくれました。見積もりも他社と比べて1割ほどリーズナブルで、施工中も靴下をわざわざ履き替えるなど細やかな気遣いが感じられ安心でした。完成後、家族みんなが自然と集まる空間になり、本当に頼んで良かったです。
                            </p>
                        </div>
                        <div class="voice__works">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/voice-works-img1.webp" media="(min-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice-works-img1-sp.webp" alt="" width="332" height="227" loading="lazy">
                            </picture>
                            <p class="voice__worksText">施工事例</p>
                        </div>
                    </div>
                    <div class="voice__item">
                        <div class="voice__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice-img2.webp?ver1.1" alt="" width="140" height="140" loading="lazy">
                        </div>
                        <div class="voice__textWrap">
                            <p class="voice__mainName">津村様</p>
                            <p class="voice__mainText">
                                浴室リフォームの際、初期工事で小さなミスがありましたが、その後の対応に驚きました。連絡をしたら、なんと2時間後には現場責任者が駆けつけてくれ、迅速に修正対応をしてくれたのです。誠実な姿勢とスピーディーなサポートにむしろ安心感が増しました。問題があってもすぐに解決してくれる会社だと感じています。
                            </p>
                        </div>
                        <div class="voice__works">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/voice-works-img2.webp" media="(min-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice-works-img2-sp.webp" alt="" width="332" height="227" loading="lazy">
                            </picture>
                            <p class="voice__worksText">施工事例</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ご利用の流れ -->
        <section class="flow u-section">
            <div class="inner flow__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">flow</p>
                    <h2 class="section__title">ご利用の流れ</h2>
                </div>
                <div class="flow__nav">
                    <!-- 1 -->
                    <a class="flow__navItem --1" href="<?php echo esc_url(home_url('/#flow1')); ?>">
                        <p class="flow__step --1">step</p>
                        <h3 class="flow__navItemTitle">お問い合わせ・<br>ご相談</h3>
                    </a>
                    <!-- arrow -->
                    <div class="flow__navArrow --1"></div>
                    <!-- 2 -->
                    <a class="flow__navItem --2" href="<?php echo esc_url(home_url('/#flow2')); ?>">
                        <p class="flow__step --2">step</p>
                        <h3 class="flow__navItemTitle">現地調査と<br>ヒアリング</h3>
                    </a>
                    <!-- arrow -->
                    <div class="flow__navArrow --2"></div>
                    <!-- 3 -->
                    <a class="flow__navItem --3" href="<?php echo esc_url(home_url('/#flow3')); ?>">
                        <p class="flow__step --3">step</p>
                        <h3 class="flow__navItemTitle">プラン提案と<br>お見積もり</h3>
                    </a>
                    <!-- arrow -->
                    <div class="flow__navArrow --3"></div>
                    <!-- 4 -->
                    <a class="flow__navItem --4" href="<?php echo esc_url(home_url('/#flow4')); ?>">
                        <p class="flow__step --4">step</p>
                        <h3 class="flow__navItemTitle">ご契約と<br>施工開始</h3>
                    </a>
                    <!-- arrow -->
                    <div class="flow__navArrow --4"></div>
                    <!-- 5 -->
                    <a class="flow__navItem --5" href="<?php echo esc_url(home_url('/#flow5')); ?>">
                        <p class="flow__step --5">step</p>
                        <h3 class="flow__navItemTitle">完了確認と<br>アフターサポート</h3>
                    </a>
                </div>
                <div class="flow__content">
                    <!-- 1 -->
                    <div class="flow__item --1" id="flow1">
                        <p class="flow__step --item">step</p>
                        <div class="flow__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img1.webp" alt="" width="361" height="235" loading="lazy">
                        </div>
                        <div class="flow__textWrap">
                            <h3 class="flow__title">お問い合わせ・ご相談</h3>
                            <p class="flow__text">
                                まずは電話・メール・LINEからお気軽にご相談ください。リフォームに関する不安やご要望をお伺いします。
                            </p>
                        </div>
                    </div>
                    <!-- arrow -->
                    <div class="flow__arrow --1"></div>
                    <!-- 2 -->
                    <div class="flow__item --2" id="flow2">
                        <p class="flow__step --item">step</p>
                        <div class="flow__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img2.webp" alt="" width="361" height="235" loading="lazy">
                        </div>
                        <div class="flow__textWrap">
                            <h3 class="flow__title">現地調査とヒアリング</h3>
                            <p class="flow__text">専門スタッフが現場を確認し、間取りや施工条件を把握。あわせてご希望の内容を丁寧にヒアリングします。</p>
                        </div>
                    </div>
                    <!-- arrow -->
                    <div class="flow__arrow --2"></div>
                    <!-- 3 -->
                    <div class="flow__item --3" id="flow3">
                        <p class="flow__step --item">step</p>
                        <div class="flow__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img3.webp" alt="" width="361" height="235" loading="lazy">
                        </div>
                        <div class="flow__textWrap">
                            <h3 class="flow__title">プラン提案とお見積もり</h3>
                            <p class="flow__text">
                                調査結果をもとに複数のプランをご提案。費用や工期も明確に提示し、納得いただける形でお見積もりを作成します。
                            </p>
                        </div>
                    </div>
                    <!-- arrow -->
                    <div class="flow__arrow --3"></div>
                    <!-- 4 -->
                    <div class="flow__item --4" id="flow4">
                        <p class="flow__step --item">step</p>
                        <div class="flow__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img4.webp" alt="" width="361" height="235" loading="lazy">
                        </div>
                        <div class="flow__textWrap">
                            <h3 class="flow__title">ご契約と施工開始</h3>
                            <p class="flow__text">
                                プラン・金額・スケジュールに合意いただいた後、正式にご契約。工事を安全・丁寧に進めてまいります。
                            </p>
                        </div>
                    </div>
                    <!-- arrow -->
                    <div class="flow__arrow --4"></div>
                    <!-- 5 -->
                    <div class="flow__item --5" id="flow5">
                        <p class="flow__step --item">step</p>
                        <div class="flow__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img5.webp" alt="" width="361" height="235" loading="lazy">
                        </div>
                        <div class="flow__textWrap">
                            <h3 class="flow__title">完了確認とアフターサポート</h3>
                            <p class="flow__text">
                                仕上がりをお客様と一緒に確認し、引き渡し。施工後も保証やアフターフォローで長期的に安心をお届けします。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- 法人のお客様へ -->
    <div id="corporation">
        <section class="about --corporation">
            <div class="inner about__inner --corporation">
                <h2 class="about__title">法人のお客様へ</h2>
                <p  class="about__text --corporation">
                    せっかくのリフォームが、
                    <span><span>“トラブル”</span>や<span>“不安”</span>で<br class="is-sp"><span>台無しに…</span></span>
                </p>
                <div class="about__itemWrap --corporation">
                    <div class="about__item">
                        <div class="about__itemImg">
                            <picture>
                              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about-item1-corporation.webp" media="(min-width: 768px)">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-item1-corporation-sp.webp" alt="" width="238" height="168" loading="lazy">
                            </picture>
                        </div>
                        <p class="about__itemText">
                            <span>工事後</span>
                            <span>すぐに不具合が出たのに、</span>
                            <span>アフターフォローが遅く</span>
                            <span class="bg-green">不安になった</span>
                        </p>
                    </div>
                    <div class="about__item">
                        <div class="about__itemImg">
                            <picture>
                              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about-item2-corporation.webp" media="(min-width: 768px)">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-item2-corporation-sp.webp" alt="" width="238" height="168" loading="lazy">
                            </picture>
                        </div>
                        <p class="about__itemText">
                            <span>見積もりが不透明で、</span>
                            <span>想定外の追加費用が発生し</span>
                            <span class="bg-green">予算を大きく超えてしまった</span>
                        </p>
                    </div>
                    <div class="about__item">
                        <div class="about__itemImg">
                            <picture>
                              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about-item3-corporation.webp" media="(min-width: 768px)">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-item3-corporation-sp.webp" alt="" width="238" height="168" loading="lazy">
                            </picture>
                        </div>
                        <p class="about__itemText">
                            <span>完成した仕上がりが</span>
                            <span>打ち合わせのイメージと違い、</span>
                            <span class="bg-green">満足できなかった</span>
                        </p>
                    </div>
                    <div class="about__item">
                        <div class="about__itemImg">
                            <picture>
                              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about-item4-corporation.webp" media="(min-width: 768px)">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-item4-corporation-sp.webp" alt="" width="238" height="168" loading="lazy">
                            </picture>
                        </div>
                        <p class="about__itemText">
                            <span>工期が遅れて</span>
                            <span>生活や営業に悪影響が出たり、</span>
                            <span class="bg-green">法令適合に不安を感じた</span>
                        </p>
                    </div>
                </div>
                <p class="about__problem --corporation">
                    <span class="about__problemComment">アフターフォローの遅れ、<br class="is-sp">予算オーバー、仕上がりのズレ、<br class="is-sp">工期や法令の不安…。</span>
                    <span>こうした悩みは、<br class="is-sp">多くのお客様が実際に抱えている</span>
                    <span><span class="bg-green">「リフォームの落とし穴」</span><br class="is-sp">です。</span>
                </p>
                        
            </div>
            <div class="about__answer --corporation">
                <div class="inner">
                    <p class="about__answerText">
                        リフォームの相談窓口として、
                        <span>“<span class="is-pc-tab">3つの</span>安心”を提供します。</span>
                    </p>
                    <div class="about__answerItemWrap">
                        <div class="about__answerItem u-radius-none">
                            <div class="about__answerItemImg u-radius-none">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-answer1-corporation.webp" alt="" width="296" height="160" loading="lazy">
                            </div>
                            <p class="about__answerItemText">
                                <span class="bg-green">専門スタッフ2名体制</span>
                                <span>の安心</span>
                            </p> 
                        </div>
                        <div class="about__answerItem u-radius-none">
                            <div class="about__answerItemImg u-radius-none">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-answer2-corporation.webp" alt="" width="296" height="160" loading="lazy">
                            </div>
                            <p class="about__answerItemText">
                                <span>契約から施工までを</span>
                                <span class="bg-green">完全定額制の安心</span>
                            </p> 
                        </div>
                        <div class="about__answerItem u-radius-none">
                            <div class="about__answerItemImg u-radius-none">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-answer3-corporation.webp" alt="" width="296" height="160" loading="lazy">
                            </div>
                            <p class="about__answerItemText">
                                <span>営業や調整まで含めて</span>
                                <span class="bg-green">24時間365日専任の</span>
                                <span class="bg-green">スタッフ2名体制で対応</span>
                            </p> 
                        </div>
                    </div>                  
                </div>
            </div>
        </section>

        <!-- ご利用の流れ(サービス概要) -->
        <section class="service u-section --corporation">
           <div class="inner service__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">flow</p>
                    <h2 class="section__title">ご利用の流れ</h2>
                </div>
                <div class="service__itemWrap">
                    <!-- 1 -->
                    <div class="service__item --1  u-radius-none">
                        <p class="service__step --1">step</p>
                        <h3 class="service__itemTitle">まずはご相談から</h3>
                        <p class="service__itemText">
                            リフォームに関するご希望やイメージを共有いただくだけで、最適なプランをご提案します。
                        </p>
                    </div>
                    <!-- arrow -->
                    <div class="service__arrow --1"></div>
                    <!-- 2 -->
                    <div class="service__item --2 u-radius-none">
                        <p class="service__step --2">step</p>
                        <h3 class="service__itemTitle">専門スタッフ2名体制</h3>
                        <p class="service__itemText">
                           直接雇用の職人ネットワークから条件に合う人材を選定。営業や調整まで専門スタッフが一貫管理し、取引を透明化します。
                        </p>
                    </div>
                    <!-- arrow -->
                    <div class="service__arrow --2"></div>
                    <!-- 3 -->
                    <div class="service__item --3 u-radius-none">
                        <p class="service__step --3">step</p>
                        <h3 class="service__itemTitle">確かな技術で高品質施工</h3>
                        <p class="service__itemText">
                            経験豊富な職人が適正コストで丁寧に施工。施工後も保証とアフターサポートで安心が続きます。
                        </p>
                    </div>
                                        <!-- arrow -->
                    <div class="service__arrow --3"></div>
                    <!-- 4 -->
                    <div class="service__item --4">
                        <p class="service__step --4">step</p>
                        <h3 class="service__itemTitle">現地調査</h3>
                        <p class="service__itemText">
                            お住まいにうかがい、現状を把握。夢を実現する大切なポイントです。
                        </p>
                    </div>
                    <!-- arrow -->
                    <div class="service__arrow --4"></div>
                    <!-- 5 -->
                    <div class="service__item --5">
                        <p class="service__step --5">step</p>
                        <h3 class="service__itemTitle">お見積り</h3>
                        <p class="service__itemText">
                            プランとお見積もりをご提案します。
                        </p>
                    </div>
                </div>
           </div>
        </section>

        <!-- 事例 -->
        <section class="cases u-section">
            <div class="inner cases__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">cases</p>
                    <h2 class="section__title"><span class="is-sp">3つの</span>実績・事例</h2>
                </div>
                <div class="cases__content">
                    <div class="cases__item">
                        <p class="cases__after">After</p>
                        <div class="cases__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cases-img1.webp" alt="" width="360" height="260" loading="lazy">
                        </div>
                        <div class="cases__textWrap">
                            <h3 class="cases__title">麻布マンションリフォーム</h3>
                            <p class="cases__info">67平米</p>
                            <p class="cases__price">
                                総額<span>6,248,000</span>円
                            </p>
                            <p class="cases__text">
                                スケルトンから内装まで、水回り、床暖房等全て込み
                            </p>
                        </div>
                    </div>
                    <div class="cases__item">
                        <p class="cases__after">After</p>
                        <div class="cases__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cases-img2.webp" alt="" width="360" height="260" loading="lazy">
                        </div>
                        <div class="cases__textWrap">
                            <h3 class="cases__title">練馬戸建てリフォーム</h3>
                            <p class="cases__info">2階建延床90平米</p>
                            <p class="cases__price">
                                総額<span>1,850,000</span>円
                            </p>
                            <p class="cases__text">
                                解体から大工工事、クロス貼り込みまで全部込み投資用物件
                            </p>
                        </div>
                    </div>
                    <div class="cases__item">
                        <p class="cases__after">After</p>
                        <div class="cases__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cases-img3.webp" alt="" width="360" height="260" loading="lazy">
                        </div>
                        <div class="cases__textWrap">
                            <h3 class="cases__title">浦和マンションリフォーム</h3>
                            <p class="cases__info">47平米</p>
                            <p class="cases__price">
                                総額<span>1,540,000</span>円
                            </p>
                            <p class="cases__text">
                                ユニットバス交換トイレ交換クロス張り替え、床クッションフロア交換
                            </p>
                        </div>
                    </div>
                </div>
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="case__btn">詳細はお問い合わせください</a>
            </div>
        </section>

        <!-- 特徴一覧 -->
        <section class="features u-section --corporation">
           <div class="inner features__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">features</p>
                    <h2 class="section__title">特徴一覧</h2>
                </div>
                <div class="features__main">
                    <ul class="features__lists">
                        <!-- 1 -->
                        <li class="features__list u-radius-none --1 --corporation is-active">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img1-sp-corporation.webp" alt="" width="" height="" loading="lazy">
                            </div>
                            <div class="features__listTextWrap u-radius-none">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.3575 15.3586H28.6426C29.1173 15.3586 29.5036 14.9722 29.5036 14.4975V3.73145C29.5036 3.25662 29.1174 2.87028 28.6426 2.87028H24.6326V1.49389C24.6326 0.670215 23.9625 0 23.1387 0H18.8613C18.0376 0 17.3674 0.670215 17.3674 1.49389V2.87028H13.3574C12.8827 2.87028 12.4964 3.25662 12.4964 3.73145V14.4976C12.4965 14.9723 12.8827 15.3586 13.3575 15.3586ZM13.6867 14.1683V6.67264L19.4006 9.02124V9.70268C19.4006 10.5847 20.1181 11.3022 21 11.3022C21.882 11.3022 22.5995 10.5847 22.5995 9.70268V9.02124L28.3134 6.67264V14.1684H13.6867V14.1683ZM20.5907 9.70268V7.6383H21.4092V9.70268C21.4092 9.92832 21.2256 10.1119 20.9999 10.1119C20.7743 10.1119 20.5907 9.92832 20.5907 9.70268ZM18.5577 1.49389C18.5577 1.32929 18.6967 1.19028 18.8613 1.19028H23.1387C23.3033 1.19028 23.4423 1.32938 23.4423 1.49389V2.87028H18.5577V1.49389ZM28.3133 4.06057V5.38569L22.5995 7.73429V7.04316C22.5995 6.71447 22.3331 6.44802 22.0044 6.44802H19.9957C19.667 6.44802 19.4006 6.71447 19.4006 7.04316V7.73429L13.6867 5.38569V4.06057H28.3133ZM41.9444 30.6929L38.8808 17.3165C38.7507 16.7484 38.4058 16.264 37.9096 15.9528C37.4133 15.6415 36.827 15.5416 36.2589 15.6718L33.7969 16.2357C33.2288 16.3658 32.7444 16.7107 32.4331 17.2071C32.1218 17.7033 32.022 18.2895 32.1521 18.8576L32.257 19.3158L31.1274 19.8073C30.2985 20.1679 29.431 20.1186 28.6186 19.6649C27.8711 19.2472 27.2083 18.8584 26.6235 18.5154C23.9568 16.9508 22.4877 16.0891 20.3159 16.901C19.6871 17.1361 19.055 17.6106 18.3996 18.2387H9.89924C9.87756 17.877 9.7655 17.5237 9.5669 17.2071C9.25556 16.7107 8.7713 16.3658 8.20312 16.2357L5.74107 15.6718C5.17298 15.5415 4.5867 15.6414 4.09044 15.9528C3.59419 16.264 3.24919 16.7483 3.11911 17.3165L0.0556414 30.6929C-0.0744367 31.261 0.0252899 31.8472 0.336627 32.3435C0.647964 32.8397 1.13223 33.1848 1.70032 33.3148L4.16245 33.8788C4.3262 33.9163 4.48986 33.9342 4.65122 33.9342C5.64857 33.9342 6.5524 33.2465 6.78433 32.234L6.79207 32.2002L15.9122 41.2186C16.4161 41.7226 17.0881 42 17.8048 42H17.8053C18.5219 41.9999 19.194 41.7222 19.698 41.2184C20.0772 40.8392 20.3282 40.3647 20.4293 39.8476L21.6204 41.0388C22.1242 41.5428 22.7963 41.8204 23.513 41.8203H23.5134C24.2301 41.8202 24.9023 41.5425 25.4062 41.0387C25.7853 40.6596 26.0362 40.1851 26.1373 39.6682L26.2227 39.7536C26.7265 40.2576 27.3986 40.5351 28.1153 40.5351H28.1156C28.8322 40.5349 29.5045 40.2573 30.0084 39.7534C30.5122 39.2496 30.7897 38.5774 30.7898 37.8607C30.7898 37.6857 30.7733 37.5133 30.7409 37.3454C30.7653 37.3461 30.7896 37.3464 30.8141 37.3464H30.8144C31.5311 37.3462 32.2033 37.0687 32.7072 36.5648C33.2111 36.0609 33.4886 35.3887 33.4886 34.6721C33.4886 34.381 33.4421 34.0975 33.354 33.8295L35.4834 32.8896C35.6575 33.173 35.8959 33.4153 36.1868 33.5979C36.5411 33.82 36.941 33.9345 37.3477 33.9345C37.5107 33.9345 37.6748 33.9161 37.8374 33.8789L40.2994 33.3149C40.8675 33.1848 41.3518 32.8398 41.6632 32.3436C41.9747 31.8472 42.0744 31.2609 41.9444 30.6929ZM4.42822 32.7185L1.96609 32.1546C1.70789 32.0955 1.48735 31.9379 1.34494 31.7109C1.20262 31.4839 1.1568 31.2168 1.21589 30.9585L4.27935 17.5822C4.33853 17.3241 4.49607 17.1034 4.72298 16.961C4.88528 16.8593 5.06807 16.8069 5.25349 16.8069C5.32738 16.8069 5.40177 16.8152 5.47531 16.8321L7.93735 17.396C8.19556 17.4551 8.41618 17.6127 8.5585 17.8396C8.70082 18.0665 8.74664 18.3338 8.68756 18.592L5.62409 31.9683C5.50124 32.5048 4.96443 32.8413 4.42822 32.7185ZM31.8657 35.723C31.5865 36.0022 31.2132 36.1561 30.8144 36.1561C30.4157 36.1561 30.0424 36.0024 29.7633 35.7233L23.8722 29.8317C23.6398 29.5994 23.2629 29.5994 23.0306 29.8316C22.7982 30.064 22.7981 30.4409 23.0306 30.6733L28.9216 36.5648C28.978 36.6212 29.0364 36.6748 29.0969 36.7254C29.1172 36.755 29.1406 36.7832 29.1669 36.8094C29.446 37.0885 29.5997 37.4618 29.5996 37.8605C29.5995 38.2593 29.4458 38.6326 29.1668 38.9116C28.8876 39.1908 28.5143 39.3446 28.1154 39.3447C27.7167 39.3447 27.3434 39.191 27.0644 38.9119L25.437 37.2844C25.4267 37.2738 25.4165 37.2633 25.4061 37.2529C25.4012 37.248 25.3963 37.2433 25.3913 37.2386L20.7271 32.5741C20.4948 32.3418 20.1179 32.3418 19.8855 32.5741C19.6531 32.8065 19.6531 33.1833 19.8855 33.4157L24.5874 38.118C24.852 38.3943 24.9974 38.758 24.9973 39.1458C24.9973 39.5445 24.8435 39.9178 24.5645 40.1969C24.2854 40.476 23.912 40.6299 23.5132 40.6299C23.5131 40.6299 23.5131 40.6299 23.513 40.6299C23.1143 40.6299 22.7411 40.4762 22.4621 40.1971L19.721 37.4558C19.7134 37.4481 19.7058 37.4403 19.698 37.4327C19.6945 37.4291 19.6909 37.4256 19.6872 37.4222L17.3161 35.0509C17.0837 34.8185 16.7068 34.8185 16.4745 35.0508C16.242 35.2832 16.242 35.66 16.4745 35.8924L18.8734 38.2916C19.1419 38.5687 19.2894 38.9349 19.2893 39.3255C19.2893 39.7243 19.1355 40.0975 18.8565 40.3765C18.5773 40.6557 18.204 40.8095 17.8052 40.8096C17.8051 40.8096 17.805 40.8096 17.8049 40.8096C17.4064 40.8096 17.0331 40.6559 16.7517 40.3745L7.1046 30.8353L9.71696 19.4289H17.2688C16.8524 19.8981 16.4233 20.406 15.9773 20.9343C14.7713 22.3625 13.5243 23.8393 12.1674 24.9771C11.9162 25.1878 11.8826 25.562 12.0925 25.8139C13.3291 27.2996 14.7827 27.9185 16.4128 27.6535C17.8366 27.4222 19.2446 26.5511 20.5542 25.6443C21.7145 24.8409 23.2218 24.9767 24.2198 25.9748L31.8657 33.6208C32.1448 33.8999 32.2985 34.2733 32.2985 34.672C32.2985 35.0707 32.1448 35.444 31.8657 35.723ZM32.7073 32.779L25.0614 25.133C23.6722 23.7438 21.4916 23.5473 19.8766 24.6657C17.117 26.5766 15.2165 27.2866 13.3988 25.4819C14.6581 24.3416 15.8348 22.9479 16.8866 21.7023C18.3135 20.0126 19.6612 18.4166 20.7328 18.0159C22.3741 17.4022 23.4417 18.0285 26.0214 19.542C26.6112 19.8879 27.2797 20.2802 28.0382 20.704C29.1709 21.3367 30.4366 21.4059 31.6024 20.8988L32.5276 20.4963L35.106 31.7551L32.7306 32.8036C32.7228 32.7955 32.7153 32.787 32.7073 32.779ZM40.6551 31.7109C40.5127 31.9379 40.2921 32.0954 40.0339 32.1546L37.5719 32.7185C37.3136 32.7776 37.0465 32.7317 36.8195 32.5894C36.5926 32.447 36.4351 32.2264 36.3759 31.9682L33.3124 18.5919C33.2533 18.3337 33.299 18.0665 33.4414 17.8395C33.5838 17.6126 33.8044 17.4551 34.0626 17.3959L36.5247 16.832C36.5983 16.8151 36.6725 16.8068 36.7465 16.8068C36.9319 16.8068 37.1148 16.8592 37.277 16.9609C37.5039 17.1034 37.6615 17.324 37.7206 17.5821L40.7842 30.9585C40.8433 31.2168 40.7975 31.484 40.6551 31.7109Z" fill="#C4C4C4"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">2名体制での安心サポート</h3>
                                    <p class="features__listText">専門スタッフ2名体制で、お客様を最後までサポート</p>
                                </span>
                            </div>
                        </li>
                        <!-- 2 -->
                        <li class="features__list u-radius-none --2 --corporation">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img2-sp.webp" alt="" width="" height="" loading="lazy">
                            </div>
                            <div class="features__listTextWrap u-radius-none">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2027_1843)">
                                    <path d="M30.1875 0.25C33.4382 0.25 36.355 0.90018 38.4502 1.86719C39.4983 2.35091 40.3306 2.9097 40.8975 3.49609C41.4651 4.08332 41.75 4.68058 41.75 5.25V30.1875C41.75 32.028 40.5197 33.6003 38.4268 34.7256C36.3993 35.8156 33.6008 36.4582 30.4795 36.4961L30.4844 36.4658H30.1924C29.4338 36.4658 28.697 36.4286 27.9814 36.3594C28.2421 35.6824 28.4594 34.9899 28.6318 34.2852C29.1385 34.3234 29.6597 34.3437 30.1953 34.3438C33.191 34.3438 35.7231 33.7393 37.4277 32.8223C39.1588 31.8893 39.6356 30.9014 39.6357 30.1562V26.0615L39.2451 26.3271C38.9774 26.5092 38.7007 26.678 38.417 26.834C36.4152 27.9245 33.5981 28.6035 30.1904 28.6035C29.8021 28.6035 29.4225 28.5923 29.0518 28.5752C28.9863 27.8497 28.8767 27.1377 28.7217 26.4385C29.1923 26.4695 29.682 26.4873 30.1904 26.4873C33.1475 26.4873 35.4795 25.9306 37.0859 25.1377L37.3975 24.9756C39.0491 24.0732 39.6326 23.0481 39.6328 22.2998V18.2041L39.2422 18.4697C39.1083 18.5608 38.972 18.6488 38.834 18.7334L38.415 18.9775C36.4131 20.0682 33.5956 20.7471 30.1875 20.7471C28.6926 20.7471 27.3237 20.6158 26.0801 20.3789C25.3074 19.2617 24.4082 18.2422 23.4043 17.3379C25.0062 18.1006 27.2963 18.6328 30.1826 18.6328C33.2619 18.6328 35.6515 18.0275 37.2705 17.1826L37.2803 17.1875L37.3945 17.124C39.0463 16.2216 39.6298 15.1966 39.6299 14.4482V10.3516L39.2393 10.6191C38.9749 10.7999 38.699 10.9689 38.4121 11.126C36.4156 12.2165 33.5929 12.8965 30.1846 12.8965C26.7764 12.8964 23.9589 12.2167 21.957 11.126H21.958C21.6743 10.97 21.3976 10.8012 21.1299 10.6191L20.7393 10.3535V14.4482C20.7393 14.7945 20.8661 15.199 21.1641 15.624C20.3602 15.1069 19.5111 14.6556 18.625 14.2744V5.25C18.625 4.68058 18.9099 4.08332 19.4775 3.49609C20.0444 2.9097 20.8767 2.35091 21.9248 1.86719C24.02 0.90018 26.9368 0.25 30.1875 0.25ZM30.1924 2.37207C28.6833 2.37211 27.0246 2.64365 25.6582 2.9541C24.2973 3.26332 23.2007 3.61721 22.8174 3.79395C22.5846 3.90071 22.3129 4.07069 22.0508 4.25098L21.793 4.43359C21.1089 4.92981 20.75 5.7364 20.75 6.5625C20.75 7.3081 21.3332 8.33632 22.9854 9.23633L22.9863 9.2373C24.6059 10.1118 27.0377 10.747 30.1924 10.7471C33.1492 10.7471 35.4814 10.1912 37.0879 9.39844L37.4004 9.23633C39.0522 8.33382 39.6357 7.30787 39.6357 6.55957V6.54395C39.6357 5.72915 39.2946 4.92629 38.6133 4.43359H38.6143C38.2915 4.19889 37.9159 3.95371 37.5684 3.79395H37.5674C35.7969 2.97347 33.1879 2.37207 30.1924 2.37207Z" fill="#C4C4C4" stroke="white" stroke-width="0.5"/>
                                    <path d="M11.8125 18.625C18.2107 18.625 23.375 23.7893 23.375 30.1875C23.375 36.5857 18.2107 41.75 11.8125 41.75C5.41432 41.75 0.25 36.5857 0.25 30.1875C0.25 23.7893 5.41432 18.625 11.8125 18.625ZM11.8125 20.75C6.60818 20.75 2.375 24.9832 2.375 30.1875C2.375 35.3918 6.60818 39.625 11.8125 39.625C17.0168 39.625 21.25 35.3918 21.25 30.1875C21.25 24.9832 17.0168 20.75 11.8125 20.75Z" fill="#C4C4C4" stroke="white" stroke-width="0.5"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_2027_1843">
                                    <rect width="42" height="42" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">価格の安さ</h3>
                                    <p class="features__listText">職人を直接雇用しているため中間マージンなし、適正価格を実現</p>
                                </span>
                            </div>
                        </li>
                        <!-- 3 -->
                        <li class="features__list u-radius-none --3 --corporation">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img3-sp.webp" alt="" width="" height="" loading="lazy">
                            </div>
                            <div class="features__listTextWrap u-radius-none">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.125 5.25C24.5342 5.25 28.7629 7.00156 31.8806 10.1193C34.9984 13.2371 36.75 17.4658 36.75 21.875C36.75 26.2842 34.9984 30.5129 31.8806 33.6306C28.7629 36.7484 24.5342 38.5 20.125 38.5C15.7158 38.5 11.4871 36.7484 8.36935 33.6306C5.25156 30.5129 3.5 26.2842 3.5 21.875C3.5 17.4658 5.25156 13.2371 8.36935 10.1193C11.4871 7.00156 15.7158 5.25 20.125 5.25ZM20.125 7C16.1799 7 12.3964 8.56718 9.60679 11.3568C6.81718 14.1464 5.25 17.9299 5.25 21.875C5.25 25.8201 6.81718 29.6036 9.60679 32.3932C12.3964 35.1828 16.1799 36.75 20.125 36.75C22.0784 36.75 24.0127 36.3652 25.8174 35.6177C27.6221 34.8702 29.2619 33.7745 30.6432 32.3932C32.0245 31.0119 33.1202 29.3721 33.8677 27.5674C34.6152 25.7627 35 23.8284 35 21.875C35 17.9299 33.4328 14.1464 30.6432 11.3568C27.8536 8.56718 24.0701 7 20.125 7ZM19.25 12.25H21V21.735L29.225 26.4775L28.35 28L19.25 22.75V12.25Z" fill="#C4C4C4"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">24時間365日対応</h3>
                                    <p class="features__listText">いつでもご相談可能。急なトラブルにも迅速対応</p>
                                </span>
                            </div>
                        </li>
                        <!-- 4 -->
                        <li class="features__list u-radius-none --4 --corporation">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img4-sp-corporation.webp?ver1.1" alt="" width="" height="" loading="lazy">
                            </div>
                            <div class="features__listTextWrap u-radius-none">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 34.8251C23.8292 33.9501 26.1917 32.2223 28.0875 29.6416C29.9833 27.0609 31.0917 24.1804 31.4125 21.0001H21V7.2521L11.207 10.8869C10.9818 10.9767 10.808 11.1114 10.6855 11.2911C10.5618 11.4708 10.5 11.6726 10.5 11.8966V20.1794C10.5 20.4057 10.5292 20.6793 10.5875 21.0001H21V34.8251ZM21 36.4736C20.8413 36.4736 20.6739 36.459 20.4978 36.4299C20.3216 36.4007 20.1582 36.3569 20.0077 36.2986C16.5626 34.9861 13.825 32.7601 11.795 29.6206C9.765 26.4811 8.75 23.0826 8.75 19.4251V11.9299C8.75 11.3349 8.92208 10.7964 9.26625 10.3146C9.61042 9.83277 10.0508 9.48277 10.5875 9.2646L20.0113 5.7646C20.3519 5.64093 20.6815 5.5791 21 5.5791C21.3185 5.5791 21.6487 5.64093 21.9905 5.7646L31.4125 9.2646C31.9492 9.48277 32.3896 9.83277 32.7337 10.3146C33.0779 10.7964 33.25 11.3349 33.25 11.9299V19.4251C33.25 23.0826 32.235 26.4811 30.205 29.6206C28.175 32.7601 25.4374 34.9861 21.9923 36.2986C21.8406 36.3569 21.6772 36.4007 21.5022 36.4299C21.3272 36.459 21.1598 36.4736 21 36.4736Z" fill="#C4C4C4"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">10年保証つき</h3>
                                    <p class="features__listText">施工後も長期保証で安心してご利用いただけます</p>
                                </span>
                            </div>
                        </li>
                        <!-- 5 -->
                        <li class="features__list u-radius-none --5 --corporation">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img5-sp-corporation.webp" alt="" width="" height="" loading="lazy">
                            </div>
                            <div class="features__listTextWrap u-radius-none">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.0657 16.613C19.0112 16.4481 19.0242 16.2682 19.102 16.1129C19.1798 15.9576 19.316 15.8395 19.4808 15.7845L21.4495 15.1282C21.5481 15.0955 21.653 15.0866 21.7556 15.1024C21.8582 15.1181 21.9557 15.1579 22.0399 15.2186C22.1241 15.2793 22.1928 15.3591 22.2401 15.4515C22.2875 15.5439 22.3123 15.6462 22.3125 15.75V22.3125C22.3125 22.4865 22.2434 22.6535 22.1203 22.7765C21.9972 22.8996 21.8303 22.9688 21.6562 22.9688C21.4822 22.9688 21.3153 22.8996 21.1922 22.7765C21.0691 22.6535 21 22.4865 21 22.3125V16.6605L19.8942 17.028C19.7293 17.0826 19.5495 17.0695 19.3942 16.9917C19.2389 16.9139 19.1208 16.7777 19.0657 16.613ZM40.0312 34.125C40.0312 34.299 39.9621 34.466 39.839 34.589C39.716 34.7121 39.549 34.7812 39.375 34.7812H2.625C2.45095 34.7812 2.28403 34.7121 2.16096 34.589C2.03789 34.466 1.96875 34.299 1.96875 34.125C1.96875 33.951 2.03789 33.784 2.16096 33.661C2.28403 33.5379 2.45095 33.4688 2.625 33.4688H4.59375V17.0625C4.59375 16.5404 4.80117 16.0396 5.17038 15.6704C5.5396 15.3012 6.04036 15.0938 6.5625 15.0938H13.7812V9.1875C13.7812 8.66536 13.9887 8.1646 14.3579 7.79538C14.7271 7.42617 15.2279 7.21875 15.75 7.21875H26.25C26.7721 7.21875 27.2729 7.42617 27.6421 7.79538C28.0113 8.1646 28.2188 8.66536 28.2188 9.1875V21.6562H35.4375C35.9596 21.6562 36.4604 21.8637 36.8296 22.2329C37.1988 22.6021 37.4062 23.1029 37.4062 23.625V33.4688H39.375C39.549 33.4688 39.716 33.5379 39.839 33.661C39.9621 33.784 40.0312 33.951 40.0312 34.125ZM28.2188 22.9688V33.4688H36.0938V23.625C36.0938 23.451 36.0246 23.284 35.9015 23.161C35.7785 23.0379 35.6115 22.9688 35.4375 22.9688H28.2188ZM15.0938 33.4688H26.9062V9.1875C26.9062 9.01345 26.8371 8.84653 26.714 8.72346C26.591 8.60039 26.424 8.53125 26.25 8.53125H15.75C15.576 8.53125 15.409 8.60039 15.286 8.72346C15.1629 8.84653 15.0938 9.01345 15.0938 9.1875V33.4688ZM5.90625 33.4688H13.7812V16.4062H6.5625C6.38845 16.4062 6.22153 16.4754 6.09846 16.5985C5.97539 16.7215 5.90625 16.8885 5.90625 17.0625V33.4688Z" fill="#C4C4C4"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">施工実績 427件・顧客満足度98％</h3>
                                    <p class="features__listText">多数の施工経験と高い満足度が信頼の証</p>
                                </span>
                            </div>
                        </li>
                        <!-- 6 -->
                        <li class="features__list u-radius-none --6 --corporation">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img6-sp.webp" alt="" width="" height="" loading="lazy">
                            </div>
                            <div class="features__listTextWrap u-radius-none">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M36.4549 23.3323V31.6358C36.4549 33.4589 34.9717 34.9421 33.1486 34.9421H19.8851V39.0775C19.8851 39.3393 19.7291 39.576 19.4885 39.679C19.4054 39.7145 19.3179 39.7318 19.231 39.7318C19.066 39.7318 18.9035 39.6695 18.7794 39.5512L13.9429 34.942H3.3883C1.56524 34.9421 0.0820312 33.4589 0.0820312 31.6358V17.1877C0.0820312 15.3645 1.56524 13.8813 3.3883 13.8813H29.7161C30.0774 13.8813 30.3703 14.1742 30.3703 14.5356C30.3703 14.8969 30.0774 15.1899 29.7161 15.1899H3.3883C2.28679 15.1899 1.39068 16.0861 1.39068 17.1876V31.6357C1.39068 32.7372 2.28687 33.6334 3.3883 33.6334H14.2048C14.3729 33.6334 14.5345 33.6981 14.6562 33.814L18.5766 37.55V34.2877C18.5766 33.9263 18.8695 33.6334 19.2308 33.6334H33.1487C34.2502 33.6334 35.1464 32.7372 35.1464 31.6357V23.3323C35.1464 22.971 35.4393 22.678 35.8007 22.678C36.162 22.678 36.4549 22.971 36.4549 23.3323ZM41.5806 10.8448L31.2578 28.7249C31.1892 28.8436 31.0852 28.9377 30.9604 28.9941L26.4833 31.0161C26.3974 31.0549 26.3056 31.0741 26.214 31.0741C26.1007 31.0741 25.9877 31.0446 25.8868 30.9864C25.7042 30.881 25.5838 30.6942 25.5629 30.4846L25.0765 25.5952C25.0629 25.459 25.0925 25.3218 25.161 25.2033L35.4841 7.3248C35.8268 6.72917 36.4121 6.29408 37.1316 6.10073C38.0493 5.85406 39.0958 6.01287 40.0027 6.53632C40.9093 7.05869 41.5706 7.88507 41.8164 8.80309C42.0094 9.52348 41.9256 10.2486 41.5806 10.8448ZM26.775 29.4485L29.2598 28.3263L26.505 26.7355L26.775 29.4485ZM38.9812 12.7298L35.1516 10.5175L26.6212 25.2915L30.4519 27.5035L38.9812 12.7298ZM40.5523 9.14171C40.398 8.56544 39.9482 8.01526 39.3489 7.66999C38.7491 7.32373 38.0472 7.20963 37.4713 7.3645C37.2013 7.43702 36.8342 7.60248 36.6178 7.97826L35.806 9.3842L39.6354 11.5965L40.4476 10.1898C40.6654 9.81346 40.6247 9.41209 40.5523 9.14171ZM2.68488 5.83552C2.76765 5.58057 2.99759 5.40191 3.26517 5.38468L5.9809 5.20979L6.98389 2.68118C7.08274 2.43188 7.32367 2.26815 7.59183 2.26807H7.59207C7.86015 2.26807 8.10108 2.43155 8.20009 2.68068L9.2053 5.20971L11.9214 5.38468C12.189 5.40191 12.419 5.58057 12.5017 5.83552C12.5846 6.09056 12.5034 6.3702 12.2971 6.54132L10.2025 8.27809L10.8759 10.9133C10.9422 11.173 10.8434 11.447 10.6265 11.6046C10.5121 11.6877 10.3771 11.7296 10.2418 11.7296C10.1205 11.7296 9.99903 11.6959 9.89198 11.6282L7.59224 10.1728L5.29487 11.628C5.06814 11.7717 4.77701 11.7622 4.5602 11.6047C4.34323 11.4471 4.24438 11.1731 4.31074 10.9133L4.98414 8.27809L2.88955 6.54132C2.68324 6.3702 2.60211 6.09056 2.68488 5.83552ZM4.99218 6.5848L6.13832 7.53513C6.33298 7.69657 6.4173 7.9557 6.35463 8.20073L5.98664 9.64079L7.24196 8.84566C7.34885 8.7779 7.4705 8.74411 7.59207 8.74411C7.71356 8.74411 7.83513 8.7779 7.94194 8.8455L9.20021 9.64177L8.83198 8.20081C8.7693 7.95578 8.85363 7.69657 9.04829 7.53521L10.1944 6.58488L8.70811 6.48915C8.45578 6.47291 8.23553 6.31278 8.14209 6.07793L7.59273 4.69545L7.04452 6.07735C6.95125 6.31253 6.73083 6.47282 6.47842 6.48907L4.99218 6.5848ZM13.3601 5.83552C13.4429 5.58057 13.6728 5.40191 13.9404 5.38468L16.6564 5.20971L17.6616 2.68068C17.7606 2.43155 18.0016 2.26807 18.2696 2.26807H18.2698C18.538 2.26815 18.7789 2.43188 18.8778 2.68118L19.8808 5.20979L22.5966 5.38468C22.8642 5.40191 23.0941 5.58057 23.1769 5.83552C23.2597 6.09056 23.1785 6.3702 22.9722 6.54132L20.8776 8.27809L21.551 10.9133C21.6174 11.1731 21.5185 11.4471 21.3015 11.6047C21.1872 11.6878 21.0522 11.7296 20.9169 11.7296C20.7956 11.7296 20.674 11.6959 20.5669 11.628L18.2694 10.1728L15.9698 11.6282C15.7432 11.7716 15.4521 11.7621 15.2353 11.6046C15.0184 11.447 14.9196 11.1731 14.986 10.9133L15.6594 8.27809L13.5648 6.54132C13.3585 6.3702 13.2773 6.09056 13.3601 5.83552ZM15.6674 6.5848L16.8135 7.53513C17.0082 7.69657 17.0925 7.9557 17.0299 8.20073L16.6616 9.64161L17.9197 8.84541C18.1335 8.71023 18.406 8.71006 18.6198 8.84558L19.8752 9.64071L19.5072 8.20065C19.4445 7.95562 19.5289 7.6964 19.7235 7.53505L20.8696 6.58471L19.3833 6.48898C19.1308 6.47274 18.9105 6.31237 18.8172 6.07727L18.269 4.69537L17.7196 6.07768C17.6262 6.31262 17.4059 6.47266 17.1536 6.4889L15.6674 6.5848ZM24.0352 5.83552C24.118 5.58057 24.3479 5.40191 24.6155 5.38468L27.3316 5.20971L28.3367 2.68068C28.4357 2.43155 28.6767 2.26807 28.9447 2.26807H28.945C29.2131 2.26815 29.4541 2.43188 29.5529 2.68109L30.556 5.20979L33.2717 5.38468C33.5393 5.40191 33.7692 5.58057 33.852 5.83552C33.9349 6.09056 33.8536 6.3702 33.6473 6.54132L31.5527 8.27809L32.2261 10.9133C32.2925 11.1731 32.1937 11.4471 31.9767 11.6047C31.8623 11.6878 31.7273 11.7296 31.592 11.7296C31.4707 11.7296 31.3491 11.6959 31.242 11.628L28.9446 10.1728L26.645 11.6282C26.4183 11.7716 26.1272 11.7621 25.9105 11.6046C25.6936 11.447 25.5947 11.1731 25.6611 10.9133L26.3345 8.27809L24.2399 6.54132C24.0336 6.3702 23.9525 6.09056 24.0352 5.83552ZM26.3425 6.5848L27.4887 7.53513C27.6833 7.69657 27.7677 7.9557 27.705 8.20073L27.3367 9.64161L28.5949 8.84541C28.8086 8.71023 29.0811 8.71006 29.2949 8.84558L30.5503 9.64071L30.1823 8.20065C30.1197 7.95562 30.204 7.6964 30.3986 7.53505L31.5448 6.58471L30.0585 6.48898C29.8061 6.47274 29.5857 6.31237 29.4924 6.07735L28.9442 4.69537L28.3948 6.07768C28.3014 6.31262 28.0811 6.47266 27.8288 6.4889L26.3425 6.5848ZM26.4584 18.7741C26.4584 18.4128 26.1654 18.1199 25.8041 18.1199H4.67611C4.31476 18.1199 4.02183 18.4128 4.02183 18.7741C4.02183 19.1355 4.31476 19.4284 4.67611 19.4284H25.8041C26.1654 19.4285 26.4584 19.1356 26.4584 18.7741ZM23.0664 21.8789H4.67611C4.31476 21.8789 4.02183 22.1719 4.02183 22.5332C4.02183 22.8946 4.31476 23.1875 4.67611 23.1875H23.0664C23.4277 23.1875 23.7206 22.8946 23.7206 22.5332C23.7206 22.1719 23.4277 21.8789 23.0664 21.8789ZM23.0664 25.6358H4.67611C4.31476 25.6358 4.02183 25.9288 4.02183 26.2901C4.02183 26.6514 4.31476 26.9444 4.67611 26.9444H23.0664C23.4277 26.9444 23.7206 26.6514 23.7206 26.2901C23.7206 25.9288 23.4277 25.6358 23.0664 25.6358ZM23.0664 29.3949H4.67611C4.31476 29.3949 4.02183 29.6878 4.02183 30.0492C4.02183 30.4105 4.31476 30.7035 4.67611 30.7035H23.0664C23.4277 30.7035 23.7206 30.4105 23.7206 30.0492C23.7206 29.6878 23.4277 29.3949 23.0664 29.3949Z" fill="#C4C4C4"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">実績と安心感</h3>
                                    <p class="features__listText">施工事例やレビューを公開し、納得して依頼できる透明性</p>
                                </span>
                            </div>
                        </li>
                    </ul>
                    <div class="features__imgs u-radius-none">
                        <!-- スライダー -->
                        <div class="features__swiper--corporation swiper">
                            <!-- スライド -->
                            <div class="features__swiper-wrapper swiper-wrapper">
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img1-corporation.webp" alt="" width="461" height="540" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img2.webp" alt="" width="461" height="540" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img3.webp" alt="" width="461" height="540" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img4-corporation.webp?ver1.1" alt="" width="461 " height="540" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img5-corporation.webp" alt="" width="461" height="540" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img6.webp" alt="" width="461" height="540" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </section>
        
        <!-- 比較表 -->
        <section class="comparison u-section --corporation">
            <div class="inner comparison__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">comparison</p>
                    <h2 class="section__title">比較表</h2>
                </div>
                <div class="comparison__content">
                    <p class="comparison__text">「リフォームの相談窓口」なら、<br class="is-sp">“費用の安心・スピード対応・<br class="is-sp">柔軟な提案・確かな品質”を<br class="is-sp">ワンストップで提供します。</p>
                    <div class="comparison__tableWrap">
                        <table class="comparison__table">
                            <thead class="comparison__thead">
                                <tr class="comparison__row">
                                    <th></th>
                                    <th class="--corporation">一般的な<br class="is-sp">リフォーム業者</th>
                                    <th class="--corporation">raku.reforｍ<br>リフォーム<br class="is-sp">の相談窓口</th>
                                </tr>
                            </thead>
                            <tbody class="comparison__tbody">
                                <!-- 1 -->
                                <tr class="comparison__row">
                                    <th class="--corporation">費用</th>
                                    <td><span class="mark">△</span>下請けや仲介を挟むため中間マージンが発生し、総額が高くなりやすい</td>
                                    <td><span class="mark --2">〇</span>職人を直接雇用しているため<span>中間コストを削減</span></td>
                                </tr>
                                <!-- 2 -->
                                <tr class="comparison__row">
                                    <th>対応<br class="is-sp">スピード</th>
                                    <td><span class="mark">△</span>問い合わせ後に営業・下請けとの調整が必要で、対応が遅れがち</td>
                                    <td><span class="mark --2">〇</span>専門スタッフが<span>24時間365日対応</span></td>
                                </tr>
                                <!-- 3 -->
                                <tr class="comparison__row">
                                    <th>提案力</th>
                                    <td><span class="mark">×</span>提案が画一的で、デザインや機能性が希望とズレることも</td>
                                    <td>
                                        <span class="mark --3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/double-circle.svg" alt="◎" width="22" height="22" loading="lazy">
                                        </span>
                                        生活環境にあわせた提案で<span>顧客満足度98％</span>
                                    </td>
                                </tr>
                                <!-- 4 -->
                                <tr class="comparison__row">
                                    <th>保証・<br>アフター対応</th>
                                    <td><span class="mark">×</span>施工後の不具合対応が遅い／十分でないケースが多い</td>
                                    <td><span class="mark --2">〇</span>専門スタッフがリフォーム後も<span>専任サポート。<br>10年保証</span></td>
                                </tr>
                                <!-- 5 -->
                                <tr class="comparison__row">
                                    <th>施工実績・<br>安心感</th>
                                    <td class="is-center"><span class="mark">×</span>実績や口コミが不透明で品質にばらつきがある</td>
                                    <td>
                                        <span class="mark --3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/double-circle.svg" alt="◎" width="22" height="22" loading="lazy">
                                        </span>
                                        専門スタッフが<span>2名体制でサポート<br>施工実績427件の安心感</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- サポート -->
        <section class="support --corporation">
            <div class="inner support__inner">
                <h2 class="support__title">
                    あなたに合った
                    <span>“サポート”を<br class="is-sp">ご用意しています</span>
                </h2>
                <div class="support__itemWrap">
                    <!-- 1 -->
                    <div class="support__item --corporation">
                        <div class="support__itemImg u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-img1.webp" alt="" width="352" height="214" loading="lazy">
                        </div>
                        <h3 class="support__itemTitle u-radius-none">完全定額制/<br class="is-sp">スピード対応</h3>
                    </div>
                    <!-- 2 -->
                    <div class="support__item --corporation">
                        <div class="support__itemImg u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-img2.webp" alt="" width="352" height="214" loading="lazy">
                        </div>
                        <h3 class="support__itemTitle u-radius-none">地域密着・最短即日対応</h3>
                    </div>
                    <!-- 3 -->
                    <div class="support__item --corporation">
                        <div class="support__itemImg u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-img3.webp" alt="" width="352" height="214" loading="lazy">
                        </div>
                        <h3 class="support__itemTitle u-radius-none">複数見積比較で納得の意思決定</h3>
                    </div>
                </div>
                <div class="support__btnWrap">
                    <a class="support__btn --line u-radius-none" href="<?php echo esc_url('https://lin.ee/O1gcsoGG'); ?>" target="_blank">LINEで問い合わせ</a>
                    <a class="support__btn --mail u-radius-none" href="<?php echo esc_url(home_url('/#contact')); ?>">メールで問い合わせ</a>
                </div>
            </div>
        </section>

        <!-- 安心できる理由 -->
        <section class="reason u-section --corporation">
            <div class="inner reason__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">reason</p>
                    <h2 class="section__title">安心できる理由</h2>
                </div>
                <div class="reason__content">
                    <div class="reason__itemWrap">
                        <!-- 1 -->
                        <div class="reason__item">
                            <div class="reason__itemImg u-radius-none">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason-img1-corporation.webp" alt="" width="507" height="400" loading="lazy">
                            </div>
                            <div class="reason__itemTextWrap u-radius-none">
                                <h3 class="reason__itemTitle">契約フローの透明性</h3>
                                <ul class="reason__itemListWrap">
                                    <li class="reason__itemList">契約前に詳細な見積もりを提示し、不明瞭な追加費用が発生しない仕組みを徹底</li>
                                    <li class="reason__itemList">手付金不要で、途中解約にも柔軟に対応可能</li>
                                </ul>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="reason__item --reverse">
                            <div class="reason__itemImg u-radius-none">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason-img2-corporation.webp" alt="" width="507" height="400" loading="lazy">
                            </div>
                            <div class="reason__itemTextWrap u-radius-none">
                                <h3 class="reason__itemTitle">運営による一貫サポートと<br class="is-sp">保証制度</h3>
                                <ul class="reason__itemListWrap">
                                    <li class="reason__itemList">専任の担当者がヒアリングから施工完了までを一貫サポート</li>
                                    <li class="reason__itemList">施工後も保証とアフターケアを提供し、長期的な安心を確保走</li>
                                </ul>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="reason__item">
                            <div class="reason__itemImg u-radius-none">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason-img3-corporation.webp" alt="" width="507" height="400" loading="lazy">
                            </div>
                            <div class="reason__itemTextWrap u-radius-none">
                                <h3 class="reason__itemTitle">過去の豊富な施工実績</h3>
                                <ul class="reason__itemListWrap">
                                    <li class="reason__itemList">累計施工件数や高いリピート率を根拠に提示</li>
                                    <li class="reason__itemList">個人住宅から法人施設まで幅広い現場経験あり</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="reason__linkWrap">
                        <a class="reason__link" href="<?php echo esc_url(home_url('/#contact')); ?>">お見積り依頼する</a>
                    </div>
                </div>
           </div>
        </section>

        <!-- 実績・お客様の声 -->
        <section class="voice u-section --corporation">
            <div class="inner voice__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">voice</p>
                    <h2 class="section__title">実績・お客様の声</h2>
                </div>
                <div class="voice__content">
                    <div class="voice__item">
                        <div class="voice__img u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice-img3.webp" alt="" width="140" height="140" loading="lazy">
                        </div>
                        <div class="voice__textWrap">
                            <p class="voice__mainName">東和商事畑中様</p>
                            <p class="voice__mainText">
                                私たちは株式会社東和商事という物流業を営んでいます。急な事務所の水回りトラブルで困っていたところ、御社に電話をしたら夜中でもすぐに対応してくれました。さらに、専任の営業担当の方が一貫してサポートしてくださるので、情報共有の手間もなく安心です。以来事務所のリフォームと新設をお願いしていますがスピード感と24時間体制のおかげで業務が止まらず、大変助かっています。
                            </p>
                        </div>
                        <div class="voice__works u-radius-none --corporation">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/voice-works-img3.webp" media="(min-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice-works-img3-sp.webp" alt="" width="332" height="227" loading="lazy">
                            </picture>
                            <p class="voice__worksText">施工事例</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ご利用の流れ -->
        <section class="flow u-section --corporation">
            <div class="inner flow__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">flow</p>
                    <h2 class="section__title">ご利用の流れ</h2>
                </div>
                <div class="flow__nav">
                    <!-- 1 -->
                    <a class="flow__navItem u-radius-none --1" href="<?php echo esc_url(home_url('/#flow1-2')); ?>">
                        <p class="flow__step --1">step</p>
                        <h3 class="flow__navItemTitle">お問い合わせ・<br>ご相談</h3>
                    </a>
                    <!-- arrow -->
                    <div class="flow__navArrow --1"></div>
                    <!-- 2 -->
                    <a class="flow__navItem u-radius-none --2" href="<?php echo esc_url(home_url('/#flow2-2')); ?>">
                        <p class="flow__step --2">step</p>
                        <h3 class="flow__navItemTitle">現地調査と<br>ヒアリング</h3>
                    </a>
                    <!-- arrow -->
                    <div class="flow__navArrow --2"></div>
                    <!-- 3 -->
                    <a class="flow__navItem u-radius-none --3" href="<?php echo esc_url(home_url('/#flow3-2')); ?>">
                        <p class="flow__step --3">step</p>
                        <h3 class="flow__navItemTitle">プラン提案と<br>お見積もり</h3>
                    </a>
                    <!-- arrow -->
                    <div class="flow__navArrow --3"></div>
                    <!-- 4 -->
                    <a class="flow__navItem u-radius-none --4" href="<?php echo esc_url(home_url('/#flow4-2')); ?>">
                        <p class="flow__step --4">step</p>
                        <h3 class="flow__navItemTitle">ご契約と<br>施工開始</h3>
                    </a>
                    <!-- arrow -->
                    <div class="flow__navArrow --4"></div>
                    <!-- 5 -->
                    <a class="flow__navItem u-radius-none --5" href="<?php echo esc_url(home_url('/#flow5-2')); ?>">
                        <p class="flow__step --5">step</p>
                        <h3 class="flow__navItemTitle">完了確認と<br>アフターサポート</h3>
                    </a>
                </div>
                <div class="flow__content">
                    <!-- 1 -->
                    <div class="flow__item --1" id="flow1-2">
                        <p class="flow__step u-radius-none --item">step</p>
                        <div class="flow__img u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img1-corporation.webp" alt="" width="361" height="237" loading="lazy">
                        </div>
                        <div class="flow__textWrap">
                            <h3 class="flow__title">お問い合わせ・ご相談</h3>
                            <p class="flow__text">
                                まずは電話・メール・LINEからお気軽にご相談ください。リフォームに関する不安やご要望をお伺いします。
                            </p>
                        </div>
                    </div>
                    <!-- arrow -->
                    <div class="flow__arrow --1"></div>
                    <!-- 2 -->
                    <div class="flow__item --2" id="flow2-2">
                        <p class="flow__step u-radius-none --item">step</p>
                        <div class="flow__img u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img2-corporation.webp" alt="" width="361" height="237" loading="lazy">
                        </div>
                        <div class="flow__textWrap">
                            <h3 class="flow__title">現地調査とヒアリング</h3>
                            <p class="flow__text">専門スタッフが現場を確認し、間取りや施工条件を把握。あわせてご希望の内容を丁寧にヒアリングします。</p>
                        </div>
                    </div>
                    <!-- arrow -->
                    <div class="flow__arrow --2"></div>
                    <!-- 3 -->
                    <div class="flow__item --3" id="flow3-2">
                        <p class="flow__step u-radius-none --item">step</p>
                        <div class="flow__img u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img3.webp" alt="" width="361" height="237" loading="lazy">
                        </div>
                        <div class="flow__textWrap">
                            <h3 class="flow__title">プラン提案とお見積もり</h3>
                            <p class="flow__text">
                                調査結果をもとに複数のプランをご提案。費用や工期も明確に提示し、納得いただける形でお見積もりを作成します。
                            </p>
                        </div>
                    </div>
                    <!-- arrow -->
                    <div class="flow__arrow --3"></div>
                    <!-- 4 -->
                    <div class="flow__item --4" id="flow4-2">
                        <p class="flow__step u-radius-none --item">step</p>
                        <div class="flow__img u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img4-corporation.webp" alt="" width="361" height="237" loading="lazy">
                        </div>
                        <div class="flow__textWrap">
                            <h3 class="flow__title">ご契約と施工開始</h3>
                            <p class="flow__text">
                                プラン・金額・スケジュールに合意いただいた後、正式にご契約。工事を安全・丁寧に進めてまいります。
                            </p>
                        </div>
                    </div>
                    <!-- arrow -->
                    <div class="flow__arrow --4"></div>
                    <!-- 5 -->
                    <div class="flow__item --5" id="flow5-2">
                        <p class="flow__step u-radius-none --item">step</p>
                        <div class="flow__img u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img5.webp" alt="" width="361" height="237" loading="lazy">
                        </div>
                        <div class="flow__textWrap">
                            <h3 class="flow__title">完了確認とアフターサポート</h3>
                            <p class="flow__text">
                                仕上がりをお客様と一緒に確認し、引き渡し。施工後も保証やアフターフォローで長期的に安心をお届けします。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- よくある質問 -->
    <section class="faq u-section" id="faq">
        <div class="inner faq__inner">
            <div class="section__titleWrap">
                <p class="section__subTitle">faq</p>
                <h2 class="section__title">よくある質問</h2>
            </div>
            <div class="faq__content">
                <!-- 1 -->
                <div class="faq__item">
                    <div class="faq__head">
                        <p class="faq__headText">工事後の不具合への対応はありますか？</p>
                    </div>
                    <div class="faq__body">
                        <div class="faq__bodyContent">
                            <p class="faq__bodyText">
                                施工後に不具合が発生した場合は、保証に基づき迅速に対応いたします。アフターサポート窓口も設置しています。
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="faq__item">
                    <div class="faq__head">
                        <p class="faq__headText">見積もりに含まれる内容や費用の内訳は明確ですか？</p>
                    </div>
                    <div class="faq__body">
                        <div class="faq__bodyContent">
                            <p class="faq__bodyText">
                                工事にかかる費用はすべて事前に明示し、内訳をわかりやすくご説明いたします。後から不明瞭な費用が発生することはありません。
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="faq__item">
                    <div class="faq__head">
                        <p class="faq__headText">契約後に追加費用は発生しますか？</p>
                    </div>
                    <div class="faq__body">
                        <div class="faq__bodyContent">
                            <p class="faq__bodyText">
                                原則として契約時に確定した金額で施工いたします。追加工事をご希望の場合のみ、事前にご説明とお見積もりを提示します。
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="faq__item">
                    <div class="faq__head">
                        <p class="faq__headText">仕上がりのイメージを事前に確認できますか？</p>
                    </div>
                    <div class="faq__body">
                        <div class="faq__bodyContent">
                            <p class="faq__bodyText">
                                図面やイメージパース、サンプルをご提示し、可能な限り完成形をイメージいただけるようにしています。
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="faq__item">
                    <div class="faq__head">
                        <p class="faq__headText">工期の遅延が発生した場合は対応してもらえますか？</p>
                    </div>
                    <div class="faq__body">
                        <div class="faq__bodyContent">
                            <p class="faq__bodyText">
                                やむを得ず工期が延びる場合は、事前に理由と新しいスケジュールをご説明し、影響を最小限に抑えるよう調整します。
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 6 -->
                <div class="faq__item">
                    <div class="faq__head">
                        <p class="faq__headText">職人さんとのやりとりは発生しますか？</p>
                    </div>
                    <div class="faq__body">
                        <div class="faq__bodyContent">
                            <p class="faq__bodyText">
                                基本的なやり取りや調整は、専任スタッフが担当します。必要に応じて職人と直接確認できる体制も整えています。
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 7 -->
                <div class="faq__item">
                    <div class="faq__head">
                        <p class="faq__headText">耐震・防火・バリアフリーなど法令に適合していますか？</p>
                    </div>
                    <div class="faq__body">
                        <div class="faq__bodyContent">
                            <p class="faq__bodyText">
                                関連法令や建築基準を遵守して施工いたします。必要に応じて専門資格を持つスタッフが確認・対応します。
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 8 -->
                <div class="faq__item">
                    <div class="faq__head">
                        <p class="faq__headText">近隣への騒音やごみ処理の配慮はされていますか？</p>
                    </div>
                    <div class="faq__body">
                        <div class="faq__bodyContent">
                            <p class="faq__bodyText">
                                工事前にご近隣へご挨拶を行い、騒音やごみ処理に配慮します。廃材は適切に処理し、現場を清潔に保ちます。
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 9 -->
                <div class="faq__item">
                    <div class="faq__head">
                        <p class="faq__headText">工事中の進捗報告や連絡はありますか？</p>
                    </div>
                    <div class="faq__body">
                        <div class="faq__bodyContent">
                            <p class="faq__bodyText">
                                専任担当から定期的に進捗をご報告します。緊急の変更や確認事項があれば速やかにご連絡します。
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 10 -->
                <div class="faq__item">
                    <div class="faq__head">
                        <p class="faq__headText">引き渡し後の保証やアフターフォローはありますか？</p>
                    </div>
                    <div class="faq__body">
                        <div class="faq__bodyContent">
                            <p class="faq__bodyText">
                                工事完了後も保証制度をご用意しています。定期点検やアフターフォローで長期的に安心いただけます。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </section>

    <!-- お問い合わせ -->
    <section class="contact u-section" id="contact">
        <div class="inner contact__inner">
            <div class="section__titleWrap">
                <p class="section__subTitle">contact</p>
                <h2 class="section__title">お問い合わせ</h2>
            </div>
            <div class="contact__content">

                <div class="p-form__form">
                
                    <?php echo do_shortcode('[contact-form-7 id="c319f1d" title="お問い合せ"]'); ?>
            
                <!-- <form class="form" action="">     //  ※ ContactForm7は、formタグ以下から
                    <dl class="form__dl" id="js-form">
                        <div class="form__row ">
                            <dt class="form__label"><label class="is-required">ご検討時期を教えてください</label></dt>
                            <dd class="form__radio">
                                [radio* your-radio use_label_element "今すぐ（1か月以内）" "3か月以内" "半年以内" "1年以内" "未定(情報収集中)"]
                            </dd>
                        </div>
                        <div class="form__row">
                            <p>リフォームを予定されているエリアを教えてください</p>
                            <div>
                                <div>
                                    <dt class="form__label">
                                        <label for="your-kind" class="is-required">都道府県</label>
                                    </dt>
                                    <dd class="form__select" id="js-select">
                                        [select* your-kind include_blank default:1"選択してください。""北海道" "青森県" "岩手県" "宮城県" "秋田県" "山形県" "福島県" "茨城県" "栃木県" "群馬県" "埼玉県" "千葉県" "東京都" "神奈川県" "新潟県" "富山県" "石川県" "福井県" "山梨県" "長野県" "岐阜県" "静岡県" "愛知県" "三重県" "滋賀県" "京都府" "大阪府" "兵庫県" "奈良県" "和歌山県" "鳥取県" "島根県" "岡山県" "広島県" "山口県" "徳島県" "香川県" "愛媛県" "高知県" "福岡県" "佐賀県" "長崎県" "熊本県" "大分県" "宮崎県" "鹿児島県" "沖縄県"]
                                    </dd>
                                </div>
                                <div>
                                    <dt class="form__label">
                                        <label for="your-area">市区町村</label>
                                    </dt>
                                    <dd class="form__checkbox">
                                        [text your-area id:your-area placeholder "例）渋谷区神南1-1-1"]
                                    </dd>
                                </div>
                            </div>
                        </div>
                        <div class="form__row">
                            <dt class="form__label"><label for="your-message">リフォームで特にこだわりたいポイントを教えてください</label></dt>
                            <dd class="form__input">
                                [textarea your-message id:your-message placeholder "例）断熱性能／水回り動線／収納量／デザインテイスト など、自由にご記入ください"]
                            </dd>
                        </div>
                        <div class="form__row">
                            <dt class="form__label"><label for="your-name" class="is-required">お名前を教えてください</label></dt>
                            <dd class="form__input">[text* your-name id:your-name]</dd>
                        </div>
                        <div class="form__row">
                            <p>ご住所をご入力ください</p>
                            <div>
                                <div>
                                    <dt class="form__label"><label for="your-zipcode">郵便番号</label></dt>
                                    <dd class="form__input">[text* your-zipcode id:your-zipcode placeholder "例）123-4567"]</dd>
                                </div>
                                <div>
                                    <dt class="form__label"><label for="your-address">市区町村・番地</label></dt>
                                    <dd class="form__input">[text* your-address id:your-address placeholder "例）渋谷区神南1-1-1"]</dd>
                                </div>
                            </div>
                        </div>
                        <div class="form__row">
                            <dt class="form__label"><label for="your-number" class="is-required">ご連絡先電話番号を教えてください</label></dt>
                            <dd class="form__input">[tel* your-number id:your-number placeholder "例）090-1234-5678"]</dd>
                        </div>
                        <div class="form__row">
                            <dt class="form__label"><label for="your-email" class="is-required">メールアドレス</label></dt>
                            <dd class="form__input">[email* your-email id:your-email placeholder "xxx@example.com"]</dd>
                        </div>
                    </dl> 
                    <div class="form__button">
                        [submit id:js-web-submit "送  信"]
                    </div>
                </form>

                <script>
                document.addEventListener( 'wpcf7mailsent', function( event ) {
                location = 'http://reform-lp.local/thanks/';
                }, false );
                </script> -->
            
                </div>
                <!-- <div class="contact__subLinkWrap">
                    <a href="" class="contact__subLink">相場を調べる（簡易診断）場合はこちら→</a>
                </div> -->
            </div>
       </div>
    </section>

</main>


<?php get_footer(); ?>