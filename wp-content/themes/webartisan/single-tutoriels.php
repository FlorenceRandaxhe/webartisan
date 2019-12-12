<?php

get_header();

?>
	<main class="single__tuto main--top-mid main--bottom">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="section__single__tuto">
			<div class="tuto__main">
                <div class="post__header">
                    <p>Publié le <time datetime="c" class="post__date"><?= get_the_date() ?></time> par <span class="post__author"><?php the_author_posts_link(); ?></span></p>
                </div>
                <div class="tuto__meta">
                    <div class="post__category category--blue">
                        <?php the_terms( $tuto->ID, 'categorytype', '<span class="sr_only">Catégorie : </span>'  ); ?>
                    </div>
                    <div class="post__category category--blue">
                        <?php the_terms( $tuto->ID, 'categorylang', '<span class="sr_only">Catégorie : </span>' ); ?>
                    </div>
                    <div class="difficulty__container">
                        <?php
                        $difficulty = get_field('difficulty'); ?>
                        <div class="difficulty__icon difficulty__icon<?php
                        if ($difficulty['value'] == 'facile') echo '__easy';
                        if ($difficulty['value'] == 'moyenne') echo '__intermediate';
                        if ($difficulty['value'] == 'difficile') echo '__hard';?>">
                            <div class="difficulty"></div>
                            <div class="difficulty"></div>
                            <div class="difficulty"></div>
                        </div>
                        <span><?= $difficulty['label'] ?></span>
                    </div>
                    <?php if ( !wp_count_comments(get_the_ID())->approved == 0):?>
                        <div class="comments__count">
                            <a class="icon__align" href="#anchor__comment">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#8b8b8b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                <span><?= wp_count_comments(get_the_ID())->approved; ?></span>
                            </a>
                        </div>
                    <?php endif;?>
                </div>
                <div class="tuto__excerpt">
                    <?php the_excerpt();?>
                </div>
                <div class="single__tuto__content">
                    <?php the_content(); ?>
                </div>
			</div>

            <?php $related_posts = get_field('related_post'); if( $related_posts ): ?>
                <section class="post__more">
                    <h2 aria-level="2" role="heading" class="">Pour aller plus loin</h2>
                    <?php foreach( $related_posts as $related_post): ?>
                        <article class="post__more__container">
                            <div>
                                <div>
                                    <h3 aria-level="3" role="heading"><?= get_the_title($related_post->ID); ?></h3>
                                    <p><?= get_the_author_posts_link($related_post->ID); ?></p>
                                    <p><?= get_the_excerpt($related_post->ID); ?></p>
                                </div>
                            </div>
                            <div>
                                <a href="<?= get_permalink($related_post->ID); ?>" class="button__more--rounded">
                                    <span class="sr_only">Voir le tuto : <?= get_the_title($related_post->ID); ?></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"><g  transform="translate(56) rotate(90)"  stroke="#000" stroke-width="2"><circle class="button__svg" cx="28" cy="28" r="27" fill="none"/></g><g transform="translate(20 16)"><path class="arrow--white" d="M-12,0H7.73" transform="translate(9.27 12)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/><path class="arrow--white" d="M12,6l7,6-7,6" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>
                                </a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </section>
            <?php endif; ?>

            <?php if( have_rows('other_post') ):?>
                <section class="post__other">
                    <h2 aria-level="2" role="heading" class="">Ressources</h2>
                    <div class="post__other__container">
                        <ul>
                            <?php while ( have_rows('other_post') ) : the_row();?>
                                <li class="more__list__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                    <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a>
                                </li>
                            <?php endwhile;?>
                        </ul>
                    </div>
                    <a href="<?= wa_get_page_url('template-ressources.php') ;?>" class="button__more--arrow">Voir plus de ressources</a>
                </section>
            <?php endif; ?>

            <section id="anchor__comment" class="post__comment post__comment--width">
                <h2 aria-level="2" role="heading">Commentaires</h2>
                <div class="post__comment__container">
                    <div class="comments__wp">
                        <?php if (wp_count_comments(get_the_ID())->approved == 0):?>
                            <div class="comments__empty">
                                <p>Il n'y a pas encore de commentaire pour cet article&nbsp;! Soyez le premier à en laisser un&nbsp;!</p>
                            </div>
                        <?php endif;?>
                        <?php comments_template('/regular-comments.php'); ?>
                    </div>
                    <?php if( ! is_user_logged_in()):?>
                        <div class="section__info section__info--alert">
                            <p>Vous devez êter connecté pour répondre</p>
                        </div>
                        <div>
                            <div class="login__form">
                                <?php wp_login_form(array( 'redirect' => 'http://localhost' . $_SERVER['REQUEST_URI'] ) ); ?>
                            </div>

                            <div class="other__link">
                                <a href="<?= wa_get_page_url('template-register.php') ;?>">Me créer un compte</a>
                                <a href="<?= wp_lostpassword_url(); ?>">Mot de passe oublié !</a>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </section>
        </section>
    <?php endwhile; endif; ?>
	</main>
    <footer class="skew--green">
<?php get_footer();?>
