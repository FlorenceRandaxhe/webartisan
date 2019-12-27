<?php

/**
 * set the header class
 */
function set_header_class(){
    if(is_page_template(array(
        'template-parts/template-blog.php')) ||
        is_singular( 'articles' ) ||
        is_tax( 'tagpost' ) ||
        is_tax( 'categorypost' )) {
        return 'skew--yellow';
    }
    elseif(is_page_template(
        'template-parts/template-tuto.php') ||
        is_singular( 'tutoriels' ) ||
        is_tax( 'tagtuto' ) ||
        is_tax()){
        return 'skew--green';
    }
    elseif(is_page_template(array(
        'template-parts/template-forum.php',
        'template-parts/template-newForum.php' )) ||
        is_singular( 'forum' )) {
        return 'skew--pink';
    }
    elseif(is_page_template(array(
        'template-parts/template-jobs.php',
        'template-parts/template-addJob.php'))) {
        return 'skew--blue';
    }
    else {
        return 'skew--yellow';
    }
}
