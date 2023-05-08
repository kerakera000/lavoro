<?php
/*
Template Name: page-contact
*/
?>
<?php get_header(); ?>

<section class="p-contact">
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

    <div class="p-contact__title load-in load-in1">
        <div class="page-title">
            <div class="page-title__text">
                <h2>CONTACT</h2>
                <p>お問い合わせ</p>
            </div>
        </div>
    </div>

    <div class="p-contact__text load-in load-in2">
        <p>ご相談やご依頼について、下記より必要事項記入の上、「送信」ボタンをクリックし、ご連絡ください。<br><br>
            *は必須項目ですので、必ずご記入をお願いします。</p>
    </div>

    <div class="form load-in load-in3">
        <form class="form__content" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfKgS0Fp1IVKwqTlB5QEMBmyGKsDowH5rPdCkot1HcUbDyqVQ/formResponse">
            <div class="form__content--flex">
                <p class="form-text">お問い合わせ種別<span>*</span></p>
                <div class="form-box select">
                    <select class="min" name="entry.1827941720">
                        <option value="制作のご依頼・ご相談など" selected>制作のご依頼・ご相談など</option>
                        <option value="選択肢 2">選択肢 2</option>
                        <option value="選択肢 3">選択肢 3</option>
                        <option value="選択肢 4">選択肢 4</option>
                        <option value="選択肢 5">選択肢 5</option>
                    </select>
                    <div>▼</div>
                </div>
            </div>
            <div class="form__content--flex">
                <p class="form-text">氏名<span>*</span></p>
                <div class="form-box">
                    <input class="min" type="text" placeholder="山田　太郎" name="entry.118645818">
                </div>
            </div>
            <div class="form__content--flex">
                <p class="form-text">フリガナ<span>*</span></p>
                <div class="form-box">
                    <input class="min" type="text" placeholder="ヤマダ　タロウ" name="entry.2137501806">
                </div>
            </div>
            <div class="form__content--flex">
                <p class="form-text">電話番号<span>*</span></p>
                <div class="form-box">
                    <input class="min" type="tel" placeholder="電話番号" name="entry.1567120909">
                </div>
            </div>
            <div class="form__content--flex">
                <p class="form-text">E-MAIL<span>*</span></p>
                <div class="form-box">
                    <input class="min" type="email" placeholder="example@mail.com" name="entry.2010546049">
                </div>
            </div>
            <div class="form__content--flex-large">
                <p class="form-text">お問い合わせ内容<span>*</span></p>
                <div class="form-box-large">
                    <textarea class="large" placeholder="ご依頼内容の詳細についてお伝えください。ご相談したいサイトURLがあればあわせてお知らせいただけますと幸いです。" name="entry.128190185" rows="3" cols="50"></textarea>
                </div>
            </div>

            <div class="form__content--flex">
                <p class="form-text"><span></span></p>
                <div class="form-submit-box">
                    <button class="form-submit" type="submit">送信</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</section>

<section class="contact">
    <a href="<?php echo esc_url(home_url('/recruitpage')); ?>" class="contact__card max fade-in1">
        <div class="contact__card--backimg">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img/Recruit.png" alt="Business-logo">
        </div>
        <div class="contact__card--title card-center">
        <div class="main-title-white">
            <span></span>
            <h2>RECURUIT</h2>
            <p>実績</p>
        </div>
        <p class="contact__card--title--text">お仕事のご依頼や資料請求など、<br>お気軽にお問い合わせください。</p>
        </div>

        <div class="contact__card--button card-center">
        <button></button>
        </div>
    </a>
</section>

<?php get_footer(); ?>