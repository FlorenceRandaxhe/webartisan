<?php
/*
    Template Name: About
*/
get_header();
?>
<main class="about">
    <section class="section__about">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="about__container">
                <?php the_content();?>
            </div>
        <?php endwhile; endif; ?>
    </section>
</main>
<footer class="skew--yellow">
<?php get_footer();?>