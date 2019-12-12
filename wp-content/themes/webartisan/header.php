<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Florence Randaxhe">
    <!-- AJOUTER LA DESCRIPTION ET LES KEYWORD SUR LA PAGE D'ACCEUIL  -->
    <meta name="description" content="<?php the_field('description');?>">
    <meta name="keywords" content="<?php the_field('keywords');?>">
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
	<header class="header <?php if ( is_front_page() || is_singular( 'articles' ) || is_page_template(array('template-parts/template-blog.php', 'template-parts/template-contact.php','template-parts/template-ressources.php', 'template-parts/template-profile.php','template-parts/template-about.php'))) echo 'skew--yellow';
	if(is_page_template( 'template-parts/template-tutos.php') || is_singular( 'tutoriels' )) echo 'skew--green';
	if(is_page_template(array('template-parts/template-forum.php','template-parts/template-newForum.php' ))|| is_singular( 'forum' )) echo 'skew--pink';
	if(is_page_template(array('template-parts/template-jobs.php', 'template-parts/template-addJob.php'))) echo 'skew--blue'; ?>">
        <?php if ( is_front_page() ): ?>
        <div class="svg__header">
            <svg class="svg__header__left" xmlns="http://www.w3.org/2000/svg" width="158.899" height="313.856" viewBox="0 0 188.899 343.856"><path d="M-7.5,35a18.384,18.384,0,0,1-7.2-1.454,18.438,18.438,0,0,1-5.88-3.965,18.438,18.438,0,0,1-3.965-5.88A18.384,18.384,0,0,1-26,16.5a18.384,18.384,0,0,1,1.454-7.2,18.438,18.438,0,0,1,3.965-5.88A18.438,18.438,0,0,1-14.7-.546,18.384,18.384,0,0,1-7.5-2,18.384,18.384,0,0,1-.3-.546a18.438,18.438,0,0,1,5.88,3.965A18.438,18.438,0,0,1,9.546,9.3,18.384,18.384,0,0,1,11,16.5a18.384,18.384,0,0,1-1.454,7.2,18.438,18.438,0,0,1-3.965,5.88A18.438,18.438,0,0,1-.3,33.546,18.384,18.384,0,0,1-7.5,35Zm.147-27.016a8.672,8.672,0,0,0-8.663,8.662A8.673,8.673,0,0,0-7.353,25.31a8.672,8.672,0,0,0,8.662-8.663A8.672,8.672,0,0,0-7.353,7.984Z" transform="translate(26 125)" fill="#1d2a34"/><path d="M-7.316,44a4,4,0,0,1-4-4V21.316H-30a4,4,0,0,1-4-4V6.683a4,4,0,0,1,4-4h18.683V-16a4,4,0,0,1,4-4H3.317a4,4,0,0,1,4,4V2.684H26a4,4,0,0,1,4,4V17.317a4,4,0,0,1-4,4H7.316V40a4,4,0,0,1-4,4Z" transform="translate(136.573 288.701) rotate(-45)" fill="#1d2a34"/><circle cx="10.5" cy="10.5" r="10.5" transform="translate(137)" fill="#1d2a34"/></svg>
            <svg class="svg__header__right" xmlns="http://www.w3.org/2000/svg" width="107" height="315.669" viewBox="0 0 137 345.669"><circle cx="10.5" cy="10.5" r="10.5" transform="translate(116 188.148)" fill="#1d2a34"/><path d="M-16.177,19a4,4,0,0,1-4-4V5.178H-30a4,4,0,0,1-4-4V-2.177a4,4,0,0,1,4-4h9.823V-16a4,4,0,0,1,4-4h3.354a4,4,0,0,1,4,4v9.824H1a4,4,0,0,1,4,4V1.177a4,4,0,0,1-4,4H-8.823V15a4,4,0,0,1-4,4Z" transform="translate(72.029 17.678) rotate(-45)" fill="#1d2a34"/><path d="M-22.431,7a2,2,0,0,1-2-2v-7.57H-32a2,2,0,0,1-2-2V-8.43a2,2,0,0,1,2-2h7.57V-18a2,2,0,0,1,2-2h3.861a2,2,0,0,1,2,2v7.57H-9a2,2,0,0,1,2,2v3.861a2,2,0,0,1-2,2h-7.57V5a2,2,0,0,1-2,2Z" transform="translate(38.184 316.678) rotate(-45)" fill="#1d2a34"/></svg>
        </div>
		<div class="hero__home hero hero--centered">
			<h1 aria-level="1" role="heading" class="home__title">
                <?= get_bloginfo('name');?><span class="sr_only"> - Accueil</span>
			</h1>
			<div class="home__intro">
				<p><?= get_bloginfo('description');?></p>
			</div>
		</div>
         <?php elseif (is_single()):?>
         <div class="hero__single hero hero--centered">
             <h1 aria-level="1" role="heading" class="single__title">
                 <?php the_title(); ?><span class="sr_only"> - <?= get_bloginfo('name');?></span>
             </h1>
            <?php if (is_singular('articles')):?>
                 <div class="post__category category--blue">
                     <?php the_terms( $articles->ID, 'categorypost','<span class="sr_only">Catégorie : </span>'  ); ?>
                 </div>
                 <?php $tags = get_the_terms( $articles->ID, 'tagpost');
                 if ($tags):?>
                 <div class="tags post__tags">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3e3e3e" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                     <ul>
                         <?php foreach ($tags as $tag):?>
                            <li class="tags__list__item"><?= $tag->name;?></li>
                         <?php endforeach;?>
                     </ul>
                 </div>
                 <?php endif;?>
            <?php endif;?>
         </div>
         <?php elseif(is_404()):?>
             <div class="sr_only">
                 <h1 aria-level="1" role="heading" class="no_page__title">
                      Page 404<span class="sr_only"> - <?= get_bloginfo('name');?></span>
                 </h1>
             </div>
         <?php elseif(is_author()):
            $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
             <div class="sr_only">
                 <h1 aria-level="1" role="heading">
                     Profil de <?= $curauth->nickname; ?><span class="sr_only"> - <?= get_bloginfo('name');?></span>
                 </h1>
             </div>
         <?php elseif(is_tax()):?>
             <div class="sr_only">
                 <h1 aria-level="1" role="heading">
                     Tous les articles de la catégorie <?php single_cat_title(); ?><span class="sr_only"> - <?= get_bloginfo('name');?></span>
                 </h1>
             </div>
        <?php elseif(is_search()):?>
            <div class="sr_only">
                <h1 aria-level="1" role="heading">
                    Recherche - <?= get_bloginfo('name');?></span>
                </h1>
            </div>
        <?php elseif(is_page_template(array('template-parts/template-plan.php','template-parts/template-login.php', 'template-parts/template-register.php', 'template-parts/template-profile.php', 'template-parts/template-about.php', 'template-parts/template-legal.php'))):?>
             <div class="sr_only">
                 <h1 aria-level="1" role="heading" class="no_page__title">
                     <?php the_title(); ?><span class="sr_only"> - <?= get_bloginfo('name');?></span>
                 </h1>
             </div>
         <?php else: ?>
		<div class="hero__content">
			<div class="hero__section">
				<h1 aria-level="1" role="heading" class="hero__title">
                    <?php the_title(); ?><span class="sr_only"> - <?= get_bloginfo('name');?></span>
				</h1>
                <?php $intro = get_field('intro'); if($intro):?>
				<div class="hero__intro">
					<p>
                        <?php the_field('intro');?>
					</p>
				</div>
                <?php endif;?>

                <?php if ( is_page_template('template-parts/template-jobs.php')): ?>
				<a href="<?= wa_get_page_url('template-addJob.php') ;?>" class="button--blue">Poster une offre d'emploi</a>
                <?php elseif (is_page_template('template-parts/template-forum.php')):?>
                <a href="<?= wa_get_page_url('template-newForum.php') ;?>" class="button--blue">Nouveau sujet</a>
                <?php endif; ?>
			</div>
			<div class="hero__illu">
                <?php if ( is_page_template('template-parts/template-blog.php')): ?>
                    <svg class="illu__blog" xmlns="http://www.w3.org/2000/svg" width="416" height="295" viewBox="0 0 461.525 324">
                        <g transform="translate(-84.171 -300.753)">
                            <rect width="321.808" height="195.19" rx="1.818" transform="translate(142.363 388.522)" fill="#fff"/>
                            <rect width="321.808" height="195.19" rx="1.818" transform="translate(130.171 376.279)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                            <rect width="321.808" height="30.083" rx="1.396" transform="translate(130.171 376.279)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                            <circle cx="8.564" cy="8.564" r="8.564" transform="translate(140.382 383.1)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                            <circle cx="8.564" cy="8.564" r="8.564" transform="translate(170.027 383.1)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                            <circle cx="8.564" cy="8.564" r="8.564" transform="translate(199.672 383.1)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                            <path class="blog_rec" data-name="Tracé 56" d="M205.886,537H143.653a2.985,2.985,0,0,1-2.986-2.986V400.988A2.987,2.987,0,0,1,143.653,398h75.713a2.988,2.988,0,0,1,2.988,2.988v109" transform="translate(10.248 21.207)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/>
                            <rect width="36.892" height="36.892" rx="0.523" transform="translate(383.792 471.909)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="blog_line" x2="157.448" transform="translate(263.236 435.347)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="blog_line" x2="157.448" transform="translate(263.236 447.534)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="blog_line" x2="157.448" transform="translate(263.236 459.722)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="blog_line" x2="108.607" transform="translate(263.236 471.909)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="blog_line" x2="108.607" transform="translate(263.236 484.097)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="blog_line" x2="108.607" transform="translate(263.236 495.955)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/>
                            <line class="blog_line" x2="108.607" transform="translate(263.236 507.813)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/>
                            <rect width="191.045" height="100.793" rx="1.969" transform="translate(247.425 419.866)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                            <circle cx="12.778" cy="12.778" r="12.778" transform="translate(331.694 532.652)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                            <circle cx="12.778" cy="12.778" r="12.778" transform="translate(370.986 532.652)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                            <circle cx="12.778" cy="12.778" r="12.778" transform="translate(410.278 532.652)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                        </g>
                        <g transform="translate(0 292)" fill="none" stroke="#192a36" stroke-width="3">
                            <circle cx="8" cy="8" r="8" stroke="none"/>
                            <circle cx="8" cy="8" r="6.5" fill="none"/>
                        </g>
                        <path d="M0,0H16.12" transform="translate(426.62 284.968) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                        <path d="M0,0H16.12" transform="translate(438.019 284.967) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                        <g transform="translate(348)" fill="none" stroke="#192a36" stroke-width="3">
                            <circle cx="8" cy="8" r="8" stroke="none"/>
                            <circle cx="8" cy="8" r="6.5" fill="none"/>
                        </g>
                        <path d="M0,0H18.272" transform="translate(62 3.967) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                        <path d="M0,0H18.272" transform="translate(74.921 3.967) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                        <circle cx="5.5" cy="5.5" r="5.5" transform="translate(213 313)" fill="#1d2a34"/>
                        <g transform="translate(429.705 127.975) rotate(-45)" fill="none" stroke-linecap="round">
                            <path d="M9.4,4.558a3,3,0,0,1,5.209,0l6.83,11.953A3,3,0,0,1,18.83,21H5.17a3,3,0,0,1-2.6-4.488Z" stroke="none"/>
                            <path d="M 12.00000190734863 6.046695709228516 L 5.16954231262207 17.99999618530273 L 18.8304615020752 18.0000057220459 L 12.00000190734863 6.046695709228516 M 12.00000190734863 3.046695709228516 C 13.01444721221924 3.046695709228516 14.02889156341553 3.550556182861328 14.60473155975342 4.55827522277832 L 21.4351921081543 16.5115852355957 C 22.57803153991699 18.51155471801758 21.13393211364746 20.99999618530273 18.8304615020752 20.99999618530273 L 5.16954231262207 20.99999618530273 C 2.866071701049805 20.99999618530273 1.421972274780273 18.51155471801758 2.564811706542969 16.5115852355957 L 9.395272254943848 4.55827522277832 C 9.971112251281738 3.550556182861328 10.98555660247803 3.046695709228516 12.00000190734863 3.046695709228516 Z" stroke="none" fill="#192a36"/>
                        </g>
                    </svg>
                <?php elseif (is_page_template('template-parts/template-tutos.php')):?>
                    <svg class="illu__tuto" xmlns="http://www.w3.org/2000/svg" width="416" height="295" viewBox="0 0 461.525 335.119"><g transform="translate(-448.5 -44.345)"><path class="appear" data-name="Tracé 34" d="M762.724,121.046a44.507,44.507,0,1,0-76.358,31.083c9.8,10.04,15.5,23.407,14.944,37.427q-.054,1.331-.135,2.736l34.586-.266c-.019-.3-.076-.847-.093-1.145-.8-14.621,4.877-28.662,14.927-39.31A44.328,44.328,0,0,0,762.724,121.046Z" transform="translate(99.24 16.765)" fill="#fff"/><path class="appear" data-name="Tracé 35" d="M725.763,158.322c.65-.785,2.413-1.865,2.413-3.055,0-2.38-1.611-4.327-3.58-4.327h-30.75c-1.969,0-3.58,1.947-3.58,4.327,0,1.19,1.763,2.27,2.411,3.055-.648.785-2.411,1.866-2.411,3.055s1.763,2.27,2.411,3.055c-.648.785-2.411,1.865-2.411,3.055s1.763,2.27,2.411,3.055c-.648.783-2.411,1.865-2.411,3.055,0,1.286,1.841,2.433,2.585,3.227-.735.548-2.585,1.485-2.585,2.543a2.911,2.911,0,0,0,2.724,3.055h32.463a2.912,2.912,0,0,0,2.724-3.055c0-1.058-1.85-2-2.585-2.543.743-.794,2.585-1.941,2.585-3.227,0-1.19-1.763-2.272-2.413-3.055.65-.785,2.413-1.866,2.413-3.055s-1.763-2.27-2.413-3.055c.65-.785,2.413-1.866,2.413-3.055S726.413,159.107,725.763,158.322Z" transform="translate(108.406 57.963)" fill="#fff"/><rect width="252.999" height="153.455" rx="1.818" transform="translate(504.085 182.367)" fill="#fff"/><path d="M1.818,0H251.181A1.818,1.818,0,0,1,253,1.818V151.637a1.818,1.818,0,0,1-1.818,1.818H1.818A1.818,1.818,0,0,1,0,151.637V1.818A1.818,1.818,0,0,1,1.818,0Z" transform="translate(494.5 172.742)" fill="none" stroke="#192a36" stroke-width="3"/><rect width="252.999" height="23.651" rx="1.396" transform="translate(494.5 172.742)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/><circle cx="6.733" cy="6.733" r="6.733" transform="translate(502.528 178.105)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/><circle cx="6.733" cy="6.733" r="6.733" transform="translate(525.834 178.105)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/><circle cx="6.733" cy="6.733" r="6.733" transform="translate(549.14 178.105)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/><path class="tuto_text1" d="M558.787,171.439l-7.373,17.286a4.2,4.2,0,0,0,0,3.109l7.346,17.22" transform="translate(31.351 69.314)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/><path class="tuto_text2" d="M608.116,209.054l7.373-17.286a4.186,4.186,0,0,0,0-3.109l-7.345-17.22" transform="translate(62.915 69.314)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/><circle class="appear" cx="2.86" cy="2.86" r="2.86" transform="translate(607.665 256.701)" fill="#192a36"/><circle class="appear" cx="2.86" cy="2.86" r="2.86" transform="translate(628.641 256.701)" fill="#192a36"/><circle class="appear" cx="2.86" cy="2.86" r="2.86" transform="translate(649.617 256.701)" fill="#192a36"/><path d="M762.406,115.993a45.851,45.851,0,1,0-78.664,32.02c10.1,10.343,15.966,24.114,15.395,38.558q-.054,1.37-.138,2.818l35.631-.273c-.019-.314-.078-.872-.095-1.179-.822-15.062,5.025-29.528,15.378-40.5A45.668,45.668,0,0,0,762.406,115.993Z" transform="translate(97.575 13.221)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/><path d="M702.608,178.085a92.326,92.326,0,0,0-4.476-46.737c-8.934-23.575-19.605-19.108-8.686-36.232,7.477-11.726,18.613,13.9,17.124,17.868s-6.2-.993-6.453-6.453,8.623-21.84,16.131-14.349c9.675,9.652,5.707,20.057,0,37.18s-1.976,48.552-1.976,48.552" transform="translate(105.39 24.358)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/><path d="M725.8,154.852c.708-.858,2.638-2.04,2.638-3.339,0-2.6-1.762-4.731-3.914-4.731H690.912c-2.152,0-3.914,2.129-3.914,4.731,0,1.3,1.93,2.481,2.638,3.339-.708.856-2.638,2.039-2.638,3.339s1.93,2.481,2.638,3.339c-.708.858-2.638,2.039-2.638,3.339s1.93,2.481,2.638,3.339c-.708.858-2.638,2.039-2.638,3.339,0,1.408,2.015,2.662,2.828,3.53-.8.6-2.828,1.622-2.828,2.78a3.184,3.184,0,0,0,2.979,3.339h35.488a3.184,3.184,0,0,0,2.979-3.339c0-1.158-2.023-2.181-2.828-2.78.814-.869,2.828-2.122,2.828-3.53,0-1.3-1.93-2.481-2.638-3.339.708-.858,2.638-2.039,2.638-3.339s-1.93-2.481-2.638-3.339c.708-.858,2.638-2.04,2.638-3.339S726.513,155.708,725.8,154.852Z" transform="translate(106.597 55.66)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/><line class="appear" x2="12.657" y2="5.212" transform="translate(716.911 106.955)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/><line class="appear" x2="5.138" y2="14.141" transform="translate(777.576 46.267)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/><line class="appear" y1="12.075" x2="14.114" transform="translate(871.024 52.801)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/><line class="appear" y1="4.095" x2="13.401" transform="translate(894.104 118.853)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/></g><g transform="translate(0 308.119)" fill="none" stroke="#192a36" stroke-width="3"><circle cx="8" cy="8" r="8" stroke="none"/><circle cx="8" cy="8" r="6.5" fill="none"/></g><path d="M0,0H16.12" transform="translate(426.62 267.087) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H16.12" transform="translate(438.019 267.086) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><g transform="translate(204 2.119)" fill="none" stroke="#192a36" stroke-width="3"><circle cx="8" cy="8" r="8" stroke="none"/><circle cx="8" cy="8" r="6.5" fill="none"/></g><path d="M0,0H18.272" transform="translate(23.935 65.086) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H18.272" transform="translate(36.855 65.086) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><circle cx="5.5" cy="5.5" r="5.5" transform="translate(305 324.119)" fill="#1d2a34"/><g transform="translate(429.705 173.094) rotate(-45)" fill="none" stroke-linecap="round"><path d="M9.4,4.558a3,3,0,0,1,5.209,0l6.83,11.953A3,3,0,0,1,18.83,21H5.17a3,3,0,0,1-2.6-4.488Z" stroke="none"/><path d="M 12.00000190734863 6.046695709228516 L 5.16954231262207 17.99999618530273 L 18.8304615020752 18.0000057220459 L 12.00000190734863 6.046695709228516 M 12.00000190734863 3.046695709228516 C 13.01444721221924 3.046695709228516 14.02889156341553 3.550556182861328 14.60473155975342 4.55827522277832 L 21.4351921081543 16.5115852355957 C 22.57803153991699 18.51155471801758 21.13393211364746 20.99999618530273 18.8304615020752 20.99999618530273 L 5.16954231262207 20.99999618530273 C 2.866071701049805 20.99999618530273 1.421972274780273 18.51155471801758 2.564811706542969 16.5115852355957 L 9.395272254943848 4.55827522277832 C 9.971112251281738 3.550556182861328 10.98555660247803 3.046695709228516 12.00000190734863 3.046695709228516 Z" stroke="none" fill="#192a36"/></g></svg>
                <?php elseif (is_page_template (array('template-parts/template-forum.php', 'template-parts/template-newForum.php'))):?>
                    <svg class="illu_forum" xmlns="http://www.w3.org/2000/svg" width="416" height="295" viewBox="0 0 468.712 353.154"><g transform="translate(-38.158 -18.67)"><g class="bubble_1"><path data-name="Tracé 41" d="M108.939,64.274H312.9a2.96,2.96,0,0,1,2.866,3.045V169.2a2.959,2.959,0,0,1-2.866,3.045h-182l-24.83,26.922V67.319A2.96,2.96,0,0,1,108.939,64.274Z" transform="translate(4.06 3.148)" fill="#fff"/><path data-name="Tracé 42" d="M329.617,152.683v12.509a3.236,3.236,0,0,1-3.134,3.331H133.733L100.345,204.2V63.162a3.237,3.237,0,0,1,3.136-3.329h223a3.236,3.236,0,0,1,3.134,3.329v46.229" transform="translate(0 0)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line data-name="Ligne 20" x2="185.035" transform="translate(120.324 91.184)" fill="#fff" stroke="#192a36" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line data-name="Ligne 21" x2="123.198" transform="translate(120.324 116.594)" fill="#fff" stroke="#192a36" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line data-name="Ligne 22" x2="185.035" transform="translate(120.324 142.004)" fill="#fff" stroke="#192a36" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></g><g class="bubble_2"><path Data-name="Tracé 43" d="M382.854,147.652H176.137a2.978,2.978,0,0,0-2.905,3.047V252.581a2.978,2.978,0,0,0,2.905,3.045H360.594l25.165,26.922V150.7A2.978,2.978,0,0,0,382.854,147.652Z" transform="translate(51.668 62.253)" fill="#fff"/><path Data-name="Tracé 44" d="M183.5,251.9H365.954l33.838,35.675V146.542a3.257,3.257,0,0,0-3.177-3.331H170.6a3.257,3.257,0,0,0-3.177,3.331V218.9" transform="translate(47.554 59.105)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line Data-name="Ligne 23" x1="187.53" transform="translate(239.568 233.668)" fill="#fff" stroke="#192a36" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line Data-name="Ligne 24" x1="124.859" transform="translate(302.238 259.078)" fill="#fff" stroke="#192a36" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line Data-name="Ligne 25" x1="187.53" transform="translate(239.568 284.488)" fill="#fff" stroke="#192a36" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></g></g><g transform="translate(46.187 291.154)" fill="none" stroke="#192a36" stroke-width="3"><circle cx="8" cy="8" r="8" stroke="none"/><circle cx="8" cy="8" r="6.5" fill="none"/></g><path d="M0,0H16.12" transform="translate(257.807 2.122) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H16.12" transform="translate(269.206 2.121) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><g transform="translate(421.187 154.154)" fill="none" stroke="#192a36" stroke-width="3"><circle cx="8" cy="8" r="8" stroke="none"/><circle cx="8" cy="8" r="6.5" fill="none"/></g><path d="M0,0H18.272" transform="translate(2.122 90.121) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H18.272" transform="translate(15.042 90.121) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><circle cx="5.5" cy="5.5" r="5.5" transform="translate(238.187 342.154)" fill="#1d2a34"/><g transform="translate(436.892 300.129) rotate(-45)" fill="none" stroke-linecap="round"><path d="M9.4,4.558a3,3,0,0,1,5.209,0l6.83,11.953A3,3,0,0,1,18.83,21H5.17a3,3,0,0,1-2.6-4.488Z" stroke="none"/><path d="M 12.00000190734863 6.046695709228516 L 5.16954231262207 17.99999618530273 L 18.8304615020752 18.0000057220459 L 12.00000190734863 6.046695709228516 M 12.00000190734863 3.046695709228516 C 13.01444721221924 3.046695709228516 14.02889156341553 3.550556182861328 14.60473155975342 4.55827522277832 L 21.4351921081543 16.5115852355957 C 22.57803153991699 18.51155471801758 21.13393211364746 20.99999618530273 18.8304615020752 20.99999618530273 L 5.16954231262207 20.99999618530273 C 2.866071701049805 20.99999618530273 1.421972274780273 18.51155471801758 2.564811706542969 16.5115852355957 L 9.395272254943848 4.55827522277832 C 9.971112251281738 3.550556182861328 10.98555660247803 3.046695709228516 12.00000190734863 3.046695709228516 Z" stroke="none" fill="#192a36"/></g></svg>
                <?php elseif (is_page_template(array('template-parts/template-jobs.php', 'template-parts/template-addJob.php'))):?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="416" height="295" viewBox="0 0 416.712 295.154">
                        <g id="Groupe_15" data-name="Groupe 15" transform="translate(-473.632 -344.596)">
                            <rect width="249.067" height="151.07" rx="1.818" transform="translate(549.256 422.161)" fill="#fff"/>
                            <rect width="249.067" height="151.07" rx="1.818" transform="translate(539.819 412.685)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                            <path d="M586.735,412.686V386.523a2.771,2.771,0,0,1,2.772-2.773h100a2.773,2.773,0,0,1,2.773,2.773v26.162" transform="translate(24.847 0)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                            <line x2="51.516" transform="translate(737.371 464.947)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                            <line x2="100.571" transform="translate(614.281 464.947)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                            <line x2="50.88" transform="translate(539.819 464.947)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                            <path d="M573.474,433.25v31.862a2.006,2.006,0,0,0,.785,1.545l10.166,8.164a1.9,1.9,0,0,0,2.305,0l9.543-7.787a2.007,2.007,0,0,0,.785-1.546V433.25" transform="translate(17.824 26.216)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                            <path d="M653.762,433.25v31.862a2,2,0,0,0,.783,1.545l10.166,8.164a1.9,1.9,0,0,0,2.307,0l9.542-7.787a2,2,0,0,0,.785-1.546V433.25" transform="translate(60.345 26.216)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                            <circle cx="3.378" cy="3.378" r="3.378" transform="translate(599.712 484.327)" stroke-width="3" stroke="#192a36" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            <circle cx="3.378" cy="3.378" r="3.378" transform="translate(722.389 484.327)" stroke-width="3" stroke="#192a36" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                        </g>
                        <g transform="translate(20.187 255.154)" fill="none" stroke="#192a36" stroke-width="3">
                            <circle cx="8" cy="8" r="8" stroke="none"/>
                            <circle cx="8" cy="8" r="6.5" fill="none"/>
                        </g>
                        <path d="M0,0H16.12" transform="translate(327.807 2.122) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                        <path d="M0,0H16.12" transform="translate(339.206 2.121) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                        <g transform="translate(390.187 121.154)" fill="none" stroke="#192a36" stroke-width="3">
                            <circle cx="8" cy="8" r="8" stroke="none"/>
                            <circle cx="8" cy="8" r="6.5" fill="none"/>
                        </g>
                        <path d="M0,0H18.272" transform="translate(2.122 39.121) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                        <path d="M0,0H18.272" transform="translate(15.043 39.121) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                        <circle cx="5.5" cy="5.5" r="5.5" transform="translate(208.187 284.154)" fill="#1d2a34"/>
                        <g transform="translate(384.892 240.129) rotate(-45)" fill="none" stroke-linecap="round">
                            <path d="M9.4,4.558a3,3,0,0,1,5.209,0l6.83,11.953A3,3,0,0,1,18.83,21H5.17a3,3,0,0,1-2.6-4.488Z" stroke="none"/>
                            <path d="M 12.00000190734863 6.046695709228516 L 5.16954231262207 17.99999618530273 L 18.8304615020752 18.0000057220459 L 12.00000190734863 6.046695709228516 M 12.00000190734863 3.046695709228516 C 13.01444721221924 3.046695709228516 14.02889156341553 3.550556182861328 14.60473155975342 4.55827522277832 L 21.4351921081543 16.5115852355957 C 22.57803153991699 18.51155471801758 21.13393211364746 20.99999618530273 18.8304615020752 20.99999618530273 L 5.16954231262207 20.99999618530273 C 2.866071701049805 20.99999618530273 1.421972274780273 18.51155471801758 2.564811706542969 16.5115852355957 L 9.395272254943848 4.55827522277832 C 9.971112251281738 3.550556182861328 10.98555660247803 3.046695709228516 12.00000190734863 3.046695709228516 Z" stroke="none" fill="#192a36"/>
                        </g>
                    </svg>
                <?php elseif (is_page_template('template-parts/template-contact.php')):?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="507.273" height="324" viewBox="0 0 507.273 324">
                            <g transform="translate(45.748 292)" fill="none" stroke="#192a36" stroke-width="3">
                                <circle cx="8" cy="8" r="8" stroke="none"/>
                                <circle cx="8" cy="8" r="6.5" fill="none"/>
                            </g>
                            <path d="M0,0H16.12" transform="translate(472.368 284.967) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                            <path d="M0,0H16.12" transform="translate(483.767 284.967) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                            <g transform="translate(393.748)" fill="none" stroke="#192a36" stroke-width="3">
                                <circle cx="8" cy="8" r="8" stroke="none"/>
                                <circle cx="8" cy="8" r="6.5" fill="none"/>
                            </g>
                            <path d="M0,0H18.272" transform="translate(107.748 3.967) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                            <path d="M0,0H18.272" transform="translate(120.669 3.967) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                            <circle cx="5.5" cy="5.5" r="5.5" transform="translate(258.748 313)" fill="#1d2a34"/>
                            <g transform="translate(475.453 127.975) rotate(-45)" fill="none" stroke-linecap="round">
                                <path d="M9.4,4.558a3,3,0,0,1,5.209,0l6.83,11.953A3,3,0,0,1,18.83,21H5.17a3,3,0,0,1-2.6-4.488Z" stroke="none"/>
                                <path d="M 12.00000190734863 6.046695709228516 L 5.16954231262207 17.99999618530273 L 18.8304615020752 18.0000057220459 L 12.00000190734863 6.046695709228516 M 12.00000190734863 3.046695709228516 C 13.01444721221924 3.046695709228516 14.02889156341553 3.550556182861328 14.60473155975342 4.55827522277832 L 21.4351921081543 16.5115852355957 C 22.57803153991699 18.51155471801758 21.13393211364746 20.99999618530273 18.8304615020752 20.99999618530273 L 5.16954231262207 20.99999618530273 C 2.866071701049805 20.99999618530273 1.421972274780273 18.51155471801758 2.564811706542969 16.5115852355957 L 9.395272254943848 4.55827522277832 C 9.971112251281738 3.550556182861328 10.98555660247803 3.046695709228516 12.00000190734863 3.046695709228516 Z" stroke="none" fill="#192a36"/>
                            </g>
                            <g class="envel" transform="translate(-29.428 37.029) rotate(-9)">
                                <rect width="275.836" height="167.306" rx="1.818" transform="translate(116.664 119.086)" fill="#fff"/>
                                <rect width="275.836" height="167.306" rx="1.818" transform="translate(106.5 108.592)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                                <path d="M106.5,108.591,240.419,209.6a6.565,6.565,0,0,0,7.964-.042L381.918,108.591" transform="translate(0)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                                <line y1="88.831" x2="104.135" transform="translate(106.5 187.067)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                                <line x2="106.012" y2="88.831" transform="translate(276.324 187.067)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="3"/>
                            </g>
                        <path id="Tracé_119" data-name="Tracé 119" d="M12338.8-1098.431s-35.787,14.885-65.8,16.745" transform="matrix(0.995, 0.105, -0.105, 0.995, -12310.781, 2.712)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                            <path id="Tracé_120" data-name="Tracé 120" d="M12338.8-1098.431s-35.787,14.885-65.8,16.745" transform="matrix(0.995, 0.105, -0.105, 0.995, -12317.087, 26.712)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                            <path id="Tracé_121" data-name="Tracé 121" d="M12338.8-1098.431s-35.787,14.885-65.8,16.745" transform="matrix(0.995, 0.105, -0.105, 0.995, -12301.087, 44.712)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                      </svg>

                        <?php elseif (is_page_template('template-parts/template-ressources.php')):?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="416" height="295" viewBox="0 0 461.525 333">
                        <g transform="translate(0 306)" fill="none" stroke="#192a36" stroke-width="3">
                            <circle cx="8" cy="8" r="8" stroke="none"/>
                            <circle cx="8" cy="8" r="6.5" fill="none"/>
                        </g>
                        <path d="M0,0H16.12" transform="translate(426.62 264.968) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                        <path d="M0,0H16.12" transform="translate(438.019 264.967) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                        <g transform="translate(204)" fill="none" stroke="#192a36" stroke-width="3">
                            <circle cx="8" cy="8" r="8" stroke="none"/>
                            <circle cx="8" cy="8" r="6.5" fill="none"/>
                        </g>
                        <path d="M0,0H18.272" transform="translate(23.935 62.967) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                        <path d="M0,0H18.272" transform="translate(36.855 62.967) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                        <circle cx="5.5" cy="5.5" r="5.5" transform="translate(305 322)" fill="#1d2a34"/>
                        <g transform="translate(429.705 170.975) rotate(-45)" fill="none" stroke-linecap="round">
                            <path d="M9.4,4.558a3,3,0,0,1,5.209,0l6.83,11.953A3,3,0,0,1,18.83,21H5.17a3,3,0,0,1-2.6-4.488Z" stroke="none"/>
                            <path d="M 12.00000190734863 6.046695709228516 L 5.16954231262207 17.99999618530273 L 18.8304615020752 18.0000057220459 L 12.00000190734863 6.046695709228516 M 12.00000190734863 3.046695709228516 C 13.01444721221924 3.046695709228516 14.02889156341553 3.550556182861328 14.60473155975342 4.55827522277832 L 21.4351921081543 16.5115852355957 C 22.57803153991699 18.51155471801758 21.13393211364746 20.99999618530273 18.8304615020752 20.99999618530273 L 5.16954231262207 20.99999618530273 C 2.866071701049805 20.99999618530273 1.421972274780273 18.51155471801758 2.564811706542969 16.5115852355957 L 9.395272254943848 4.55827522277832 C 9.971112251281738 3.550556182861328 10.98555660247803 3.046695709228516 12.00000190734863 3.046695709228516 Z" stroke="none" fill="#192a36"/>
                        </g>
                        <g  transform="translate(-21.5 -260.765)">
                            <path d="M227.551,549.12q-62.077-22.7-124.153-.326a.683.683,0,0,1-.9-.674V378.493a2.183,2.183,0,0,1,1.4-2.069q61.823-22.1,123.649.507Z" transform="translate(2.127 5.145)" fill="#fff"/>
                            <path d="M331.664,548.643Q263.332,526.5,195,549.12V376.932q68.462-22.665,136.924-.393a1.7,1.7,0,0,1,1.2,1.6V547.648A1.094,1.094,0,0,1,331.664,548.643Z" transform="translate(34.678 5.145)" fill="#fff"/>
                            <path d="M229.678,544.12q-65.615-22.7-131.229-.326a.715.715,0,0,1-.949-.674V373.493a2.189,2.189,0,0,1,1.482-2.069q65.347-22.1,130.7.507Z" transform="translate(0 0)" fill="none" stroke="#161615" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                            <path d="M320.783,543.643Q255.392,521.5,190,544.12V371.932q65.516-22.665,131.032-.393a1.7,1.7,0,0,1,1.146,1.6V542.648A1.053,1.053,0,0,1,320.783,543.643Z" transform="translate(39.678)" fill="none" stroke="#161615" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                        </g>
                    </svg>
                <?php endif; ?>
			</div>
		</div>
		<?php endif; ?>
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
                    <!-- REVOIR ALIGNEMENT ET DESIGN SUR FIREFOX -->
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
                                    <li class="member__login"><a href="<?= wp_logout_url( 'http://localhost' . $_SERVER['REQUEST_URI'] ); ?>">Déconnecter</a></li>
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

