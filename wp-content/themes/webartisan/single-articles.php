<?php
$postcat = get_the_terms( $articles->ID, 'categorypost' );
$slug = $postcat[0]->slug;
$currentId = get_the_ID();
get_header();
?>
    <main class="single__post main--bottom">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="section__single__post">
            <?php if ( has_post_thumbnail() ): ?>
                <div class="img__container div1">
                    <figure class="single__post__img" >
                        <img src="<?php the_post_thumbnail_url('featured-post'); ?>" alt="<?php the_title(); ?>" width="1044" height="376">
                    </figure>
                </div>
            <?php else: endif; ?>
            <div class="post__flex">
                <div class="post__main">
                    <div class="post__article">
                        <div class="post__header">
                            <p>Publié le <time datetime="c" class="post__date"><?= get_the_date() ?></time> par <span class="post__author"><?php the_author_posts_link(); ?></span></p>
                        </div>
                        <div class="post__excerpt">
                            <?php the_excerpt();?>
                        </div>
                        <div class="post__content single__post__content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php $related_posts = get_field('related_post');
                    if( $related_posts ): ?>
                        <section class="post__more">
                            <h2 aria-level="2" role="heading" class="">Pour aller plus loin</h2>
                            <?php foreach( $related_posts as $related_post): ?>
                                <div class="post__more__container">
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
                                </div>
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

                    <?php get_template_part('partials/comment');?>

                </div>

                <div class="post__aside">
                    <aside>
                        <?php
                        $latest = new WP_Query( [
                            'post_type'         => 'articles',
                            'order'             => 'DESC',
                            'order_by'          => 'date',
                            'showposts'         => 3,
                            'post__not_in'      => array ( $currentId ),
                        ] );
                        if ($latest->have_posts()) :?>
                        <h2 aria-level="2" role="heading" class="aside__title">Les derniers articles</h2>
                        <div class="aside__container">
                            <?php while ($latest->have_posts()) : $latest->the_post(); ?>
                            <article class="aside__content">
                                <?php if ( has_post_thumbnail() ): ?>
                                    <div class="img__container">
                                        <figure>
                                            <a href="<?php the_permalink();?>"></a>
                                            <img src="<?php the_post_thumbnail_url('small-thumb'); ?>" alt="<?php the_title(); ?>" width="143" height="100">
                                        </figure>
                                    </div>
                                <?php else: endif; ?>
                                <div>
                                    <h3 aria-level="3" role="heading" class="aside__post__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="post__author">
                                        <?php the_author_posts_link(); ?>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                            <a href="<?= wa_get_page_url('template-blog.php') ?>">Tous les derniers articles</a>
                        <?php endif; ?>
                        </div>
                    </aside>
                    <aside>
                        <?php
                        $author = new WP_Query( [
                            'author'            => get_the_author_meta( 'ID' ),
                            'post_type'         => 'articles',
                            'order'             => 'DESC',
                            'order_by'          => 'date',
                            'showposts'         => 3,
                            'post__not_in'      => array ( $currentId ),
                        ] );
                        if ($author->have_posts()) :?>
                        <h2 aria-level="2" role="heading" class="aside__title">Du même auteur</h2>
                        <div class="aside__container">
                            <?php while ($author->have_posts()) : $author->the_post(); ?>
                            <article class="aside__content">
                                <?php if ( has_post_thumbnail() ): ?>
                                    <div class="img__container">
                                        <figure>
                                            <a href="<?php the_permalink();?>"></a>
                                            <img src="<?php the_post_thumbnail_url('small-thumb'); ?>" alt="<?php the_title(); ?>" width="143" height="100">
                                        </figure>
                                    </div>
                                <?php else: endif; ?>
                                <div>
                                    <h3 aria-level="3" role="heading" class="aside__post__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="post__author">
                                        <?php the_author_posts_link(); ?>
                                    </div>
                                </div>
                            </article>
                            <?php endwhile; ?>
                            <a href="<?= get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">Tous les articles du même auteur</a>
                            <?php endif; ?>
                        </div>
                    </aside>
                    <aside>
                        <?php
                        $cat = new WP_Query( [
                            'post_type'         => 'articles',
                            'post__not_in'      => array ( $currentId ),
                            'showposts'         => 3,
                            'tax_query'         => array (
                                array (
                                    'taxonomy'      => 'categorypost',
                                    'field'         => 'slug',
                                    'terms'         => $slug,
                                )
                            ),
                        ] );
                        if ($cat->have_posts()) :?>
                        <h2 aria-level="2" role="heading" class="aside__title">De la même catégorie</h2>
                        <div class="aside__container">
                        <?php while ($cat->have_posts()) : $cat->the_post(); ?>
                            <article class="aside__content">
                                <?php if ( has_post_thumbnail() ): ?>
                                    <div class="img__container">
                                        <figure>
                                            <a href="<?php the_permalink();?>"></a>
                                            <img src="<?php the_post_thumbnail_url('small-thumb'); ?>" alt="<?php the_title(); ?>" width="143" height="100">
                                        </figure>
                                    </div>
                                <?php else: endif; ?>
                                <div>
                                    <h3 aria-level="3" role="heading" class="aside__post__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="post__author">
                                        <?php the_author_posts_link(); ?>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile;?>

                            <a href="<?= get_term_link( $slug, 'categorypost' ); ?>">Tous les articles de la même catégorie</a>
                            <?php endif; ?>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>
    </main>
    <footer class="skew--yellow">
<?php get_footer();?>
