<?php
if(! is_user_logged_in()){
    header('location:' . home_url('/connexion/'));
}
/*
    Template Name: Profile
*/
$current_user_info = get_currentuserinfo();
$current_user_id = get_current_user_id();
$registered = date_i18n( "d/m/Y", strtotime( get_the_author_meta( 'user_registered', $current_user_id ) ) );

get_header();

?>
    <main class="profile main--bottom">
        <section class="section__profile">
            <div class="profile__container">
                <h2 aria-level="2" role="heading" class="sr_only profile__title">
                    Mes infos personnelles
                </h2>
                <div class="profile__info">
                    <div class="profile__info__picture">
                        <?php
                        $user = wp_get_current_user();
                        if ( $user ):?>
                            <img src="<?= esc_url( get_avatar_url( $current_user_id ) ); ?>" alt="Photo de profile de <?php the_author_meta('user_login',$current_user_id); ?>" width="100" height="100">
                        <?php endif; ?>
                    </div>
                    <p class="profile__info__name text--bold"><?php the_author_meta('user_login',$current_user_id); ?>&nbsp;!</p>
                    <p>Membre depuis le <?= $registered; ?></p>
                </div>

                <section class="section__profile">
                    <form name="form" action="" method="post" enctype="multipart/form-data" class="profile__form profile__form--info">
                        <?php if($_GET['mail'] == 'success'): ?>
                            <div class="section__success">
                                <p>Votre adresse mail à bien été modifiée</p>
                            </div>
                        <?php endif;?>
                        <h3 aria-level="3" role="heading" class="profile__title icon__align">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                            Modifier mon adresse e-mail
                        </h3>
                        <input type="hidden" name="wa_mail_form" value="<?= wa_change_mail_form(); ?>">
                        <input type="hidden" name="user_id" value="<?= $current_user_id; ?>">
                        <div>
                            <?php if($newMail->errors['user_email']): ?>
                                <div>
                                    <p class="section__info--alert"><?= $newMail->errors['user_email'];?></p>
                                </div>
                            <?php endif; ?>
                            <label for="user_email" class="form__label form__label--block">E-mail</label>
                            <input type="text" name="user_email" id="user_email" class="input input--wide" size="20" autocapitalize="off" value="<?= the_author_meta('user_email',$current_user_id); ?>">
                        </div>
                        <div>
                            <input type="submit" name="update-submit" id="wp-submit" class="button--blue" value="Enregistrer">
                        </div>
                    </form>
                </section>

                <section class="section__profile">
                    <form name="form" action="" method="post" class="profile__form profile__form--pass">
                        <?php if($_GET['psw'] == 'success'): ?>
                            <div class="section__success">
                                <p>Votre mot de passe à bien été modifié</p>
                            </div>
                        <?php endif;?>
                        <h3 aria-level="3" role="heading" class="profile__title icon__align">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                            Modifier mon mot de passe
                        </h3>
                        <input type="hidden" name="wa_password_form" value="<?= wa_change_password_form(); ?>">
                        <input type="hidden" name="user_id" value="<?= $current_user_id; ?>">
                        <div>
                            <?php if($newPassword->errors['user_pass']): ?>
                                <div>
                                    <p class="section__info--alert"><?= $newPassword->errors['user_pass'];?></p>
                                </div>
                            <?php endif; ?>
                            <label for="user_pass" class="form__label form__label--block">Ancien mot de passe</label>
                            <input type="password" name="user_pass" id="user_pass" class="input input--wide">
                        </div>

                        <div>
                            <?php if($newPassword->errors['user_pass_new']): ?>
                                <div>
                                    <p class="section__info--alert"><?= $newPassword->errors['user_pass_new'];?></p>
                                </div>
                            <?php endif; ?>
                            <label for="user_pass_new" class="form__label form__label--block">Nouveau mot de passe</label>
                            <input type="password" name="user_pass_new" id="user_pass_new" class="input--wide">
                        </div>

                        <div>
                            <?php if($newPassword->errors['user_pass_new_conf']): ?>
                                <div>
                                    <p class="section__info--alert"><?= $newPassword->errors['user_pass_new_conf'];?></p>
                                </div>
                            <?php endif; ?>
                            <label for="user_pass_new_conf" class="form__label form__label--block">Confirmer le nouveau mot de passe</label>
                            <input type="password" name="user_pass_new_conf" id="user_pass_new_conf" class="input--wide">
                        </div>

                        <div>
                            <input type="submit" name="wp-submit" id="wp-submit" class="button--blue" value="Enregistrer">
                        </div>
                    </form>
                </section>
            </div>
        </section>


    </main>

    <footer>
<?php get_footer();?>
