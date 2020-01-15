<?php
/**
 * author page
 */
$currentPage = get_query_var('paged');
$curauth = ( isset( $_GET['author_name'] ) ) ? get_user_by( 'slug', $author_name ) : get_userdata( intval( $author ) );
$current_user_id = get_current_user_id();
$user_thread = new WP_Query( ['author' => $curauth->ID, 'post_type'=>'forum', 'order'=>'DESC', 'order_by'=>'date', 'posts_per_page' => 4, 'paged' => $currentPage] );
$author_post = new WP_Query( ['author' => $curauth->ID, 'post_type'=>'articles', 'order'=>'DESC', 'order_by'=>'date', 'posts_per_page' => 4, 'paged' => $currentPage] );
$author_tuto = new WP_Query( ['author' => $curauth->ID, 'post_type'=>'tutoriels', 'order'=>'DESC', 'order_by'=>'date','posts_per_page' => 4, 'paged' => $page] );
get_header(); ?>
    <main class="author main--top main--bottom">

            <?php if ($curauth->roles[0] == 'subscriber'):?>
            <section class="section__author">
                <div class="subscriber__info">
                    <img class="subscriber__info__img" src="<?= esc_url( get_avatar_url( $curauth->ID ) ); ?>" alt="Photo de profil de <?= $curauth->nickname; ?>" width="96" height="96">
                    <h2 aria-level="2" role="heading" class="featured__section__title">
                        <?= $curauth->nickname; ?>
                    </h2>
                    <p>Inscrit(e) depuis le <?= date_i18n("d/m/Y", strtotime(get_the_author_meta('user_registered', $curauth->ID)));?></p>
                </div>

                 <?php if(is_user_logged_in() && $curauth->ID == $current_user_id ) :?>
                    <div class="profile__links">
                        <a href="<?= wa_get_page_url('template-profile.php');?>">Modifier mon profil</a>
                        <a href="<?= wp_logout_url( home_url() ); ?>">Se déconnecter</a>
                    </div>
                <?php endif;?>

                 <section class="section__thread">
                    <h3 aria-level="3" role="heading" class="featured__section__title">
                        Tous les sujet posté par <?= $curauth->nickname; ?> sur le forum
                    </h3>
                    <?php if ($user_thread->have_posts()) :?>
                    <div class="thread__container" id="result">
                        <?php while ($user_thread->have_posts()) : $user_thread->the_post(); ?>
                            <?php $comments = get_comments( array('post_id' => get_the_ID(), 'orderby' => 'comment_date_gmt', 'status' => 'approve', 'number' => 1));
                            $lastCommentId = $comments[0]->comment_ID; ?>
                            <article class="thread">
                                <div class="thread__content">
                                    <h4 aria-level="4" role="heading" class="thread__title icon__align">
                                        <?php if (wp_count_comments(get_the_ID())->approved > 10):?>
                                            <span class="sr_only">Sujet brulant</span>
                                            <svg class="trending__up" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g><g><circle class="cls-1" cx="12" cy="12" r="12"/><polyline class="cls-2" points="20.45 7 13.19 14.72 9.13 10.9 3.41 17"/><polyline class="cls-2" points="15.72 7.15 20.45 7 20.59 11.73"/></g></g></svg>
                                        <?php endif ;?>
                                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                        <?php if( get_field('thread_resolved') == true ):?>
                                            <span class="thread_resolved">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="26.562" height="10.906" viewBox="0 0 26.562 17.906"><path id="Tracé_75" data-name="Tracé 75" d="M4901.756,3144.133l9,8.949,14.745-14.667" transform="translate(-4900.346 -3136.997)" fill="none" stroke="#61A09B" stroke-width="5"/></svg>
                                                <span class="sr_only">Statut du sujet</span><span>Résolu</span>
                                             </span>
                                        <?php endif ;?>
                                    </h4>
                                    <div class="post__author">
                                        <?php the_author_posts_link(); ?>
                                    </div>
                                    <div class="thread__excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="thread__meta">
                                <span class="category--white icon__align">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="13.414" viewBox="0 0 21 13.414"><g transform="translate(0.5 0.707)"><path d="M16,18l6-6L16,6" transform="translate(-2 -6)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><path d="M8,6,2,12l6,6" transform="translate(-2 -6)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g>
                                    </svg>
                                    <span><?php the_field('taxo');?></span>
                                </span>
                                        <?php if ( !wp_count_comments(get_the_ID())->approved == 0):?>
                                            <time datetime="c" class="thread__date icon__align">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"><g transform="translate(0.5 0.5)"><rect width="12" height="12" rx="2" transform="translate(0 1)" stroke-width="1" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" fill="none"/><line y2="3" transform="translate(8)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><line y2="3" transform="translate(3)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><line x2="12" transform="translate(0 5)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></svg>
                                                <span>Dernière réponse&nbsp;: <time datetime="c"><?= get_comment_date($d = 'j F Y', $lastCommentId) ?></time></span>
                                            </time>
                                        <?php else:?>
                                            <time datetime="c" class="thread__date icon__align">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"><g transform="translate(0.5 0.5)"><rect width="12" height="12" rx="2" transform="translate(0 1)" stroke-width="1" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" fill="none"/><line y2="3" transform="translate(8)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><line y2="3" transform="translate(3)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><line x2="12" transform="translate(0 5)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></svg>
                                                <span>Sujet posté le&nbsp;: <time datetime="c"><?= get_the_date();?></time></span>
                                            </time>
                                        <?php endif;?>
                                        <div class="comments__count thread__comment">
                                            <a class="icon__align" href="<?php the_permalink(); ?>#anchor__comment">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#4f4f4f" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                                <span><?= wp_count_comments(get_the_ID())->approved; ?></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="thread__link">
                                    <a href="<?php the_permalink();?>" class="button__more--rounded">
                                        <span class="sr_only">Voir le sujet : <?php the_title();?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"><g  transform="translate(56) rotate(90)"  stroke="#000" stroke-width="2"><circle class="button__svg" cx="28" cy="28" r="27" fill="none"/></g><g transform="translate(20 16)"><path class="arrow--white" d="M-12,0H7.73" transform="translate(9.27 12)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/><path class="arrow--white" d="M12,6l7,6-7,6" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>
                                    </a>
                                </div>
                            </article>
                        <?php endwhile;?>
                    </div>
                    <div class="pagination_links">
                        <?= paginate_links(array(
                            'total' => $user_thread->max_num_pages,
                            'end_size' => 1,
                            'mid_size' => 3,
                            'prev_text' => 'Précédent',
                            'next_text' => 'Suivant',
                        )); ?>
                    </div>
                <?php endif; ?>
            </section>

           
            </section>
            <?php else:?>
            <div class="section__author">
                <section class="author__posts">
                    <h2 aria-level="2" role="heading" class="featured__section__title">
                        Les derniers articles de <?= $curauth->nickname; ?>
                    </h2>
                    <div class="author__posts__container">
                        <?php if ($author_post->have_posts()) : while ($author_post->have_posts()) : $author_post->the_post(); ?>
                            <article class="grid__child">
                                <?php if ( has_post_thumbnail() ): ?>
                                    <figure class="post__img" >
                                        <a href="<?php the_permalink();?>">
                                            <img src="<?php the_post_thumbnail_url('post-thumb'); ?>" alt="<?php the_title(); ?>" width="620" height="300">
                                        </a>
                                    </figure>
                                <?php else: endif; ?>
                                <div class="post__container">
                                    <h3 aria-level="3" role="heading" class="post__title"><?php the_title(); ?></h3>
                                    <div class="post__category category--yellow">
                                        <?php the_terms( $articles->ID, 'categorypost' ); ?>
                                    </div>
                                    <div>
                                        <p><time datetime="c" class="post__date"><?= get_the_date() ?></time></p>
                                    </div>
                                    <div class="post__excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="button__more--arrow">
                                        Lire plus<span class="sr_only"> sur <?php the_title(); ?></span>
                                    </a>
                                    <?php if ( !wp_count_comments(get_the_ID())->approved == 0):?>
                                        <div class="comments__count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#8b8b8b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                            <p><?= wp_count_comments(get_the_ID())->approved;?></p>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </article>
                        <?php endwhile;?>
                    </div>
                    <!--<div class="pagination_links">
                                <?/*= paginate_links(array(
                                    'total' => $author_post->max_num_pages,
                                    'end_size' => 1,
                                    'mid_size' => 3,
                                    'prev_text' => 'Précédent',
                                    'next_text' => 'Suivant',
                                )); */?>
                            </div>-->
                    <?php else: ?>
                        <div class="section__empty">
                            <p><?= $curauth->nickname; ?> n'a pas encore publié d'article&nbsp;!</p>
                        </div>
                    <?php endif; ?>

                    <div class="button__container">
                        <a href="<?= wa_get_page_url('template-blog.php') ?>" class="button__more--outline">Voir plus d'articles</a>
                    </div>
                </section>

                <section class="author__tutos">
                    <h2 aria-level="2" role="heading" class="featured__section__title">
                        Les dernier tutoriels de <?= $curauth->nickname; ?>
                    </h2>
                    <div class="author__tutos__container grid__parent">
                        <?php if ($author_tuto->have_posts()) : while ($author_tuto->have_posts()) : $author_tuto->the_post(); ?>
                            <article class="tuto grid__child">
                                <div class="tuto__content">
                                    <h3 aria-level="3" role="heading" class="tuto__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <p><time datetime="c" class="post__date"><?= get_the_date() ?></time></p>
                                    <div class="tuto__excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="tuto__meta">
                                        <div class="category category--green">
                                            <?php the_terms( $tuto->ID, 'categorytype' ); ?>
                                        </div>
                                        <div class="category category--lang">
                                            <?php the_terms( $tuto->ID, 'categorylang' );?>
                                        </div>
                                        <div class="difficulty__container">
                                            <?php $difficulty = get_field('difficulty'); ?>
                                            <div class="difficulty__icon difficulty__icon<?php if ($difficulty['value'] == 'facile') echo '__easy'; if ($difficulty['value'] == 'moyenne') echo '__intermediate'; if ($difficulty['value'] == 'difficile') echo '__hard';?>">
                                                <div class="difficulty"></div>
                                                <div class="difficulty"></div>
                                                <div class="difficulty"></div>
                                            </div>
                                            <span><?= $difficulty['label'] ?></span>
                                        </div>
                                        <?php if (!wp_count_comments(get_the_ID())->approved == 0):?>
                                            <div class="comments__count">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#8b8b8b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                                <p><?= wp_count_comments(get_the_ID())->approved;?></p>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                                <div class="tuto__link">
                                    <a href="<?php the_permalink(); ?>" class="button__more--rounded">
                                        <span class="sr_only">Voir le tuto&nbsp;: <?php the_title(); ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"><g  transform="translate(56) rotate(90)"  stroke="#1D2A34" stroke-width="2"><circle class="button__svg" cx="28" cy="28" r="27" fill="none"/></g><g transform="translate(20 16)"><path class="arrow--white" d="M-12,0H7.73" transform="translate(9.27 12)" fill="none" stroke="#1D2A34" stroke-linecap="round" stroke-width="2"/><path class="arrow--white" d="M12,6l7,6-7,6" fill="none" stroke="#1D2A34" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>
                                    </a>
                                </div>
                            </article>
                        <?php endwhile;?>
                    </div>
                    <!--<div class="pagination_links">
                                <?/*= paginate_links(array(
                                    'total' => $author_post->max_num_pages,
                                    'end_size' => 1,
                                    'mid_size' => 3,
                                    'prev_text' => 'Précédent',
                                    'next_text' => 'Suivant',
                                )); */?>
                            </div>-->
                    <?php else: ?>
                        <p><?= $curauth->nickname; ?> n'a pas encore publié d'article&nbsp;!</p>
                    <?php endif; ?>

                    <div class="button__container">
                        <a href="<?= wa_get_page_url('template-tutos.php') ?>" class="button__more--outline">Voir plus de tutoriels</a>
                    </div>
                </section>
            </div>
            <?php endif; ?>

    </main>
    <footer class="skew--yellow">
<?php get_footer();?>
