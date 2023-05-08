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

            <?php // タイトルを表示する start 
                $textmain = get_post_meta( get_the_ID(), 'main_text', true );
                if ( !empty( $textmain ) ) {
                    echo '<h2 class="singletitle">' . $textmain . '</h2>';
                }
            ?>
            <?php // タイトルを表示する end ?>

            <?php // ブログ記事を表示する start ?>
            <?php
            echo '<div class="Spost">';
                $textmain = get_post_meta( get_the_ID(), 'main_text', true );
                $news_terms = get_the_terms(get_the_ID(), 'works-cat');
                echo '<div class="Spost__day">';
                        echo '<p class="Spost__day--YNJ">' . get_the_date('Y年n月j日') . '</p>';
                        echo '<p class="Spost__day--midline"> | </p>';
                        $text = get_post_meta( get_the_ID(), 'hoge_name', true );
                        if (!empty($news_terms)) {
                            foreach ($news_terms as $news_term) {
                                if (!empty($news_term->name)) {
                                    echo '<div class="Spost__day--cateW">';
                                        echo '<div class="Spost__day--cate--text">' . $news_term->name .'</div> ';
                                    echo '</div>';
                                }
                            }
                        }
                        echo '<p class="Spost__day--midline"> | </p>';
                        $text = get_post_meta( get_the_ID(), 'hoge_name', true );
                        if ( !empty( $text ) ) {
                            echo '<p class="Spost__day--company">' . $text . '</p>';
                        }
                        $text = get_post_meta( get_the_ID(), 'link_text', true );
                        if ( !empty( $text ) ) {
                            echo '<a href="'.$text.'" class="Spost__day--link">' . $text . '</a>';
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
            </div>
            <?php // 本文を表示する end ?>

        <?php endwhile; endif; ?>
    </div>
    <div class="max-inner-post large">
        <div class="Spost-body">
        <div id="Wbutton0-page" class="page-content openpage">
            <?php
            $args = array(
                'posts_per_page' => 2,
                'orderby' => 'rand', // ランダムに並び替え
                'post_type' => 'works',
                'post_status' => 'publish'
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
                echo '<div class="W-list-content">';
                while ($the_query->have_posts()) : $the_query->the_post();
                    ?>

                    <div class="Wpost">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php
                            echo '<div class="Wpost__box">';
                            echo '<div class="Wpost__box--img">';
                            $image = get_post_meta(get_the_ID(), 'hoge_thumbnail', true);
                            if (!empty($image)) {
                                echo '<img src="' . wp_get_attachment_url($image) . '">';
                            }
                            echo '</div>';
                            $textmain = get_post_meta(get_the_ID(), 'main_text', true);
                            if (!empty($textmain)) {
                                echo '<p class="Wpost__box--title">' . $textmain . '</p>';
                            }
                            $works_terms = get_the_terms(get_the_ID(), 'works-cat');
                            echo '<div class="Wpost__box--categories">';
                            if (!empty($works_terms)) {
                                foreach ($works_terms as $works_term) {
                                    if (!empty($works_term->name)) {
                                        echo '<a class="category-link" href="' . get_term_link($works_term) . '">' . $works_term->name . '</a> ';
                                    }
                                }
                            }
                            $text = get_post_meta(get_the_ID(), 'hoge_name', true);
                            if (!empty($text)) {
                                echo '<p class="Wpost__text-box--company">' . $text . '</p>';
                            }
                            echo '</div>';
                            echo '</div>';
                            ?>
                        </a>
                    </div>

                <?php endwhile;
                echo '</div>';
            endif;
            wp_reset_postdata(); ?>
        </div>

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