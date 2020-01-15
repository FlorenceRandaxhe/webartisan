<?php
$taxonomy = 'categorydoc';
$tax_terms = get_terms($taxonomy, array('hide_empty' => true));
/*
    Template Name: Doc
*/
get_header();

?>
    <main class="doc main--top main--bottom">
        <section class="section__doc">
            <h2 aria-level="2" role="heading" class="sr_only">Tous les langages</h2>
            <div class="doc__nav">
                <ul class="doc__nav__list">
        <?php foreach ($tax_terms as $tax_term):?>
                    <li class="doc__nav__list__item"><a href="#<?= $tax_term->slug;?>"><?= $tax_term->name;?></a></li>
        <?php endforeach; ?>
                </ul>
            </div>
                <?php foreach ($tax_terms as $tax_term):
                    $alma = new WP_Query([
                        'post_type'=>'doc',
                        'order'=>'DESC',
                        'order_by'=>'title',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'categorydoc',
                                'field'    => 'slug',
                                'terms'    => $tax_term->slug,
                                'order'=>'DESC',
                                'order_by'=>'title',
                            ),
                        ),
                    ]);
                    if ($alma->have_posts()): ?>
                    <article class="doc__container" id="<?= $tax_term->slug;?>">
                        <h3 aria-level="3" role="heading" class="doc__taxo__title"><?= $tax_term->slug;?></h3>
                        <ul>
                            <?php while ( $alma->have_posts() ) : $alma->the_post(); ?>
                                <li  class="doc__content">
                                    <div class="doc__title">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="doc__excerpt">
                                        <?php the_content() ?>

                                        <?php $link = get_field('link'); if ($link):?>
                                        <a class="highlight" target="_blank" href="<?php the_field('link'); ?>">En savoir plus <span class="sr_only">sur <?php the_title(); ?></span></a>
                                        <?php endif;?>
                                        
                                    </div>
                                </li>
                            <?php endwhile; else : endif; ?>
                        </ul>
                    </article>

                <?php endforeach; ?>
        </section>
    </main>
    <footer class="skew--yellow">
<?php get_footer();?>
