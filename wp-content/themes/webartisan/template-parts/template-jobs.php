<?php
/*
    Template Name: Jobs
*/
get_header();
$currentPage = get_query_var('paged');
$jobs = new WP_Query(array('post_type'=>'emplois', 'order'=>'DESC', 'order_by'=>'date', 'posts_per_page' => 15, 'paged' => $currentPage));
job_filter( $jobs );
?>
    <main class="jobs main--top main--bottom">
        <section class="section__jobs">

            <div class="jobs__container" id="job_search">
                <h2 aria-level="2" role="heading" class="section__jobs__title">
                    Toutes les offres d'emploi et de stage
                </h2>

                <div class="section__jobs__content">
                    <div class="jobs__filter">
                        <form action="#job_search" method="get">
                            <div>
                                <label for="town" class="form__label form__label--block">Ville</label>
                                <input type="text" name="town" id="town" class="input--wide" value="<?= $_GET['town']; ?>" placeholder="ex&nbsp;: Liège,&hellip;">
                            </div>
                            <div>
                                <label for="country" class="form__label form__label--block">Pays</label>
                                <input type="text" name="country" id="country" class="input--wide" value="<?= $_GET['country']; ?>" placeholder="ex&nbsp;: Belgique,&hellip;">
                            </div>
                            <div class="form__checkbox">
                                <input type="checkbox" name="fullTime" id="fullTime" class="checkbox" value="Temps plein">
                                <label for="fullTime" class="form__label switch">Temps plein</label>
                            </div>
                            <div class="form__checkbox">
                                <input type="checkbox" name="partTime" id="partTime" class="checkbox" value="Temps partiel">
                                <label for="partTime" class="form__label switch">Temps partiel</label>
                            </div>
                            <div class="form__checkbox">
                                <input type="checkbox" name="internship" id="internship" class="checkbox" value="Stage">
                                <label for="internship" class="form__label switch">Stage</label>
                            </div>
                            <button class="button--blue button--wide">Rechercher</button>
                        </form>
                    </div>
                <?php if ($jobs->have_posts()) :?>

                    <div class="jobs__list">

                    <?php while ($jobs->have_posts()) : $jobs->the_post(); ?>
                        <article class="job">
                            <a href="<?php the_field('link'); ?>" class="job__link">
                                <span class="sr_only">Voir l'offre d'emploi : <?php the_title();?> de l'agence <?php the_field('agency'); ?></span>
                            </a>
                            <div class="job__content">
                                <div class="job__img__container">
                                    <?php if ( has_post_thumbnail() ): ?>
                                        <figure class="post__img" >
                                            <img src="<?php the_post_thumbnail_url('job-thumb'); ?>" alt="<?php the_title(); ?>" width="60" height="60">
                                        </figure>
                                    <?php else: endif; ?>
                                </div>
                                <div class="job__text">
                                    <div class="job__top">
                                        <h3 aria-level="3" role="heading" class="job__title">
                                            <?php the_title(); ?>
                                        </h3>
                                        <time datetime="c" class="job__date icon__align">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><g id="clock" transform="translate(-1.5 -1.609)"><circle id="Ellipse_15" data-name="Ellipse 15" cx="7.5" cy="7.5" r="7.5" transform="translate(2 2.109)" stroke-width="1" stroke="#7e7e7e" stroke-linecap="round" stroke-linejoin="round" fill="none"/><path id="Tracé_27" data-name="Tracé 27" d="M12,6v4.533l3.022,1.511" transform="translate(-2.445 -0.978)" fill="none" stroke="#7e7e7e" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></svg>
                                            <span><?= get_the_date() ?></span>
                                        </time>
                                    </div>
                                    <div class="job__meta">
                                        <p class="job__agency">
                                            <?php the_field('agency'); ?>
                                        </p>
                                        <p class="job__type icon__align">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15.053" viewBox="0 0 17 15.053"><g id="briefcase" transform="translate(-1.5 -2.5)" opacity="0.54"><rect id="Rectangle_67" data-name="Rectangle 67" width="16" height="11" rx="2" transform="translate(2 6.053)" stroke-width="1" stroke="#000" stroke-linecap="round" stroke-linejoin="round" fill="none"/><path id="Tracé_26" data-name="Tracé 26" d="M14.246,17.053V4.561A1.561,1.561,0,0,0,12.684,3H9.561A1.561,1.561,0,0,0,8,4.561V17.053" transform="translate(-1.316)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></svg>
                                            <span>
                                                <?php the_field('type'); ?>
                                            </span>
                                        </p>
                                        <p class="job__place icon__align">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12.96" height="15.618" viewBox="0 0 12.96 15.618"><g id="map-pin" transform="translate(-2.5 -0.5)" opacity="0.54"><path id="Tracé_25" data-name="Tracé 25" d="M14.96,6.98c0,4.651-5.98,8.638-5.98,8.638S3,11.632,3,6.98a5.98,5.98,0,1,1,11.96,0Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><circle id="Ellipse_14" data-name="Ellipse 14" cx="2" cy="2" r="2" transform="translate(7 4.618)" stroke-width="1" stroke="#000" stroke-linecap="round" stroke-linejoin="round" fill="none"/></g></svg>
                                            <span>
                                                <?php the_field('town'); ?>,  <?php the_field('country'); ?>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="list__container">
                                <?php $myString = get_field('skills');
                                $skills = explode(',', $myString); ?>

                                <ul>
                                <?php foreach($skills as $skill):?>
                                    <li class="list__item category--white"><?= $skill;?></li>
                                <?php endforeach;?>
                                </ul>
                            </div>
                        </article>
                    <?php endwhile; ?>
                        <div class="pagination_links">
                            <?= paginate_links(array(
                                'total' => $jobs->max_num_pages,
                                'end_size' => 1,
                                'mid_size' => 3,
                                'prev_text' => '&#171; Précédent',
                                'next_text' => 'Suivant &#187;',
                            )); ?>
                        </div>
                    </div>

                <?php else: ?>
                    <div class="section__empty">
                    <p>On dirait qu'il n'y a pas d'offre d'emploi qui correspondent à votre recherche pour le moment&nbsp;!</p>
                    <p>Si vous travaillez dans le web et que vous cherchez à engager, <a href="<?= wa_get_page_url('template-addJob.php');?>">n'hésitez pas à poster une offre</a></p>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="416.234" height="276.392" viewBox="0 0 516.234 376.392"><rect width="353.589" height="214.467" rx="5.206" transform="translate(95.006 101.556)" fill="#99c1d0"/><rect width="353.589" height="214.467" rx="5.206" transform="translate(81.609 88.103)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><rect width="353.589" height="33.054" rx="3.998" transform="translate(81.609 88.103)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(92.828 95.599)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(125.402 95.599)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(157.975 95.599)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><g transform="translate(13.557 338.644)" fill="none" stroke="#192a36" stroke-width="3"><ellipse cx="9.611" cy="9.611" rx="9.611" ry="9.611" stroke="none"/><ellipse cx="9.611" cy="9.611" rx="8.111" ry="8.111" fill="none"/></g><path d="M0,0H19.366" transform="translate(490.076 320.35) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H19.366" transform="translate(503.77 320.349) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><g transform="translate(352.592)" fill="none" stroke="#192a36" stroke-width="3"><ellipse cx="9.611" cy="9.611" rx="9.611" ry="9.611" stroke="none"/><ellipse cx="9.611" cy="9.611" rx="8.111" ry="8.111" fill="none"/></g><path d="M0,0H21.951" transform="translate(2.121 63.841) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H21.951" transform="translate(17.645 63.842) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><ellipse cx="6.607" cy="6.607" rx="6.607" ry="6.607" transform="translate(255.965 363.178)" fill="#1d2a34"/><g transform="translate(478.008 153.464) rotate(-45)" fill="none" stroke-linecap="round"><path d="M11.811,4.558a3,3,0,0,1,5.209,0L26.267,20.74a3,3,0,0,1-2.6,4.488H5.17a3,3,0,0,1-2.6-4.488Z" stroke="none"/><path d="M 14.41613483428955 6.046688079833984 L 14.41614437103271 6.046697616577148 L 5.169544219970703 22.22823715209961 C 5.16954231262207 22.22824096679688 5.169540405273438 22.22824478149414 5.169538497924805 22.22824668884277 C 5.169540405273438 22.22824668884277 5.16954231262207 22.22824668884277 5.169544219970703 22.22824668884277 L 23.66274452209473 22.22824668884277 L 14.41613483428955 6.046688079833984 M 14.41614437103271 3.046689987182617 C 15.43058967590332 3.046689987182617 16.44503402709961 3.550552368164063 17.0208740234375 4.558277130126953 L 26.26747512817383 20.73982620239258 C 27.41031455993652 22.73979759216309 25.96621513366699 25.22824668884277 23.66274452209473 25.22824668884277 L 5.169544219970703 25.22824668884277 C 2.866073608398438 25.22824668884277 1.421974182128906 22.73979759216309 2.564804077148438 20.73982620239258 L 11.81141471862793 4.558277130126953 C 12.38725471496582 3.550552368164063 13.40169906616211 3.046689987182617 14.41614437103271 3.046689987182617 Z" stroke="none" fill="#192a36"/></g><ellipse cx="10.607" cy="10.607" rx="10.607" ry="10.607" transform="translate(193.965 169.696)" fill="#1d2a34"/><path d="M17941.3-1034.041s61.564-27.787,123.629,0" transform="translate(-17746.879 1296.696)" fill="none" stroke="#1d2a34" stroke-linecap="round" stroke-width="4"/><ellipse cx="10.607" cy="10.607" rx="10.607" ry="10.607" transform="translate(296.965 169.696)" fill="#1d2a34"/></svg>
                    </div>
                </div>
                <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
    <footer class="skew--blue">
<?php get_footer();?>
