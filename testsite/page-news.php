<?php 
/*
Template Name: page-news
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
                NEWS
            </a>
        </div>
    </div>

    <div class="p-contact__title">
        <div class="page-title">
            <div class="page-title__text">
                <h2>NEWS</h2>
                <p>お知らせ</p>
            </div>
        </div>
    </div>
</section>

<section>
  <div>

  </div>
  <div>
    
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
