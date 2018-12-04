<?php if ( post_password_required() ) {
	return;
} ?>

    <?php if ( have_comments() ) : ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-header">
                    <?php
                    printf( _nx( 'One comment on “%2$s”', '%1$s comments on “%2$s”', get_comments_number(), 'comments title'),
                        number_format_i18n( get_comments_number() ), get_the_title() );
                    ?>
                </h5>
                <?php 
                wp_list_comments( array(
                    'short_ping'  => true,
                    'avatar_size' => 50,
                ) );
                ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="no-comments">
            <?php _e( 'Comments are closed.' ); ?>
        </p>
    <?php endif; ?>
    <?php comment_form(); ?>
</div>