<?php
$taxonomy = 'categoryforum';
$tax_terms = get_terms($taxonomy, array('hide_empty' => false));
/*
    Template Name: Add forum
*/
get_header();
?>
    <main class="forum__add main--top main--bottom">
        <section class="section__forum__add">
            <h2 aria-level="2" role="heading" class="sr_only section__forum__title">
                Formulaire de nouveau sujet
            </h2>
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
                            <!-- ajout de catégorie ne marche pas -->
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
                                    <input  class="input__radio" type="radio" name="taxo_forum" id="taxo_<?= $tax_term->name;?>" value="<?= $tax_term->name;?>">
                                    <label for="taxo_<?= $tax_term->name;?>" class="form__label form__label--radio"><?= $tax_term->name;?></label>
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
                        <p>Vous devez êter connecté pour poser une question</p>
                    </div>
                    <div>
                        <div class="login__form">
                            <?php wp_login_form(array( 'redirect' => 'http://localhost' . $_SERVER['REQUEST_URI'], ) ); ?>
                        </div>

                        <div class="other__link">
                            <a href="<?= wa_get_page_url('template-register.php') ;?>">Me créer un compte</a>
                            <a href="<?= wp_lostpassword_url(); ?>">Mot de passe oublié !</a>
                        </div>
                    </div>
                <?php endif;?>
            </div>
        </section>
    </main>
    <footer class="skew--pink">
<?php get_footer();?>