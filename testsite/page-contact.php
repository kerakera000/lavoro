<?php
/*
Template Name: page-contact
*/
?>
<?php get_header(); ?>

<section class="p-contact">
    <div class="Breadcrumb-list">
        <div class="Breadcrumb">
            <a href="" class="Breadcrumb__top">
                TOP
            </a>
            <p>></p>
            <a href="" class="Breadcrumb__text">
                contact
            </a>
        </div>
    </div>

    <div class="page-title">
        <div class="page-title__text">
            <h2>CONTACT</h2>
            <p>お問い合わせ</p>
        </div>
    </div>

    <div class="p-contact__text">
        <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
    </div>

    <div>
        <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfKgS0Fp1IVKwqTlB5QEMBmyGKsDowH5rPdCkot1HcUbDyqVQ/formResponse">
            <div>
                <p>お問い合わせ種別<span>*</span></p>
                <select name="entry.1827941720">
                    <option value="制作のご依頼・ご相談など" selected>制作のご依頼・ご相談など</option>
                    <option value="選択肢 2">選択肢 2</option>
                    <option value="選択肢 3">選択肢 3</option>
                    <option value="選択肢 4">選択肢 4</option>
                    <option value="選択肢 5">選択肢 5</option>
                </select>
            </div>
            <div>
                <p>氏名<span>*</span></p>
                <input type="text" name="entry.118645818">
            </div>
            <div>
                <p>フリガナ<span>*</span></p>
                <input type="text" name="entry.2137501806">
            </div>
            <div>
                <p>電話番号<span>*</span></p>
                <input type="tel" name="entry.1567120909">
            </div>
            <div>
                <p>E-MAIL<span>*</span></p>
                <input type="email" name="entry.2010546049">
            </div>
            <div>
                <p>お問い合わせ内容<span>*</span></p>
                <textarea name="entry.128190185" rows="3" cols="50"></textarea>
            </div>

            <button type="submit">送信</button>
        </form>
    </div>
</section>

<?php get_footer(); ?>