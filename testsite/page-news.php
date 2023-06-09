<?php 
/*
Template Name: page-news
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
                  NEWS
              </a>
          </div>
      </div>

      <div class="p-contact__title load-in load-in1">
          <div class="page-title">
              <div class="page-title__text">
                  <h2>NEWS</h2>
                  <p>お知らせ</p>
              </div>
          </div>
      </div>
    </div>
</section>

<section class="W-works-content">
    <div class="Nmax-inner">
        <div class="W-works-content__buttons load-in load-in2">
            <button id="Wbutton0" class="W-works-button open">
                ALL
            </button>
            <?php
                $terms = get_terms( array(
                    'taxonomy' => 'news-cat',
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

        <div id="Wbutton0-page" class="page-content openpage load-in load-in3">
            <?php
                $paged = (int) get_query_var('paged');
                $args = array(
                    'posts_per_page' => 6,
                    'paged' => $paged,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'news',
                    'post_status' => 'publish'
                );
                $the_query = new WP_Query($args);
                if ( $the_query->have_posts() ) :
                echo '<div class="W-list-content">';
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>

                    <div class="Wpost">
                        <a class="N-flex" href="<?php echo get_permalink();?>">
                            <?php
                                echo '<div class="Wpost__box">';
                                    echo '<div class="Wpost__box--img">';
                                        $image = get_post_meta( get_the_ID(), 'hoge_thumbnail', true );
                                        if ( !empty( $image ) ) {
                                            echo '<img src="'.wp_get_attachment_url($image).'">';
                                        }
                                    echo '</div>';
                                    $textmain = get_post_meta( get_the_ID(), 'main_text', true );

                                    $news_terms = get_the_terms(get_the_ID(), 'news-cat');
                                    echo '<div class="N-post">';
                                            // 投稿日時を表示する
                                        echo '<div class="N-post__day">';
                                            echo '<p class="N-date">' . get_the_date('Y年n月j日') . '</p>';
                                            $text = get_post_meta( get_the_ID(), 'hoge_name', true );
                                            if (!empty($news_terms)) {
                                                foreach ($news_terms as $news_term) {
                                                    if (!empty($news_term->name)) {
                                                        echo '<div class="category-link">';
                                                            echo '<div class="category-link--text">' . $news_term->name .'</div> ';
                                                        echo '</div>';
                                                    }
                                                }
                                            }
                                        echo '</div>';
                                        if ( !empty( $textmain ) ) {
                                        echo '<p class="N-title">' . $textmain . '</p>';
                                        }
                                    echo '</div>';
                                echo '</div>';
                            ?>
                        </a>
                        <span class="Aabout-info__content--line"></span>
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

        <div id="Wbutton1-page" class="page-content load-in load-in4">
            <?php
                $paged = (int) get_query_var('paged');
                $args = array(
                    'posts_per_page' => 6,
                    'paged' => $paged,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'news',
                    'post_status' => 'publish'
                );
                $the_query = new WP_Query($args);
                if ( $the_query->have_posts() ) :
                echo '<div class="W-list-content">';
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>

                    <div class="Wpost">
                        <a class="N-flex" href="<?php echo get_permalink();?>">
                            <?php
                                echo '<div class="Wpost__box">';
                                    echo '<div class="Wpost__box--img">';
                                        $image = get_post_meta( get_the_ID(), 'hoge_thumbnail', true );
                                        if ( !empty( $image ) ) {
                                            echo '<img src="'.wp_get_attachment_url($image).'">';
                                        }
                                    echo '</div>';
                                    $textmain = get_post_meta( get_the_ID(), 'main_text', true );

                                    $news_terms = get_the_terms(get_the_ID(), 'news-cat');
                                    echo '<div class="N-post">';
                                            // 投稿日時を表示する
                                        echo '<div class="N-post__day">';
                                            echo '<p class="N-date">' . get_the_date() . '</p>';
                                            $text = get_post_meta( get_the_ID(), 'hoge_name', true );
                                            if (!empty($news_terms)) {
                                                foreach ($news_terms as $news_term) {
                                                    if (!empty($news_term->name)) {
                                                        echo '<div class="category-link">';
                                                            echo '<div class="category-link--text">' . $news_term->name .'</div> ';
                                                        echo '</div>';
                                                    }
                                                }
                                            }
                                        echo '</div>';
                                        if ( !empty( $textmain ) ) {
                                        echo '<p class="N-title">' . $textmain . '</p>';
                                        }
                                    echo '</div>';
                                echo '</div>';
                            ?>
                        </a>
                        <span class="Aabout-info__content--line"></span>
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
