<?php
/*
    Template Name: Legal
*/
get_header();
?>
<main class="legal">
    <section class="section__legal">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="legal__container">
            <?php the_content();?>
        </div>
    <?php endwhile; endif; ?>
    </section>
</main>
<footer class="skew--yellow">
<?php get_footer();?>