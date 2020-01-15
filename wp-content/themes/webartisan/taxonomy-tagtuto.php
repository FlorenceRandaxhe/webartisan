<?php
/**
 *  Taxonomy page
 */
get_header();

?>
<main class="taxo main--top-mid main--bottom">
    <section class="section__tuto">
        <h2 aria-level="2" role="heading" class="featured__section__title">
            Tous les tuto avec le tag&nbsp;: <?php single_cat_title(); ?>
        </h2>
        <div class="tuto__container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="tuto">
                    <?php if ( has_post_thumbnail() ): ?>
                        <img class="tuto__img" src="<?php the_post_thumbnail_url('tuto-thumb'); ?>" alt="<?php the_title(); ?>" width="230" height="230">
                    <?php else: endif; ?>
                    <div class="tuto__content">
                        <h3 aria-level="3" role="heading" class="tuto__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <div class="highlight">
                            <?php the_author_posts_link(); ?>
                        </div>
                        <p class="tuto__date"><time datetime="c" class="post__date"><?= get_the_date() ?></time></p>
                        <div class="tuto__excerpt">
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                        <div class="tuto__meta">
                            <div class="category category--green">
                                <?php the_terms( $tuto->ID, 'categorytype','<span class="sr_only">Catégorie&nbsp;: </span>'); ?>
                            </div>
                            <div class="category category--lang">
                                <?php the_terms( $tuto->ID, 'categorylang','<span class="sr_only">Catégorie&nbsp;: </span>');?>
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
                                <span class="sr_only">Niveau de dificulté du tuto&nbsp;:</span>
                                <span><?= $difficulty['label'] ?></span>
                            </div>
                            <?php if ( !wp_count_comments(get_the_ID())->approved == 0):?>
                                <div class="comments__count">
                                    <a class="icon__align" href="<?php the_permalink(); ?>#anchor__comment">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#8b8b8b" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        <span><?= wp_count_comments(get_the_ID())->approved; ?></span>
                                    </a>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="tuto__link">
                        <a href="<?php the_permalink(); ?>" class="button__more--rounded">
                            <span class="sr_only">Voir le tuto&nbsp;: <?php the_title(); ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"><g  transform="translate(56) rotate(90)"  stroke="#000" stroke-width="2"><circle class="button__svg" cx="28" cy="28" r="27" fill="none"/></g><g transform="translate(20 16)"><path class="arrow--white" d="M-12,0H7.73" transform="translate(9.27 12)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/><path class="arrow--white" d="M12,6l7,6-7,6" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>
                        </a>
                    </div>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
</main>
<footer class="skew--green">
    <?php get_footer();?>
