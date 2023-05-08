<?php get_header(); ?>

<section class="W-works-kv">
    <div class="max-inner">
        <div class="Breadcrumb-list">
            <div class="Breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="Breadcrumb__top">
                    TOP
                </a>
                <p>></p>
                <a href="" class="Breadcrumb__text">
                    NEWS
                </a>
            </div>
        </div>
    </div>
</section>

<section class="main-post">
    <div class="max-inner-post">
        <?php // ブログ記事を表示する start ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php // タイトルを表示する start ?>
            <h2 class="singletitle"><?php the_title(); ?></h2>
            <?php // タイトルを表示する end ?>

            <?php // ブログ記事を表示する start ?>
            <?php
            echo '<div class="Spost">';
                $textmain = get_post_meta( get_the_ID(), 'main_text', true );
                $news_terms = get_the_terms(get_the_ID(), 'news-cat');
                echo '<div class="Spost__day">';
                        echo '<p class="Spost__day--YNJ">' . get_the_date('Y年n月j日') . '</p>';
                        echo '<p class="Spost__day--midline"> | </p>';
                        $text = get_post_meta( get_the_ID(), 'hoge_name', true );
                        if (!empty($news_terms)) {
                            foreach ($news_terms as $news_term) {
                                if (!empty($news_term->name)) {
                                    echo '<div class="Spost__day--cate">';
                                        echo '<div class="Spost__day--cate--text">' . $news_term->name .'</div> ';
                                    echo '</div>';
                                }
                            }
                        }
                echo '</div>';

                echo '<div class="Spost__main-img">';
                    $image = get_post_meta( get_the_ID(), 'hoge_thumbnail', true );
                    if ( !empty( $image ) ) {
                        echo '<img src="'.wp_get_attachment_url($image).'">';
                    }
                echo '</div>';
            echo '</div>';
            ?>
            <?php // ブログ記事を表示する end ?>

            <?php // 本文を表示する start ?>
            <div class="Spost-body">
                <div class="Spost-body__content"><?php echo the_content(); ?></div>

                <div class="Scenter">
                    <a href="<?php echo esc_url(home_url('/newspage')); ?>" class="SbackBTN">
                    <div>
                        <img class="Sbtnwhite" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-img/arrowwhite.png" alt="">
                        <img class="Sbtnblue" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-img/arrowblue.png" alt="">
                    </div>
                    <button>BACK</button>
                    </a>
                </div>
            </div>
            <?php // 本文を表示する end ?>

        <?php endwhile; endif; ?>
    </div>
</section>


<section class="contact">
    <div class="contact__card">
        <div class="contact__card--backimg">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img/Recruit.png" alt="Business-logo">
        </div>
        <div class="contact__card--title">
        <div class="main-title-white">
            <span></span>
            <h2>RECURUIT</h2>
            <p>実績</p>
        </div>
        <p class="contact__card--title--text">お仕事のご依頼や資料請求など、<br>お気軽にお問い合わせください。</p>
        </div>

        <div class="contact__card--button">
        <button></button>
        </div>
    </div>

    <div class="contact__card">
        <div class="contact__card--backimg">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img/Contact.png" alt="Business-logo">
        </div>
        <div class="contact__card--title">
        <div class="main-title-white">
            <span></span>
            <h2>CONTACT</h2>
            <p>実績</p>
        </div>
        <p class="contact__card--title--text">お仕事のご依頼や資料請求など、<br>お気軽にお問い合わせください。</p>
        </div>

        <div class="contact__card--button">
        <button></button>
        </div>
    </div>
</section>

<?php get_footer(); ?>