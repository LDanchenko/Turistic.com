<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="content">
        <div class="article-title title-page">
			Акция - <?php the_title(); ?>
            цена - <?php the_field('price'); ?>
        </div>
		<?php
		$image = get_the_post_thumbnail_url();
        if($image):
        ?>
        <div class="article-image">
            <img src="<?php echo $image; ?>" alt="Image поста">
        </div>
            <?php endif; ?>
        <div class="article-info">
            <div class="post-date"><?php the_date(); ?></div>
        </div>
        <div class="article-text">
			<?php the_content(); ?>
        </div>


        <div class="article-pagination">
            <div class="article-pagination__block pagination-prev-left">
                <?php $prevPost = get_previous_post(true);
                if ($prevPost) {
                $args = array(
                    'posts_per_page' => 1,
                    'include' => $prevPost->ID
                );
                $prevPost = get_posts($args);
                foreach ($prevPost as $post) {
                setup_postdata($post);
                ?>

                <a href="<?php the_permalink(); ?>" class="article-pagination__link"><i
                            class="icon icon-angle-double-left"></i>Предыдущая статья</a>
                <div class="wrap-pagination-preview pagination-prev-left">
                    <div class="preview-article__img"><img src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                           class="preview-article__image"></div>
                    <div class="preview-article__content">
                        <div class="preview-article__info"><a href="<?php the_permalink(); ?>" class="post-date"><?php the_date('F j, Y'); ?></a>
                        </div>
                        <div class="preview-article__text"><?php the_title(); ?></div>
                    </div>
                </div>
            </div>

            <?php
            wp_reset_postdata();
            } //end foreach
            } //
            ?>
            <div class="article-pagination__block pagination-prev-right">
                <?php $prevPost = get_next_post(true);
                if ($prevPost) {
                $args = array(
                    'posts_per_page' => 1,
                    'include' => $prevPost->ID
                );
                $prevPost = get_posts($args);
                foreach ($prevPost as $post) {
                setup_postdata($post);
                ?>
                <a href="<?php the_permalink(); ?>" class="article-pagination__link">Следующая
                    статья<i class="icon icon-angle-double-right"></i></a>
                <div class="wrap-pagination-preview pagination-prev-right">
                    <div class="preview-article__img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="preview-article__image"></div>
                    <div class="preview-article__content">
                        <div class="preview-article__info"><a href="<?php the_permalink(); ?>" class="post-date"><?php the_date('F j, Y'); ?></a></div>
                        <div class="preview-article__text"><?php the_title(); ?></div>
                    </div>
                </div>
            </div>
        <?php
        wp_reset_postdata();
        } //end foreach
        } //
        ?>
        </div>



    </div>
<?php endwhile;
else: ?>
    <p><?php _e( 'Ничего не найдено.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
