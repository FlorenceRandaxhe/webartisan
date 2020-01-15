<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Florence Randaxhe">
    <meta name="description" content="<?= meta_description();?>">
    <meta name="keywords" content="<?= meta_keyword();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(''); ?></title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?= assets('/public/img/icon/apple-icon-57x57.png');?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= assets('/public/img/icon/apple-icon-60x60.png');?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= assets('/public/img/icon/apple-icon-72x72.png');?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= assets('/public/img/icon/apple-icon-76x76.png');?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= assets('/public/img/icon/apple-icon-114x114.png');?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= assets('/public/img/icon/apple-icon-120x120.png');?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= assets('/public/img/icon/apple-icon-144x144.png');?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= assets('/public/img/icon/apple-icon-152x152.png');?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= assets('/public/img/icon/apple-icon-180x180.png');?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= assets('/public/img/icon/android-icon-192x192.png');?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= assets('/public/img/icon/favicon-32x32.png');?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= assets('/public/img/icon/favicon-96x96.png');?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= assets('/public/img/icon/favicon-16x16.png');?>">
    <link rel="manifest" href="<?= assets('/public/img/icon/manifest.json'); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="<?= assets('/public/css/style.css'); ?>">
</head>
<body>
	<header class="header <?= set_header_class() ?>">

        <?php get_template_part('partials/hero');?>

		<div class="header__top">
			<div class="logo">
                <a href="<?= get_home_url(); ?>" class="logo__link"><span class="sr_only">Retour à la page d'accueil</span></a>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="120.5px" height="77.6px" viewBox="0 0 190.5 147.6"><style type="text/css">.st0{stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}  .st1{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><g><path d="M28.3,34.6l4.2-0.8l2.6,7.3l2.6-8.3l4.2-0.8l-4,11.5l3,7l6.6-19.6l4.9-0.9l-9.5,25.4L39.1,56l-4-9.1l-4,10.7l-3.8,0.7 l-9.4-21.8l4.8-0.9l6.6,17.1l2.9-8.1L28.3,34.6z"/><path d="M70.9,45.9l0,4L54.7,53l0-23.6l15.9-3l0,4l-11.3,2.2l0,5.7l9.8-1.9l0,3.7L59.3,42l0,6.1L70.9,45.9z"/><path d="M93.2,39.6c0,1-0.2,1.9-0.6,2.7c-0.4,0.8-0.9,1.6-1.6,2.2c-0.7,0.6-1.5,1.2-2.4,1.6c-0.9,0.4-1.9,0.8-2.9,1l-11.2,2.1 l0-23.6l12.5-2.4c0.8-0.2,1.5-0.1,2.2,0.1c0.7,0.2,1.2,0.6,1.7,1.1c0.5,0.5,0.8,1.1,1.1,1.7c0.3,0.7,0.4,1.4,0.4,2.1 c0,1.2-0.3,2.3-0.9,3.4c-0.6,1.1-1.4,2-2.5,2.7c1.3,0.1,2.4,0.7,3.2,1.5C92.8,36.9,93.2,38.1,93.2,39.6z M79,28.8l0,5.9l6-1.1 c0.8-0.1,1.4-0.5,1.9-1.2c0.5-0.6,0.8-1.4,0.8-2.3c0-0.9-0.2-1.6-0.7-2c-0.5-0.4-1.1-0.6-1.8-0.4L79,28.8z M88.6,39.6 c0-0.4-0.1-0.8-0.2-1.2c-0.1-0.4-0.3-0.7-0.6-0.9c-0.2-0.2-0.5-0.4-0.9-0.5c-0.3-0.1-0.7-0.1-1.1,0L79,38.3l0,6.2l6.7-1.3 c0.4-0.1,0.8-0.2,1.2-0.5c0.4-0.2,0.7-0.5,0.9-0.8c0.3-0.3,0.5-0.7,0.6-1.1C88.5,40.5,88.6,40.1,88.6,39.6z"/></g><g><path d="M26.9,94.2l4-0.8l8.9,21.9l-4.7,0.9l-2.2-5.5l-8.1,1.5l-2.1,6.3l-4.7,0.9L26.9,94.2z M32.1,107.7l-3.2-8.6l-3.3,9.9 L32.1,107.7z"/><path d="M42.3,114.9l0-23.6l10.3-2c1.1-0.2,2.1-0.2,3,0.1c0.9,0.3,1.7,0.7,2.3,1.3c0.7,0.6,1.2,1.4,1.5,2.2 c0.4,0.9,0.6,1.8,0.6,2.7c0,1.5-0.4,3-1.1,4.4c-0.8,1.4-1.8,2.5-3.1,3.3l5.3,7.8l-5.1,1l-4.8-7l-4.5,0.8l0,7.9L42.3,114.9z M46.8,102.1l5.7-1.1c0.4-0.1,0.8-0.3,1.2-0.5c0.4-0.3,0.7-0.6,0.9-1c0.3-0.4,0.5-0.8,0.6-1.3c0.2-0.5,0.2-1,0.2-1.5 c0-0.6-0.1-1-0.3-1.5c-0.2-0.4-0.4-0.8-0.7-1.1c-0.3-0.3-0.6-0.5-1-0.6c-0.4-0.1-0.8-0.1-1.2-0.1l-5.5,1L46.8,102.1z"/><path d="M81.1,87.9l-7.4,1.4l0,19.5l-4.5,0.9l0-19.5l-7.4,1.4l0-4l19.4-3.7L81.1,87.9z"/><path d="M84,106.9l0-23.6l4.5-0.9l0,23.6L84,106.9z"/><path d="M107.2,85.1c-0.2-0.1-0.4-0.3-0.8-0.5c-0.4-0.2-0.9-0.4-1.5-0.5c-0.6-0.1-1.2-0.2-1.9-0.3c-0.7,0-1.4,0-2.1,0.1 c-1.2,0.2-2.2,0.6-2.8,1.2c-0.6,0.6-0.9,1.3-0.9,2.1c0,0.5,0.1,0.9,0.3,1.1c0.2,0.3,0.6,0.5,1,0.7c0.4,0.2,1,0.3,1.7,0.3 c0.7,0.1,1.4,0.1,2.3,0.2c1.1,0.1,2.2,0.2,3.1,0.4c0.9,0.2,1.7,0.5,2.4,0.9c0.6,0.4,1.1,0.9,1.5,1.6c0.3,0.7,0.5,1.6,0.5,2.6 c0,1.3-0.2,2.4-0.7,3.4c-0.5,1-1.1,1.8-1.9,2.5c-0.8,0.7-1.7,1.3-2.8,1.7s-2.1,0.8-3.3,1c-1.7,0.3-3.5,0.4-5.2,0.2 c-1.7-0.2-3.2-0.7-4.6-1.4l2-4.3c0.2,0.2,0.6,0.4,1.1,0.6c0.5,0.2,1.1,0.4,1.8,0.6c0.7,0.2,1.5,0.3,2.3,0.4c0.9,0.1,1.7,0,2.6-0.2 c2.5-0.5,3.7-1.5,3.7-3.1c0-0.5-0.1-0.9-0.4-1.2c-0.3-0.3-0.7-0.5-1.2-0.7c-0.5-0.2-1.2-0.3-1.9-0.4c-0.7-0.1-1.6-0.2-2.5-0.3 c-1.1-0.1-2.1-0.3-2.9-0.5c-0.8-0.2-1.5-0.5-2-0.9c-0.5-0.4-1-0.9-1.2-1.5c-0.3-0.6-0.4-1.4-0.4-2.3c0-1.2,0.2-2.3,0.7-3.3 c0.4-1,1-1.9,1.8-2.7c0.8-0.8,1.7-1.4,2.7-1.9c1-0.5,2.1-0.9,3.3-1.1c1.6-0.3,3.1-0.3,4.5-0.1c1.4,0.3,2.6,0.6,3.6,1.2L107.2,85.1z "/><path d="M119.7,76.6l4-0.8l8.9,21.9l-4.7,0.9l-2.2-5.5l-8.1,1.5l-2.1,6.3l-4.7,0.9L119.7,76.6z M124.9,90l-3.2-8.6l-3.3,9.9 L124.9,90z"/><path d="M139.6,81.2l0,15.1l-4.5,0.9l0-23.6l3.5-0.7l12.1,13.2l0-15.4l4.5-0.9l0,23.5l-3.7,0.7L139.6,81.2z"/></g><polygon class="st0" points="176.2,106.7 189.5,112.7 189.5,51.3 176.2,47.9 "/><g><g><polygon points="189.5,113 13,146.6 1,140.5 176.2,107.1 		"/><polygon points="128.8,57.1 128.8,57.3 115.7,59.8 115.6,1 128.8,5 		"/></g><g><polygon class="st1" points="115.6,1 1,22.8 1,140.5 176.2,107.1 176.2,48.3 128.8,57.3 115.7,59.8 		"/><polyline class="st1" points="115.6,1 128.8,5 128.8,57.1 		"/><polyline class="st1" points="1,140.5 13,146.6 189.5,113 176.2,107.1 		"/></g></g></svg>
            </div>
            <input type="checkbox" id="menu" class="menu">
            <label class="menu_icon" for="menu" id="burger">
                <span class="sr_only">Navigation</span>
                <span class="bar top"></span>
                <span class="bar middle"></span>
                <span class="bar bottom"></span>
            </label>

            <div class="head__nav">
                <nav class="header__nav">
                    <h2 aria-level="2" role="heading" class="sr_only">Navigation principale</h2>
                    <ul class="nav">
                        <?php foreach (wa_getMenu('main') as $item): ?>
                            <li class="nav__item"><a href="<?= $item->url; ?>" class="nav__link<?= $item->current ? ' nav__link--current' : '';?>"><?= $item->label; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
                <div class="header__actions">
                    <div class="header__search">
                        <?php get_search_form();?>
                    </div>
                    <div class="header__member">
                        <div class="member_icon">
                            <span class="sr_only">Membres</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3a3a3a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="svg__icon svg__icon--black"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </div>
                        <ul class="member">
                            <?php if( is_user_logged_in()): $user = wp_get_current_user();
                                if ( in_array( 'subscriber', $user->roles ) ):?>
                                    <li class="member__login"><a href="<?= wa_get_page_url('template-profile.php');?>">Profil</a></li>
                                <?php else :?>
                                    <li class="member__login"><a href="<?= home_url();?>/wp-admin">Admin</a></li>
                                <?php endif;?>
                                    <li class="member__login"><a href="<?= wp_logout_url( home_url() . $_SERVER['REQUEST_URI'] ); ?>">Déconnecter</a></li>
                            <?php endif;?>
                            <?php if( ! is_user_logged_in()):?>
                                    <li class="member__login"><a href="<?= wa_get_page_url('template-login.php');?>">Connexion</a></li>
                                    <li class="member__register"><a href="<?= wa_get_page_url('template-register.php');?>">Inscription</a></li>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
		</div>
	</header>

