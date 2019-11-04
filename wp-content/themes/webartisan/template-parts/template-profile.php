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
    <main class="profile main--top">
        <section class="section__profile">
            <div class="profile__container">
                <h2 aria-level="2" role="heading" class="sr_only profile__title">
                    Mes infos personnelles
                </h2>
                <div class="profile__info">
                    <p class="profile__info__name"><span class="text--bold">Salut</span> <?php the_author_meta('user_login',$current_user_id); ?>&nbsp;!</p>
                    <div class="profile__info__picture">
                        <?php
                        $user = wp_get_current_user();
                        if ( $user ):?>
                            <img src="<?= esc_url( get_avatar_url( $current_user_id ) ); ?>" alt="Photo de profile de <?php the_author_meta('user_login',$current_user_id); ?>" >
                        <?php endif; ?>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <span class="text--bold">Membre depuis</span>
                                <span><?= $registered; ?></span>
                            </li>
                            <li>
                                <span class="text--bold">Biographie</span>
                                <span><?php the_author_meta('description',$current_user_id); ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
<?php get_footer();?>