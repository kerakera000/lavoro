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
                CONTACT
            </a>
        </div>
    </div>

    <div class="p-contact__title">
        <div class="page-title">
            <div class="page-title__text">
                <h2>CONTACT</h2>
                <p>お問い合わせ</p>
            </div>
        </div>
    </div>
</section>

<section class="W-works-content">
    <div class="W-works-content__buttons">
        <button class="W-works-button">
            ALL
        </button>
        <?php
            $terms = get_terms(array(
                'taxonomy' => 'works-cat',
                'hide_empty' => false
            ));
            foreach ($terms as $term) {
                $term_name = $term->name;
                $term_slug = $term->slug;
                echo '<button class="W-works-button">' . $term_name . '</button>';
            }
        ?>
    </div>
    <div>
        <div>
            <div>
                <img src="" alt="">
            </div>
            <p></p>
            <div>
                <span></span>
                <p></p>
                <p></p>
            </div>
        </div>

        <div>
            <div>
                <img src="" alt="">
            </div>
            <p></p>
            <div>
                <span></span>
                <p></p>
                <p></p>
            </div>
        </div>
        <?php
            $paged = (int) get_query_var('paged');
            $args = array(
                'posts_per_page' => 3,
                'paged' => $paged,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'publish'
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div class="post">
                <h1 class="title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
            <?php endwhile; endif; ?>
            <?php
            if ($the_query->max_num_pages > 1) {
                echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => 'page/%#%/',
                    'current' => max(1, $paged),
                    'total' => $the_query->max_num_pages
                ));
                }
            ?>
        <?php wp_reset_postdata(); ?>
    </div>

    <div>

    </div>
</section>


<?php get_footer(); ?>