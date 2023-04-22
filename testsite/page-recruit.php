<?php
/*
Template Name: page-recruit
*/
?>
<?php get_header(); ?>

<section class="recruit">
    <div class="Breadcrumb-list">
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
                <div class="page-title__text">
                    <h2>RECRUIT</h2>
                    <p>採用情報</p>
                </div>
            </div>

            <h3>要件書を元にDB設計、構成が柔軟に対応できる方を募集しております。<br class="r-recuruit-br-pc"><br class="r-recuruit-br-sp">
                <b>テクノロジーで未来の「新しい」と「楽しい」を作る仕事を</b>
            </h3>

            <p class="recruit__title--box--text">
                これまでのテクノロジーによるサービスはたくさん生まれる中、<br class="r-recuruit-br-pc">
                これからも生まれ続けます。私たちはこれからのサービスを<br class="r-recuruit-br-pc">
                作る立場として、多くのサービスを作り続けます。LAVOROは、<br class="r-recuruit-br-pc">
                その担い手になる仲間を募集しています。
            </p>
        </div>

        <div class="recruit__title--img">
            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/recuruit-img/recruit-top.png" alt="LAVORO">
        </div>
    </div>

    <div class="recruit__box">
        <div class="R-recruit-card">
            <div class="R-recruit-card--img">
                <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/recuruit-img/2-Director.png" alt="LAVORO">
            </div>
            <div class="R-recruit-card--text">
                <p class="R-recruit-card--text--subtitle">director</p>
                <h3>ディレクター</h3>
                <p class="R-recruit-card--text--maintext">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                <a href="" class="R-recruit-button">
                    <div class="R-recruit-button--link">
                        応募する
                    </div>
                </a>
            </div>
        </div>

        <div class="R-recruit-card">
            <div class="R-recruit-card--img">
                <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/recuruit-img/2-Director.png" alt="LAVORO">
            </div>
            <div class="R-recruit-card--text">
                <p class="R-recruit-card--text--subtitle">director</p>
                <h3>ディレクター</h3>
                <p class="R-recruit-card--text--maintext">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                <a href="" class="R-recruit-button">
                    <div class="R-recruit-button--link">
                        応募する
                    </div>
                </a>
            </div>
        </div>

        <div class="R-recruit-card">
            <div class="R-recruit-card--img">
                <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/recuruit-img/2-Director.png" alt="LAVORO">
            </div>
            <div class="R-recruit-card--text">
                <p class="R-recruit-card--text--subtitle">director</p>
                <h3>ディレクター</h3>
                <p class="R-recruit-card--text--maintext">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                <a href="" class="R-recruit-button">
                    <div class="R-recruit-button--link">
                        応募する
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="recruit__box">
        <div class="R-recruit-card">
            <div class="R-recruit-card--img">
                <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/recuruit-img/2-Director.png" alt="LAVORO">
            </div>
            <div class="R-recruit-card--text">
                <p class="R-recruit-card--text--subtitle">director</p>
                <h3>ディレクター</h3>
                <p class="R-recruit-card--text--maintext">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
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
</section>

<section class="contact">
    <div class="contact__card max">
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
    </div>
</section>

<?php get_footer(); ?>