<?php
if ( is_front_page() ): get_template_part('partials/headers/hero', 'home');
elseif(is_single()): get_template_part('partials/headers/hero', 'single');

elseif(is_404() || is_author() || is_tax() || is_search() || is_page_template(array(
    'template-parts/template-plan.php',
    'template-parts/template-login.php',
    'template-parts/template-register.php',
    'template-parts/template-profile.php',
    'template-parts/template-about.php',
    'template-parts/template-legal.php'))):
    get_template_part('partials/headers/hero', 'template');

elseif(is_page_template(array(
    'template-parts/template-blog.php',
    'template-parts/template-tuto.php',
    'template-parts/template-forum.php',
    'template-parts/template-jobs.php',
    'template-parts/template-ressources.php',
    'template-parts/template-doc.php',
    'template-parts/template-contact.php',
    'template-parts/template-addJob.php',
    'template-parts/template-newForum.php'))):
    get_template_part('partials/headers/hero', 'section');
else: ?>
    <div>
        <h1 aria-level="1" role="heading" class="no_page__title">
            <?php the_title(); ?><span class="sr_only"> - <?= get_bloginfo('name');?></span>
        </h1>
        <?php $intro = get_field('intro'); if($intro):?>
            <div class="hero__intro">
                <p>
                    <?php the_field('intro');?>
                </p>
            </div>
        <?php endif;?>
    </div>
<?php endif; ?>
