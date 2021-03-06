<?php
/**
 *  Taxonomy page
 */
get_header();

?>
<main class="taxo main--top-mid main--bottom">
    <section class="section__taxo">
        <h2 aria-level="2" role="heading" class="featured__section__title">
            Tous les tutos de la catégorie&nbsp;: <?php single_cat_title(); ?>
        </h2>
        <div class="taxo__parent">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="taxo__container tuto tuto__content">
                    <div class="taxo__content ">
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
                            <p class="tuto__date">Publié le <time datetime="c" class="post__date"><?= get_the_date(); ?></time></p>
                        </div>
                        <div class="highlight">
                            <?php the_author_posts_link(); ?>
                        </div>
                        <div class="post__excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="post__link">
                           <a href="<?php the_permalink(); ?>" class="button__more--arrow">
                                Lire plus<span class="sr_only">sur <?php the_title(); ?></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="14.82" viewBox="0 0 30 14.82">
                                    <g id="arrow-right" transform="translate(1 1.41)">
                                        <path id="Tracé_6" data-name="Tracé 6" d="M-12,0H14" transform="translate(12 6)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                                        <path id="Tracé_5" data-name="Tracé 5" d="M12,6l7,6-7,6" transform="translate(9 -6)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </g>
                                </svg>
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
                </article>
            <?php endwhile;?>
        </div>
        <div class="pagination_links">
            <?php
            global $wp_query;
            $big = 999999999;
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages
            ) );
            ?>
        </div>
        <?php endif; ?>
    </section>
</main>
<footer class="skew--green">
    <?php get_footer();?>
