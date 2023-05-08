<?php
/*
Template Name: page-recruit
*/
?>
<?php get_header(); ?>

<section class="recruit">
    <div class="max-inner">
        <div class="Breadcrumb-list load-in load-in">
            <div class="Breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="Breadcrumb__top">
                    TOP
                </a>
                <p>></p>
                <a href="" class="Breadcrumb__text">
                    CONTACT
                </a>
            </div>
        </div>

        <div class="recruit__title">
            <div class="recruit__title--box">
                <div class="page-title">
                    <div class="page-title__text load-in load-in1">
                        <h2>RECRUIT</h2>
                        <p>採用情報</p>
                    </div>
                </div>

                <h3 class="load-in load-in2">要件書を元にDB設計、構成が柔軟に対応できる方を募集しております。<br class="r-recuruit-br-pc"><br class="r-recuruit-br-sp">
                    <b>テクノロジーで未来の「新しい」と「楽しい」を作る仕事を</b>
                </h3>

                <p class="recruit__title--box--text load-in load-in3">
                    これまでのテクノロジーによるサービスはたくさん生まれる中、<br class="r-recuruit-br-pc">
                    これからも生まれ続けます。私たちはこれからのサービスを<br class="r-recuruit-br-pc">
                    作る立場として、多くのサービスを作り続けます。LAVOROは、<br class="r-recuruit-br-pc">
                    その担い手になる仲間を募集しています。
                </p>
            </div>

            <div class="recruit__title--img load-in load-in4">
                <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/recuruit-img/recruit-top.png" alt="LAVORO">
            </div>
        </div>

        <div class="recruit__box">
            <div class="R-recruit-card fade-in1">
                <div class="R-recruit-card--img">
                    <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/recuruit-img/2-Director.png" alt="LAVORO">
                </div>
                <div class="R-recruit-card--text">
                    <p class="R-recruit-card--text--subtitle">【プロジェクトの管理・進行】</p>
                    <h3>ディレクター</h3>
                    <p class="R-recruit-card--text--maintext">クライアントの課題や改善点に向き合う、ディレクターを募集しています。</p>
                    <a href="" class="R-recruit-button">
                        <div class="R-recruit-button--link">
                            応募する
                        </div>
                    </a>
                </div>
            </div>

            <div class="R-recruit-card fade-in2">
                <div class="R-recruit-card--img">
                    <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/recuruit-img/2-Director.png" alt="LAVORO">
                </div>
                <div class="R-recruit-card--text">
                    <p class="R-recruit-card--text--subtitle">【ウェブ制作・保守運用】</p>
                    <h3>フロントエンドエンジニア</h3>
                    <p class="R-recruit-card--text--maintext">デザイナーと連携し、お客様に満足頂ける制作ができる方を募集してます。</p>
                    <a href="" class="R-recruit-button">
                        <div class="R-recruit-button--link">
                            応募する
                        </div>
                    </a>
                </div>
            </div>

            <div class="R-recruit-card fade-in3">
                <div class="R-recruit-card--img">
                    <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/recuruit-img/2-Director.png" alt="LAVORO">
                </div>
                <div class="R-recruit-card--text">
                    <p class="R-recruit-card--text--subtitle">【システム開発・保守運用】</p>
                    <h3>バックエンドエンジニア</h3>
                    <p class="R-recruit-card--text--maintext">要件書を元にDB設計、構成が柔軟に対応できる方を募集しております。</p>
                    <a href="" class="R-recruit-button">
                        <div class="R-recruit-button--link">
                            応募する
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="recruit__box">
            <div class="R-recruit-card fade-in1">
                <div class="R-recruit-card--img">
                    <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/recuruit-img/2-Director.png" alt="LAVORO">
                </div>
                <div class="R-recruit-card--text">
                    <p class="R-recruit-card--text--subtitle">【企画立案・運用】</p>
                    <h3>ディレクタプランナー<br>（未経験可）</h3>
                    <p class="R-recruit-card--text--maintext">新規企画案件、自社進行案件において資料の作成や社内提案ができる方を募集しています。</p>
                    <a href="" class="R-recruit-button">
                        <div class="R-recruit-button--link">
                            応募する
                        </div>
                    </a>
                </div>
            </div>

            <div class="R-recruit-card R-nocard">
                <div class="R-recruit-card--img">
                </div>
                <div class="R-recruit-card--text">
                </div>
            </div>

            <div class="R-recruit-card R-nocard">
                <div class="R-recruit-card--img">
                </div>
                <div class="R-recruit-card--text">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact">
    <a href="<?php echo esc_url(home_url('/contactpage')); ?>" class="contact__card max fade-in1">
        <div class="contact__card--backimg">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img/Recruit.png" alt="Business-logo">
        </div>
        <div class="contact__card--title card-center">
        <div class="main-title-white">
            <span></span>
            <h2>CONTACT</h2>
            <p>お問い合わせ</p>
        </div>
        <p class="contact__card--title--text">お仕事のご依頼や資料請求など、<br>お気軽にお問い合わせください。</p>
        </div>

        <div class="contact__card--button card-center">
        <button></button>
        </div>
    </a>
</section>

<?php get_footer(); ?>