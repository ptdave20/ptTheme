<?php get_header(); ?>



<div class="my-2 mx-2 row">
    <div class="col">

        <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();

            get_template_part( 'content-single', get_post_format() );

        endwhile; endif; 
        ?>

    </div>
    <div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>