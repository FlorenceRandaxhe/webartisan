<?php

/************************************************
 *
 * Filter job result
 */

function job_filter( $query )
{

    if( is_admin() )
    {
        return $query;
    }

    if( isset(
        $query->query_vars['post_type'] ) &&
        $query->query_vars['post_type'] == 'emplois' )
    {

        if( isset( $_GET['country']) )
        {
            $query->set( 'meta_query', array(
                array(
                    'key'       => 'country',
                    'compare'   => 'IN',
                    'value'     => $_GET['country'],
                )
            ) );
        }

        if( isset( $_GET['town']) )
        {
            $query->set( 'meta_query', array(
                array(
                    'key'       => 'town',
                    'compare'   => 'IN',
                    'value'     => $_GET['town'],
                )
            ) );
        }

        if( isset( $_GET['fullTime'] ) )
        {
            $query->set( 'meta_query', array(
                array(
                    'key'       => 'type',
                    'compare'   => 'LIKE',
                    'value'     => 'Temps plein',
                )
            ) );
        }

        if( isset( $_GET['partTime'] ) )
        {
            $query->set( 'meta_query', array(
                array(
                    'key'       => 'type',
                    'compare'   => 'LIKE',
                    'value'     => 'Temps partiel',
                )
            ) );
        }

        if( isset( $_GET['internship'] ) )
        {
            $query->set( 'meta_query', array(
                array(
                    'key'       => 'type',
                    'compare'   => 'LIKE',
                    'value'     => 'Stage',
                )
            ) );
        }
    }

    return $query;
}

add_action('pre_get_posts', 'job_filter');


/************************************************
 *
 * Filter thread result
 */

function thread_filter( $query )
{

    if( is_admin() )
    {
        return $query;
    }

    if( isset(
        $query->query_vars['post_type']) &&
        $query->query_vars['post_type'] == 'forum' )
    {

        if( isset( $_GET['category'] ) && $_GET['category'] != 'all' )
        {
            $query->set( 'meta_query', array(
                array(
                    'key'       => 'taxo',
                    'compare'   => 'LIKE',
                    'value'     =>  $_GET['category'],
                )
            ) );
        }
    }

    return $query;
}

add_action('pre_get_posts', 'thread_filter');

/************************************************
 *
 * Filter tutorial results
 */

function tuto_filter( $query )
{

    if( is_admin() )
    {
        return $query;
    }

    if( isset(
        $query->query_vars['post_type']) &&
        $query->query_vars['post_type'] == 'tutoriels' )
    {

        if( isset( $_GET['type'] )  && $_GET['type'] != 'all' )
        {
            $query->set( 'tax_query', array(
                array(
                    'taxonomy'  => 'categorytype',
                    'field'     => 'slug',
                    'terms'     =>  $_GET['type'],
                )
            ) );
        }

        if( isset( $_GET['lang'] )  && $_GET['lang'] != 'all' )
        {
            $query->set( 'tax_query', array(
                array(
                    'taxonomy'  => 'categorylang',
                    'field'     => 'slug',
                    'terms'     =>  $_GET['lang'],
                )
            ) );
        }

        if( isset( $_GET['level'] )  && $_GET['level'] != 'all' )
        {
            $query->set( 'meta_query', array(
                array(
                    'key'       => 'difficulty',
                    'compare'   => 'LIKE',
                    'value'     => $_GET['level'],
                )
            ) );
        }
    }

    return $query;
}

add_action('pre_get_posts', 'tuto_filter');