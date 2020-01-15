<?php
/*
    Template Name: Ressources
*/
get_header();
$ress = new WP_Query(['post_type'=>'ressources','order'=>'DESC','order_by'=>'date']);
?>
    <main class="ressources main--top main--bottom">
        <section class="section__ressources">
            <h2 aria-level="2" role="heading" class="sr_only">
                Ressources d'autres sites
            </h2>
            <div class="ressources__container ressources__parent">
            <?php if ($ress->have_posts()) : while ($ress->have_posts()) : $ress->the_post(); ?>
                <article class="ressources__content">
                    <p><time datetime="c" class="ressources__date"><?= get_the_date() ?></time></p>
                    <h3 aria-level="3" role="heading" class="ressources__title">
                        <?php the_title();?>
                    </h3>
                    <p class="ressources__source">Source&nbsp;:
                        <a href="<?php the_field('site_url'); ?>"><?php the_field('site_name'); ?></a>
                    </p>
                    <p class="ressources__excerpt"><?php the_field('excerpt'); ?></p>
                
                        <a href="<?php the_field('link'); ?>" class="button__more--arrow">
                                Lire l'article<span class="sr_only"><?php the_title(); ?></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="14.82" viewBox="0 0 30 14.82">
                                    <g id="arrow-right" transform="translate(1 1.41)">
                                        <path id="Tracé_6" data-name="Tracé 6" d="M-12,0H14" transform="translate(12 6)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                                        <path id="Tracé_5" data-name="Tracé 5" d="M12,6l7,6-7,6" transform="translate(9 -6)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </g>
                                </svg>
                            </a>
                   
                    <?php $tags = get_the_terms( $ress->ID, 'tagres' );
                    if ($tags):?>
                        <div class="tags">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3e3e3e" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                            <ul>
                                <?php foreach ($tags as $tag):?>
                                    <li class="tags__list__item"><?= $tag->name;?></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    <?php endif;?>
                </article>
            <?php endwhile; ?>
            <div class="pagination_links">
                    <?= paginate_links(array(
                        'total' => $thread->max_num_pages,
                        'end_size' => 1,
                        'mid_size' => 3,
                        'prev_text' => 'Précédent',
                        'next_text' => 'Suivant',
                    )); ?>
                </div>
            <?php else: ?>
                <div class="section__empty">
                    <p>Il n'y a pas de ressources pour le moment&nbsp;!</p>
                </div>
            <?php endif; ?>
            </div>
        </section>
    </main>
    <footer class="skew--yellow">
<?php get_footer();?>