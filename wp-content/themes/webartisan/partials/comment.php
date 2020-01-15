<section id="anchor__comment" class="post__comment post__comment--width">
    <h2 aria-level="2" role="heading">Commentaires</h2>
    <div class="post__comment__container">
        <div class="comments__wp">
            <?php if ( wp_count_comments( get_the_ID() )->approved == 0 ):?>
                <div class="comments__empty">
                    <p>Il n'y a pas encore de commentaire&nbsp;! Soyez le premier à en laisser un&nbsp;!</p>
                </div>
            <?php endif;?>
            <?php comments_template( '/regular-comments.php' ); ?>
            
        </div>
        <?php if( ! is_user_logged_in()):?>
            <div class="section__info section__info--alert">
                <p>Vous devez être connecté pour répondre</p>
            </div>
            <div>
                <div class="login__form">
                    <?php wp_login_form(array( 'redirect' => home_url() . $_SERVER['REQUEST_URI'] . '#respond', ) ); ?>
                </div>
                <div class="other__link">
                    <a class="highlight" href="<?= wa_get_page_url('template-register.php') ;?>">Me créer un compte</a>
                    <a class="highlight" href="<?= wp_lostpassword_url(); ?>">Mot de passe oublié !</a>
                </div>
            </div>
        <?php endif;?>
    </div>
</section>
