<?php
if ($_POST['thread_resolved'] == 1){
    update_field('field_5dac1f57e99e3', true);
    wp_redirect(home_url() . $_SERVER['REQUEST_URI']);exit;
}
get_header();
?>
    <main class="single__thread main--top-mid main--bottom">
        <?php if ( have_posts() ) :?>
            <h2 aria-level="2" role="heading" class="sr_only">Toutes les réponses au sujet</h2>
            <?php while ( have_posts() ) : the_post(); ?>
                <section class="section__single__thread">
                <?php if( get_field('thread_resolved') == false && is_user_logged_in() && get_the_author_meta( 'ID' ) === get_current_user_id() ) :?>
                    <div class="is__thread__resolved">
                        <form action="#" method="post" class="is__thread__resolved__form">

                            <div class="resolved__form__chackbox">
                                <input type="checkbox" name="thread_resolved" id="thread_resolved" class="checkbox" value="1">
                                <label for="thread_resolved" class="form__label">Y a-t'il eu une réponse satisfaisante à votre question&nbsp;?</label>
                            </div>
                            <div class="resolved__form__submit">
                                <button class="button--blue">Sujet résolu</button>
                            </div>
                        </form>
                    </div>
                <?php endif ;?>

                <?php if( get_field('thread_resolved') == true ):?>
                    <div class="thread_resolved--alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26.562" height="10.906" viewBox="0 0 26.562 17.906"><path id="Tracé_75" data-name="Tracé 75" d="M4901.756,3144.133l9,8.949,14.745-14.667" transform="translate(-4900.346 -3136.997)" fill="none" stroke="#61A09B" stroke-width="5"/></svg>
                        <span>Ce sujet a été marqué comme résolu&nbsp;!</span>
                    </div>
                <?php endif ;?>
                    <?php
                    $comments = get_comments( array('post_id' => get_the_ID(), 'orderby' => 'comment_date_gmt', 'status' => 'approve', 'number' => 1));
                    $lastCommentId = $comments[0]->comment_ID;
                      ?>
                    <div class="thread__meta">
                        <div class="post__category category--blue">
                            <a href=""><?php the_field('taxo');?></a>
                        </div>
                        <?php if ( !wp_count_comments(get_the_ID())->approved == 0):?>
                            <time datetime="c" class="thread__date icon__align">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"><g transform="translate(0.5 0.5)"><rect width="12" height="12" rx="2" transform="translate(0 1)" stroke-width="1" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" fill="none"/><line y2="3" transform="translate(8)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><line y2="3" transform="translate(3)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><line x2="12" transform="translate(0 5)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></svg>
                                <span>Dernière réponse&nbsp;: <time datetime="c"><?= get_comment_date($d = 'j F Y', $lastCommentId) ?></time></span>
                            </time>
                        <?php else:?>
                            <time datetime="c" class="thread__date icon__align">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"><g transform="translate(0.5 0.5)"><rect width="12" height="12" rx="2" transform="translate(0 1)" stroke-width="1" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" fill="none"/><line y2="3" transform="translate(8)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><line y2="3" transform="translate(3)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><line x2="12" transform="translate(0 5)" fill="none" stroke="#4f4f4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></svg>
                                <span>Sujet posté le&nbsp;: <time datetime="c"><?= get_the_date();?></time></span>
                            </time>
                        <?php endif;?>
                        <div class="comments__count">
                            <a class="icon__align" href="<?php the_permalink(); ?>#anchor__comment">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#8b8b8b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                <span><?= wp_count_comments(get_the_ID())->approved; ?></span>
                            </a>
                        </div>
                    </div>

                    <div class="single__thread__main">

                        <div class="single__thread__meta">
                            <div class="thread__img">
                                <img src="<?= esc_url( get_avatar_url( get_the_author_meta('ID') ) ); ?>">
                            </div>
                        </div>
                        <div>
                            <p class="thread__author"><?php the_author() ?></p>
                            <time datetime="c"><?= get_the_date() ?></time>
                            <div class="thread__content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <div id="anchor__comment" class="thread__respond post__comment--width">

                        <div class="post__comment__container">

                            <div class="comments__wp">
                                <?php if (wp_count_comments(get_the_ID())->approved == 0):?>
                                    <div class="comments__empty">
                                        <p>Ce sujet n'a pas encore de réponse</p>
                                    </div>
                                <?php endif;?>
                                <?php comments_template('/custom-comments.php'); ?>
                                <div class="syntax__codes">
                                    <p>Pour ajouter une coloration syntaxique, copier coller les raccourcis suivants&nbsp;:</p>
                                    <ul>
                                        <li class="syntax__codes__item">Code&nbsp;: <span>[code]&hellip;[/code]</span></li>
                                        <li class="syntax__codes__item">HTML&nbsp;: <span>[code=html]&hellip;[/code]</span></li>
                                        <li class="syntax__codes__item">CSS&nbsp;: <span>[code=css]&hellip;[/code]</span></li>
                                        <li class="syntax__codes__item">PHP&nbsp;: <span>[code=php]&hellip;[/code]</span></li>
                                        <li class="syntax__codes__item">JAVASCRIPT&nbsp;: <span>[code=javascript]&hellip;[/code]</span></li>
                                        <li class="syntax__codes__item">MySQL&nbsp;: <span>[code=sql]&hellip;[/code]</span></li>
                                    </ul>
                                </div>
                            </div>
                            <?php if( ! is_user_logged_in()):?>
                                <div class="section__info section__info--alert">
                                    <p>Vous devez êter connecté pour répondre</p>
                                </div>
                                <div>
                                    <div class="login__form">
                                        <?php wp_login_form(array( 'redirect' => 'http://localhost' . $_SERVER['REQUEST_URI'], ) ); ?>
                                    </div>

                                    <div class="other__link">
                                        <a href="<?= wa_get_page_url('template-register.php') ;?>">Me créer un compte</a>
                                        <a href="<?= wp_lostpassword_url(); ?>">Mot de passe oublié !</a>
                                    </div>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
             </section>

            <div class="thread_aside">
                <aside>
                    <?php
                    $taxo = get_field( 'taxo' );
                    $cat = new WP_Query( [
                        'post_type'         =>'forum',
                        'showposts'         => 3,
                        'post__not_in'      => array ( get_the_ID() ),
                        'meta_query'        => array (
                            array (
                                'key'           => 'taxo',
                                'value'         => $taxo,
                                'compare'       => 'IN',
                            )
                        )
                    ] );

                    if ( $cat->have_posts() ) :?>
                    <h2 aria-level="2" role="heading" class="aside__title">Les derniers sujets de la même catégorie</h2>
                    <div class="thread_aside__container">
                        <?php while ( $cat->have_posts() ) : $cat->the_post(); ?>
                            <div class="thread_aside__content">
                                <div>
                                    <h3 aria-level="3" role="heading" class="aside__post__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <p class="thread__date">Par <span class="post__author"><?php the_author_posts_link(); ?></span>, le <time datetime="c"><?= get_the_date(); ?></time</p>
                                    <div class="thread__excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                                <div>
                                    <a class="button__more--arrow" href="<?php the_permalink(); ?>">
                                        Voir le sujet<span class="sr_only"> <?php the_title(); ?></span>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>
                </aside>
            </div>
        <?php endwhile; endif; ?>
    </main>
    <footer class="skew--pink">
<?php get_footer();?>