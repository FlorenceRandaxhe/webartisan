<?php
/*
    Template Name: Blog
*/
get_header();
$currentPage = get_query_var('paged');
$articles = new WP_Query(['post_type'=>'articles', 'order'=>'DESC', 'order_by'=>'date', 'posts_per_page' => 9, 'paged' => $currentPage]);
?>

<main class="blog">
		<section class="featured__posts">
                <?php if ($articles->have_posts()) :?>
                <h2 aria-level="2" role="heading" class="featured__section__title sr_only">Toutes les actualités</h2>
                <div class="grid__parent">
                <?php while ($articles->have_posts()) : $articles->the_post(); ?>
                    <article class="post grid__child">
                        <!--
                            REVOIR RYTHME VERTICAL
                            IL Y A TROP D'ELEMENT QUI GERE LA HIERARCHIE VISUELLE (GRAS, MAJUSCULE)
                        -->
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
                                <!--
                                    AJOUTER UN EFFET HOVER SUR LA CATEGORIE
                                -->
                                <?php the_terms( $articles->ID, 'categorypost', '<span class="sr_only">Catégorie&nbsp;: </span>' ); ?>
                            </div>
                            <div class="post__meta">
                                <div class="post__author">
                                    <?php the_author_posts_link(); ?>
                                </div>
                                <p><time datetime="c" class="post__date"><?= get_the_date() ?></time></p>
                            </div>
                            <div class="post__excerpt">
                                <!--
                                    L'EXCEPT DEVRAIT PLUS RESSORTIR (AJOUTER DU MARGIN ?)
                                -->
                                <?php the_excerpt(); ?>
                            </div>
                            <!--
                                LA FLECHE EST TROP GRANDE ET LA ZONE CLIQUABLE TROP PETITE
                                REPRENDRE LA MEME FLECHE QUE POUR LES TUTOS (SANS LE CONTOUR)
                             -->
                            <div class="post__meta__bottom">

                                <div class="comments__count">
                                    <a class="icon__align" href="<?php the_permalink(); ?>#anchor__comment">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#8b8b8b" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        <span><?= wp_count_comments( get_the_ID() )->approved; ?></span>
                                        <span class="sr_only"> commentaires pour <?php the_title(); ?></span>
                                    </a>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="button__more--arrow">
                                    Lire plus<span class="sr_only">sur <?php the_title(); ?></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="14.82" viewBox="0 0 30 14.82">
                                        <g id="arrow-right" transform="translate(1 1.41)">
                                            <path id="Tracé_6" data-name="Tracé 6" d="M-12,0H14" transform="translate(12 6)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                                            <path id="Tracé_5" data-name="Tracé 5" d="M12,6l7,6-7,6" transform="translate(9 -6)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        </g>
                                    </svg>

                                </a>
                                <!--
                                    ZONE CLIQUABLE TROP GRANDE // TROP PROCHE DU LIEN (RISQUE D'ERREUR )
                               -->
                            </div>
                        </div>
                    </article>
                <?php endwhile;?>
                </div>
                    <div class="pagination_links">
                        <?= paginate_links(array(
                            'total' => $articles->max_num_pages,
                            'end_size' => 1,
                            'mid_size' => 3,
                            'prev_text' => 'Précédent',
                            'next_text' => 'Suivant',
                        )); ?>
                    </div>
                <?php else: ?>
                    <div class="section__empty section__empty--blog">
                        <p>On dirait qu'il n'y a pas d'actualité pour le moment&nbsp;!</p>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="416.234" height="276.392" viewBox="0 0 516.234 376.392"><rect width="353.589" height="214.467" rx="5.206" transform="translate(95.006 101.556)" fill="#FAD771"/><rect width="353.589" height="214.467" rx="5.206" transform="translate(81.609 88.103)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><rect width="353.589" height="33.054" rx="3.998" transform="translate(81.609 88.103)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(92.828 95.599)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(125.402 95.599)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(157.975 95.599)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><g transform="translate(13.557 338.644)" fill="none" stroke="#192a36" stroke-width="3"><ellipse cx="9.611" cy="9.611" rx="9.611" ry="9.611" stroke="none"/><ellipse cx="9.611" cy="9.611" rx="8.111" ry="8.111" fill="none"/></g><path d="M0,0H19.366" transform="translate(490.076 320.35) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H19.366" transform="translate(503.77 320.349) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><g transform="translate(352.592)" fill="none" stroke="#192a36" stroke-width="3"><ellipse cx="9.611" cy="9.611" rx="9.611" ry="9.611" stroke="none"/><ellipse cx="9.611" cy="9.611" rx="8.111" ry="8.111" fill="none"/></g><path d="M0,0H21.951" transform="translate(2.121 63.841) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H21.951" transform="translate(17.645 63.842) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><ellipse cx="6.607" cy="6.607" rx="6.607" ry="6.607" transform="translate(255.965 363.178)" fill="#1d2a34"/><g transform="translate(478.008 153.464) rotate(-45)" fill="none" stroke-linecap="round"><path d="M11.811,4.558a3,3,0,0,1,5.209,0L26.267,20.74a3,3,0,0,1-2.6,4.488H5.17a3,3,0,0,1-2.6-4.488Z" stroke="none"/><path d="M 14.41613483428955 6.046688079833984 L 14.41614437103271 6.046697616577148 L 5.169544219970703 22.22823715209961 C 5.16954231262207 22.22824096679688 5.169540405273438 22.22824478149414 5.169538497924805 22.22824668884277 C 5.169540405273438 22.22824668884277 5.16954231262207 22.22824668884277 5.169544219970703 22.22824668884277 L 23.66274452209473 22.22824668884277 L 14.41613483428955 6.046688079833984 M 14.41614437103271 3.046689987182617 C 15.43058967590332 3.046689987182617 16.44503402709961 3.550552368164063 17.0208740234375 4.558277130126953 L 26.26747512817383 20.73982620239258 C 27.41031455993652 22.73979759216309 25.96621513366699 25.22824668884277 23.66274452209473 25.22824668884277 L 5.169544219970703 25.22824668884277 C 2.866073608398438 25.22824668884277 1.421974182128906 22.73979759216309 2.564804077148438 20.73982620239258 L 11.81141471862793 4.558277130126953 C 12.38725471496582 3.550552368164063 13.40169906616211 3.046689987182617 14.41614437103271 3.046689987182617 Z" stroke="none" fill="#192a36"/></g><ellipse cx="10.607" cy="10.607" rx="10.607" ry="10.607" transform="translate(193.965 169.696)" fill="#1d2a34"/><path d="M17941.3-1034.041s61.564-27.787,123.629,0" transform="translate(-17746.879 1296.696)" fill="none" stroke="#1d2a34" stroke-linecap="round" stroke-width="4"/><ellipse cx="10.607" cy="10.607" rx="10.607" ry="10.607" transform="translate(296.965 169.696)" fill="#1d2a34"/></svg>
                        </div>
                    </div>
                <?php endif; ?>
		</section>
	</main>
    <footer class="skew--yellow">
<?php get_footer();?>
