<?php
/*
Template Name: page-business
*/
?>
<?php get_header(); ?>

<section class="W-works-kv">
    <div class="max-inner">
        <div class="Breadcrumb-list load-in load-in">
            <div class="Breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="Breadcrumb__top">
                    TOP
                </a>
                <p>></p>
                <a href="" class="Breadcrumb__text">
                    BUSINESS
                </a>
            </div>
        </div>

        <div class="p-contact__title load-in load-in1">
            <div class="page-title">
                <div class="page-title__text">
                    <h2>BUSINESS</h2>
                    <p>LAVOROについて</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="W-works-content inBusiness">
    <div class="max-inner">
        <div class="W-works-content__buttons Business-wrap load-in load-in">
            <?php
                $terms = get_terms( array(
                    'taxonomy' => 'works-cat',
                    'hide_empty' => false,
                ) );
                $i = 1;
                foreach ( $terms as $term ) {
                    $term_name = $term->name;
                    $term_slug = $term->slug;
                    $class = 'W-works-button Bbutton';
                    if ($i == 1) { // 最初のボタンだけopenクラスを追加
                        $class .= ' open';
                    }
                    echo '<button id="Bbutton' . $i . '" class="' . $class . '">' . $term_name . '</button>';
                    $i++;
                }
            ?>
        </div>
    </div>

    <div class="max-inner">
        <div id="Bbutton1-page" class="page-content business-cnt openpage">
            <div class="business-cnt__page">
                <div class="business-cnt__page--text">
                    <div class="business-title">
                        <div class="business-title__main">
                            <span></span>
                            <h2>Webサイト制作</h2>
                        </div>
                        <div class="business-title__main">
                            <span class="nospan"></span>
                            <p class="business-title__sub">Web production</p>
                        </div>
                    </div>
                    <p class="business-cnt__page--text--explane">
                        理想の体験価値を感じるデザイン、多種多様なビジネスニーズに合わせた制作まで、カスタムメイドのウェブサイトを提供いたします。構成からご要望に沿って、お応えさせて頂きます。
                    </p>
                </div>
                <div class="business-cnt__page--img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-business/2BUSINESS.png" alt="value">
                </div>
            </div>
        </div>

        <div id="Bbutton2-page" class="page-content business-cnt">
            <div class="business-cnt__page">
                <div class="business-cnt__page--text">
                    <div class="business-title">
                        <div class="business-title__main">
                            <span></span>
                            <h2>プロジェクト開発</h2>
                        </div>
                        <div class="business-title__main">
                            <span class="nospan"></span>
                            <p class="business-title__sub">Web production</p>
                        </div>
                    </div>
                    <p class="business-cnt__page--text--explane">
                        この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れ
                    </p>
                </div>
                <div class="business-cnt__page--img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img/bus5.png" alt="value">
                </div>
            </div>
        </div>

        <div id="Bbutton3-page" class="page-content business-cnt origin">
            <div class="business-cnt__page">
                <div class="business-cnt__page--text">
                    <div class="business-title">
                        <div class="business-title__main">
                            <span></span>
                            <h2>業務システム開発</h2>
                        </div>
                        <div class="business-title__main">
                            <span class="nospan"></span>
                            <p class="business-title__sub">Web production</p>
                        </div>
                    </div>
                    <p class="business-cnt__page--text--explane">
                        課題を解決、業務フローを改善したい、生産性を最大化したいなど、効率化を目指したシステム開発、セキュリティや使いやすさにも配慮した開発を提供しております。
                    </p>
                </div>
                <div class="business-cnt__page--img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img/bus4.png" alt="value">
                </div>
            </div>

            <div class="B-waterfall">
                <div class="B-waterfall__title">
                    <h2>WATERFALL</h2>
                    <p>制作フロー</p>
                </div>
                <div class="B-waterfall__img">
                    <img class="B-waterfall__img--pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-business/4WATERFALL.png" alt="value">
                    <img class="B-waterfall__img--sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/businessSp/6WATERFALL.png" alt="value">
                </div>
            </div>

            <div class="B-waterfall">
                <div class="B-waterfall__title">
                    <h2>AGILE</h2>
                    <p>開発方針</p>
                </div>
                <div class="Agile">
                    <div class="Agile-img">
                        <img class="Agile-img--pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-business/5AGILEA.png" alt="value">
                        <img class="Agile-img--sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/businessSp/7AGILE.png" alt="value">
                    </div>
                    <div class="Agile-img">
                        <img class="Agile-img--pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-business/6AGILEB.png" alt="value">
                        <img class="Agile-img--sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/businessSp/8AGILE.png" alt="value">
                    </div>
                    <div class="Agile-img">
                        <img class="Agile-img--pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-business/7AGILEC.png" alt="value">
                        <img class="Agile-img--sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/businessSp/9AGILE.png" alt="value">
                    </div>
                </div>
            </div>
        </div>

        <div id="Bbutton4-page" class="page-content business-cnt">
            <div class="business-cnt__page">
                <div class="business-cnt__page--text">
                    <div class="business-title">
                        <div class="business-title__main">
                            <span></span>
                            <h2>進行管理(PM/PMO)</h2>
                        </div>
                        <div class="business-title__main">
                            <span class="nospan"></span>
                            <p class="business-title__sub">Web production</p>
                        </div>
                    </div>
                    <p class="business-cnt__page--text--explane">
                        新規・進行中に関わらず、進行管理や課題解決において、生産性の向上を目的としたプロジェクトの進行に参画致します。リモートや社内常駐など柔軟に対応いたします。
                    </p>
                </div>
                <div class="business-cnt__page--img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img/bus2.png" alt="value">
                </div>
            </div>
        </div>
    </div>

    <div class="max-inner">
        <div id="Bbutton1-page1" class="page-content inBusiness-wrapper openpage">

            <div class="business-page-title fade-in1">
                <div class="main-title">
                <span></span>
                <h2>WORKS</h2>
                <p>Webサイト制作</p>
                </div>
            </div>

            <?php
                $paged = (int) get_query_var('paged');
                $args = array(
                    'posts_per_page' => 6,
                    'paged' => $paged,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'works',
                    'post_status' => 'publish',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'works-cat',
                            'field' => 'slug',
                            'terms' => 'website'
                        )
                    )
                );
                $the_query = new WP_Query($args);
                if ( $the_query->have_posts() ) :
                echo '<div class="BW-100">';
                    echo '<div class="W-list-content business-post-content">';
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                        ?>

                        <div class="Wpost Bpost fade-in1">
                            <a href="<?php echo get_permalink();?>">
                                <?php
                                    echo '<div class="Wpost__box">';
                                        echo '<div class="Wpost__box--img">';
                                            $image = get_post_meta( get_the_ID(), 'hoge_thumbnail', true );
                                            if ( !empty( $image ) ) {
                                                echo '<img src="'.wp_get_attachment_url($image).'">';
                                            }
                                        echo '</div>';
                                        $textmain = get_post_meta( get_the_ID(), 'main_text', true );
                                        if ( !empty( $textmain ) ) {
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
                                            $text = get_post_meta( get_the_ID(), 'hoge_name', true );
                                            if ( !empty( $text ) ) {
                                                echo '<p class="Wpost__text-box--company">' . $text . '</p>';
                                            }
                                        echo '</div>';
                                    echo '</div>';
                                ?>
                            </a>
                        </div>

                        <?php endwhile; endif; ?>
                    </div>
                </div>
                <?php
                    echo '<div class="Wpagenation">';
                        if ($the_query->max_num_pages > 1) {
                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => 'page/%#%/',
                            'current' => max(1, $paged),
                            'total' => $the_query->max_num_pages
                        ));
                        }
                    echo '</div>';
                ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <div id="Bbutton2-page2" class="page-content inBusiness-wrapper">
            <div class="business-page-title fade-in1">
                <div class="main-title">
                <span></span>
                <h2>WORKS</h2>
                <p>プロジェクト開発</p>
                </div>
            </div>
            <?php
                $paged = (int) get_query_var('paged');
                $args = array(
                    'posts_per_page' => 6,
                    'paged' => $paged,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'works',
                    'post_status' => 'publish',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'works-cat',
                            'field' => 'slug',
                            'terms' => 'progressmanagement'
                        )
                    )
                );
                $the_query = new WP_Query($args);
                if ( $the_query->have_posts() ) :
                echo '<div class="BW-100">';
                    echo '<div class="W-list-content business-post-content">';
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                        ?>

                        <div class="Wpost Bpost fade-in1">
                            <a href="<?php echo get_permalink();?>">
                                <?php
                                    echo '<div class="Wpost__box">';
                                        echo '<div class="Wpost__box--img">';
                                            $image = get_post_meta( get_the_ID(), 'hoge_thumbnail', true );
                                            if ( !empty( $image ) ) {
                                                echo '<img src="'.wp_get_attachment_url($image).'">';
                                            }
                                        echo '</div>';
                                        $textmain = get_post_meta( get_the_ID(), 'main_text', true );
                                        if ( !empty( $textmain ) ) {
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
                                            $text = get_post_meta( get_the_ID(), 'hoge_name', true );
                                            if ( !empty( $text ) ) {
                                                echo '<p class="Wpost__text-box--company">' . $text . '</p>';
                                            }
                                        echo '</div>';
                                    echo '</div>';
                                ?>
                            </a>
                        </div>

                        <?php endwhile; endif; ?>
                    </div>
                </div>
                <?php
                    echo '<div class="Wpagenation">';
                        if ($the_query->max_num_pages > 1) {
                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => 'page/%#%/',
                            'current' => max(1, $paged),
                            'total' => $the_query->max_num_pages
                        ));
                        }
                    echo '</div>';
                ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <div id="Bbutton3-page3" class="page-content inBusiness-wrapper">
            <div class="business-page-title fade-in1">
                <div class="main-title">
                <span></span>
                <h2>WORKS</h2>
                <p>業務システム開発</p>
                </div>
            </div>
            <?php
                $paged = (int) get_query_var('paged');
                $args = array(
                    'posts_per_page' => 6,
                    'paged' => $paged,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'works',
                    'post_status' => 'publish',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'works-cat',
                            'field' => 'slug',
                            'terms' => 'systemdevelopment'
                        )
                    )
                );
                $the_query = new WP_Query($args);
                if ( $the_query->have_posts() ) :
                echo '<div class="BW-100">';
                    echo '<div class="W-list-content business-post-content">';
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                        ?>

                        <div class="Wpost Bpost fade-in1">
                            <a href="<?php echo get_permalink();?>">
                                <?php
                                    echo '<div class="Wpost__box">';
                                        echo '<div class="Wpost__box--img">';
                                            $image = get_post_meta( get_the_ID(), 'hoge_thumbnail', true );
                                            if ( !empty( $image ) ) {
                                                echo '<img src="'.wp_get_attachment_url($image).'">';
                                            }
                                        echo '</div>';
                                        $textmain = get_post_meta( get_the_ID(), 'main_text', true );
                                        if ( !empty( $textmain ) ) {
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
                                            $text = get_post_meta( get_the_ID(), 'hoge_name', true );
                                            if ( !empty( $text ) ) {
                                                echo '<p class="Wpost__text-box--company">' . $text . '</p>';
                                            }
                                        echo '</div>';
                                    echo '</div>';
                                ?>
                            </a>
                        </div>

                        <?php endwhile; endif; ?>
                    </div>
                </div>
                <?php
                    echo '<div class="Wpagenation">';
                        if ($the_query->max_num_pages > 1) {
                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => 'page/%#%/',
                            'current' => max(1, $paged),
                            'total' => $the_query->max_num_pages
                        ));
                        }
                    echo '</div>';
                ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <div id="Bbutton4-page4" class="page-content inBusiness-wrapper">
            <div class="business-page-title fade-in1">
                <div class="main-title">
                <span></span>
                <h2>WORKS</h2>
                <p>進行管理(PM/PMO)</p>
                </div>
            </div>
            <?php
                $paged = (int) get_query_var('paged');
                $args = array(
                    'posts_per_page' => 6,
                    'paged' => $paged,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'works',
                    'post_status' => 'publish',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'works-cat',
                            'field' => 'slug',
                            'terms' => 'projectdevelopment'
                        )
                    )
                );
                $the_query = new WP_Query($args);
                if ( $the_query->have_posts() ) :
                echo '<div class="BW-100">';
                    echo '<div class="W-list-content business-post-content">';
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                        ?>

                        <div class="Wpost Bpost fade-in1">
                            <a href="<?php echo get_permalink();?>">
                                <?php
                                    echo '<div class="Wpost__box">';
                                        echo '<div class="Wpost__box--img">';
                                            $image = get_post_meta( get_the_ID(), 'hoge_thumbnail', true );
                                            if ( !empty( $image ) ) {
                                                echo '<img src="'.wp_get_attachment_url($image).'">';
                                            }
                                        echo '</div>';
                                        $textmain = get_post_meta( get_the_ID(), 'main_text', true );
                                        if ( !empty( $textmain ) ) {
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
                                            $text = get_post_meta( get_the_ID(), 'hoge_name', true );
                                            if ( !empty( $text ) ) {
                                                echo '<p class="Wpost__text-box--company">' . $text . '</p>';
                                            }
                                        echo '</div>';
                                    echo '</div>';
                                ?>
                            </a>
                        </div>

                        <?php endwhile; endif; ?>
                    </div>
                </div>
                <?php
                    echo '<div class="Wpagenation">';
                        if ($the_query->max_num_pages > 1) {
                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => 'page/%#%/',
                            'current' => max(1, $paged),
                            'total' => $the_query->max_num_pages
                        ));
                        }
                    echo '</div>';
                ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>

</section>

<section class="contact">
  <a href="<?php echo esc_url(home_url('/recruitpage')); ?>" class="contact__card fade-in1">
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
  </a>

  <a href="<?php echo esc_url(home_url('/contactpage')); ?>" class="contact__card fade-in2">
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
  </a>
</section>


<?php get_footer(); ?>