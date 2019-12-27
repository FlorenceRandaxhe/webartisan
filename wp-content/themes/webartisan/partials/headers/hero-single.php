<div class="hero__single hero hero--centered">
    <h1 aria-level="1" role="heading" class="single__title">
        <?php the_title(); ?><span class="sr_only"> - <?= get_bloginfo('name');?></span>
    </h1>
    <?php if (is_singular('articles')):?>
        <div class="post__category category--blue">
            <?php the_terms( $articles->ID, 'categorypost','<span class="sr_only">Catégorie : </span>'  ); ?>
        </div>
    <?php endif;?>

    <?php $tags = get_the_terms( $articles->ID, 'tagpost');
    if ($tags):?>
        <div class="tags post__tags">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3e3e3e" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
            <div class="tags__list__item"><?php the_terms( $articles->ID, 'tagpost', '', ' ');?></div>
        </div>
    <?php endif;?>
    <?php $tags = get_the_terms( $tuto->ID, 'tagtuto');
    if ($tags):?>
        <div class="tags post__tags">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3e3e3e" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
            <div class="tags__list__item"><?php the_terms( $tuto->ID, 'tagtuto', '', ' ');?></div>
        </div>
    <?php endif;?>
</div>
