<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="content">
        <div class="article-title title-page">
            Новость - <?php the_title(); ?>
        </div>
        <?php
        $image = get_the_post_thumbnail_url();
        if ($image):
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
            <?php if (is_singular('news')):
                $prev_post = get_previous_post();
                ?>

                <div class="article-pagination__block pagination-prev-left">
                    <?php previous_post_link('%link', '<i class="icon icon-angle-double-left"></i>Предыдущая статья') ?>
                    <div class="wrap-pagination-preview pagination-prev-left">
                        <div class="preview-article__img">
                            <?php echo get_the_post_thumbnail($prev_post->ID, array(200,350)); ?></div>
                        <div class="preview-article__content">
                            <div class="preview-article__info">
                                <?php $date = mysql2date('d F Y', $prev_post->post_date); ?>
                                <?php previous_post_link('%link', $date) ?>
                            </div>
                            <div class="preview-article__text"><?php previous_post_link('%link'); ?></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (is_singular('news')):
                $next_post = get_next_post();

                ?>
                <div class="article-pagination__block pagination-prev-right">
                    <?php next_post_link('%link', 'Следующая статья<i class="icon icon-angle-double-right"></i>') ?>
                    <div class="wrap-pagination-preview pagination-prev-right">
                        <div class="preview-article__img">
                            <?php echo get_the_post_thumbnail($next_post->ID, array(200,350)); ?></div>
                        <div class="preview-article__content">
                            <div class="preview-article__info">
                                <?php $date = mysql2date('d F Y', $next_post->post_date); ?>
                                <?php next_post_link('%link', $date) ?>
                            </div>
                            <div class="preview-article__text"><?php next_post_link('%link'); ?></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </div>

<?php endwhile; ?>


<?php else: ?>
    <p><?php _e('Ничего не найдено.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
