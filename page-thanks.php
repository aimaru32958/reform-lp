<?php get_header(); ?>

    <main class="thanks">
        <div class="thanks__inner inner">
            <h1 class="thanks__title">お問い合せ送信完了</h1>
            <p class="thanks__text">
                お問い合せいただき<br class="is-sp">ありがとうございます！<br>
                担当者よりご連絡いたしますので、今しばらくお待ちくださいませ。
            </p>
            <a class="thanks__btn" href="<?php echo esc_url(home_url('/')); ?>">TOPに戻る</a>
        
        </div>
    </main>

<?php get_footer(); ?>