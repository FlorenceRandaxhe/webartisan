<?php
/**
 * meta description
 */
function meta_description()
{
    if (is_page_template() || is_single()) {
        return the_field('description');
    }
    elseif (is_search()) {
        return the_search_query() ;
    }
    else {
       return get_bloginfo('description');
    }
}

/**
 * meta keywords
 */
function meta_keyword()
{
    if (is_page_template() || is_single()) {
        return the_field('keywords');
    } 
    else {
        return 'Web artisan, web, tuto, articles, actu, html, css, javascript';
    }
}
