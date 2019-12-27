<?php if(is_404()):?>
<h1 aria-level="1" role="heading" class="sr_only">
    Page 404<span class="sr_only"> - <?= get_bloginfo('name');?></span>
</h1>

<?php elseif(is_author()):
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
<h1 aria-level="1" role="heading" class="sr_only">
    <?= $curauth->nickname; ?><span class="sr_only"> - <?= get_bloginfo('name');?></span>
</h1>

<?php elseif(is_tax()): ?>
<h1 aria-level="1" role="heading" class="sr_only">
    <?php single_cat_title(); ?><span class="sr_only"> - <?= get_bloginfo('name');?></span>
</h1>

<?php  elseif(is_search()):?>
<h1 aria-level="1" role="heading" class="sr_only">
    Recherche - <?= get_bloginfo('name');?></span>
</h1>

<?php elseif(is_page_template(array('template-parts/template-plan.php', 'template-parts/template-login.php', 'template-parts/template-register.php', 'template-parts/template-profile.php', 'template-parts/template-about.php', 'template-parts/template-legal.php'))):?>
 <h1 aria-level="1" role="heading" class="sr_only">
     <?php the_title(); ?><span class="sr_only"> - <?= get_bloginfo('name');?></span>
 </h1>
<?php endif;?>

