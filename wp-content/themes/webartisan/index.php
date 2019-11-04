<?php
/**
 * Home page
 */
get_header();
$articles = new WP_Query( ['post_type'=>'articles', 'order'=>'DESC', 'order_by'=>'date', 'showposts' => 5 ] );
$tuto = new WP_Query( ['post_type'=>'tutoriels', 'order'=>'DESC', 'order_by'=>'date', 'showposts' => 4 ] );
$thread = new WP_Query( ['post_type'=>'forum', 'order'=>'DESC', 'order_by'=>'date', 'showposts' => 4 ] );
?>
<main class="home">
    <section class="featured__posts">
             <?php if ( $articles->have_posts() ) :?>
            <h2 aria-level="2" role="heading" class="sr_only">Les dernières actualités</h2>
            <div class="grid__parent">
            <?php while ( $articles->have_posts() ) : $articles->the_post(); ?>
                <div class="post grid__child">
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
                            <?php the_terms( $articles->ID, 'categorypost', '<span class="sr_only">Catégorie&nbsp;: </span>' ); ?>
                        </div>
                        <div class="post__author">
                            <?php the_author_posts_link(); ?>
                        </div>
                        <div>
                            <p><time datetime="c" class="post__date"><?= get_the_date() ?></time></p>
                        </div>
                        <div class="post__excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="button__more--arrow">
                            Lire plus<span class="sr_only">sur <?php the_title(); ?></span>
                        </a>
                        <?php if ( !wp_count_comments( get_the_ID() )->approved == 0 ):?>
                            <div class="comments__count">
                                <a class="icon__align" href="<?php the_permalink(); ?>#anchor__comment">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#8b8b8b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                <span><?= wp_count_comments( get_the_ID() )->approved; ?></span>
                                </a>
                            </div>
                        <?php endif;?>
                    </div>
                </div>

            <?php endwhile;?>
            </div>
            <div class="button__container">
                <a href="<?= wa_get_page_url('template-blog.php') ?>" class="button__more--outline">Voir plus d'articles</a>
            </div>
            <?php else: ?>
                <div class="section__empty section__empty--blog">
                    <h2 aria-level="2" role="heading" class="sr_only section__jobs__title">
                        Les dernières actualités
                    </h2>
                    <p>On dirait qu'il n'y a pas d'actualité pour le moment&nbsp;!</p>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="416.234" height="276.392" viewBox="0 0 516.234 376.392"><rect width="353.589" height="214.467" rx="5.206" transform="translate(95.006 101.556)" fill="#FAD771"/><rect width="353.589" height="214.467" rx="5.206" transform="translate(81.609 88.103)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><rect width="353.589" height="33.054" rx="3.998" transform="translate(81.609 88.103)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(92.828 95.599)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(125.402 95.599)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(157.975 95.599)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><g transform="translate(13.557 338.644)" fill="none" stroke="#192a36" stroke-width="3"><ellipse cx="9.611" cy="9.611" rx="9.611" ry="9.611" stroke="none"/><ellipse cx="9.611" cy="9.611" rx="8.111" ry="8.111" fill="none"/></g><path d="M0,0H19.366" transform="translate(490.076 320.35) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H19.366" transform="translate(503.77 320.349) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><g transform="translate(352.592)" fill="none" stroke="#192a36" stroke-width="3"><ellipse cx="9.611" cy="9.611" rx="9.611" ry="9.611" stroke="none"/><ellipse cx="9.611" cy="9.611" rx="8.111" ry="8.111" fill="none"/></g><path d="M0,0H21.951" transform="translate(2.121 63.841) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H21.951" transform="translate(17.645 63.842) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><ellipse cx="6.607" cy="6.607" rx="6.607" ry="6.607" transform="translate(255.965 363.178)" fill="#1d2a34"/><g transform="translate(478.008 153.464) rotate(-45)" fill="none" stroke-linecap="round"><path d="M11.811,4.558a3,3,0,0,1,5.209,0L26.267,20.74a3,3,0,0,1-2.6,4.488H5.17a3,3,0,0,1-2.6-4.488Z" stroke="none"/><path d="M 14.41613483428955 6.046688079833984 L 14.41614437103271 6.046697616577148 L 5.169544219970703 22.22823715209961 C 5.16954231262207 22.22824096679688 5.169540405273438 22.22824478149414 5.169538497924805 22.22824668884277 C 5.169540405273438 22.22824668884277 5.16954231262207 22.22824668884277 5.169544219970703 22.22824668884277 L 23.66274452209473 22.22824668884277 L 14.41613483428955 6.046688079833984 M 14.41614437103271 3.046689987182617 C 15.43058967590332 3.046689987182617 16.44503402709961 3.550552368164063 17.0208740234375 4.558277130126953 L 26.26747512817383 20.73982620239258 C 27.41031455993652 22.73979759216309 25.96621513366699 25.22824668884277 23.66274452209473 25.22824668884277 L 5.169544219970703 25.22824668884277 C 2.866073608398438 25.22824668884277 1.421974182128906 22.73979759216309 2.564804077148438 20.73982620239258 L 11.81141471862793 4.558277130126953 C 12.38725471496582 3.550552368164063 13.40169906616211 3.046689987182617 14.41614437103271 3.046689987182617 Z" stroke="none" fill="#192a36"/></g><ellipse cx="10.607" cy="10.607" rx="10.607" ry="10.607" transform="translate(193.965 169.696)" fill="#1d2a34"/><path d="M17941.3-1034.041s61.564-27.787,123.629,0" transform="translate(-17746.879 1296.696)" fill="none" stroke="#1d2a34" stroke-linecap="round" stroke-width="4"/><ellipse cx="10.607" cy="10.607" rx="10.607" ry="10.607" transform="translate(296.965 169.696)" fill="#1d2a34"/></svg>
                    </div>
                </div>
            <?php endif; ?>
    </section>

    <section class="featured__tuto">
            <?php if ( $tuto->have_posts() ) :?>
                <h2 aria-level="2" role="heading" class="">Nos derniers tutos</h2>
                <div class="tuto__container grid__parent">
                <?php while ( $tuto->have_posts() ) : $tuto->the_post(); ?>
                <div class="tuto grid__child">
                    <div class="tuto__content">
                        <h3 aria-level="3" role="heading" class="tuto__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <div class="post__author">
                            <?php the_author_posts_link(); ?>
                        </div>
                        <p><time datetime="c" class="post__date"><?= get_the_date() ?></time></p>
                        <div class="tuto__excerpt">
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                        <div class="tuto__meta">
                            <div class="category category--green">
                                <?php the_terms( $tuto->ID, 'categorytype' , '<span class="sr_only">Catégorie&nbsp;: </span>'); ?>
                            </div>
                            <div class="category category--lang">
                                <?php the_terms( $tuto->ID, 'categorylang' , '<span class="sr_only">Catégorie&nbsp;: </span>');?>
                            </div>
                            <div class="difficulty__container">
                                <?php
                                $difficulty = get_field( 'difficulty' ); ?>
                                <div class="difficulty__icon difficulty__icon<?php
                                if ( $difficulty['value'] == 'facile' ) echo '__easy';
                                if ( $difficulty['value'] == 'moyenne' ) echo '__intermediate';
                                if ( $difficulty['value'] == 'difficile' ) echo '__hard';?>">
                                    <div class="difficulty"></div>
                                    <div class="difficulty"></div>
                                    <div class="difficulty"></div>
                                </div>
                                <span class="sr_only">Niveau de dificulté du tuto :</span>
                                <span><?= $difficulty['label'] ?></span>
                            </div>

                            <?php if ( !wp_count_comments( get_the_ID() )->approved == 0 ):?>
                                <div class="comments__count">
                                    <a class="icon__align" href="<?php the_permalink(); ?>#anchor__comment">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#8b8b8b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        <span><?= wp_count_comments( get_the_ID() )->approved; ?></span>
                                    </a>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="tuto__link">
                        <a href="<?php the_permalink(); ?>" class="button__more--rounded">
                            <span class="sr_only">Voir le tuto : <?php the_title(); ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"><g  transform="translate(56) rotate(90)"  stroke="#000" stroke-width="2"><circle class="button__svg" cx="28" cy="28" r="27" fill="none"/></g><g transform="translate(20 16)"><path class="arrow--white" d="M-12,0H7.73" transform="translate(9.27 12)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/><path class="arrow--white" d="M12,6l7,6-7,6" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>
                        </a>
                    </div>
                </div>
            <?php endwhile;?>
                </div>
                <div class="button__container">
                    <a href="<?= wa_get_page_url('template-tutos.php') ?>" class="button__more--outline">Voir tous les tutoriels</a>
                </div>
            <?php else: ?>
                <div class="section__empty">
                    <h2 aria-level="2" role="heading" class="sr_only section__jobs__title">
                        Les derniers tutoriels
                    </h2>
                    <p>On dirait qu'il n'y a pas de tuto pour le moment&nbsp;!</p>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="416.234" height="276.392" viewBox="0 0 516.234 376.392"><rect width="353.589" height="214.467" rx="5.206" transform="translate(95.006 101.556)" fill="#9FD0CC"/><rect width="353.589" height="214.467" rx="5.206" transform="translate(81.609 88.103)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><rect width="353.589" height="33.054" rx="3.998" transform="translate(81.609 88.103)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(92.828 95.599)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(125.402 95.599)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(157.975 95.599)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><g transform="translate(13.557 338.644)" fill="none" stroke="#192a36" stroke-width="3"><ellipse cx="9.611" cy="9.611" rx="9.611" ry="9.611" stroke="none"/><ellipse cx="9.611" cy="9.611" rx="8.111" ry="8.111" fill="none"/></g><path d="M0,0H19.366" transform="translate(490.076 320.35) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H19.366" transform="translate(503.77 320.349) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><g transform="translate(352.592)" fill="none" stroke="#192a36" stroke-width="3"><ellipse cx="9.611" cy="9.611" rx="9.611" ry="9.611" stroke="none"/><ellipse cx="9.611" cy="9.611" rx="8.111" ry="8.111" fill="none"/></g><path d="M0,0H21.951" transform="translate(2.121 63.841) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H21.951" transform="translate(17.645 63.842) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><ellipse cx="6.607" cy="6.607" rx="6.607" ry="6.607" transform="translate(255.965 363.178)" fill="#1d2a34"/><g transform="translate(478.008 153.464) rotate(-45)" fill="none" stroke-linecap="round"><path d="M11.811,4.558a3,3,0,0,1,5.209,0L26.267,20.74a3,3,0,0,1-2.6,4.488H5.17a3,3,0,0,1-2.6-4.488Z" stroke="none"/><path d="M 14.41613483428955 6.046688079833984 L 14.41614437103271 6.046697616577148 L 5.169544219970703 22.22823715209961 C 5.16954231262207 22.22824096679688 5.169540405273438 22.22824478149414 5.169538497924805 22.22824668884277 C 5.169540405273438 22.22824668884277 5.16954231262207 22.22824668884277 5.169544219970703 22.22824668884277 L 23.66274452209473 22.22824668884277 L 14.41613483428955 6.046688079833984 M 14.41614437103271 3.046689987182617 C 15.43058967590332 3.046689987182617 16.44503402709961 3.550552368164063 17.0208740234375 4.558277130126953 L 26.26747512817383 20.73982620239258 C 27.41031455993652 22.73979759216309 25.96621513366699 25.22824668884277 23.66274452209473 25.22824668884277 L 5.169544219970703 25.22824668884277 C 2.866073608398438 25.22824668884277 1.421974182128906 22.73979759216309 2.564804077148438 20.73982620239258 L 11.81141471862793 4.558277130126953 C 12.38725471496582 3.550552368164063 13.40169906616211 3.046689987182617 14.41614437103271 3.046689987182617 Z" stroke="none" fill="#192a36"/></g><ellipse cx="10.607" cy="10.607" rx="10.607" ry="10.607" transform="translate(193.965 169.696)" fill="#1d2a34"/><path d="M17941.3-1034.041s61.564-27.787,123.629,0" transform="translate(-17746.879 1296.696)" fill="none" stroke="#1d2a34" stroke-linecap="round" stroke-width="4"/><ellipse cx="10.607" cy="10.607" rx="10.607" ry="10.607" transform="translate(296.965 169.696)" fill="#1d2a34"/></svg>
                    </div>
                </div>
            <?php endif; ?>
    </section>

    <section class="featured__thread">
            <?php if ( $thread->have_posts() ) :
            $comments = get_comments( array( 'post_id' => get_the_ID(), 'orderby' => 'comment_date_gmt', 'status' => 'approve', 'number' => 1 ) );
            $lastCommentId = $comments[0]->comment_ID; ?>
            <div class="featured__thread__head">
                <h2 aria-level="2" role="heading" class="">Les derniers sujets du forum</h2>
                <div>
                    <a href="<?= wa_get_page_url('template-newForum.php') ;?>" class="button--blue">Nouveau sujet</a>
                </div>
            </div>
            <div class="thread__container">
            <?php while ( $thread->have_posts() ) : $thread->the_post(); ?>
                <div class="thread">
                    <div class="thread__content">
                        <h3 aria-level="3" role="heading" class="thread__title icon__align">
                            <?php if ( wp_count_comments( get_the_ID() )->approved > 10 ):?>
                                <span class="sr_only">Sujet brulant&nbsp;: </span>
                                <svg class="trending__up" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g><g><circle class="cls-1" cx="12" cy="12" r="12"/><polyline class="cls-2" points="20.45 7 13.19 14.72 9.13 10.9 3.41 17"/><polyline class="cls-2" points="15.72 7.15 20.45 7 20.59 11.73"/></g></g></svg>
                            <?php endif ;?>
                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
                            <?php if( get_field('thread_resolved') == true ):?>
                            <span class="thread_resolved">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26.562" height="10.906" viewBox="0 0 26.562 17.906"><path id="Tracé_75" data-name="Tracé 75" d="M4901.756,3144.133l9,8.949,14.745-14.667" transform="translate(-4900.346 -3136.997)" fill="none" stroke="#61A09B" stroke-width="5"/></svg>
                                <span class="sr_only">Statut du sujet&nbsp;: </span><span>Résolu</span>
                            </span>
                            <?php endif ;?>
                        </h3>
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
                            <span><?php the_field( 'taxo' );?></span>
                        </span>
                            <?php if ( !wp_count_comments( get_the_ID())->approved == 0 ):?>
                                <time datetime="c" class="thread__date icon__align">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"><g transform="translate(0.5 0.5)"><rect width="12" height="12" rx="2" transform="translate(0 1)" stroke-width="1" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" fill="none"/><line y2="3" transform="translate(8)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><line y2="3" transform="translate(3)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><line x2="12" transform="translate(0 5)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></svg>
                                    <span>Dernière réponse&nbsp;: <time datetime="c"><?= get_comment_date( $d = 'j F Y', $lastCommentId ) ?></time></span>
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
                </div>
            <?php endwhile;?>
            </div>
            <div class="button__container">
                <a href="<?= wa_get_page_url('template-forum.php') ?>" class="button__more--outline">Voir tous les sujets</a>
            </div>
            <?php else: ?>
                <div class="section__empty section__empty--thread">
                    <h2 aria-level="2" role="heading" class="sr_only section__jobs__title">
                        Les derniers sujets du forum
                    </h2>
                    <p>On dirait qu'il n'y a aucun sujet sur le forum pour le moment&nbsp;!</p>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="416.234" height="276.392" viewBox="0 0 516.234 376.392"><rect width="353.589" height="214.467" rx="5.206" transform="translate(95.006 101.556)" fill="#D49CB5"/><rect width="353.589" height="214.467" rx="5.206" transform="translate(81.609 88.103)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><rect width="353.589" height="33.054" rx="3.998" transform="translate(81.609 88.103)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(92.828 95.599)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(125.402 95.599)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(157.975 95.599)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><g transform="translate(13.557 338.644)" fill="none" stroke="#192a36" stroke-width="3"><ellipse cx="9.611" cy="9.611" rx="9.611" ry="9.611" stroke="none"/><ellipse cx="9.611" cy="9.611" rx="8.111" ry="8.111" fill="none"/></g><path d="M0,0H19.366" transform="translate(490.076 320.35) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H19.366" transform="translate(503.77 320.349) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><g transform="translate(352.592)" fill="none" stroke="#192a36" stroke-width="3"><ellipse cx="9.611" cy="9.611" rx="9.611" ry="9.611" stroke="none"/><ellipse cx="9.611" cy="9.611" rx="8.111" ry="8.111" fill="none"/></g><path d="M0,0H21.951" transform="translate(2.121 63.841) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H21.951" transform="translate(17.645 63.842) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><ellipse cx="6.607" cy="6.607" rx="6.607" ry="6.607" transform="translate(255.965 363.178)" fill="#1d2a34"/><g transform="translate(478.008 153.464) rotate(-45)" fill="none" stroke-linecap="round"><path d="M11.811,4.558a3,3,0,0,1,5.209,0L26.267,20.74a3,3,0,0,1-2.6,4.488H5.17a3,3,0,0,1-2.6-4.488Z" stroke="none"/><path d="M 14.41613483428955 6.046688079833984 L 14.41614437103271 6.046697616577148 L 5.169544219970703 22.22823715209961 C 5.16954231262207 22.22824096679688 5.169540405273438 22.22824478149414 5.169538497924805 22.22824668884277 C 5.169540405273438 22.22824668884277 5.16954231262207 22.22824668884277 5.169544219970703 22.22824668884277 L 23.66274452209473 22.22824668884277 L 14.41613483428955 6.046688079833984 M 14.41614437103271 3.046689987182617 C 15.43058967590332 3.046689987182617 16.44503402709961 3.550552368164063 17.0208740234375 4.558277130126953 L 26.26747512817383 20.73982620239258 C 27.41031455993652 22.73979759216309 25.96621513366699 25.22824668884277 23.66274452209473 25.22824668884277 L 5.169544219970703 25.22824668884277 C 2.866073608398438 25.22824668884277 1.421974182128906 22.73979759216309 2.564804077148438 20.73982620239258 L 11.81141471862793 4.558277130126953 C 12.38725471496582 3.550552368164063 13.40169906616211 3.046689987182617 14.41614437103271 3.046689987182617 Z" stroke="none" fill="#192a36"/></g><ellipse cx="10.607" cy="10.607" rx="10.607" ry="10.607" transform="translate(193.965 169.696)" fill="#1d2a34"/><path d="M17941.3-1034.041s61.564-27.787,123.629,0" transform="translate(-17746.879 1296.696)" fill="none" stroke="#1d2a34" stroke-linecap="round" stroke-width="4"/><ellipse cx="10.607" cy="10.607" rx="10.607" ry="10.607" transform="translate(296.965 169.696)" fill="#1d2a34"/></svg>
                    </div>
                    <a href="<?= wa_get_page_url('template-newForum.php') ;?>" class="button--blue">Nouveau sujet</a>
                </div>
            <?php endif; ?>
    </section>
</main>
<footer class="skew--yellow">
<?php get_footer();?>