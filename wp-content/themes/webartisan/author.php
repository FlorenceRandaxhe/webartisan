<?php
/**
 * author page
 */
$curauth = ( isset( $_GET['author_name'] ) ) ? get_user_by( 'slug', $author_name ) : get_userdata( intval( $author ) );
$registered = date_i18n( "d/m/Y", strtotime( get_the_author_meta( 'user_registered', $curauth->ID ) ) );
$current_user_id = get_current_user_id();
$author_post = new WP_Query( ['author' => $curauth->ID, 'post_type'=>'articles', 'order'=>'DESC', 'order_by'=>'date',] );
$author_tuto = new WP_Query( ['author' => $curauth->ID, 'post_type'=>'tutoriels', 'order'=>'DESC', 'order_by'=>'date',] );
get_header(); ?>
    <main class="author main--top main--bottom">
        <section class="section__author">
            <?php if ($curauth->roles[0] == 'subscriber'):?>
                <div class="subscriber__info">
                    <img src="<?= esc_url( get_avatar_url( $curauth->ID ) ); ?>" alt="Photo de profil de <?= $curauth->nickname; ?>" width="96" height="96">
                    <h2 aria-level="2" role="heading" class="featured__section__title">
                        <?= $curauth->nickname; ?>
                    </h2>
                    <p>Inscrit(e) depuis le <?= $registered ;?></p>
                </div>
                <div class="profile__links">
                    <?php if(is_user_logged_in() && $curauth->ID == $current_user_id ) :?>
                        <a href="<?= wa_get_page_url('template-profile.php');?>">Modifier mon profil</a>
                        <a href="<?= wp_logout_url( home_url() ); ?>">Se déconnecter</a>
                    <?php endif;?>
                </div>
            <?php else:?>
                <div class="author__posts">
                    <h2 aria-level="2" role="heading" class="featured__section__title">
                        Les derniers articles de <?= $curauth->nickname; ?>
                    </h2>
                    <div class="author__posts__container">
                        <?php if ($author_post->have_posts()) : while ($author_post->have_posts()) : $author_post->the_post(); ?>
                            <div class="grid__child">
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
                            </div>
                        <?php endwhile; else: ?>
                            <div class="section__empty">
                                <p><?= $curauth->nickname; ?> n'a pas encore publié d'article&nbsp;!</p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="button__container">
                        <a href="<?= wa_get_page_url('template-blog.php') ?>" class="button__more--outline">Voir plus d'articles</a>
                    </div>
                </div>

                <div class="author__tutos">
                    <h2 aria-level="2" role="heading" class="featured__section__title">
                        Les dernier tutoriels de <?= $curauth->nickname; ?>
                    </h2>
                    <div class="author__tutos__container grid__parent">
                        <?php if ($author_tuto->have_posts()) : while ($author_tuto->have_posts()) : $author_tuto->the_post(); ?>
                            <div class="tuto grid__child">
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
                            </div>
                        <?php endwhile; else: ?>
                            <p><?= $curauth->nickname; ?> n'a pas encore publié d'article&nbsp;!</p>
                        <?php endif; ?>
                    </div>
                    <div class="button__container">
                        <a href="<?= wa_get_page_url('template-tutos.php') ?>" class="button__more--outline">Voir plus de tutoriels</a>
                    </div>
                </div>
            <?php endif; ?>
        </section>
    </main>
    <footer class="skew--yellow">
<?php get_footer();?>