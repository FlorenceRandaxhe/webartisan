<?php
$taxonomy = 'categoryforum';
$tax_terms = get_terms($taxonomy, array('hide_empty' => false));
/*
    Template Name: Add forum
*/
get_header();
?>
    <main class="forum__add main--top main--bottom">
        <div class="section__forum__add">
            <div class="forum__add__container">
                <?php if( is_user_logged_in()):?>
                    <form action="#" method="post">
                        <div class="form__container">
                           <input type="hidden" name="wa_forum_form" value="<?= wa_get_forum_form(); ?>">
                            <div class="a">
                                <?php if($forumForm->errors['subject_forum']): ?>
                                    <div>
                                        <p class="section__info--alert"><?= $forumForm->errors['subject_forum'];?></p>
                                    </div>
                                <?php endif; ?>
                                <label for="subject_forum" class="form__label form__label--block">Sujet</label>
                                <input type="text" id="subject_forum" name="subject_forum" class="input--wide">
                            </div>
                            <div class="b">
                                <?php if($forumForm->errors['taxo_forum']): ?>
                                    <div>
                                        <p class="section__info--alert"><?= $forumForm->errors['taxo_forum'];?></p>
                                    </div>
                                <?php endif; ?>
                                <fieldset>
                                    <legend>Catégorie</legend>
                                <?php foreach ($tax_terms as $tax_term):?>
                                <div class="resolved__form__chackbox">
                                    <input  class="input__radio" type="radio" name="taxo_forum" id="taxo_<?= $tax_term->slug;?>" value="<?= $tax_term->name;?>">
                                    <label for="taxo_<?= $tax_term->slug;?>" class="form__label form__label--radio"><?= $tax_term->name;?></label>
                                </div>
                                <?php endforeach;?>
                                </fieldset>
                            </div>
                            <div class="c">

                                <?php if($forumForm->errors['message_forum']): ?>
                                    <div>
                                        <p class="section__info--alert"><?= $forumForm->errors['message_forum'];?></p>
                                    </div>
                                <?php endif; ?>
                                <label for="message_forum" class="form__label form__label--block">Message</label>
                                 <div>
                                    <p>Coloration syntaxique&nbsp;:</p>
                                    <div>
                                        <button type="button" class="button--code" onclick="insertText('message_forum', '[code]…[/code]');">code</button>
                                        <button type="button" class="button--code" onclick="insertText('message_forum', '[code=html]…[/code]');">html</button>
                                        <button type="button" class="button--code" onclick="insertText('message_forum', '[code=css]…[/code]');">css</button>
                                        <button type="button" class="button--code" onclick="insertText('message_forum', '[code=javascript]…[/code]');">javacript</button>
                                        <button type="button" class="button--code" onclick="insertText('message_forum', '[code=php]…[/code]');">php</button>
                                        <button type="button" class="button--code" onclick="insertText('message_forum', '[code=sql]…[/code]');">sql</button>
                                    </div>
                                </div>
                                <textarea name="message_forum" id="message_forum" class="input--wide" cols="30" rows="10"></textarea>

                            </div>

                            <div>
                                <button class="button--blue">Poster une question</button>
                            </div>
                        </div>
                    </form>
                <?php endif;?>
                <?php if( ! is_user_logged_in()):?>
                    <div class="section__info section__info--alert">
                        <p>Vous devez être connecté pour poser une question</p>
                    </div>
                    <div>
                        <div class="login__form">
                            <?php wp_login_form(array( 'redirect' => home_url() . $_SERVER['REQUEST_URI'], ) ); ?>
                        </div>

                        <div class="other__link">
                            <a class="highlight" href="<?= wa_get_page_url('template-register.php') ;?>">Me créer un compte</a>
                            <a class="highlight" href="<?= wp_lostpassword_url(); ?>">Mot de passe oublié !</a>
                        </div>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </main>
    <footer class="skew--pink">
<?php get_footer();?>

<script type="text/javascript">
    function insertText(elemID, text) {
        const elem = document.getElementById(elemID);
        elem.value += text;}
</script>
