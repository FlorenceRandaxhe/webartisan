<form class="icon__align" id="searchform" method="get" action="<?= home_url('/'); ?>">
    <label class="search__label" for="search">
        <span class="sr_only">Rechercher</span>
    </label>
    <input type="search" class="search-field" name="s" id="s" placeholder="Rechercher" value="<?php the_search_query(); ?>">
    <button type="submit" class="search__button__icon">
        <span class="sr_only">Rechercher</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3a3a3a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="svg__icon svg__icon--black"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
    </button>
</form>