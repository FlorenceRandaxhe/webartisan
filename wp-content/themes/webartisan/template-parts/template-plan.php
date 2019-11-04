<?php
/*
    Template Name: Site Map
*/
get_header();
?>
    <main class="map">
        <section class="section__map">
            <div class="map__container">
                <h2 aria-level="2" role="heading">Pages</h2>
                <ul><?php wp_list_pages("title_li=&sort_column=menu_order" ); ?></ul>
            </div>
        </section>
    </main>
    <footer class="skew--yellow">
<?php get_footer();?>