<?php
/**
 *  Taxonomy page
 */
get_header();

?>
    <main class="taxo main--top main--bottom">
        <section class="section__taxo">
            <h2 aria-level="2" role="heading" class="featured__section__title">
                Categorie&nbsp;: <?php single_cat_title(); ?>
            </h2>
            <div class="taxo__parent">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="taxo__container">
                        <div class="taxo__content">
                            <?php if ( has_post_thumbnail() ): ?>
                                <div>
                                    <figure class="single__post__img" >
                                        <img src="<?php the_post_thumbnail_url('post-thumb'); ?>" alt="<?php the_title(); ?>" width="620" height="300">
                                    </figure>
                                </div>
                            <?php else: endif; ?>
                            <h3 aria-level="3" role="heading">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div>
                                <p>Publié le <time datetime="c" class="post__date"><?= get_the_date(); ?></time></p>
                            </div>
                            <div class="post__author">
                                <?php the_author_posts_link(); ?>
                            </div>
                            <div class="post__excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="post__link">
                                <a href="<?php the_permalink(); ?>" class="button__more--arrow">
                                    Lire plus <span class="sr_only">sur <?php the_title(); ?></span>
                                </a>
                            </div>
                            <?php $tags = get_the_terms( $articles->ID, 'tagpost' );
                            if ( $tags ):?>
                                <div class="tags">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3e3e3e" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                                    <ul>
                                        <?php foreach ( $tags as $tag ):?>
                                            <li class="tags__list__item"><?= $tag->name;?></li>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endwhile;?>
                </div>
                    <div class="pagination_links">
                        <?php echo paginate_links(); ?>
                    </div>
            <?php endif; ?>
        </section>
    </main>
    <footer class="skew--yellow">
<?php get_footer();?>