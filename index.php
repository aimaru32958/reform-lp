<?php get_header(); ?>

<main>
    <section class="fv">
        <div class="fv__content">
            <div class="fv__titleWrap">
                <p class="fv__text">raku.reforｍ</p>
                <p class="fv__subTitle">価格と品質、どちらも妥協しない。</p>
                <h1 class="fv__title">リフォームの相談窓口</h1>
            </div>
            <div class="fv__recordWrap">
                <div class="fv__record">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-record1.svg" alt="" width="" height="" loading="lazy">
                </div>
                <div class="fv__record">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-record2.svg" alt="" width="" height="" loading="lazy">
                </div>
                <div class="fv__record">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-record3.svg" alt="" width="" height="" loading="lazy">
                </div>
                <div class="fv__record">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-record4.svg" alt="" width="" height="" loading="lazy">
                </div>
                <div class="fv__record">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-record5.svg" alt="" width="" height="" loading="lazy">
                </div>
            </div>
            <div class="fv__btnWrap">
                <button class="fv__btn --individual" type="button">個人のお客様はこちら</button>
                <button class="fv__btn --corporation" type="button">法人のお客様はこちら</button>
            </div>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="fv__cta">まずは一度無料相談！</a>              
        </div>
        <div class="fv__bg">
            <!-- スライダー -->
            <div class="fv__swiper swiper">
                <!-- スライド -->
                <div class="fv__swiper-wrapper swiper-wrapper">
                    <div class="fv__slide swiper-slide">
                        <picture>
                          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fv-bg1.jpg" media="(min-width: 768px)">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-bg1-sp.jpg" alt="">
                        </picture>
                    </div>
                    <div class="fv__slide swiper-slide">
                         <picture>
                          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fv-bg2.jpg" media="(min-width: 768px)">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-bg2-sp.jpg" alt="">
                        </picture>
                    </div>
                    <div class="fv__slide swiper-slide">
                         <picture>
                          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fv-bg3.jpg" media="(min-width: 768px)">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-bg3-sp.jpg" alt="">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-item1.jpg" alt="" width="" height="" loading="lazy">
                        </div>
                        <p class="about__itemText">
                            <span>壁紙がすぐに剥がれたのに</span>
                            <span>業者の対応が</span>
                            <span class="bg-green">遅く不安に…</span>
                        </p>
                    </div>
                    <div class="about__item">
                        <div class="about__itemImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-item2.jpg" alt="" width="" height="" loading="lazy">
                        </div>
                        <p class="about__itemText">
                            キッチンリフォームで<br>
                            想定外の追加費用が発生し<br>
                            <span class="bg-green">予算を大きく超えてしまった</span>
                        </p>
                    </div>
                    <div class="about__item">
                        <div class="about__itemImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-item3.jpg" alt="" width="" height="" loading="lazy">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-answer1.jpg" alt="" width="" height="" loading="lazy">
                            </div>
                            <p class="about__answerItemText">
                                <span class="bg-green">専門スタッフ2名体制</span>
                                <span>の安心</span>
                            </p> 
                        </div>
                        <div class="about__answerItem">
                            <div class="about__answerItemImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-answer2.jpg" alt="" width="" height="" loading="lazy">
                            </div>
                            <p class="about__answerItemText">
                                <span>契約から施工までを</span>
                                <span class="bg-green">完全定額制の安心</span>
                            </p> 
                        </div>
                        <div class="about__answerItem">
                            <div class="about__answerItemImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-answer3.jpg" alt="" width="" height="" loading="lazy">
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
        <section class="price u-section">
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
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre1-1.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre1-1-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">壁紙・クロス張り替え</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
                                    </p>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="price__genreItem">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre1-2.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre1-2-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">床材張り替え</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
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
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-1.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-1-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">キッチン</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
                                    </p>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="price__genreItem">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-2.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-2-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">お風呂<span>（浴室）</span></p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
                                    </p>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="price__genreItem">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-3.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-3-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">トイレ</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
                                    </p>
                                </div>
                            </div>
                            <!-- 4 -->
                            <div class="price__genreItem">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-4.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-4-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">洗面化粧台</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
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
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-1.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-1-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">外壁塗装</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
                                    </p>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="price__genreItem">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-2.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-2-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">屋根塗装・葺き替え</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
                                    </p>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="price__genreItem">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-3.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-3-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">外構・エクステリア<br><span class="is-2row">（玄関・フェンス・カーポート等）</span></p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
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
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform1.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform1-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">壁紙・クロス張り替え</p>
                                <p class="price__reformItemPrice">¥<span>00000</span>〜</p>
                            </li>
                            <!-- 2 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform2.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform2-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">床材張り替え</p>
                                <p class="price__reformItemPrice">¥<span>00000</span>〜</p>
                            </li>
                            <!-- 3 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform3.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform3-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">キッチン</p>
                                <p class="price__reformItemPrice">¥<span>00000</span>〜</p>
                            </li>
                            <!-- 4 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform4.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform4-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">お風呂</p>
                                <p class="price__reformItemPrice">¥<span>00000</span>〜</p>
                            </li>
                            <!-- 5 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform5.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform5-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">トイレ</p>
                                <p class="price__reformItemPrice">¥<span>00000</span>〜</p>
                            </li>
                            <!-- 6 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform6.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform6-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">洗面化粧台</p>
                                <p class="price__reformItemPrice">¥<span>00000</span>〜</p>
                            </li>
                            <!-- 7 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform7.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform7-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">外壁塗装</p>
                                <p class="price__reformItemPrice">¥<span>00000</span>〜</p>
                            </li>
                            <!-- 8 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform8.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform8-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">屋根リフォーム</p>
                                <p class="price__reformItemPrice">¥<span>00000</span>〜</p>
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img1-sp.jpg" alt="" width="" height="" loading="lazy">
                            </div>
                            <div class="features__listTextWrap">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.3575 15.3586H28.6426C29.1173 15.3586 29.5036 14.9722 29.5036 14.4975V3.73145C29.5036 3.25662 29.1174 2.87028 28.6426 2.87028H24.6326V1.49389C24.6326 0.670215 23.9625 0 23.1387 0H18.8613C18.0376 0 17.3674 0.670215 17.3674 1.49389V2.87028H13.3574C12.8827 2.87028 12.4964 3.25662 12.4964 3.73145V14.4976C12.4965 14.9723 12.8827 15.3586 13.3575 15.3586ZM13.6867 14.1683V6.67264L19.4006 9.02124V9.70268C19.4006 10.5847 20.1181 11.3022 21 11.3022C21.882 11.3022 22.5995 10.5847 22.5995 9.70268V9.02124L28.3134 6.67264V14.1684H13.6867V14.1683ZM20.5907 9.70268V7.6383H21.4092V9.70268C21.4092 9.92832 21.2256 10.1119 20.9999 10.1119C20.7743 10.1119 20.5907 9.92832 20.5907 9.70268ZM18.5577 1.49389C18.5577 1.32929 18.6967 1.19028 18.8613 1.19028H23.1387C23.3033 1.19028 23.4423 1.32938 23.4423 1.49389V2.87028H18.5577V1.49389ZM28.3133 4.06057V5.38569L22.5995 7.73429V7.04316C22.5995 6.71447 22.3331 6.44802 22.0044 6.44802H19.9957C19.667 6.44802 19.4006 6.71447 19.4006 7.04316V7.73429L13.6867 5.38569V4.06057H28.3133ZM41.9444 30.6929L38.8808 17.3165C38.7507 16.7484 38.4058 16.264 37.9096 15.9528C37.4133 15.6415 36.827 15.5416 36.2589 15.6718L33.7969 16.2357C33.2288 16.3658 32.7444 16.7107 32.4331 17.2071C32.1218 17.7033 32.022 18.2895 32.1521 18.8576L32.257 19.3158L31.1274 19.8073C30.2985 20.1679 29.431 20.1186 28.6186 19.6649C27.8711 19.2472 27.2083 18.8584 26.6235 18.5154C23.9568 16.9508 22.4877 16.0891 20.3159 16.901C19.6871 17.1361 19.055 17.6106 18.3996 18.2387H9.89924C9.87756 17.877 9.7655 17.5237 9.5669 17.2071C9.25556 16.7107 8.7713 16.3658 8.20312 16.2357L5.74107 15.6718C5.17298 15.5415 4.5867 15.6414 4.09044 15.9528C3.59419 16.264 3.24919 16.7483 3.11911 17.3165L0.0556414 30.6929C-0.0744367 31.261 0.0252899 31.8472 0.336627 32.3435C0.647964 32.8397 1.13223 33.1848 1.70032 33.3148L4.16245 33.8788C4.3262 33.9163 4.48986 33.9342 4.65122 33.9342C5.64857 33.9342 6.5524 33.2465 6.78433 32.234L6.79207 32.2002L15.9122 41.2186C16.4161 41.7226 17.0881 42 17.8048 42H17.8053C18.5219 41.9999 19.194 41.7222 19.698 41.2184C20.0772 40.8392 20.3282 40.3647 20.4293 39.8476L21.6204 41.0388C22.1242 41.5428 22.7963 41.8204 23.513 41.8203H23.5134C24.2301 41.8202 24.9023 41.5425 25.4062 41.0387C25.7853 40.6596 26.0362 40.1851 26.1373 39.6682L26.2227 39.7536C26.7265 40.2576 27.3986 40.5351 28.1153 40.5351H28.1156C28.8322 40.5349 29.5045 40.2573 30.0084 39.7534C30.5122 39.2496 30.7897 38.5774 30.7898 37.8607C30.7898 37.6857 30.7733 37.5133 30.7409 37.3454C30.7653 37.3461 30.7896 37.3464 30.8141 37.3464H30.8144C31.5311 37.3462 32.2033 37.0687 32.7072 36.5648C33.2111 36.0609 33.4886 35.3887 33.4886 34.6721C33.4886 34.381 33.4421 34.0975 33.354 33.8295L35.4834 32.8896C35.6575 33.173 35.8959 33.4153 36.1868 33.5979C36.5411 33.82 36.941 33.9345 37.3477 33.9345C37.5107 33.9345 37.6748 33.9161 37.8374 33.8789L40.2994 33.3149C40.8675 33.1848 41.3518 32.8398 41.6632 32.3436C41.9747 31.8472 42.0744 31.2609 41.9444 30.6929ZM4.42822 32.7185L1.96609 32.1546C1.70789 32.0955 1.48735 31.9379 1.34494 31.7109C1.20262 31.4839 1.1568 31.2168 1.21589 30.9585L4.27935 17.5822C4.33853 17.3241 4.49607 17.1034 4.72298 16.961C4.88528 16.8593 5.06807 16.8069 5.25349 16.8069C5.32738 16.8069 5.40177 16.8152 5.47531 16.8321L7.93735 17.396C8.19556 17.4551 8.41618 17.6127 8.5585 17.8396C8.70082 18.0665 8.74664 18.3338 8.68756 18.592L5.62409 31.9683C5.50124 32.5048 4.96443 32.8413 4.42822 32.7185ZM31.8657 35.723C31.5865 36.0022 31.2132 36.1561 30.8144 36.1561C30.4157 36.1561 30.0424 36.0024 29.7633 35.7233L23.8722 29.8317C23.6398 29.5994 23.2629 29.5994 23.0306 29.8316C22.7982 30.064 22.7981 30.4409 23.0306 30.6733L28.9216 36.5648C28.978 36.6212 29.0364 36.6748 29.0969 36.7254C29.1172 36.755 29.1406 36.7832 29.1669 36.8094C29.446 37.0885 29.5997 37.4618 29.5996 37.8605C29.5995 38.2593 29.4458 38.6326 29.1668 38.9116C28.8876 39.1908 28.5143 39.3446 28.1154 39.3447C27.7167 39.3447 27.3434 39.191 27.0644 38.9119L25.437 37.2844C25.4267 37.2738 25.4165 37.2633 25.4061 37.2529C25.4012 37.248 25.3963 37.2433 25.3913 37.2386L20.7271 32.5741C20.4948 32.3418 20.1179 32.3418 19.8855 32.5741C19.6531 32.8065 19.6531 33.1833 19.8855 33.4157L24.5874 38.118C24.852 38.3943 24.9974 38.758 24.9973 39.1458C24.9973 39.5445 24.8435 39.9178 24.5645 40.1969C24.2854 40.476 23.912 40.6299 23.5132 40.6299C23.5131 40.6299 23.5131 40.6299 23.513 40.6299C23.1143 40.6299 22.7411 40.4762 22.4621 40.1971L19.721 37.4558C19.7134 37.4481 19.7058 37.4403 19.698 37.4327C19.6945 37.4291 19.6909 37.4256 19.6872 37.4222L17.3161 35.0509C17.0837 34.8185 16.7068 34.8185 16.4745 35.0508C16.242 35.2832 16.242 35.66 16.4745 35.8924L18.8734 38.2916C19.1419 38.5687 19.2894 38.9349 19.2893 39.3255C19.2893 39.7243 19.1355 40.0975 18.8565 40.3765C18.5773 40.6557 18.204 40.8095 17.8052 40.8096C17.8051 40.8096 17.805 40.8096 17.8049 40.8096C17.4064 40.8096 17.0331 40.6559 16.7517 40.3745L7.1046 30.8353L9.71696 19.4289H17.2688C16.8524 19.8981 16.4233 20.406 15.9773 20.9343C14.7713 22.3625 13.5243 23.8393 12.1674 24.9771C11.9162 25.1878 11.8826 25.562 12.0925 25.8139C13.3291 27.2996 14.7827 27.9185 16.4128 27.6535C17.8366 27.4222 19.2446 26.5511 20.5542 25.6443C21.7145 24.8409 23.2218 24.9767 24.2198 25.9748L31.8657 33.6208C32.1448 33.8999 32.2985 34.2733 32.2985 34.672C32.2985 35.0707 32.1448 35.444 31.8657 35.723ZM32.7073 32.779L25.0614 25.133C23.6722 23.7438 21.4916 23.5473 19.8766 24.6657C17.117 26.5766 15.2165 27.2866 13.3988 25.4819C14.6581 24.3416 15.8348 22.9479 16.8866 21.7023C18.3135 20.0126 19.6612 18.4166 20.7328 18.0159C22.3741 17.4022 23.4417 18.0285 26.0214 19.542C26.6112 19.8879 27.2797 20.2802 28.0382 20.704C29.1709 21.3367 30.4366 21.4059 31.6024 20.8988L32.5276 20.4963L35.106 31.7551L32.7306 32.8036C32.7228 32.7955 32.7153 32.787 32.7073 32.779ZM40.6551 31.7109C40.5127 31.9379 40.2921 32.0954 40.0339 32.1546L37.5719 32.7185C37.3136 32.7776 37.0465 32.7317 36.8195 32.5894C36.5926 32.447 36.4351 32.2264 36.3759 31.9682L33.3124 18.5919C33.2533 18.3337 33.299 18.0665 33.4414 17.8395C33.5838 17.6126 33.8044 17.4551 34.0626 17.3959L36.5247 16.832C36.5983 16.8151 36.6725 16.8068 36.7465 16.8068C36.9319 16.8068 37.1148 16.8592 37.277 16.9609C37.5039 17.1034 37.6615 17.324 37.7206 17.5821L40.7842 30.9585C40.8433 31.2168 40.7975 31.484 40.6551 31.7109Z" fill="#C4C4C4"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">担当営業制</h3>
                                    <p class="features__listText">最初の相談から施工完了後まで、専任の営業担当が一貫サポート</p>
                                </span>
                            </div>
                        </li>
                        <!-- 2 -->
                        <li class="features__list --2">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img2-sp.jpg" alt="" width="" height="" loading="lazy">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img3-sp.jpg" alt="" width="" height="" loading="lazy">
                            </div>
                            <div class="features__listTextWrap">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 7.25C22.036 7.25 23.0578 7.33621 24.0645 7.50879C25.0681 7.68088 26.043 7.95342 26.9893 8.32617L26.9932 8.32812C27.4198 8.48813 27.8887 8.79495 28.3994 9.26367C28.644 9.48821 28.7791 9.68769 28.834 9.86035C28.8858 10.0235 28.8717 10.1776 28.7861 10.3379C28.6074 10.6721 28.178 10.9425 27.3867 11.085C26.5906 11.2282 25.9835 11.2072 25.5459 11.0518H25.5449C24.8034 10.7849 24.0538 10.5843 23.2969 10.4512C22.5396 10.3181 21.7736 10.2512 21 10.25C17.0549 10.25 13.6879 11.6402 10.9131 14.415C8.13832 17.1899 6.74883 20.5561 6.75 24.5C6.75 25.7482 6.92158 26.9817 7.26367 28.1992C7.60525 29.4148 8.08685 30.5574 8.70898 31.626L8.78125 31.75H33.2158L33.2891 31.6299C33.9719 30.5017 34.47 29.3262 34.7832 28.1055C35.0954 26.8887 35.2512 25.6285 35.25 24.3252L35.2373 23.748C35.2121 23.1737 35.1488 22.607 35.0479 22.0488C34.9133 21.3051 34.7127 20.576 34.4463 19.8623C34.2875 19.4099 34.2639 18.9797 34.3672 18.5664C34.4693 18.1581 34.6991 17.8109 35.0674 17.5215L35.0664 17.5205C35.3855 17.2759 35.7225 17.208 36.0977 17.3047C36.432 17.3909 36.6639 17.5643 36.8115 17.8291L36.8701 17.9482C37.3015 18.9548 37.6324 19.9828 37.8623 21.0322C38.0635 21.9506 38.1872 22.8853 38.2344 23.8359L38.25 24.2441C38.2786 25.8838 38.0912 27.4493 37.6895 28.9414C37.2873 30.4349 36.699 31.8566 35.9238 33.207C35.627 33.6926 35.2237 34.0698 34.709 34.3408C34.1899 34.614 33.6461 34.75 33.0752 34.75H8.9248C8.35388 34.75 7.81006 34.614 7.29102 34.3408C6.84054 34.1036 6.4755 33.7851 6.19238 33.3838L6.07617 33.207C5.33003 31.9146 4.75569 30.5438 4.35352 29.0938C3.95162 27.6446 3.75 26.1135 3.75 24.5C3.75 22.1118 4.20351 19.8787 5.1084 17.7979C6.01555 15.7119 7.2521 13.8858 8.81836 12.3184C10.3842 10.7513 12.2164 9.51443 14.3174 8.6084C16.2833 7.76062 18.3636 7.30988 20.5596 7.25586L21 7.25ZM30.1807 14.7344C30.2948 14.7455 30.4209 14.8033 30.5586 14.9414C30.6962 15.0796 30.7535 15.2059 30.7646 15.3203C30.7757 15.4348 30.7437 15.5729 30.6357 15.7422L23.2422 26.8115C22.7712 27.519 22.0389 27.8911 20.9971 27.9043C19.9473 27.9176 19.1103 27.5947 18.4639 26.9482H18.4648C17.8201 26.3024 17.513 25.4825 17.5537 24.4658C17.5943 23.4539 17.9778 22.7316 18.6885 22.2578L29.7568 14.8633C29.9271 14.7544 30.0663 14.7233 30.1807 14.7344Z" fill="#C4C4C4" stroke="white" stroke-width="0.5"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">スピード対応</h3>
                                    <p class="features__listText">営業担当と職人が社内連携し、見積もり・工期調整も迅速</p>
                                </span>
                            </div>
                        </li>
                        <!-- 4 -->
                        <li class="features__list --4">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img4-sp.jpg" alt="" width="" height="" loading="lazy">
                            </div>
                            <div class="features__listTextWrap">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7511 21.4324C13.7511 21.1152 14.0082 20.858 14.3255 20.858H18.122C18.139 20.8565 18.1563 20.8558 18.1738 20.8558C18.491 20.8558 18.7482 21.1105 18.7482 21.4278C18.7482 21.7451 18.491 22.0069 18.1738 22.0069H14.3255C14.0082 22.0069 13.7511 21.7497 13.7511 21.4325V21.4324ZM10.5518 11.5721C10.6582 11.7564 10.8511 11.8593 11.0496 11.8593C11.1471 11.8593 11.2459 11.8344 11.3363 11.7822C11.611 11.6235 11.7051 11.2723 11.5464 10.9976L9.27923 7.07253C9.12058 6.79789 8.7694 6.70355 8.49468 6.86245C8.21996 7.0211 8.12595 7.37236 8.2846 7.647L10.5518 11.5721ZM7.73761 15.3831C7.89626 15.1084 7.80209 14.7571 7.52737 14.5987L3.59996 12.3315C3.32515 12.1728 2.97406 12.267 2.81549 12.5417C2.65684 12.8164 2.75102 13.1677 3.02574 13.3262L6.95315 15.5934C7.04363 15.6456 7.14231 15.6704 7.23968 15.6704C7.4382 15.6704 7.63122 15.5674 7.73761 15.383V15.3831ZM18.7482 23.6949C18.7482 23.3777 18.491 23.1228 18.1738 23.1228C18.1563 23.1228 18.139 23.1237 18.122 23.1251H14.3255C14.0082 23.1251 13.7511 23.3823 13.7511 23.6995C13.7511 24.0167 14.0082 24.2739 14.3255 24.2739H18.1738C18.491 24.2739 18.7482 24.0121 18.7482 23.6949V23.6949ZM5.84507 19.7256H1.31071C0.993496 19.7256 0.736328 19.9828 0.736328 20.3C0.736328 20.6172 0.993496 20.8744 1.31071 20.8744H5.84499C6.1622 20.8744 6.41937 20.6172 6.41937 20.3C6.41937 19.9828 6.16229 19.7256 5.84507 19.7256ZM36.6413 25.1529H26.6774C26.3602 25.1529 26.103 25.41 26.103 25.7273C26.103 26.0445 26.3602 26.3016 26.6774 26.3016H36.6413C36.9585 26.3016 37.2157 26.0445 37.2157 25.7273C37.2157 25.41 36.9585 25.1529 36.6413 25.1529ZM37.2157 14.3891V18.0887C37.2157 18.4059 36.9585 18.6631 36.6413 18.6631H26.6774C26.3602 18.6631 26.103 18.4059 26.103 18.0887V14.3891C26.103 14.0718 26.3602 13.8147 26.6774 13.8147H36.6413C36.9585 13.8147 37.2157 14.0718 37.2157 14.3891ZM36.0669 14.9634H27.2518V17.5143H36.0669V14.9634ZM41.2617 11.529V34.9749C41.2617 36.1148 40.3343 37.0421 39.1945 37.0421H14.6207C13.9386 37.0421 13.3837 36.4871 13.3837 35.805V34.2171C12.8787 33.9257 12.5373 33.3808 12.5373 32.7566V31.3916H12.5094C12.3494 31.3916 12.1967 31.3249 12.088 31.2075C11.9794 31.0902 11.9245 30.9329 11.9366 30.7734C12.011 29.8015 11.4667 29.0653 10.7134 28.0461C10.3109 27.5015 9.85459 26.8843 9.44477 26.1455C7.97116 23.4912 7.32869 21.0566 7.535 18.9094C7.71842 17.0004 8.58721 15.3512 10.0473 14.1399C11.366 13.0457 13.156 12.3421 15.081 12.137V7.02471C15.081 5.8848 16.0085 4.95752 17.1483 4.95752H34.6903C34.6964 4.95752 34.7023 4.95826 34.7083 4.95842C34.7156 4.95867 34.7228 4.959 34.73 4.95949C34.753 4.96113 34.7759 4.96367 34.7983 4.96802C34.8001 4.96835 34.8019 4.96851 34.8036 4.96884C34.8273 4.9736 34.8504 4.98041 34.8733 4.98803C34.8796 4.99017 34.8859 4.99246 34.8922 4.99484C34.9137 5.00296 34.935 5.01207 34.9555 5.02273C34.9571 5.02355 34.9587 5.02413 34.9603 5.02495C34.9821 5.0366 35.0029 5.05013 35.0232 5.06457C35.0283 5.06826 35.0334 5.07203 35.0385 5.07589C35.0587 5.09131 35.0783 5.10755 35.0965 5.12577L41.0935 11.1227C41.1116 11.1408 41.1279 11.1603 41.1432 11.1805C41.1471 11.1856 41.1509 11.1907 41.1546 11.1959C41.169 11.2162 41.1826 11.237 41.1942 11.2589C41.1949 11.2601 41.1953 11.2615 41.1959 11.2626C41.2069 11.2835 41.2162 11.3053 41.2245 11.3274C41.2267 11.3332 41.2288 11.3391 41.2308 11.345C41.2466 11.3917 41.2564 11.4405 41.2598 11.4904C41.2602 11.4966 41.2605 11.5026 41.2607 11.5088C41.2609 11.5154 41.2617 11.5221 41.2617 11.5287L41.2617 11.529ZM35.2663 6.92028L35.2711 10.9588L39.3018 10.9556L35.2664 6.92028H35.2663ZM15.6787 30.2428V26.0208C15.6772 26.0037 15.6764 25.9865 15.6764 25.969C15.6764 25.6518 15.9312 25.3946 16.2485 25.3946C16.5658 25.3946 16.8276 25.6518 16.8276 25.969V30.2428H19.4304C19.5473 29.1477 20.1923 28.2759 20.869 27.3612C21.2694 26.82 21.6834 26.2604 22.0573 25.5876C24.5784 21.0452 24.4601 17.2935 21.7239 15.0237C20.1534 13.7212 17.945 13.1216 15.786 13.2226C15.744 13.2323 15.7005 13.238 15.6556 13.238C15.6328 13.238 15.6105 13.2363 15.5884 13.2337C13.8088 13.3524 12.0773 13.9483 10.7809 15.0238C8.04515 17.2935 7.92743 21.0452 10.4492 25.5878C10.4492 25.5878 10.4492 25.588 10.4493 25.588C10.8229 26.2614 11.2369 26.8216 11.6372 27.3632C12.3129 28.2774 12.9569 29.1485 13.0736 30.2428H15.6787ZM17.9715 34.4423H14.5324V35.805C14.5324 35.8529 14.5728 35.8932 14.6207 35.8932H17.8855C17.9313 35.8932 17.9715 35.852 17.9715 35.805V34.4423ZM18.8202 31.3916H13.686V32.7566C13.686 33.0527 13.926 33.2937 14.2209 33.2937H18.2831C18.5793 33.2937 18.8202 33.0527 18.8202 32.7566V31.3916ZM40.113 34.9749V12.1038L34.6978 12.108H34.6973C34.3805 12.108 34.1234 11.8513 34.123 11.5343L34.1166 6.10645H17.1483C16.6418 6.10645 16.2298 6.51841 16.2298 7.02487V12.0735C16.2372 12.0735 16.2446 12.0731 16.252 12.0731C18.6121 12.0731 20.8738 12.8263 22.4571 14.1397C23.9175 15.351 24.7865 17.0002 24.9703 18.9091C25.177 21.0564 24.5347 23.491 23.0615 26.1455C22.6511 26.8837 22.195 27.5004 21.7924 28.0445C21.0379 29.0643 20.4927 29.801 20.5671 30.7735C20.5793 30.933 20.5244 31.0903 20.4157 31.2077C20.3071 31.325 20.1544 31.3917 19.9944 31.3917H19.9688V32.7567C19.9688 33.3813 19.6263 33.9267 19.1201 34.2178V35.8051C19.1201 35.8349 19.1177 35.8641 19.1157 35.8934H39.1943C39.7008 35.8934 40.1128 35.4814 40.1128 34.975L40.113 34.9749ZM36.6413 29.0942H22.7407C22.4235 29.0942 22.1663 29.3514 22.1663 29.6686C22.1663 29.9858 22.4235 30.243 22.7407 30.243H36.6413C36.9585 30.243 37.2157 29.9858 37.2157 29.6686C37.2157 29.3514 36.9585 29.0942 36.6413 29.0942ZM36.6413 21.2138H26.6774C26.3602 21.2138 26.103 21.471 26.103 21.7882C26.103 22.1054 26.3602 22.3626 26.6774 22.3626H36.6413C36.9585 22.3626 37.2157 22.1054 37.2157 21.7882C37.2157 21.471 36.9585 21.2138 36.6413 21.2138ZM36.6413 33.0357H22.7407C22.4235 33.0357 22.1663 33.2928 22.1663 33.6101C22.1663 33.9273 22.4235 34.1844 22.7407 34.1844H36.6413C36.9585 34.1844 37.2157 33.9273 37.2157 33.6101C37.2157 33.2928 36.9585 33.0357 36.6413 33.0357Z" fill="#C4C4C4"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">柔軟な提案力</h3>
                                    <p class="features__listText">ご家族構成やライフスタイルに合わせたプランをご提案</p>
                                </span>
                            </div>
                        </li>
                        <!-- 5 -->
                        <li class="features__list --5">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img5-sp.jpg" alt="" width="" height="" loading="lazy">
                            </div>
                            <div class="features__listTextWrap">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.4904 40.3822H24.2801C25.0354 40.3822 25.6753 39.9012 25.9235 39.2314H32.1634C33.7713 39.2314 35.079 37.9267 35.079 36.324V34.3341C37.224 33.5536 38.7629 31.5001 38.7629 29.0887C38.7629 27.3158 37.93 25.7365 36.638 24.7124V17.2462C36.638 8.62898 29.6236 1.61768 21.0012 1.61768C12.3788 1.61768 5.36399 8.62898 5.36399 17.2462V24.7118C4.07141 25.7358 3.23828 27.3154 3.23828 29.0887C3.23828 32.1688 5.74418 34.6747 8.82429 34.6747H9.52826C9.93842 35.1745 10.553 35.5005 11.2486 35.5005C12.481 35.5005 13.4835 34.498 13.4835 33.2652V24.9122C13.4835 23.6793 12.481 22.6768 11.2486 22.6768C10.553 22.6768 9.93842 23.0028 9.52826 23.5027H8.88582V17.2462C8.88582 10.5654 14.3208 5.13082 21.0012 5.13082C27.686 5.13082 33.1245 10.5654 33.1245 17.2462V23.5027H32.473C32.0628 23.0028 31.4483 22.6768 30.7527 22.6768C29.5202 22.6768 28.5177 23.6793 28.5177 24.9122V33.2652C28.5177 34.498 29.5202 35.5005 30.7527 35.5005C31.4483 35.5005 32.0628 35.1745 32.473 34.6747H33.1769C33.4112 34.6747 33.6407 34.6556 33.8675 34.6274V36.324C33.8675 37.2595 33.1032 38.0198 32.1634 38.0198H25.924C25.6762 37.3489 25.036 36.8666 24.2801 36.8666H22.4904C21.521 36.8666 20.7326 37.6554 20.7326 38.6248C20.7326 39.5942 21.521 40.3822 22.4904 40.3822ZM11.2486 23.8884C11.8129 23.8884 12.272 24.3474 12.272 24.9122V33.2652C12.272 33.8299 11.8129 34.289 11.2486 34.289C10.6842 34.289 10.2251 33.8299 10.2251 33.2652V24.9122C10.2251 24.3474 10.6842 23.8884 11.2486 23.8884ZM9.0136 24.9122V33.2652V33.4631H8.82429C6.41226 33.4631 4.44982 31.5007 4.44982 29.0887C4.44982 26.6766 6.41226 24.7142 8.82429 24.7142H9.0136V24.9122ZM21.0012 3.91928C13.6527 3.91928 7.67428 9.8981 7.67428 17.2462V23.6229C7.29193 23.7033 6.92495 23.8248 6.57553 23.9793V17.2462C6.57553 9.29627 13.0469 2.82921 21.0012 2.82921C28.9555 2.82921 35.4265 9.29627 35.4265 17.2462V23.9796C35.0796 23.8263 34.7154 23.7057 34.336 23.6253V17.2462C34.336 9.8981 28.354 3.91928 21.0012 3.91928ZM30.7527 34.289C30.1883 34.289 29.7292 33.8299 29.7292 33.2652V24.9122C29.7292 24.3474 30.1883 23.8884 30.7527 23.8884C31.317 23.8884 31.7761 24.3474 31.7761 24.9122V33.2652C31.7761 33.8299 31.317 34.289 30.7527 34.289ZM32.9876 33.4631V33.2652V24.9122V24.7142H33.1769C35.589 24.7142 37.5514 26.6766 37.5514 29.0887C37.5514 31.5007 35.589 33.4631 33.1769 33.4631H32.9876ZM22.4904 38.0782H24.2801C24.5814 38.0782 24.8263 38.3235 24.8263 38.6248C24.8263 38.9261 24.5814 39.1706 24.2801 39.1706H22.4904C22.1891 39.1706 21.9442 38.9261 21.9442 38.6248C21.9442 38.3235 22.1891 38.0782 22.4904 38.0782Z" fill="#C4C4C4"/>
                                    <path d="M13.3228 19.3223L14.4034 21.198C14.653 21.6302 15.1752 21.8258 15.6476 21.6625L16.7791 21.2721C17.3517 21.7406 17.9871 22.1058 18.669 22.3598L18.8957 23.5398C18.9904 24.0296 19.4215 24.3853 19.9203 24.3853H22.0863C22.5852 24.3853 23.0162 24.0296 23.1109 23.539L23.3377 22.3598C24.0192 22.1058 24.6533 21.7414 25.2275 21.2721L26.3586 21.6625C26.8295 21.8242 27.3536 21.6302 27.6037 21.1972L28.6839 19.3223C28.9331 18.8893 28.8397 18.3387 28.4619 18.0122L27.5536 17.2273C27.6131 16.8684 27.6435 16.504 27.6435 16.142C27.6435 15.7792 27.6131 15.414 27.5532 15.0551L28.4654 14.264C28.8405 13.9366 28.9323 13.3869 28.6843 12.9562L27.6041 11.0813C27.3556 10.6483 26.8323 10.4511 26.3574 10.6159L25.222 11.0103C24.6537 10.541 24.0207 10.1734 23.3381 9.91788L23.1109 8.7371C23.0162 8.24728 22.5852 7.89233 22.0863 7.89233H19.9203C19.4215 7.89233 18.9904 8.24728 18.8957 8.73789L18.6686 9.91788C17.9863 10.1734 17.3533 10.5402 16.7846 11.0103L15.6484 10.6151C15.1759 10.4534 14.6514 10.6475 14.403 11.0805L13.3224 12.9562C13.0739 13.3876 13.1662 13.9374 13.5424 14.264L14.4471 15.0488C14.3872 15.41 14.3568 15.7768 14.3568 16.142C14.3568 16.5064 14.3872 16.8732 14.4471 17.2329L13.5444 18.0122C13.1674 18.3387 13.0743 18.8893 13.3228 19.3223ZM15.3148 18.0847C15.594 17.8426 15.7214 17.4782 15.6551 17.109C15.5975 16.7904 15.5684 16.4654 15.5684 16.142C15.5684 15.8186 15.5975 15.4928 15.6551 15.1734C15.7214 14.8058 15.5948 14.4414 15.3163 14.1993L14.4416 13.4405L15.3834 11.8054L16.4845 12.1887C16.8288 12.307 17.2165 12.2337 17.4969 11.9939C17.9962 11.5695 18.5574 11.2438 19.1655 11.0261C19.5173 10.8999 19.7693 10.6088 19.8387 10.2476L20.0588 9.10387H21.9479L22.1679 10.2476C22.2373 10.6088 22.4893 10.8999 22.8411 11.0261C23.4493 11.2438 24.0105 11.5695 24.5094 11.9931C24.7898 12.2329 25.179 12.3078 25.5229 12.1879L26.6232 11.8054L27.5654 13.4405L26.684 14.2056C26.4056 14.4477 26.279 14.8121 26.3456 15.1813C26.4028 15.4976 26.432 15.821 26.432 16.142C26.432 16.4622 26.4028 16.7856 26.3452 17.1027C26.2797 17.4655 26.4103 17.8394 26.6856 18.0784L27.5646 18.838L26.6232 20.4723L25.5253 20.0929C25.1778 19.977 24.8012 20.0472 24.5196 20.2854C24.0152 20.7097 23.4512 21.0339 22.8427 21.2508C22.4905 21.377 22.2381 21.6673 22.1675 22.0301L21.9475 23.1738H20.0592L19.8391 22.0285C19.7685 21.6673 19.5161 21.377 19.1631 21.25C18.5554 21.0339 17.9914 20.7097 17.4894 20.2869C17.2062 20.0472 16.8304 19.9754 16.4802 20.0937L15.3834 20.4723L14.442 18.838L15.3148 18.0847Z" fill="#C4C4C4"/>
                                    <path d="M21.0035 19.4564C22.833 19.4564 24.3214 17.968 24.3214 16.1389C24.3214 14.309 22.833 12.8206 21.0035 12.8206C19.1739 12.8206 17.6855 14.309 17.6855 16.1389C17.6855 17.968 19.1739 19.4564 21.0035 19.4564ZM21.0035 14.0321C22.1649 14.0321 23.1099 14.977 23.1099 16.1389C23.1099 17.2999 22.1649 18.2449 21.0035 18.2449C19.842 18.2449 18.8971 17.2999 18.8971 16.1389C18.8971 14.977 19.842 14.0321 21.0035 14.0321Z" fill="#C4C4C4"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">アフターサポート</h3>
                                    <p class="features__listText">工事後の不具合にも迅速対応、保証制度も完備で安心</p>
                                </span>
                            </div>
                        </li>
                        <!-- 6 -->
                        <li class="features__list --6">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img6-sp.jpg" alt="" width="" height="" loading="lazy">
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
                        <div class="features__swiper swiper">
                            <!-- スライド -->
                            <div class="features__swiper-wrapper swiper-wrapper">
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img1.jpg" alt="" width="" height="" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img2.jpg" alt="" width="" height="" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img3.jpg" alt="" width="" height="" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img4.jpg" alt="" width="" height="" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img5.jpg" alt="" width="" height="" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img6.jpg" alt="" width="" height="" loading="lazy">
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
                                    <td><span class="mark --2">〇</span>生生活環境にあわせた提案で<span>顧客満足度98％</span></td>
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
                                    <td><span class="mark --2">〇</span>専門スタッフが<span>2名体制でサポート<br>施工実績427件の安心感</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- サポート -->
        <section class="support u-section">
            <div class="inner support__inner">
                <h2 class="support__title">
                    あなたに合った
                    <span>“サポート”を<br class="is-sp">ご用意しています</span>
                </h2>
                <div class="support__itemWrap">
                    <!-- 1 -->
                    <div class="support__item">
                        <div class="support__itemImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-img1.jpg" alt="" width="" height="" loading="lazy">
                        </div>
                        <h3 class="support__itemTitle">完全定額制</h3>
                    </div>
                    <!-- 2 -->
                    <div class="support__item">
                        <div class="support__itemImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-img2.jpg" alt="" width="" height="" loading="lazy">
                        </div>
                        <h3 class="support__itemTitle">地域密着・最短即日対応</h3>
                    </div>
                    <!-- 3 -->
                    <div class="support__item">
                        <div class="support__itemImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-img3.jpg" alt="" width="" height="" loading="lazy">
                        </div>
                        <h3 class="support__itemTitle">複数見積比較で納得の意思決定</h3>
                    </div>
                </div>
                <div class="support__btnWrap">
                    <a class="support__btn --line" href="<?php echo esc_url(home_url('/')); ?>">LINEで問い合わせ</a>
                    <a class="support__btn --mail" href="<?php echo esc_url(home_url('/')); ?>">メールで問い合わせ</a>
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason-img1.jpg" alt="" width="" height="" loading="lazy">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason-img2.jpg" alt="" width="" height="" loading="lazy">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason-img3.jpg" alt="" width="" height="" loading="lazy">
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
                        <a class="reason__link" href="<?php echo esc_url(home_url('/')); ?>">お見積り依頼する</a>
                    </div>
                </div>
           </div>
        </section>

        <!-- 実績・お客様の声 -->
        <section class="voice u-section">
            <div class="inner voice__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">voice</p>
                    <h2 class="section__title">実績・お客様の声</h2>
                </div>
                <div class="voice__content">
                    <div class="voice__main">
                        <div class="voice__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice-img.png" alt="" width="" height="" loading="lazy">
                        </div>
                        <div class="voice__textWrap">
                            <p class="voice__mainTitle">キッチンリフォーム/85万円</p>
                            <p class="voice__mainName">斎藤様<span>(40代・東京都)</span></p>
                            <p class="voice__mainText">
                                ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー
                            </p>
                        </div>
                        <div class="voice__works">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice-works-img.png" alt="" width="" height="" loading="lazy">
                            <p class="voice__worksText">施工事例</p>
                        </div>
                    </div>
                    <div class="voice__worker">
                        <div class="voice__workerImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/worker-icon.png" alt="" width="" height="" loading="lazy">
                        </div>
                        <div class="voice__workerTextWrap">
                            <div>
                                <p class="voice__workerCategory">担当職人</p>
                                <div class="voice__workerNameWrap">
                                    <p class="voice__workerName">田中 正人<span>(40代・東京都)</span></p>
                                    <p class="voice__workerInfo">
                                        <span>対応エリア：東京都、神奈川県</span>
                                        <span>得意工事：キッチン</span>
                                    </p>
                                </div>
                            </div>
                            <div class="voice__workerEvaluationWrap">
                                <div class="voice__workerEvaluation">
                                    <span>4.0</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="" width="" height="" loading="lazy">
                                    <span>(12件)</span>
                                </div>
                                <p class="voice__workerOther">そのほかの口コミ</p>
                                <ul class="voice__workerReviews">
                                    <li class="voice__workerReview">ダミーダミーダミーダミーダミーダミーダミーダミー<br class="is-sp">(20代・福岡県)</li>
                                    <li class="voice__workerReview">ダミーダミーダミーダミーダミーダミーダミーダミー<br class="is-sp">(30代・茨木県)</li>
                                    <li class="voice__workerReview">ダミーダミーダミーダミーダミーダミーダミーダミー<br class="is-sp">(40代・東京都)</li>
                                </ul>
                            </div>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img1.png" alt="" width="" height="" loading="lazy">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img2.png" alt="" width="" height="" loading="lazy">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img3.png" alt="" width="" height="" loading="lazy">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img4.png" alt="" width="" height="" loading="lazy">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img5.png" alt="" width="" height="" loading="lazy">
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
        <section class="about">
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
                              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about-item1-corporation.jpg" media="(min-width: 768px)">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-item1-corporation-sp.jpg" alt="" width="" height="" loading="lazy">
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
                              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about-item2-corporation.jpg" media="(min-width: 768px)">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-item2-corporation-sp.jpg" alt="" width="" height="" loading="lazy">
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
                              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about-item3-corporation.jpg" media="(min-width: 768px)">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-item3-corporation-sp.jpg" alt="" width="" height="" loading="lazy">
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
                              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about-item4-corporation.jpg" media="(min-width: 768px)">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-item4-corporation-sp.jpg" alt="" width="" height="" loading="lazy">
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
            <div class="about__answer">
                <div class="inner">
                    <p class="about__answerText">
                        リフォームの相談窓口として、
                        <span>“<span class="is-pc-tab">3つの</span>安心”を提供します。</span>
                    </p>
                    <div class="about__answerItemWrap">
                        <div class="about__answerItem u-radius-none">
                            <div class="about__answerItemImg u-radius-none">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-answer1-corporation.jpg" alt="" width="" height="" loading="lazy">
                            </div>
                            <p class="about__answerItemText">
                                <span class="bg-green">専門スタッフ2名体制</span>
                                <span>の安心</span>
                            </p> 
                        </div>
                        <div class="about__answerItem u-radius-none">
                            <div class="about__answerItemImg u-radius-none">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-answer2-corporation.jpg" alt="" width="" height="" loading="lazy">
                            </div>
                            <p class="about__answerItemText">
                                <span>契約から施工までを</span>
                                <span class="bg-green">完全定額制の安心</span>
                            </p> 
                        </div>
                        <div class="about__answerItem u-radius-none">
                            <div class="about__answerItemImg u-radius-none">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-answer3-corporation.jpg" alt="" width="" height="" loading="lazy">
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

        <!-- 料金表追加 -->
        <section class="price u-section">
            <div class="inner price__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">price list</p>
                    <h2 class="section__title">料金表追加</h2>
                </div>
                <div class="price__content">
                    
                    <div class="price__genreWrap">
                        <div class="price__tabWrap u-radius-none">
                            <button class="price__tab --corporation is-active u-radius-none" data-target="genre1-2">内装</button>
                            <button class="price__tab --corporation u-radius-none" data-target="genre2-2">水まわり</button>
                            <button class="price__tab --corporation u-radius-none" data-target="genre3-2">外装</button>
                        </div>
                        <!-- 内装 -->
                        <div class="price__genre --corporation" id="genre1-2">
                            <!-- 1 -->
                            <div class="price__genreItem u-radius-none">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre1-1.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre1-1-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">壁紙・クロス張り替え</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
                                    </p>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="price__genreItem u-radius-none">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre1-2.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre1-2-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">床材張り替え</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 水まわり -->
                        <div class="price__genre --corporation" id="genre2-2">
                            <!-- 1 -->
                            <div class="price__genreItem u-radius-none">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-1.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-1-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">キッチン</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
                                    </p>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="price__genreItem u-radius-none">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-2.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-2-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">お風呂<span>（浴室）</span></p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
                                    </p>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="price__genreItem u-radius-none">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-3.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-3-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">トイレ</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
                                    </p>
                                </div>
                            </div>
                            <!-- 4 -->
                            <div class="price__genreItem u-radius-none">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-4.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre2-4-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">洗面化粧台</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 外装 -->
                        <div class="price__genre --corporation" id="genre3-2">
                            <!-- 1 -->
                            <div class="price__genreItem u-radius-none">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-1.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-1-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">外壁塗装</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
                                    </p>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="price__genreItem u-radius-none">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-2.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-2-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">屋根塗装・葺き替え</p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
                                    </p>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="price__genreItem u-radius-none">
                                <div class="price__genreImg">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-3.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-genre3-3-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <div class="price__genreTextWrap">
                                    <p class="price__genreTitle">外構・エクステリア<br><span class="is-2row">（玄関・フェンス・カーポート等）</span></p>
                                    <p class="price__genrePriceTitle">本体＋工事費</p>
                                    <p class="price__genrePrice">
                                        総額 ¥<span>00000</span>〜
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
                                <div class="price__reformItemImg u-radius-none">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform1.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform1-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">壁紙・クロス張り替え</p>
                                <p class="price__reformItemPrice">¥<span>00000</span>〜</p>
                            </li>
                            <!-- 2 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg u-radius-none">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform2.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform2-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">床材張り替え</p>
                                <p class="price__reformItemPrice">¥<span>00000</span>〜</p>
                            </li>
                            <!-- 3 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg u-radius-none">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform3.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform3-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">キッチン</p>
                                <p class="price__reformItemPrice">¥<span>00000</span>〜</p>
                            </li>
                            <!-- 4 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg u-radius-none">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform4.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform4-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">お風呂</p>
                                <p class="price__reformItemPrice">¥<span>00000</span>〜</p>
                            </li>
                            <!-- 5 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg u-radius-none">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform5.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform5-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">トイレ</p>
                                <p class="price__reformItemPrice">¥<span>00000</span>〜</p>
                            </li>
                            <!-- 6 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg u-radius-none">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform6.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform6-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">洗面化粧台</p>
                                <p class="price__reformItemPrice">¥<span>00000</span>〜</p>
                            </li>
                            <!-- 7 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg u-radius-none">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform7.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform7-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">外壁塗装</p>
                                <p class="price__reformItemPrice">¥<span>00000</span>〜</p>
                            </li>
                            <!-- 8 -->
                            <li class="price__reformItem">
                                <div class="price__reformItemImg u-radius-none">
                                    <picture>
                                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform8.jpg" media="(min-width: 768px)">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price-reform8-sp.jpg" alt="" width="" height="" loading="lazy">
                                    </picture>
                                </div>
                                <p class="price__reformItemTitle">屋根リフォーム</p>
                                <p class="price__reformItemPrice">¥<span>00000</span>〜</p>
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
                        <li class="features__list u-radius-none --1 --corporation is-active">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img1-sp-corporation.jpg" alt="" width="" height="" loading="lazy">
                            </div>
                            <div class="features__listTextWrap u-radius-none">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.3575 15.3586H28.6426C29.1173 15.3586 29.5036 14.9722 29.5036 14.4975V3.73145C29.5036 3.25662 29.1174 2.87028 28.6426 2.87028H24.6326V1.49389C24.6326 0.670215 23.9625 0 23.1387 0H18.8613C18.0376 0 17.3674 0.670215 17.3674 1.49389V2.87028H13.3574C12.8827 2.87028 12.4964 3.25662 12.4964 3.73145V14.4976C12.4965 14.9723 12.8827 15.3586 13.3575 15.3586ZM13.6867 14.1683V6.67264L19.4006 9.02124V9.70268C19.4006 10.5847 20.1181 11.3022 21 11.3022C21.882 11.3022 22.5995 10.5847 22.5995 9.70268V9.02124L28.3134 6.67264V14.1684H13.6867V14.1683ZM20.5907 9.70268V7.6383H21.4092V9.70268C21.4092 9.92832 21.2256 10.1119 20.9999 10.1119C20.7743 10.1119 20.5907 9.92832 20.5907 9.70268ZM18.5577 1.49389C18.5577 1.32929 18.6967 1.19028 18.8613 1.19028H23.1387C23.3033 1.19028 23.4423 1.32938 23.4423 1.49389V2.87028H18.5577V1.49389ZM28.3133 4.06057V5.38569L22.5995 7.73429V7.04316C22.5995 6.71447 22.3331 6.44802 22.0044 6.44802H19.9957C19.667 6.44802 19.4006 6.71447 19.4006 7.04316V7.73429L13.6867 5.38569V4.06057H28.3133ZM41.9444 30.6929L38.8808 17.3165C38.7507 16.7484 38.4058 16.264 37.9096 15.9528C37.4133 15.6415 36.827 15.5416 36.2589 15.6718L33.7969 16.2357C33.2288 16.3658 32.7444 16.7107 32.4331 17.2071C32.1218 17.7033 32.022 18.2895 32.1521 18.8576L32.257 19.3158L31.1274 19.8073C30.2985 20.1679 29.431 20.1186 28.6186 19.6649C27.8711 19.2472 27.2083 18.8584 26.6235 18.5154C23.9568 16.9508 22.4877 16.0891 20.3159 16.901C19.6871 17.1361 19.055 17.6106 18.3996 18.2387H9.89924C9.87756 17.877 9.7655 17.5237 9.5669 17.2071C9.25556 16.7107 8.7713 16.3658 8.20312 16.2357L5.74107 15.6718C5.17298 15.5415 4.5867 15.6414 4.09044 15.9528C3.59419 16.264 3.24919 16.7483 3.11911 17.3165L0.0556414 30.6929C-0.0744367 31.261 0.0252899 31.8472 0.336627 32.3435C0.647964 32.8397 1.13223 33.1848 1.70032 33.3148L4.16245 33.8788C4.3262 33.9163 4.48986 33.9342 4.65122 33.9342C5.64857 33.9342 6.5524 33.2465 6.78433 32.234L6.79207 32.2002L15.9122 41.2186C16.4161 41.7226 17.0881 42 17.8048 42H17.8053C18.5219 41.9999 19.194 41.7222 19.698 41.2184C20.0772 40.8392 20.3282 40.3647 20.4293 39.8476L21.6204 41.0388C22.1242 41.5428 22.7963 41.8204 23.513 41.8203H23.5134C24.2301 41.8202 24.9023 41.5425 25.4062 41.0387C25.7853 40.6596 26.0362 40.1851 26.1373 39.6682L26.2227 39.7536C26.7265 40.2576 27.3986 40.5351 28.1153 40.5351H28.1156C28.8322 40.5349 29.5045 40.2573 30.0084 39.7534C30.5122 39.2496 30.7897 38.5774 30.7898 37.8607C30.7898 37.6857 30.7733 37.5133 30.7409 37.3454C30.7653 37.3461 30.7896 37.3464 30.8141 37.3464H30.8144C31.5311 37.3462 32.2033 37.0687 32.7072 36.5648C33.2111 36.0609 33.4886 35.3887 33.4886 34.6721C33.4886 34.381 33.4421 34.0975 33.354 33.8295L35.4834 32.8896C35.6575 33.173 35.8959 33.4153 36.1868 33.5979C36.5411 33.82 36.941 33.9345 37.3477 33.9345C37.5107 33.9345 37.6748 33.9161 37.8374 33.8789L40.2994 33.3149C40.8675 33.1848 41.3518 32.8398 41.6632 32.3436C41.9747 31.8472 42.0744 31.2609 41.9444 30.6929ZM4.42822 32.7185L1.96609 32.1546C1.70789 32.0955 1.48735 31.9379 1.34494 31.7109C1.20262 31.4839 1.1568 31.2168 1.21589 30.9585L4.27935 17.5822C4.33853 17.3241 4.49607 17.1034 4.72298 16.961C4.88528 16.8593 5.06807 16.8069 5.25349 16.8069C5.32738 16.8069 5.40177 16.8152 5.47531 16.8321L7.93735 17.396C8.19556 17.4551 8.41618 17.6127 8.5585 17.8396C8.70082 18.0665 8.74664 18.3338 8.68756 18.592L5.62409 31.9683C5.50124 32.5048 4.96443 32.8413 4.42822 32.7185ZM31.8657 35.723C31.5865 36.0022 31.2132 36.1561 30.8144 36.1561C30.4157 36.1561 30.0424 36.0024 29.7633 35.7233L23.8722 29.8317C23.6398 29.5994 23.2629 29.5994 23.0306 29.8316C22.7982 30.064 22.7981 30.4409 23.0306 30.6733L28.9216 36.5648C28.978 36.6212 29.0364 36.6748 29.0969 36.7254C29.1172 36.755 29.1406 36.7832 29.1669 36.8094C29.446 37.0885 29.5997 37.4618 29.5996 37.8605C29.5995 38.2593 29.4458 38.6326 29.1668 38.9116C28.8876 39.1908 28.5143 39.3446 28.1154 39.3447C27.7167 39.3447 27.3434 39.191 27.0644 38.9119L25.437 37.2844C25.4267 37.2738 25.4165 37.2633 25.4061 37.2529C25.4012 37.248 25.3963 37.2433 25.3913 37.2386L20.7271 32.5741C20.4948 32.3418 20.1179 32.3418 19.8855 32.5741C19.6531 32.8065 19.6531 33.1833 19.8855 33.4157L24.5874 38.118C24.852 38.3943 24.9974 38.758 24.9973 39.1458C24.9973 39.5445 24.8435 39.9178 24.5645 40.1969C24.2854 40.476 23.912 40.6299 23.5132 40.6299C23.5131 40.6299 23.5131 40.6299 23.513 40.6299C23.1143 40.6299 22.7411 40.4762 22.4621 40.1971L19.721 37.4558C19.7134 37.4481 19.7058 37.4403 19.698 37.4327C19.6945 37.4291 19.6909 37.4256 19.6872 37.4222L17.3161 35.0509C17.0837 34.8185 16.7068 34.8185 16.4745 35.0508C16.242 35.2832 16.242 35.66 16.4745 35.8924L18.8734 38.2916C19.1419 38.5687 19.2894 38.9349 19.2893 39.3255C19.2893 39.7243 19.1355 40.0975 18.8565 40.3765C18.5773 40.6557 18.204 40.8095 17.8052 40.8096C17.8051 40.8096 17.805 40.8096 17.8049 40.8096C17.4064 40.8096 17.0331 40.6559 16.7517 40.3745L7.1046 30.8353L9.71696 19.4289H17.2688C16.8524 19.8981 16.4233 20.406 15.9773 20.9343C14.7713 22.3625 13.5243 23.8393 12.1674 24.9771C11.9162 25.1878 11.8826 25.562 12.0925 25.8139C13.3291 27.2996 14.7827 27.9185 16.4128 27.6535C17.8366 27.4222 19.2446 26.5511 20.5542 25.6443C21.7145 24.8409 23.2218 24.9767 24.2198 25.9748L31.8657 33.6208C32.1448 33.8999 32.2985 34.2733 32.2985 34.672C32.2985 35.0707 32.1448 35.444 31.8657 35.723ZM32.7073 32.779L25.0614 25.133C23.6722 23.7438 21.4916 23.5473 19.8766 24.6657C17.117 26.5766 15.2165 27.2866 13.3988 25.4819C14.6581 24.3416 15.8348 22.9479 16.8866 21.7023C18.3135 20.0126 19.6612 18.4166 20.7328 18.0159C22.3741 17.4022 23.4417 18.0285 26.0214 19.542C26.6112 19.8879 27.2797 20.2802 28.0382 20.704C29.1709 21.3367 30.4366 21.4059 31.6024 20.8988L32.5276 20.4963L35.106 31.7551L32.7306 32.8036C32.7228 32.7955 32.7153 32.787 32.7073 32.779ZM40.6551 31.7109C40.5127 31.9379 40.2921 32.0954 40.0339 32.1546L37.5719 32.7185C37.3136 32.7776 37.0465 32.7317 36.8195 32.5894C36.5926 32.447 36.4351 32.2264 36.3759 31.9682L33.3124 18.5919C33.2533 18.3337 33.299 18.0665 33.4414 17.8395C33.5838 17.6126 33.8044 17.4551 34.0626 17.3959L36.5247 16.832C36.5983 16.8151 36.6725 16.8068 36.7465 16.8068C36.9319 16.8068 37.1148 16.8592 37.277 16.9609C37.5039 17.1034 37.6615 17.324 37.7206 17.5821L40.7842 30.9585C40.8433 31.2168 40.7975 31.484 40.6551 31.7109Z" fill="#C4C4C4"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">担当営業制</h3>
                                    <p class="features__listText">最初の相談から施工完了後まで、専任の営業担当が一貫サポート</p>
                                </span>
                            </div>
                        </li>
                        <!-- 2 -->
                        <li class="features__list u-radius-none --2 --corporation">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img2-sp.jpg" alt="" width="" height="" loading="lazy">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img3-sp.jpg" alt="" width="" height="" loading="lazy">
                            </div>
                            <div class="features__listTextWrap u-radius-none">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 7.25C22.036 7.25 23.0578 7.33621 24.0645 7.50879C25.0681 7.68088 26.043 7.95342 26.9893 8.32617L26.9932 8.32812C27.4198 8.48813 27.8887 8.79495 28.3994 9.26367C28.644 9.48821 28.7791 9.68769 28.834 9.86035C28.8858 10.0235 28.8717 10.1776 28.7861 10.3379C28.6074 10.6721 28.178 10.9425 27.3867 11.085C26.5906 11.2282 25.9835 11.2072 25.5459 11.0518H25.5449C24.8034 10.7849 24.0538 10.5843 23.2969 10.4512C22.5396 10.3181 21.7736 10.2512 21 10.25C17.0549 10.25 13.6879 11.6402 10.9131 14.415C8.13832 17.1899 6.74883 20.5561 6.75 24.5C6.75 25.7482 6.92158 26.9817 7.26367 28.1992C7.60525 29.4148 8.08685 30.5574 8.70898 31.626L8.78125 31.75H33.2158L33.2891 31.6299C33.9719 30.5017 34.47 29.3262 34.7832 28.1055C35.0954 26.8887 35.2512 25.6285 35.25 24.3252L35.2373 23.748C35.2121 23.1737 35.1488 22.607 35.0479 22.0488C34.9133 21.3051 34.7127 20.576 34.4463 19.8623C34.2875 19.4099 34.2639 18.9797 34.3672 18.5664C34.4693 18.1581 34.6991 17.8109 35.0674 17.5215L35.0664 17.5205C35.3855 17.2759 35.7225 17.208 36.0977 17.3047C36.432 17.3909 36.6639 17.5643 36.8115 17.8291L36.8701 17.9482C37.3015 18.9548 37.6324 19.9828 37.8623 21.0322C38.0635 21.9506 38.1872 22.8853 38.2344 23.8359L38.25 24.2441C38.2786 25.8838 38.0912 27.4493 37.6895 28.9414C37.2873 30.4349 36.699 31.8566 35.9238 33.207C35.627 33.6926 35.2237 34.0698 34.709 34.3408C34.1899 34.614 33.6461 34.75 33.0752 34.75H8.9248C8.35388 34.75 7.81006 34.614 7.29102 34.3408C6.84054 34.1036 6.4755 33.7851 6.19238 33.3838L6.07617 33.207C5.33003 31.9146 4.75569 30.5438 4.35352 29.0938C3.95162 27.6446 3.75 26.1135 3.75 24.5C3.75 22.1118 4.20351 19.8787 5.1084 17.7979C6.01555 15.7119 7.2521 13.8858 8.81836 12.3184C10.3842 10.7513 12.2164 9.51443 14.3174 8.6084C16.2833 7.76062 18.3636 7.30988 20.5596 7.25586L21 7.25ZM30.1807 14.7344C30.2948 14.7455 30.4209 14.8033 30.5586 14.9414C30.6962 15.0796 30.7535 15.2059 30.7646 15.3203C30.7757 15.4348 30.7437 15.5729 30.6357 15.7422L23.2422 26.8115C22.7712 27.519 22.0389 27.8911 20.9971 27.9043C19.9473 27.9176 19.1103 27.5947 18.4639 26.9482H18.4648C17.8201 26.3024 17.513 25.4825 17.5537 24.4658C17.5943 23.4539 17.9778 22.7316 18.6885 22.2578L29.7568 14.8633C29.9271 14.7544 30.0663 14.7233 30.1807 14.7344Z" fill="#C4C4C4" stroke="white" stroke-width="0.5"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">スピード対応</h3>
                                    <p class="features__listText">営業担当と職人が社内連携し、見積もり・工期調整も迅速</p>
                                </span>
                            </div>
                        </li>
                        <!-- 4 -->
                        <li class="features__list u-radius-none --4 --corporation">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img4-sp-corporation.jpg" alt="" width="" height="" loading="lazy">
                            </div>
                            <div class="features__listTextWrap u-radius-none">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7511 21.4324C13.7511 21.1152 14.0082 20.858 14.3255 20.858H18.122C18.139 20.8565 18.1563 20.8558 18.1738 20.8558C18.491 20.8558 18.7482 21.1105 18.7482 21.4278C18.7482 21.7451 18.491 22.0069 18.1738 22.0069H14.3255C14.0082 22.0069 13.7511 21.7497 13.7511 21.4325V21.4324ZM10.5518 11.5721C10.6582 11.7564 10.8511 11.8593 11.0496 11.8593C11.1471 11.8593 11.2459 11.8344 11.3363 11.7822C11.611 11.6235 11.7051 11.2723 11.5464 10.9976L9.27923 7.07253C9.12058 6.79789 8.7694 6.70355 8.49468 6.86245C8.21996 7.0211 8.12595 7.37236 8.2846 7.647L10.5518 11.5721ZM7.73761 15.3831C7.89626 15.1084 7.80209 14.7571 7.52737 14.5987L3.59996 12.3315C3.32515 12.1728 2.97406 12.267 2.81549 12.5417C2.65684 12.8164 2.75102 13.1677 3.02574 13.3262L6.95315 15.5934C7.04363 15.6456 7.14231 15.6704 7.23968 15.6704C7.4382 15.6704 7.63122 15.5674 7.73761 15.383V15.3831ZM18.7482 23.6949C18.7482 23.3777 18.491 23.1228 18.1738 23.1228C18.1563 23.1228 18.139 23.1237 18.122 23.1251H14.3255C14.0082 23.1251 13.7511 23.3823 13.7511 23.6995C13.7511 24.0167 14.0082 24.2739 14.3255 24.2739H18.1738C18.491 24.2739 18.7482 24.0121 18.7482 23.6949V23.6949ZM5.84507 19.7256H1.31071C0.993496 19.7256 0.736328 19.9828 0.736328 20.3C0.736328 20.6172 0.993496 20.8744 1.31071 20.8744H5.84499C6.1622 20.8744 6.41937 20.6172 6.41937 20.3C6.41937 19.9828 6.16229 19.7256 5.84507 19.7256ZM36.6413 25.1529H26.6774C26.3602 25.1529 26.103 25.41 26.103 25.7273C26.103 26.0445 26.3602 26.3016 26.6774 26.3016H36.6413C36.9585 26.3016 37.2157 26.0445 37.2157 25.7273C37.2157 25.41 36.9585 25.1529 36.6413 25.1529ZM37.2157 14.3891V18.0887C37.2157 18.4059 36.9585 18.6631 36.6413 18.6631H26.6774C26.3602 18.6631 26.103 18.4059 26.103 18.0887V14.3891C26.103 14.0718 26.3602 13.8147 26.6774 13.8147H36.6413C36.9585 13.8147 37.2157 14.0718 37.2157 14.3891ZM36.0669 14.9634H27.2518V17.5143H36.0669V14.9634ZM41.2617 11.529V34.9749C41.2617 36.1148 40.3343 37.0421 39.1945 37.0421H14.6207C13.9386 37.0421 13.3837 36.4871 13.3837 35.805V34.2171C12.8787 33.9257 12.5373 33.3808 12.5373 32.7566V31.3916H12.5094C12.3494 31.3916 12.1967 31.3249 12.088 31.2075C11.9794 31.0902 11.9245 30.9329 11.9366 30.7734C12.011 29.8015 11.4667 29.0653 10.7134 28.0461C10.3109 27.5015 9.85459 26.8843 9.44477 26.1455C7.97116 23.4912 7.32869 21.0566 7.535 18.9094C7.71842 17.0004 8.58721 15.3512 10.0473 14.1399C11.366 13.0457 13.156 12.3421 15.081 12.137V7.02471C15.081 5.8848 16.0085 4.95752 17.1483 4.95752H34.6903C34.6964 4.95752 34.7023 4.95826 34.7083 4.95842C34.7156 4.95867 34.7228 4.959 34.73 4.95949C34.753 4.96113 34.7759 4.96367 34.7983 4.96802C34.8001 4.96835 34.8019 4.96851 34.8036 4.96884C34.8273 4.9736 34.8504 4.98041 34.8733 4.98803C34.8796 4.99017 34.8859 4.99246 34.8922 4.99484C34.9137 5.00296 34.935 5.01207 34.9555 5.02273C34.9571 5.02355 34.9587 5.02413 34.9603 5.02495C34.9821 5.0366 35.0029 5.05013 35.0232 5.06457C35.0283 5.06826 35.0334 5.07203 35.0385 5.07589C35.0587 5.09131 35.0783 5.10755 35.0965 5.12577L41.0935 11.1227C41.1116 11.1408 41.1279 11.1603 41.1432 11.1805C41.1471 11.1856 41.1509 11.1907 41.1546 11.1959C41.169 11.2162 41.1826 11.237 41.1942 11.2589C41.1949 11.2601 41.1953 11.2615 41.1959 11.2626C41.2069 11.2835 41.2162 11.3053 41.2245 11.3274C41.2267 11.3332 41.2288 11.3391 41.2308 11.345C41.2466 11.3917 41.2564 11.4405 41.2598 11.4904C41.2602 11.4966 41.2605 11.5026 41.2607 11.5088C41.2609 11.5154 41.2617 11.5221 41.2617 11.5287L41.2617 11.529ZM35.2663 6.92028L35.2711 10.9588L39.3018 10.9556L35.2664 6.92028H35.2663ZM15.6787 30.2428V26.0208C15.6772 26.0037 15.6764 25.9865 15.6764 25.969C15.6764 25.6518 15.9312 25.3946 16.2485 25.3946C16.5658 25.3946 16.8276 25.6518 16.8276 25.969V30.2428H19.4304C19.5473 29.1477 20.1923 28.2759 20.869 27.3612C21.2694 26.82 21.6834 26.2604 22.0573 25.5876C24.5784 21.0452 24.4601 17.2935 21.7239 15.0237C20.1534 13.7212 17.945 13.1216 15.786 13.2226C15.744 13.2323 15.7005 13.238 15.6556 13.238C15.6328 13.238 15.6105 13.2363 15.5884 13.2337C13.8088 13.3524 12.0773 13.9483 10.7809 15.0238C8.04515 17.2935 7.92743 21.0452 10.4492 25.5878C10.4492 25.5878 10.4492 25.588 10.4493 25.588C10.8229 26.2614 11.2369 26.8216 11.6372 27.3632C12.3129 28.2774 12.9569 29.1485 13.0736 30.2428H15.6787ZM17.9715 34.4423H14.5324V35.805C14.5324 35.8529 14.5728 35.8932 14.6207 35.8932H17.8855C17.9313 35.8932 17.9715 35.852 17.9715 35.805V34.4423ZM18.8202 31.3916H13.686V32.7566C13.686 33.0527 13.926 33.2937 14.2209 33.2937H18.2831C18.5793 33.2937 18.8202 33.0527 18.8202 32.7566V31.3916ZM40.113 34.9749V12.1038L34.6978 12.108H34.6973C34.3805 12.108 34.1234 11.8513 34.123 11.5343L34.1166 6.10645H17.1483C16.6418 6.10645 16.2298 6.51841 16.2298 7.02487V12.0735C16.2372 12.0735 16.2446 12.0731 16.252 12.0731C18.6121 12.0731 20.8738 12.8263 22.4571 14.1397C23.9175 15.351 24.7865 17.0002 24.9703 18.9091C25.177 21.0564 24.5347 23.491 23.0615 26.1455C22.6511 26.8837 22.195 27.5004 21.7924 28.0445C21.0379 29.0643 20.4927 29.801 20.5671 30.7735C20.5793 30.933 20.5244 31.0903 20.4157 31.2077C20.3071 31.325 20.1544 31.3917 19.9944 31.3917H19.9688V32.7567C19.9688 33.3813 19.6263 33.9267 19.1201 34.2178V35.8051C19.1201 35.8349 19.1177 35.8641 19.1157 35.8934H39.1943C39.7008 35.8934 40.1128 35.4814 40.1128 34.975L40.113 34.9749ZM36.6413 29.0942H22.7407C22.4235 29.0942 22.1663 29.3514 22.1663 29.6686C22.1663 29.9858 22.4235 30.243 22.7407 30.243H36.6413C36.9585 30.243 37.2157 29.9858 37.2157 29.6686C37.2157 29.3514 36.9585 29.0942 36.6413 29.0942ZM36.6413 21.2138H26.6774C26.3602 21.2138 26.103 21.471 26.103 21.7882C26.103 22.1054 26.3602 22.3626 26.6774 22.3626H36.6413C36.9585 22.3626 37.2157 22.1054 37.2157 21.7882C37.2157 21.471 36.9585 21.2138 36.6413 21.2138ZM36.6413 33.0357H22.7407C22.4235 33.0357 22.1663 33.2928 22.1663 33.6101C22.1663 33.9273 22.4235 34.1844 22.7407 34.1844H36.6413C36.9585 34.1844 37.2157 33.9273 37.2157 33.6101C37.2157 33.2928 36.9585 33.0357 36.6413 33.0357Z" fill="#C4C4C4"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">柔軟な提案力</h3>
                                    <p class="features__listText">ご家族構成やライフスタイルに合わせたプランをご提案</p>
                                </span>
                            </div>
                        </li>
                        <!-- 5 -->
                        <li class="features__list u-radius-none --5 --corporation">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img5-sp.jpg" alt="" width="" height="" loading="lazy">
                            </div>
                            <div class="features__listTextWrap u-radius-none">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.4904 40.3822H24.2801C25.0354 40.3822 25.6753 39.9012 25.9235 39.2314H32.1634C33.7713 39.2314 35.079 37.9267 35.079 36.324V34.3341C37.224 33.5536 38.7629 31.5001 38.7629 29.0887C38.7629 27.3158 37.93 25.7365 36.638 24.7124V17.2462C36.638 8.62898 29.6236 1.61768 21.0012 1.61768C12.3788 1.61768 5.36399 8.62898 5.36399 17.2462V24.7118C4.07141 25.7358 3.23828 27.3154 3.23828 29.0887C3.23828 32.1688 5.74418 34.6747 8.82429 34.6747H9.52826C9.93842 35.1745 10.553 35.5005 11.2486 35.5005C12.481 35.5005 13.4835 34.498 13.4835 33.2652V24.9122C13.4835 23.6793 12.481 22.6768 11.2486 22.6768C10.553 22.6768 9.93842 23.0028 9.52826 23.5027H8.88582V17.2462C8.88582 10.5654 14.3208 5.13082 21.0012 5.13082C27.686 5.13082 33.1245 10.5654 33.1245 17.2462V23.5027H32.473C32.0628 23.0028 31.4483 22.6768 30.7527 22.6768C29.5202 22.6768 28.5177 23.6793 28.5177 24.9122V33.2652C28.5177 34.498 29.5202 35.5005 30.7527 35.5005C31.4483 35.5005 32.0628 35.1745 32.473 34.6747H33.1769C33.4112 34.6747 33.6407 34.6556 33.8675 34.6274V36.324C33.8675 37.2595 33.1032 38.0198 32.1634 38.0198H25.924C25.6762 37.3489 25.036 36.8666 24.2801 36.8666H22.4904C21.521 36.8666 20.7326 37.6554 20.7326 38.6248C20.7326 39.5942 21.521 40.3822 22.4904 40.3822ZM11.2486 23.8884C11.8129 23.8884 12.272 24.3474 12.272 24.9122V33.2652C12.272 33.8299 11.8129 34.289 11.2486 34.289C10.6842 34.289 10.2251 33.8299 10.2251 33.2652V24.9122C10.2251 24.3474 10.6842 23.8884 11.2486 23.8884ZM9.0136 24.9122V33.2652V33.4631H8.82429C6.41226 33.4631 4.44982 31.5007 4.44982 29.0887C4.44982 26.6766 6.41226 24.7142 8.82429 24.7142H9.0136V24.9122ZM21.0012 3.91928C13.6527 3.91928 7.67428 9.8981 7.67428 17.2462V23.6229C7.29193 23.7033 6.92495 23.8248 6.57553 23.9793V17.2462C6.57553 9.29627 13.0469 2.82921 21.0012 2.82921C28.9555 2.82921 35.4265 9.29627 35.4265 17.2462V23.9796C35.0796 23.8263 34.7154 23.7057 34.336 23.6253V17.2462C34.336 9.8981 28.354 3.91928 21.0012 3.91928ZM30.7527 34.289C30.1883 34.289 29.7292 33.8299 29.7292 33.2652V24.9122C29.7292 24.3474 30.1883 23.8884 30.7527 23.8884C31.317 23.8884 31.7761 24.3474 31.7761 24.9122V33.2652C31.7761 33.8299 31.317 34.289 30.7527 34.289ZM32.9876 33.4631V33.2652V24.9122V24.7142H33.1769C35.589 24.7142 37.5514 26.6766 37.5514 29.0887C37.5514 31.5007 35.589 33.4631 33.1769 33.4631H32.9876ZM22.4904 38.0782H24.2801C24.5814 38.0782 24.8263 38.3235 24.8263 38.6248C24.8263 38.9261 24.5814 39.1706 24.2801 39.1706H22.4904C22.1891 39.1706 21.9442 38.9261 21.9442 38.6248C21.9442 38.3235 22.1891 38.0782 22.4904 38.0782Z" fill="#C4C4C4"/>
                                    <path d="M13.3228 19.3223L14.4034 21.198C14.653 21.6302 15.1752 21.8258 15.6476 21.6625L16.7791 21.2721C17.3517 21.7406 17.9871 22.1058 18.669 22.3598L18.8957 23.5398C18.9904 24.0296 19.4215 24.3853 19.9203 24.3853H22.0863C22.5852 24.3853 23.0162 24.0296 23.1109 23.539L23.3377 22.3598C24.0192 22.1058 24.6533 21.7414 25.2275 21.2721L26.3586 21.6625C26.8295 21.8242 27.3536 21.6302 27.6037 21.1972L28.6839 19.3223C28.9331 18.8893 28.8397 18.3387 28.4619 18.0122L27.5536 17.2273C27.6131 16.8684 27.6435 16.504 27.6435 16.142C27.6435 15.7792 27.6131 15.414 27.5532 15.0551L28.4654 14.264C28.8405 13.9366 28.9323 13.3869 28.6843 12.9562L27.6041 11.0813C27.3556 10.6483 26.8323 10.4511 26.3574 10.6159L25.222 11.0103C24.6537 10.541 24.0207 10.1734 23.3381 9.91788L23.1109 8.7371C23.0162 8.24728 22.5852 7.89233 22.0863 7.89233H19.9203C19.4215 7.89233 18.9904 8.24728 18.8957 8.73789L18.6686 9.91788C17.9863 10.1734 17.3533 10.5402 16.7846 11.0103L15.6484 10.6151C15.1759 10.4534 14.6514 10.6475 14.403 11.0805L13.3224 12.9562C13.0739 13.3876 13.1662 13.9374 13.5424 14.264L14.4471 15.0488C14.3872 15.41 14.3568 15.7768 14.3568 16.142C14.3568 16.5064 14.3872 16.8732 14.4471 17.2329L13.5444 18.0122C13.1674 18.3387 13.0743 18.8893 13.3228 19.3223ZM15.3148 18.0847C15.594 17.8426 15.7214 17.4782 15.6551 17.109C15.5975 16.7904 15.5684 16.4654 15.5684 16.142C15.5684 15.8186 15.5975 15.4928 15.6551 15.1734C15.7214 14.8058 15.5948 14.4414 15.3163 14.1993L14.4416 13.4405L15.3834 11.8054L16.4845 12.1887C16.8288 12.307 17.2165 12.2337 17.4969 11.9939C17.9962 11.5695 18.5574 11.2438 19.1655 11.0261C19.5173 10.8999 19.7693 10.6088 19.8387 10.2476L20.0588 9.10387H21.9479L22.1679 10.2476C22.2373 10.6088 22.4893 10.8999 22.8411 11.0261C23.4493 11.2438 24.0105 11.5695 24.5094 11.9931C24.7898 12.2329 25.179 12.3078 25.5229 12.1879L26.6232 11.8054L27.5654 13.4405L26.684 14.2056C26.4056 14.4477 26.279 14.8121 26.3456 15.1813C26.4028 15.4976 26.432 15.821 26.432 16.142C26.432 16.4622 26.4028 16.7856 26.3452 17.1027C26.2797 17.4655 26.4103 17.8394 26.6856 18.0784L27.5646 18.838L26.6232 20.4723L25.5253 20.0929C25.1778 19.977 24.8012 20.0472 24.5196 20.2854C24.0152 20.7097 23.4512 21.0339 22.8427 21.2508C22.4905 21.377 22.2381 21.6673 22.1675 22.0301L21.9475 23.1738H20.0592L19.8391 22.0285C19.7685 21.6673 19.5161 21.377 19.1631 21.25C18.5554 21.0339 17.9914 20.7097 17.4894 20.2869C17.2062 20.0472 16.8304 19.9754 16.4802 20.0937L15.3834 20.4723L14.442 18.838L15.3148 18.0847Z" fill="#C4C4C4"/>
                                    <path d="M21.0035 19.4564C22.833 19.4564 24.3214 17.968 24.3214 16.1389C24.3214 14.309 22.833 12.8206 21.0035 12.8206C19.1739 12.8206 17.6855 14.309 17.6855 16.1389C17.6855 17.968 19.1739 19.4564 21.0035 19.4564ZM21.0035 14.0321C22.1649 14.0321 23.1099 14.977 23.1099 16.1389C23.1099 17.2999 22.1649 18.2449 21.0035 18.2449C19.842 18.2449 18.8971 17.2999 18.8971 16.1389C18.8971 14.977 19.842 14.0321 21.0035 14.0321Z" fill="#C4C4C4"/>
                                </svg>
                                <span>
                                    <h3 class="features__listTitle">アフターサポート</h3>
                                    <p class="features__listText">工事後の不具合にも迅速対応、保証制度も完備で安心</p>
                                </span>
                            </div>
                        </li>
                        <!-- 6 -->
                        <li class="features__list u-radius-none --6 --corporation">
                            <div class="features__imgSP is-sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img6-sp.jpg" alt="" width="" height="" loading="lazy">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img1-corporation.jpg" alt="" width="" height="" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img2.jpg" alt="" width="" height="" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img3.jpg" alt="" width="" height="" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img4-corporation.jpg" alt="" width="" height="" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img5.jpg" alt="" width="" height="" loading="lazy">
                                    </div>
                                </div>
                                <div class="features__slide swiper-slide">
                                    <div class="features__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features-img6.jpg" alt="" width="" height="" loading="lazy">
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
                                    <td><span class="mark --2">〇</span>生生活環境にあわせた提案で<span>顧客満足度98％</span></td>
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
                                    <td><span class="mark --2">〇</span>専門スタッフが<span>2名体制でサポート<br>施工実績427件の安心感</span></td>
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
                    <div class="support__item --corporation">
                        <div class="support__itemImg u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-img1.jpg" alt="" width="" height="" loading="lazy">
                        </div>
                        <h3 class="support__itemTitle u-radius-none">完全定額制/<br class="is-sp">スピード対応</h3>
                    </div>
                    <!-- 2 -->
                    <div class="support__item --corporation">
                        <div class="support__itemImg u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-img2.jpg" alt="" width="" height="" loading="lazy">
                        </div>
                        <h3 class="support__itemTitle u-radius-none">地域密着・最短即日対応</h3>
                    </div>
                    <!-- 3 -->
                    <div class="support__item --corporation">
                        <div class="support__itemImg u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/support-img3.jpg" alt="" width="" height="" loading="lazy">
                        </div>
                        <h3 class="support__itemTitle u-radius-none">複数見積比較で納得の意思決定</h3>
                    </div>
                </div>
                <div class="support__btnWrap">
                    <a class="support__btn --line u-radius-none" href="<?php echo esc_url(home_url('/')); ?>">LINEで問い合わせ</a>
                    <a class="support__btn --mail u-radius-none" href="<?php echo esc_url(home_url('/')); ?>">メールで問い合わせ</a>
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
                            <div class="reason__itemImg u-radius-none">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason-img1-corporation.jpg" alt="" width="" height="" loading="lazy">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason-img2-corporation.jpg" alt="" width="" height="" loading="lazy">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason-img3-corporation.jpg" alt="" width="" height="" loading="lazy">
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
                        <a class="reason__link" href="<?php echo esc_url(home_url('/')); ?>">お見積り依頼する</a>
                    </div>
                </div>
           </div>
        </section>

        <!-- 実績・お客様の声 -->
        <section class="voice u-section">
            <div class="inner voice__inner">
                <div class="section__titleWrap">
                    <p class="section__subTitle">voice</p>
                    <h2 class="section__title">実績・お客様の声</h2>
                </div>
                <div class="voice__content">
                    <div class="voice__main">
                        <div class="voice__img u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice-img-corporation.jpg" alt="" width="" height="" loading="lazy">
                        </div>
                        <div class="voice__textWrap">
                            <p class="voice__mainTitle">キッチンリフォーム/85万円</p>
                            <p class="voice__mainName">斎藤様<span>(40代・東京都)</span></p>
                            <p class="voice__mainText">
                                ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー
                            </p>
                        </div>
                        <div class="voice__works u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice-works-img.png" alt="" width="" height="" loading="lazy">
                            <p class="voice__worksText">施工事例</p>
                        </div>
                    </div>
                    <div class="voice__worker">
                        <div class="voice__workerImg u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/worker-icon.png" alt="" width="" height="" loading="lazy">
                        </div>
                        <div class="voice__workerTextWrap">
                            <div>
                                <p class="voice__workerCategory">担当職人</p>
                                <div class="voice__workerNameWrap">
                                    <p class="voice__workerName">田中 正人<span>(40代・東京都)</span></p>
                                    <p class="voice__workerInfo">
                                        <span>対応エリア：東京都、神奈川県</span>
                                        <span>得意工事：キッチン</span>
                                    </p>
                                </div>
                            </div>
                            <div class="voice__workerEvaluationWrap">
                                <div class="voice__workerEvaluation">
                                    <span>4.0</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="" width="" height="" loading="lazy">
                                    <span>(12件)</span>
                                </div>
                                <p class="voice__workerOther">そのほかの口コミ</p>
                                <ul class="voice__workerReviews">
                                    <li class="voice__workerReview">ダミーダミーダミーダミーダミーダミーダミーダミー<br class="is-sp">(20代・福岡県)</li>
                                    <li class="voice__workerReview">ダミーダミーダミーダミーダミーダミーダミーダミー<br class="is-sp">(30代・茨木県)</li>
                                    <li class="voice__workerReview">ダミーダミーダミーダミーダミーダミーダミーダミー<br class="is-sp">(40代・東京都)</li>
                                </ul>
                            </div>
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
                    <a class="flow__navItem u-radius-none --1" href="<?php echo esc_url(home_url('/#flow1')); ?>">
                        <p class="flow__step --1">step</p>
                        <h3 class="flow__navItemTitle">お問い合わせ・<br>ご相談</h3>
                    </a>
                    <!-- arrow -->
                    <div class="flow__navArrow --1"></div>
                    <!-- 2 -->
                    <a class="flow__navItem u-radius-none --2" href="<?php echo esc_url(home_url('/#flow2')); ?>">
                        <p class="flow__step --2">step</p>
                        <h3 class="flow__navItemTitle">現地調査と<br>ヒアリング</h3>
                    </a>
                    <!-- arrow -->
                    <div class="flow__navArrow --2"></div>
                    <!-- 3 -->
                    <a class="flow__navItem u-radius-none --3" href="<?php echo esc_url(home_url('/#flow3')); ?>">
                        <p class="flow__step --3">step</p>
                        <h3 class="flow__navItemTitle">プラン提案と<br>お見積もり</h3>
                    </a>
                    <!-- arrow -->
                    <div class="flow__navArrow --3"></div>
                    <!-- 4 -->
                    <a class="flow__navItem u-radius-none --4" href="<?php echo esc_url(home_url('/#flow4')); ?>">
                        <p class="flow__step --4">step</p>
                        <h3 class="flow__navItemTitle">ご契約と<br>施工開始</h3>
                    </a>
                    <!-- arrow -->
                    <div class="flow__navArrow --4"></div>
                    <!-- 5 -->
                    <a class="flow__navItem u-radius-none --5" href="<?php echo esc_url(home_url('/#flow5')); ?>">
                        <p class="flow__step --5">step</p>
                        <h3 class="flow__navItemTitle">完了確認と<br>アフターサポート</h3>
                    </a>
                </div>
                <div class="flow__content">
                    <!-- 1 -->
                    <div class="flow__item --1" id="flow1">
                        <p class="flow__step u-radius-none --item">step</p>
                        <div class="flow__img u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img1-corporation.jpg" alt="" width="" height="" loading="lazy">
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
                        <p class="flow__step u-radius-none --item">step</p>
                        <div class="flow__img u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img2-corporation.jpg" alt="" width="" height="" loading="lazy">
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
                        <p class="flow__step u-radius-none --item">step</p>
                        <div class="flow__img u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img3.png" alt="" width="" height="" loading="lazy">
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
                        <p class="flow__step u-radius-none --item">step</p>
                        <div class="flow__img u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img4-corporation.jpg" alt="" width="" height="" loading="lazy">
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
                        <p class="flow__step u-radius-none --item">step</p>
                        <div class="flow__img u-radius-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-img5.png" alt="" width="" height="" loading="lazy">
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
    <section class="faq u-section">
        <div class="inner faq__inner">
            <div class="section__titleWrap">
                <p class="section__subTitle">faq</p>
                <h2 class="section__title">よくある質問</h2>
            </div>
            <div class="faq__content">
                <!-- 1 -->
                <div class="faq__item is-active">
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
    <section class="contact u-section">
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
                </form> -->
            
                </div>
                <div class="contact__subLinkWrap">
                    <a href="" class="contact__subLink">相場を調べる（簡易診断）場合はこちら→</a>
                </div>
            </div>
       </div>
    </section>

</main>


<?php get_footer(); ?>