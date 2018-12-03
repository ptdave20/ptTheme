<?php 
/*
Theme Name: ptTheme
Author: David Marchbanks
Description: Uses bootstrap 4 and Font Awesome
Version: 0.0.1
Tags: bootstrap fontawesome
*/

?>
<?php get_header(); ?>

<div class="my-2 mx-2 row">
    <div class="col">

        <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();

            get_template_part( 'content', get_post_format() );

        endwhile; endif; 
        ?>

        <?php next_posts_link( 'Older posts' ); ?>
        <?php previous_posts_link( 'Newer posts' ); ?>
    </div>
    <div>
        <?php if ( is_active_sidebar( 'right-side-bar' ) ) : ?>
            <?php dynamic_sidebar( 'right-side-bar' ); ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>