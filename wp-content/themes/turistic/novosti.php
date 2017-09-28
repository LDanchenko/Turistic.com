<?php
/*
Template Name: Novosti
*/
?>


<?php get_header(); ?>
<div class="content">
    <h1 class="title-page">Последние новости </h1>


    <div class="posts-list">

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(

            'orderby' => 'menu_order',
            'order'=> 'ASC',
            'paged'=>$paged,
            'post_type' => 'news'
        );

        $projects = new WP_Query($args);
        if ($projects->have_posts() ) :
        while ($projects->have_posts() ) :
            $projects->the_post();
            ?>

            <div class="post-wrap">
                <div class="post-thumbnail">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image поста" class="post-thumbnail__image">

                </div>
                <div class="post-content">
                    <div class="post-content__post-info">
                        <div class="post-date"><?php the_date(); ?></div>
                    </div>
                    <div class="post-content__post-text">
                        <div class="post-title">
                            <?php the_title(); ?>

                        </div>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                        <p>

                        </p>
                    </div>
                    <div class="post-content__post-control"><a href="<?php the_permalink(); ?>" class="btn-read-post">Читать далее >></a>
                    </div>
                </div>
            </div>
            <!-- post-mini_end-->
        <?php        endwhile; ?>
    </div>
    <div class="pagenavi-post-wrap">
        <?php
        $GLOBALS['wp_query']->max_num_pages = $projects->max_num_pages;
        the_posts_pagination( array(
            'mid_size' => 1,
            'prev_text' => __( 'Назад', 'green' ),
            'next_text' => __( 'Далее', 'green' ),
            'screen_reader_text' => __( 'Posts navigation' )
        ) );
        ?>
    </div>
    <?php endif; ?>




</div>
<!-- sidebar-->
<?php get_template_part('_parts/sidebar')?>
<?php get_footer(); ?>



