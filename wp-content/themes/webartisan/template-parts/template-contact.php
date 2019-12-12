<?php
/*
    Template Name: Contact
*/
get_header();

?>
    <main class="contact main--top main--bottom">
        <section class="section__contact">
            <h2 aria-level="2" role="heading" class="sr_only section__contact__title">
                Formulaire de contact
            </h2>
            <div class="contact__container">
                <?php if($_GET['mail'] == 'success'): ?>

                <div class="feedback__success">
                    <p class="section__info--success">Votre mail a bien été envoyé</p>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="306.188" height="225.154" viewBox="0 0 406.188 325.154">
                            <g id="Ellipse_70" data-name="Ellipse 70" transform="translate(20.188 279.154)" fill="none" stroke="#192a36" stroke-width="3">
                                <circle cx="8" cy="8" r="8" stroke="none"/>
                                <circle cx="8" cy="8" r="6.5" fill="none"/>
                            </g>
                            <path id="Tracé_124" data-name="Tracé 124" d="M0,0H16.12" transform="translate(309.808 2.122) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                            <path id="Tracé_125" data-name="Tracé 125" d="M0,0H16.12" transform="translate(321.206 2.121) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                            <g id="Ellipse_71" data-name="Ellipse 71" transform="translate(390.188 179.154)" fill="none" stroke="#192a36" stroke-width="3">
                                <circle cx="8" cy="8" r="8" stroke="none"/>
                                <circle cx="8" cy="8" r="6.5" fill="none"/>
                            </g>
                            <path id="Tracé_126" data-name="Tracé 126" d="M0,0H18.272" transform="translate(2.122 63.121) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                            <path id="Tracé_127" data-name="Tracé 127" d="M0,0H18.272" transform="translate(15.043 63.121) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/>
                            <circle id="Ellipse_72" data-name="Ellipse 72" cx="5.5" cy="5.5" r="5.5" transform="translate(232.188 314.154)" fill="#1d2a34"/>
                            <path id="Union_9" data-name="Union 9" d="M129.3,183.412a12.958,12.958,0,0,1-9.118-3.807q-.252-.252-.487-.514L9.193,68.59A13,13,0,0,1,27.577,50.2l101.81,101.81L272.209,9.193a13,13,0,0,1,18.385,18.384L139.089,179.082q-.239.267-.5.524a12.96,12.96,0,0,1-9.192,3.807Z" transform="translate(55.735 75.255)" fill="#99c1d0"/>
                            <g id="Union_10" data-name="Union 10" transform="translate(50.735 67.255)" fill="none" stroke="#192a36" stroke-width="3">
                                <path d="M129.3,183.412a12.958,12.958,0,0,1-9.118-3.807q-.252-.252-.487-.514L9.193,68.59A13,13,0,0,1,27.577,50.2l101.81,101.81L272.209,9.193a13,13,0,0,1,18.385,18.384L139.089,179.082q-.239.267-.5.524a12.96,12.96,0,0,1-9.192,3.807Z"/>
                                <path d="M 129.4006652832031 180.4127960205078 C 132.0716705322266 180.4127960205078 134.5828552246094 179.3727569580078 136.4715118408203 177.4844970703125 C 136.6022491455078 177.3537139892578 136.7310943603516 177.2176513671875 136.8544769287109 177.0799560546875 L 136.9092864990234 177.0187530517578 L 136.9673919677734 176.9606781005859 L 288.4724731445313 25.45560455322266 C 292.3713684082031 21.55672073364258 292.3713684082031 15.21279811859131 288.4725036621094 11.31395149230957 C 286.5837097167969 9.425144195556641 284.0723876953125 8.384951591491699 281.4012145996094 8.384951591491699 C 278.7300415039063 8.384951591491699 276.21875 9.425144195556641 274.3299255371094 11.31391334533691 L 131.5080108642578 154.1358337402344 L 129.3867034912109 156.2571868896484 L 127.2653961181641 154.1358337402344 L 25.4555492401123 52.32602691650391 C 23.56678009033203 50.43722152709961 21.05566596984863 49.39702987670898 18.38474273681641 49.39702987670898 C 15.71385765075684 49.39702987670898 13.20270347595215 50.43722152709961 11.31389617919922 52.32602691650391 C 7.414819240570068 56.22514343261719 7.414819240570068 62.56945037841797 11.31389617919922 66.46860504150391 L 121.8146286010742 176.9693298339844 L 121.8715896606445 177.0262603759766 L 121.9253997802734 177.086181640625 C 122.0472030639648 177.2218322753906 122.1739349365234 177.3556060791016 122.3018951416016 177.4835662841797 C 124.1755523681641 179.3572235107422 126.6664352416992 180.3973693847656 129.3189697265625 180.4124450683594 C 129.3462829589844 180.4126434326172 129.3733215332031 180.4127960205078 129.4006652832031 180.4127960205078 M 129.4006652832031 183.4127960205078 C 129.3665466308594 183.4127960205078 129.3327789306641 183.4126129150391 129.2986602783203 183.4123687744141 C 125.9963989257813 183.3936004638672 122.7001647949219 182.1244506835938 120.1805877685547 179.6049194335938 C 120.0126647949219 179.4369506835938 119.8501281738281 179.2652587890625 119.6933212280273 179.0906372070313 L 9.192588806152344 68.58991241455078 C 4.115703582763672 63.51298904418945 4.115703582763672 55.2816047668457 9.192588806152344 50.20471954345703 C 11.73104953765869 47.666259765625 15.05790519714355 46.39702987670898 18.38475608825684 46.39702987670898 C 21.71160697937012 46.39702987670898 25.03845405578613 47.666259765625 27.57689666748047 50.20471954345703 L 129.3867034912109 152.0145263671875 L 272.2086181640625 9.192605018615723 C 274.7470703125 6.654163360595703 278.0741271972656 5.384942054748535 281.4012145996094 5.384942054748535 C 284.728271484375 5.384942054748535 288.0553588867188 6.654163360595703 290.5938110351563 9.192605018615723 C 295.6707153320313 14.26949024200439 295.6707153320313 22.49999046325684 290.5938110351563 27.57691383361816 L 139.0886993408203 179.0819854736328 C 138.92919921875 179.2599945068359 138.7638549804688 179.4347534179688 138.5928192138672 179.6058044433594 C 136.0543518066406 182.143798828125 132.7275085449219 183.4127960205078 129.4006652832031 183.4127960205078 Z"/>
                            </g>
                        </svg>
                    </div>
                    <div class="feedback__link">
                        <a class="button--outline" href="<?= home_url();?>">Retourner à la page d'acceuil</a>
                    </div>
                </div>
                <?php unset($_SESSION['mail']); ?>
                <?php else:?>

                    <form action="#" method="post">
                        <input type="hidden" name="wa_contact_form" value="<?= wa_contact_form();?>">

                        <?php if($contactForm->errors['name']): ?>
                            <div>
                                <p class="section__info--alert"><?= $contactForm->errors['name'];?></p>
                            </div>
                        <?php endif; ?>
                        <div>
                            <label for="name" class="form__label form__label--block">Nom</label>
                            <input type="text" id="name" name="name" class="input--wide">
                        </div>
                        <?php if($contactForm->errors['subject']): ?>
                            <div>
                                <p class="section__info--alert"><?= $contactForm->errors['subject'];?></p>
                            </div>
                        <?php endif; ?>
                        <div>
                            <label for="subject" class="form__label form__label--block">Sujet</label>
                            <input type="text" id="subject" name="subject" class="input--wide">
                        </div>
                        <?php if($contactForm->errors['email']): ?>
                            <div>
                                <p class="section__info--alert"><?= $contactForm->errors['email'];?></p>
                            </div>
                        <?php endif; ?>
                        <div>
                            <label for="email" class="form__label form__label--block">Email</label>
                            <input type="email" id="email" name="email" class="input--wide">
                        </div>
                        <?php if($contactForm->errors['message']): ?>
                            <div>
                                <p class="section__info--alert"><?= $contactForm->errors['message'];?></p>
                            </div>
                        <?php endif; ?>
                        <div>
                            <label for="message" class="form__label form__label--block">Message</label>
                            <textarea name="message" class="input--wide"></textarea>
                        </div>
                        <div>
                            <button name="send" class="button--blue button__contact">Envoyer</button>
                        </div>
                    </form>
                <?php endif; ?>
            </div>
        </section>
    </main>
    <footer class="skew--yellow">
<?php get_footer();?>
