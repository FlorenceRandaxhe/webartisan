<?php
/*
    Template Name: Search Page
*/
global $wp_query;
$currentPage = get_query_var('paged');
$s = get_search_query();
$post_types = array('articles', 'forum', 'tutoriels', 'emplois');
get_header();
?>
    <main class="search ">
        <section class="section__search">

            <div class="search__content">
                <h2 aria-level="2" role="heading" class="search__content__titlr">
                    Résultats de recherche pour&nbsp;: "<?php the_search_query(); ?>"
                </h2>
                <?php foreach ($post_types as $post_type):
                    $args = array(
                        'post_type' => $post_type,
                        's' => $s,
                        'orderby' => 'post_type',
                        'order' => 'ASC',
                        'posts_per_page' => 10, 'paged' => $currentPage
                    );
                    $query = new WP_Query( $args );
                ?>
                    <?php if ($query->have_posts()) :?>
                        <h3 aria-level="3" role="heading" class="search__title"><?= ucfirst($post_type);?></h3>
                        <?php while ($query->have_posts()) : $query->the_post(); ?>

                            <div class="search__content__results">
                                <div class="post__type">
                                    <p class="category--<?= get_post_type();?>"><?= get_post_type();?></p>
                                </div>
                                <div class="search__content__header">
                                    <h4 aria-level="4" role="heading" class="search__result__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>

                                    <div class="search__result__meta">
                                        <time  datetime="c" class="search__result__date"><?= get_the_date() ?></time>
                                        <a class="icon__align" href="<?php the_permalink(); ?>#anchor__comment">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#8b8b8b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                            <span><?= wp_count_comments(get_the_ID())->approved; ?></span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        <?php endwhile; ?>
                        <div class="pagination_links search__paginate">
                            <?= paginate_links(array(
                                'total' => $query->max_num_pages,
                                'end_size' => 1,
                                'mid_size' => 3,
                                'prev_text' => 'Précédent',
                                'next_text' => 'Suivant',
                            )); ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer class="skew--yellow">
<?php get_footer();?>
