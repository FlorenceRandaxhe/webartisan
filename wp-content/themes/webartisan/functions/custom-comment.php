<?php

/******************************
 * Custom comment list template
 */

if( ! function_exists( 'comment_template' ) ):
    function comment_template( $comment, $args, $depth )
    {
?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
        <div class="comment__content">
            <div class="comment__content__img">
                <?= get_avatar( $comment, $size='80',$default='', $alt='Photo de profil' ); ?>
            </div>
            <div class="comment__content__body">
                <?php if ( $comment->comment_approved == '0' ) : ?>
                    <em>Votre commentaire est en attende de modération</em>
                <?php endif; ?>
                <div class="comment__meta">
                    <p class="comment__meta__date"><?php printf( esc_html__( '%1$s à %2$s' ), get_comment_date(),  get_comment_time() ) ?></p>
                    <p class="comment__meta__author"><?= get_comment_author() ?></p>
                </div>

                <div class="comment__text">
                    <?php comment_text() ?>
                </div>

                <div class="comment__reply">
                    <a href="#"><?php comment_reply_link( array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ) ?></a>
                </div>
            </div>
        </div>
<?php

    }

endif;
