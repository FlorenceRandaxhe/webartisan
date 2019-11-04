<?php
/**
 * Forum answer template
 */
if ( have_comments() ) : ?>
    <ol class="post-comments">
        <?php
            wp_list_comments( array (
                'style'         => 'ol',
                'short_ping'    => true,
                'callback'      => 'comment_template'
            ) );?>
    </ol>
<?php endif;

$args = array (
    'id_form'               => 'commentform',
    'class_form'            => 'comment-form',
    'id_submit'             => 'submit',
    'class_submit'          => 'submit button--blue',
    'name_submit'           => 'submit',
    'title_reply'           => __( 'Répondre au sujet' ),
    'title_reply_to'        => __( 'Répondre à %s' ),
    'cancel_reply_link'     => __( 'Annuler la réponse' ),
    'label_submit'          => __( 'Répondre' ),
    'comment_field'         =>  '<label class="sr_only" for="comment">' . _x( 'Réponse', 'noun' ) . '</label><textarea id="comment" class="input--wide" name="comment" cols="45" rows="8" aria-required="true">' . '</textarea>',
    'must_log_in'           => '',
    'logged_in_as'          => '',
    'comment_notes_before'  => '',
    'comment_notes_after'   => '',
);

comment_form( $args );