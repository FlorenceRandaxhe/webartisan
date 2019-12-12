<?php
/*
    Template Name: Ressources
*/
get_header();

?>
    <main class="ressources main--top main--bottom">
        <section class="section__ressources">
            <h2 aria-level="2" role="heading" class="sr_only">
                Ressources d'autres sites
            </h2>
            <div class="ressources__container ressources__parent">
            <?php
            $ress = new WP_Query([
                'post_type'=>'ressources',
                'order'=>'DESC',
                'order_by'=>'date'
            ]);
            if ($ress->have_posts()) : while ($ress->have_posts()) : $ress->the_post(); ?>
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
                        Voir l'article<span class="sr_only"><?php the_title();?></span>
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
            <?php endwhile; else: ?>
                <div class="section__empty">
                    <p>Il n'y a pas de ressources pour le moment&nbsp;!</p>
                </div>
            <?php endif; ?>
            </div>
        </section>
    </main>
    <footer class="skew--yellow">
<?php get_footer();?>