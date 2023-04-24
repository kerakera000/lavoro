<?php
/*
Template Name: page-works
*/
?>

<?php get_header(); ?>

<section class="W-works-kv">
    <div class="Breadcrumb-list">
        <div class="Breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="Breadcrumb__top">
                TOP
            </a>
            <p>></p>
            <a href="" class="Breadcrumb__text">
                WORKS
            </a>
        </div>
    </div>

    <div class="p-contact__title">
        <div class="page-title">
            <div class="page-title__text">
                <h2>WORKS</h2>
                <p>制作実績</p>
            </div>
        </div>
    </div>
</section>

<section class="W-works-content">
    <div class="W-works-content__buttons">
        <button id="Wbutton0" class="W-works-button open">
            ALL
        </button>
        <?php
            $terms = get_terms( array(
                'taxonomy' => 'works-cat',
                'hide_empty' => false,
            ) );
            $i = 1;
            foreach ( $terms as $term ) {
                $term_name = $term->name;
                $term_slug = $term->slug;
                echo '<button id="Wbutton' . $i . '" class="W-works-button">' . $term_name . '</button>';
                $i++;
            }
        ?>
    </div>

    <div id="Wbutton0-page" class="page-content openpage">
        <?php
            $paged = (int) get_query_var('paged');
            $args = array(
                'posts_per_page' => 6,
                'paged' => $paged,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'works',
                'post_status' => 'publish'
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
            echo '<div class="W-list-content">';
                while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>

                <div class="Wpost">
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

    <div id="Wbutton1-page" class="page-content">
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
            echo '<div class="W-list-content">';
                while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>

                <div class="Wpost">
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

    <div id="Wbutton2-page" class="page-content">
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
            echo '<div class="W-list-content">';
                while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>

                <div class="Wpost">
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

    <div id="Wbutton3-page" class="page-content">
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
            echo '<div class="W-list-content">';
                while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>

                <div class="Wpost">
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

    <div id="Wbutton4-page" class="page-content">
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
            echo '<div class="W-list-content">';
                while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>

                <div class="Wpost">
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