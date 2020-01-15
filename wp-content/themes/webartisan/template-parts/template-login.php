<?php
if(is_user_logged_in()){
    header('location:' . home_url());
}
/*
    Template Name: Login
*/
$args = array(
    'echo'           => true,
    'remember'       => true,
    'redirect'       => home_url(),
    'form_id'        => 'loginform',
    'id_username'    => 'user_login',
    'id_password'    => 'user_pass',
    'id_remember'    => 'rememberme',
    'id_submit'      => 'wp-submit',
    'label_username' => __( 'Non d\'utilisateur ou adresse e-mail' ),
    'label_password' => __( 'Password' ),
    'label_remember' => __( 'Remember Me' ),
    'label_log_in'   => __( 'Se connecter' ),
    'value_username' => '',
    'value_remember' => false
);
get_header();

?>
    <main class="login">
        <section class="section__login">
            <div class="login__container">
                <h2 aria-level="2" role="heading" class="login__title">
                    Se connecter
                </h2>
                <div>
                    <?php if ($_GET['login'] == 'failed'):?>
                        <p class="section__info--alert">Nom d'utilisateur ou mot de passe incorrect</p>
                    <?php endif ;?>
                    <?php if ($_GET['login'] == 'empty'):?>
                        <p class="section__info--alert">Tous les champs doivent être complétés</p>
                    <?php endif ;?>

                    <div class="login__form">
                        <?php wp_login_form($args ); ?>
                    </div>

                    <div class="other__link">
                        <a class="highlight" href="<?= wa_get_page_url('template-register.php') ;?>">Me créer un compte</a>
                        <a class="highlight" href="<?= wp_lostpassword_url(); ?>">Mot de passe oublié !</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

<footer>
<?php get_footer();?>
