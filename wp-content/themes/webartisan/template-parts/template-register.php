<?php
if(is_user_logged_in()){
    header('location:' . home_url());
}
/*
    Template Name: Register
*/
get_header();

?>
    <main class="login">
        <section class="section__login">
            <div class="login__container">
                <h2 aria-level="2" role="heading" class="login__title">
                    Créer un compte
                </h2>
                <div>
                    <form name="loginform" id="loginform" action="" method="post">
                        <input type="hidden" name="wa_user_form" value="<?= wa_new_user_form(); ?>">

                        <div>
                            <?php if($newUser->errors['user_login']): ?>
                                <div class="section__info--alert">
                                    <p><?= $newUser->errors['user_login'];?></p>
                                </div>
                            <?php endif; ?>
                            <label for="user_login" class="form__label form__label--block">Nom d’utilisateur</label>
                            <input type="text" name="user_login" id="user_login" class="input input--wide">
                        </div>

                        <div>
                            <?php if($newUser->errors['user_email']): ?>
                                <div class="section__info--alert">
                                    <p><?= $newUser->errors['user_email'];?></p>
                                </div>
                            <?php endif; ?>
                            <label for="user_email" class="form__label form__label--block">Email</label>
                            <input type="email" name="user_email" id="user_email" class="input input--wide">
                        </div>

                        <div>
                            <?php if($newUser->errors['user_password']): ?>
                                <div class="section__info--alert">
                                    <p><?= $newUser->errors['user_password'];?></p>
                                </div>
                            <?php endif; ?>
                            <p>Le mot de passe doit être de minimum 6 caractères et contenir au moins une majuscule, un nombre et un caractère spécial</p>
                            <label for="user_password" class="form__label form__label--block">Mot de passe</label>
                            <input type="password" name="user_password" id="user_password" class="input input--wide">
                        </div>

                        <div>
                            <?php if($newUser->errors['conf_user_password']): ?>
                                <div class="section__info--alert">
                                    <p><?= $newUser->errors['conf_user_password'];?></p>
                                </div>
                            <?php endif; ?>
                            <label for="conf_user_password" class="form__label form__label--block">Confirmer le mot de passe</label>
                            <input type="password" name="conf_user_password" id="conf_user_password" class="input input--wide">
                        </div>

                        <div class="form__submit">
                            <input type="submit" name="wp-submit" id="wp-submit" class="button--blue" value="Créer mon compte">
                        </div>
                    </form>

                    <div class="other__link">
                        <p>
                            Déjà un compte&nbsp;? <a class="highlight" href="<?= wa_get_page_url('template-login.php') ;?>">Me connecter</a>     
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
<?php get_footer();?>