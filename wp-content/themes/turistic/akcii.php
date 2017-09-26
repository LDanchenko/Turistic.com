<?php
/*
Template Name: Akcii
*/
?>

<?php get_header(); ?>
<div class="content">
    <h1 class="title-page">Последние акции </h1>


    <div class="posts-list">

        <?php $query = new WP_Query(array('post_type' => 'akcii') );
        if ($query->have_posts() ) {
        while ($query->have_posts() ) {
        $query->the_post();
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
                            Цена: <?php the_field('price'); ?>

                        </p>
                    </div>
                    <div class="post-content__post-control"><a href="<?php the_permalink(); ?>" class="btn-read-post">Читать далее >></a>
                    </div>
                </div>
            </div>
            <!-- post-mini_end-->
        <?php
        }
        } ?>



    </div>
    <div class="pagenavi-post-wrap">

        <?php the_posts_pagination( $args );
        $args = array(
            'show_all'     => false, // показаны все страницы участвующие в пагинации
            'end_size'     => 1,     // количество страниц на концах
            'mid_size'     => 1,     // количество страниц вокруг текущей
            'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
            'prev_text'    => __('<<'),
            'next_text'    => __('Далее'),
            'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
            'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
            'screen_reader_text' => __( 'Posts navigation' ),
        );
        ?>
    </div>
    </div>
<!-- sidebar-->
<?php get_template_part('_parts/sidebar')?>
<?php get_footer(); ?>



