<?php
/**
 * Comment template
 */
if (have_comments()) : ?>
    <ol class="post-comments">
        <?php
        wp_list_comments(array(
            'avatar_size' => 80,
            'style'       => 'ol',
            'short_ping' => true,
            'callback' => 'comment_template',
        ));?>
    </ol>
    
<?php endif;

$args = array(
    'action'                => site_url( '/wp-comments-post.php/#respond' ),
    'id_form'               => 'commentform',
    'class_form'            => 'comment-form',
    'id_submit'             => 'submit',
    'class_submit'          => 'submit button--blue',
    'name_submit'           => 'submit',
    'title_reply'           => __( 'Laisser un commentaire' ),
    'title_reply_to'        => __( 'Répondre à %s' ),
    'cancel_reply_link'     => __( 'Annuler la réponse' ),
    'label_submit'          => __( 'Envoyer' ),
    'comment_field'         =>  '<label class="sr_only" for="comment">' . _x( 'Commentaire', 'noun' ) . '</label><textarea id="comment" class="input--wide" name="comment" cols="45" rows="8" aria-required="true">' . '</textarea>',
    'must_log_in'           => '',
    'logged_in_as'          => '',
    'comment_notes_before'  => '',
    'comment_notes_after'   => '',
);

comment_form($args);
