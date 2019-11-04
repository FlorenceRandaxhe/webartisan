<?php
/*
    404 page
    Error page
*/
get_header();
?>
    <main>
        <section class="no_page">
            <div class="no_page_container">
                <div>
                    <h2 aria-level="2" role="heading">Page introuvable</h2>
                    <p>La page que vous recherchez semble introuvable.</p>
                    <a href="<?= get_home_url(); ?>" class="button--blue">Retourner à la page d'accueil</a>
                </div>
                <div class="page_404">
                    <svg xmlns="http://www.w3.org/2000/svg" width="516.235" height="376.392" viewBox="0 0 516.235 376.392"><g transform="translate(81.61 88.103)"><rect width="353.589" height="214.467" rx="5.206" transform="translate(13.397 13.452)" fill="#fff"/><rect width="353.589" height="214.467" rx="5.206" transform="translate(0 0)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><rect width="353.589" height="33.054" rx="3.998" transform="translate(0 0)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(11.219 7.495)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(43.792 7.495)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><ellipse cx="9.41" cy="9.41" rx="9.41" ry="9.41" transform="translate(76.365 7.495)" fill="none" stroke="#192a36" stroke-miterlimit="10" stroke-width="5"/><text transform="translate(45.928 172.324)" stroke="#161615" stroke-miterlimit="10" stroke-width="5" font-size="133" font-family="WorkSans-ExtraBold, Work Sans" font-weight="800" fill="none"><tspan x="0" y="0">404</tspan></text></g><g transform="translate(13.557 338.644)" fill="none" stroke="#192a36" stroke-width="3"><ellipse cx="9.611" cy="9.611" rx="9.611" ry="9.611" stroke="none"/><ellipse cx="9.611" cy="9.611" rx="8.111" ry="8.111" fill="none"/></g><path d="M0,0H19.366" transform="translate(490.077 320.35) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H19.366" transform="translate(503.77 320.349) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><g transform="translate(352.592)" fill="none" stroke="#192a36" stroke-width="3"><ellipse cx="9.611" cy="9.611" rx="9.611" ry="9.611" stroke="none"/><ellipse cx="9.611" cy="9.611" rx="8.111" ry="8.111" fill="none"/></g><path d="M0,0H21.951" transform="translate(2.122 63.841) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H21.951" transform="translate(17.645 63.842) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><ellipse cx="6.607" cy="6.607" rx="6.607" ry="6.607" transform="translate(255.965 363.178)" fill="#1d2a34"/><g transform="translate(478.008 153.464) rotate(-45)" fill="none" stroke-linecap="round"><path d="M11.811,4.558a3,3,0,0,1,5.209,0L26.267,20.74a3,3,0,0,1-2.6,4.488H5.17a3,3,0,0,1-2.6-4.488Z" stroke="none"/><path d="M 14.41613483428955 6.046688079833984 L 14.41614437103271 6.046697616577148 L 5.169544219970703 22.22823715209961 C 5.16954231262207 22.22824096679688 5.169540405273438 22.22824478149414 5.169538497924805 22.22824668884277 C 5.169540405273438 22.22824668884277 5.16954231262207 22.22824668884277 5.169544219970703 22.22824668884277 L 23.66274452209473 22.22824668884277 L 14.41613483428955 6.046688079833984 M 14.41614437103271 3.046689987182617 C 15.43058967590332 3.046689987182617 16.44503402709961 3.550552368164063 17.0208740234375 4.558277130126953 L 26.26747512817383 20.73982620239258 C 27.41031455993652 22.73979759216309 25.96621513366699 25.22824668884277 23.66274452209473 25.22824668884277 L 5.169544219970703 25.22824668884277 C 2.866073608398438 25.22824668884277 1.421974182128906 22.73979759216309 2.564804077148438 20.73982620239258 L 11.81141471862793 4.558277130126953 C 12.38725471496582 3.550552368164063 13.40169906616211 3.046689987182617 14.41614437103271 3.046689987182617 Z" stroke="none" fill="#192a36"/></g></svg>
                </div>
            </div>
        </section>
    </main>
    <footer>
<?php get_footer();?>