<section id="anchor__comment" class="thread__respond post__comment--width">

    <div class="post__comment__container">

        <div class="comments__wp">
            <?php if (wp_count_comments(get_the_ID())->approved == 0):?>
                <div class="comments__empty">
                    <p>Ce sujet n'a pas encore de réponse</p>
                </div>
            <?php endif;?>
            <?php comments_template('/custom-comments.php'); ?>
            <?php if (is_user_logged_in()):?>
                <div class="syntax__codes">
                    <p>Coloration syntaxique&nbsp;:</p>
                    <div>
                        <button class="button--code" onclick="insertText('comment', '[code]…[/code]');">code</button>
                        <button class="button--code" onclick="insertText('comment', '[code=html]…[/code]');">html</button>
                        <button class="button--code" onclick="insertText('comment', '[code=css]…[/code]');">css</button>
                        <button class="button--code" onclick="insertText('comment', '[code=javascript]…[/code]');">javacript</button>
                        <button class="button--code" onclick="insertText('comment', '[code=php]…[/code]');">php</button>
                        <button class="button--code" onclick="insertText('comment', '[code=sql]…[/code]');">sql</button>
                    </div>
                </div>
            <?php endif;?>
        </div>
        <?php if( ! is_user_logged_in()):?>
            <div class="section__info section__info--alert">
                <p>Vous devez être connecté pour répondre</p>
            </div>
            <div>
                <div class="login__form">
                    <?php wp_login_form(array( 'redirect' => 'http://localhost' . $_SERVER['REQUEST_URI'] . '#respond', ) ); ?>
                </div>

                <div class="other__link">
                    <a href="<?= wa_get_page_url('template-register.php') ;?>">Me créer un compte</a>
                    <a href="<?= wp_lostpassword_url(); ?>">Mot de passe oublié !</a>
                </div>
            </div>
        <?php endif;?>
    </div>
</section>
