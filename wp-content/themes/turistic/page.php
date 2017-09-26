<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="content">

        <div class="pdf">
		    <?php
		    $field = get_field( 'pdf' );
        if($field):
		    ?>

            <a href="<?= $field['url'] ?>">Условия сервиса</a>
            <?php endif; ?>
        </div>
        <h1 class="title-page"><?php the_title(); ?></h1>
        <div>
			<?php the_content(); ?>
        </div>


    </div>
    <!-- sidebar-->
<?php endwhile;
else: ?>
    <p><?php _e( 'Ничего не найдено.' ); ?></p>
<?php endif; ?>



<?php get_template_part( '_parts/sidebar' ) ?>

<?php get_footer(); ?>
