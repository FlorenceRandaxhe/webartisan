        <div class="svg__footer">
            <svg class="svg__footer__left" xmlns="http://www.w3.org/2000/svg" width="158.899" height="313.856" viewBox="0 0 188.899 343.856"><path d="M-7.5,35a18.384,18.384,0,0,1-7.2-1.454,18.438,18.438,0,0,1-5.88-3.965,18.438,18.438,0,0,1-3.965-5.88A18.384,18.384,0,0,1-26,16.5a18.384,18.384,0,0,1,1.454-7.2,18.438,18.438,0,0,1,3.965-5.88A18.438,18.438,0,0,1-14.7-.546,18.384,18.384,0,0,1-7.5-2,18.384,18.384,0,0,1-.3-.546a18.438,18.438,0,0,1,5.88,3.965A18.438,18.438,0,0,1,9.546,9.3,18.384,18.384,0,0,1,11,16.5a18.384,18.384,0,0,1-1.454,7.2,18.438,18.438,0,0,1-3.965,5.88A18.438,18.438,0,0,1-.3,33.546,18.384,18.384,0,0,1-7.5,35Zm.147-27.016a8.672,8.672,0,0,0-8.663,8.662A8.673,8.673,0,0,0-7.353,25.31a8.672,8.672,0,0,0,8.662-8.663A8.672,8.672,0,0,0-7.353,7.984Z" transform="translate(26 125)" fill="#1d2a34"/><path d="M-7.316,44a4,4,0,0,1-4-4V21.316H-30a4,4,0,0,1-4-4V6.683a4,4,0,0,1,4-4h18.683V-16a4,4,0,0,1,4-4H3.317a4,4,0,0,1,4,4V2.684H26a4,4,0,0,1,4,4V17.317a4,4,0,0,1-4,4H7.316V40a4,4,0,0,1-4,4Z" transform="translate(136.573 288.701) rotate(-45)" fill="#1d2a34"/><circle cx="10.5" cy="10.5" r="10.5" transform="translate(137)" fill="#1d2a34"/></svg>
            <svg class="svg__footer__right" xmlns="http://www.w3.org/2000/svg" width="107" height="315.669" viewBox="0 0 137 345.669"><circle cx="10.5" cy="10.5" r="10.5" transform="translate(116 188.148)" fill="#1d2a34"/><path d="M-16.177,19a4,4,0,0,1-4-4V5.178H-30a4,4,0,0,1-4-4V-2.177a4,4,0,0,1,4-4h9.823V-16a4,4,0,0,1,4-4h3.354a4,4,0,0,1,4,4v9.824H1a4,4,0,0,1,4,4V1.177a4,4,0,0,1-4,4H-8.823V15a4,4,0,0,1-4,4Z" transform="translate(72.029 17.678) rotate(-45)" fill="#1d2a34"/><path d="M-22.431,7a2,2,0,0,1-2-2v-7.57H-32a2,2,0,0,1-2-2V-8.43a2,2,0,0,1,2-2h7.57V-18a2,2,0,0,1,2-2h3.861a2,2,0,0,1,2,2v7.57H-9a2,2,0,0,1,2,2v3.861a2,2,0,0,1-2,2h-7.57V5a2,2,0,0,1-2,2Z" transform="translate(38.184 316.678) rotate(-45)" fill="#1d2a34"/></svg>
        </div>
        <div class="btn__top">
			<a href="#" class="button__more--rounded">
				<span class="sr_only">Haut de page</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"><g transform="translate(0 56) rotate(-90)"><g transform="translate(56) rotate(90)" fill="#fff" stroke="#1D2A34" stroke-width="2"><circle class="button__svg" cx="28" cy="28" r="27" fill="none"/></g><g transform="translate(20 16)"><path class="arrow--white" d="M-12,0H7.73" transform="translate(9.27 12)" fill="none" stroke="#1D2A34" stroke-linecap="round" stroke-width="2"/><path class="arrow--white" d="M12,6l7,6-7,6" fill="none" stroke="#1D2A34" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>
			</a>
		</div>
		<section class="footer__top">
			<h2 aria-level="2" role="heading" class="footer__title">
				Abonnez-vous à notre newsletter pour ne rien louper de l'actualité du web&nbsp;!
			</h2>
			<div class="footer__newsletter">
				<form method="post" action="#" class="form__newsletter">
					<label class="subscribe__label" for="newsletter__email">
						<span class="sr_only">Email</span>
					</label>
					<input class="input__newsletter" type="email" name="newsletter__email" id="newsletter__email" placeholder="Entrez-votre email">
                    <button class="button_newsletter button--blue">S'abonner<span class="sr_only"> à la newsletter</span></button>
                </form>
			</div>
		</section>
		<div class="footer__bottom">
			<nav class="footer__nav">
				<h2 aria-level="2" role="heading" class="sr_only">Navigation secondaire</h2>
				<ul class="nav">
                    <?php foreach ( wa_getMenu( 'footer' ) as $item ): ?>
                        <li class="nav__item"><a href="<?= $item->url; ?>" class="nav__link"><?= $item->label; ?></a></li>
                    <?php endforeach; ?>
				</ul>
				<ul class="nav">
					<li class="nav__item"><a href="<?= wa_get_page_url( 'template-plan.php' ) ;?>" class="nav__link">Plan du site</a></li>
					<li class="nav__item"><a href="<?= wa_get_page_url( 'template-legal.php' ) ;?>" class="nav__link">Informations légales</a></li>
					<li class="nav__item"><a href="http://florence-randaxhe.com/" class="nav__link">Florence Randaxhe</a></li>
				</ul>
			</nav>
		</div>
	</footer>
        <?php wp_footer(); ?>
</body>
</html>