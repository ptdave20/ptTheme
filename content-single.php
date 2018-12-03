<div class="card">
    <h5 class="card-header"><?php the_title(); ?></h5>
    <div class="card-body">
        <?php the_content(); ?>
    </div>
    <div class="card-footer">
        <?php the_date(); ?> by <?php the_author(); ?>
    </div>
</div><!-- /.blog-post -->