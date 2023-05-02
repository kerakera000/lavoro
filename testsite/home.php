<?php get_header(); ?>

<section class="kv">
  <div class="kv__title">
      <h1 class="kv__title--main">ITから<span>「楽しい」</span>をつくる</h1>
      <p class="kv__title--text">デジタルの力でものづくりをもっと楽しく、<br>ものづくりで今までにない体験を</p>
      <button class="kv__title--button">
        <P>ABOUT US</P>
        <div class="kv-button-back"></div>
      </button>
  </div>

  <div class="kv__news">
    <div class="kv__news--text">
      <p class="kv__news--text--day">2023/00/00</p>
      <p class="kv__news--text--detail">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
      <p class="kv__news--text--more">MORE</p>
    </div>
    <div class="kv__news--scroll">
      <p class="kv__news--scroll--text">SCROLL</p>
      <div class="kv__news--scroll--mouth">
        <div class="kv__news--scroll--mouth--ball"></div>
      </div>
    </div>
  </div>
  <div class="kv__img">
    <img class="kv__img--pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img/KV.png" alt="">
    <img class="kv__img--sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/homesp-img/01KVsp.png" alt="">
  </div>
</section>

<section class="business">
    <div class="max-inner">
      <div class="business__title">
        <div class="main-title">
          <span></span>
          <h2>BUSINESS</h2>
          <p>事業内容</p>
        </div>
      </div>

      <div class="business__sub">
        <div class="business__sub--title">
          <p>01</p>
          <div class="business__sub--title--box">
            <h3>コンテンツ制作事業</h3>
            <p>Contents Production</p>
          </div>
        </div>
        <div class="business__sub--text">
          <p>理想の体験価値を感じるデザイン、多種多様なビジネスニーズに合
            わせた制作まで、カスタムメイドのウェブサイトを提供いたします。
            構成からご要望に沿って、お応えさせて頂きます。</p>
        </div>
      </div>

      <div class="business__content">
        <div class="business-card C1">
          <div class="business-card__box">
            <div class="business-card__box--img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img/Business-logo1.png" alt="Business-logo">
            </div>
            <div class="Bcard-text">
              <p class="business-card__box--main-text">Webサイト制作</p>
              <p class="business-card__box--sub-text">Web production</p>
            </div>
          </div>

          <div class="business-card__button">
          <button></button>
          </div>
        </div>

        <div class="business-card C2">
          <div class="business-card__box">
            <div class="business-card__box--img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img/Business-logo2.png" alt="Business-logo">
            </div>
            <div class="Bcard-text">
              <p class="business-card__box--main-text">映像制作</p>
              <p class="business-card__box--sub-text">Video production</p>
            </div>
          </div>

          <div class="business-card__button">
            <button></button>
          </div>
        </div>

        <div class="business-card C3">
          <div class="business-card__box">
            <div class="business-card__box--img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img/Business-logo3.png" alt="Business-logo">
            </div>
            <div class="Bcard-text">
              <p class="business-card__box--main-text">Webサイト制作</p>
              <p class="business-card__box--sub-text">Web production</p>
            </div>
          </div>

          <div class="business-card__button">
          <button></button>
          </div>
        </div>

      </div>

      <div class="business__sub wrap110">
          <div class="business__sub--title">
            <p>02</p>
            <div class="business__sub--title--box">
              <h3>アプリ／業務システム開発</h3>
              <p>Application / Enterprise system development</p>
            </div>
          </div>
          <div class="business__sub--text">
            <p>課題を解決、業務フローを改善したい、生産性を最大化したいなど、
              効率化を目指したシステム開発、セキュリティや使いやすさにも配
              慮した開発を提供しております。</p>
          </div>
      </div>

      <div class="business__sistem">
        <div class="sistem-card C1">
          <div class="sistem-card--title">
              <div class="sistem-card--title--img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img/Business-logo4.png" alt="Business-logo">
              </div>
              <div class="Bcard-text">
              <h3>業務システム開発</h3>
              <p>Business system development</p>
              </div>
          </div>
          <div class="sistem-card--button">
            <button></button>
          </div>
        </div>

        <div class="sistem-card C2">
          <div class="sistem-card--title">
              <div class="sistem-card--title--img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img/Business-logo5.png" alt="Business-logo">
              </div>
              <div class="Bcard-text">
              <h3>プロジェクト開発</h3>
              <p>Project development</p>
              </div>
          </div>
          <div class="sistem-card--button">
            <button></button>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="works">
  <div class="max-inner">
    <div class="works__title">
      <div class="main-title">
        <span></span>
        <h2>WORKS</h2>
        <p>実績</p>
      </div>
    </div>

    <div class="works__content">
      <div class="works__content--page">
          <?php
              $paged = (int) get_query_var('paged');
              $args = array(
                  'posts_per_page' => 2,
                  'paged' => $paged,
                  'orderby' => 'post_date',
                  'order' => 'DESC',
                  'post_type' => 'works',
                  'post_status' => 'publish'
              );
              $the_query = new WP_Query($args);
              if ( $the_query->have_posts() ) :
              echo '<div class="page-content">';
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
          <?php wp_reset_postdata(); ?>
      </div>

      <div class="works__content--page works-secon ">
        <div class="page-content">
          <?php
              $paged = (int) get_query_var('paged');
              $args = array(
                  'posts_per_page' => 2,
                  'paged' => $paged,
                  'orderby' => 'post_date',
                  'order' => 'DESC',
                  'post_type' => 'works',
                  'post_status' => 'publish'
              );
              $the_query = new WP_Query($args);
              if ( $the_query->have_posts() ) :
              echo '<div class="page-content">';
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
          <?php wp_reset_postdata(); ?>
        </div>
      </div>

    </div>

    <div class="works__button">
      <button class="kv__title--button">
        <P>VIEW MORE</P>
        <div class="kv-button-back"></div>
      </button>
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