<?php
/*
    Template Name: Add Job
*/
get_header();

?>
    <main class="job__add main--top main--bottom">
        <section class="section__job__add" id="success">
            <h2 aria-level="2" role="heading" class="sr_only section__jobs__title">
                Ajouter une offre d'emploi
            </h2>

            <div class="job__add__container">
                <?php if($_GET['add'] == 'success'): ?>
                    <div class="feedback__success">
                        <p class="section__info--success">Votre annonce a bien été ajoutée</p>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="306.188" height="225.154" viewBox="0 0 406.188 325.154"><g transform="translate(20.188 279.154)" fill="none" stroke="#192a36" stroke-width="3"><circle cx="8" cy="8" r="8" stroke="none"/><circle cx="8" cy="8" r="6.5" fill="none"/></g><path d="M0,0H16.12" transform="translate(309.808 2.122) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H16.12" transform="translate(321.206 2.121) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><g transform="translate(390.188 179.154)" fill="none" stroke="#192a36" stroke-width="3"><circle cx="8" cy="8" r="8" stroke="none"/><circle cx="8" cy="8" r="6.5" fill="none"/></g><path d="M0,0H18.272" transform="translate(2.122 63.121) rotate(45)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><path d="M0,0H18.272" transform="translate(15.043 63.121) rotate(135)" fill="none" stroke="#192a36" stroke-linecap="round" stroke-width="3"/><circle cx="5.5" cy="5.5" r="5.5" transform="translate(232.188 314.154)" fill="#1d2a34"/><path d="M129.3,183.412a12.958,12.958,0,0,1-9.118-3.807q-.252-.252-.487-.514L9.193,68.59A13,13,0,0,1,27.577,50.2l101.81,101.81L272.209,9.193a13,13,0,0,1,18.385,18.384L139.089,179.082q-.239.267-.5.524a12.96,12.96,0,0,1-9.192,3.807Z" transform="translate(55.735 75.255)" fill="#99c1d0"/><g transform="translate(50.735 67.255)" fill="none" stroke="#192a36" stroke-width="3"><path d="M129.3,183.412a12.958,12.958,0,0,1-9.118-3.807q-.252-.252-.487-.514L9.193,68.59A13,13,0,0,1,27.577,50.2l101.81,101.81L272.209,9.193a13,13,0,0,1,18.385,18.384L139.089,179.082q-.239.267-.5.524a12.96,12.96,0,0,1-9.192,3.807Z"/><path d="M 129.4006652832031 180.4127960205078 C 132.0716705322266 180.4127960205078 134.5828552246094 179.3727569580078 136.4715118408203 177.4844970703125 C 136.6022491455078 177.3537139892578 136.7310943603516 177.2176513671875 136.8544769287109 177.0799560546875 L 136.9092864990234 177.0187530517578 L 136.9673919677734 176.9606781005859 L 288.4724731445313 25.45560455322266 C 292.3713684082031 21.55672073364258 292.3713684082031 15.21279811859131 288.4725036621094 11.31395149230957 C 286.5837097167969 9.425144195556641 284.0723876953125 8.384951591491699 281.4012145996094 8.384951591491699 C 278.7300415039063 8.384951591491699 276.21875 9.425144195556641 274.3299255371094 11.31391334533691 L 131.5080108642578 154.1358337402344 L 129.3867034912109 156.2571868896484 L 127.2653961181641 154.1358337402344 L 25.4555492401123 52.32602691650391 C 23.56678009033203 50.43722152709961 21.05566596984863 49.39702987670898 18.38474273681641 49.39702987670898 C 15.71385765075684 49.39702987670898 13.20270347595215 50.43722152709961 11.31389617919922 52.32602691650391 C 7.414819240570068 56.22514343261719 7.414819240570068 62.56945037841797 11.31389617919922 66.46860504150391 L 121.8146286010742 176.9693298339844 L 121.8715896606445 177.0262603759766 L 121.9253997802734 177.086181640625 C 122.0472030639648 177.2218322753906 122.1739349365234 177.3556060791016 122.3018951416016 177.4835662841797 C 124.1755523681641 179.3572235107422 126.6664352416992 180.3973693847656 129.3189697265625 180.4124450683594 C 129.3462829589844 180.4126434326172 129.3733215332031 180.4127960205078 129.4006652832031 180.4127960205078 M 129.4006652832031 183.4127960205078 C 129.3665466308594 183.4127960205078 129.3327789306641 183.4126129150391 129.2986602783203 183.4123687744141 C 125.9963989257813 183.3936004638672 122.7001647949219 182.1244506835938 120.1805877685547 179.6049194335938 C 120.0126647949219 179.4369506835938 119.8501281738281 179.2652587890625 119.6933212280273 179.0906372070313 L 9.192588806152344 68.58991241455078 C 4.115703582763672 63.51298904418945 4.115703582763672 55.2816047668457 9.192588806152344 50.20471954345703 C 11.73104953765869 47.666259765625 15.05790519714355 46.39702987670898 18.38475608825684 46.39702987670898 C 21.71160697937012 46.39702987670898 25.03845405578613 47.666259765625 27.57689666748047 50.20471954345703 L 129.3867034912109 152.0145263671875 L 272.2086181640625 9.192605018615723 C 274.7470703125 6.654163360595703 278.0741271972656 5.384942054748535 281.4012145996094 5.384942054748535 C 284.728271484375 5.384942054748535 288.0553588867188 6.654163360595703 290.5938110351563 9.192605018615723 C 295.6707153320313 14.26949024200439 295.6707153320313 22.49999046325684 290.5938110351563 27.57691383361816 L 139.0886993408203 179.0819854736328 C 138.92919921875 179.2599945068359 138.7638549804688 179.4347534179688 138.5928192138672 179.6058044433594 C 136.0543518066406 182.143798828125 132.7275085449219 183.4127960205078 129.4006652832031 183.4127960205078 Z"/></g></svg>
                        </div>

                        <div class="feedback__link">
                            <a class="button--outline" href="<?= wa_get_page_url('template-jobs.php');?>">Voir la liste des offres d'emploi</a>
                            <a class="button--outline" href="<?= wa_get_page_url('template-addJob.php');?>">Ajouter une autre offre d'emploi</a>
                        </div>

                    </div>
                    <?php unset($_SESSION['success']); ?>

                <?php else:?>
                    <p class="job__add__intro">
                        Vous pouvez poster une offre d'emploi ou de stage dans le domaine du web uniquement
                    </p>
                        <form action="#" method="post"  enctype="multipart/form-data">
                             <div class="form__container">
                                 <input type="hidden" name="wa_new_job" value="<?= wa_new_job_form();?>">

                                 <div class="a">
                                     <?php if($newJobOffer->errors['job']): ?>
                                         <div class="section__info--alert">
                                             <p><?= $newJobOffer->errors['job'];?></p>
                                         </div>
                                     <?php endif; ?>
                                     <label for="job" class="form__label form__label--block">Intitulé du poste <b>*</b></label>
                                     <input type="text" id="job" name="job" class="input--wide">
                                 </div>

                                 <div class="c">
                                     <?php if($newJobOffer->errors['agency']): ?>
                                         <div class="section__info--alert">
                                             <p><?= $newJobOffer->errors['agency'];?></p>
                                         </div>
                                     <?php endif; ?>
                                     <label for="agency" class="form__label form__label--block">Nom de l'agence <b>*</b></label>
                                     <input type="text" id="agency" name="agency" class="input--wide">
                                 </div>

                                 <div class="d">
                                     <?php if($newJobOffer->errors['country']): ?>
                                         <div class="section__info--alert">
                                             <p><?= $newJobOffer->errors['country'];?></p>
                                         </div>
                                     <?php endif; ?>
                                     <label for="country" class="form__label form__label--block">Pays <b>*</b></label>
                                     <input type="text" id="country" name="country" class="input--wide">
                                 </div>

                                 <div class="f">
                                     <?php if($newJobOffer->errors['town']): ?>
                                         <div class="section__info--alert">
                                             <p><?= $newJobOffer->errors['town'];?></p>
                                         </div>
                                     <?php endif; ?>
                                     <label for="town" class="form__label form__label--block">Ville <b>*</b></label>
                                     <input type="text" id="town" name="town" class="input--wide">
                                 </div>

                                 <div class="e">
                                     <?php if($newJobOffer->errors['job_link']): ?>
                                         <div class="section__info--alert">
                                             <p><?= $newJobOffer->errors['job_link'];?></p>
                                         </div>
                                     <?php endif; ?>
                                     <label for="job_link" class="form__label form__label--block">Lien vers l'annonce <b>*</b></label>
                                     <input type="url" id="job_link" name="job_link" class="input--wide">
                                 </div>

                                 <div class="g">
                                     <?php if($newJobOffer->errors['skills']): ?>
                                         <div class="section__info--alert">
                                             <p><?= $newJobOffer->errors['skills'];?></p>
                                         </div>
                                     <?php endif; ?>
                                     <label for="skills" class="form__label form__label--block">Compétences <b>*</b> <b>(mots simples, séparés par une virgule)</b></label>
                                     <input type="text" id="skills" name="skills" class="input--wide">
                                 </div>

                                 <div class="b">
                                     <?php if($newJobOffer->errors['type']): ?>
                                         <div class="section__info--alert">
                                             <p><?= $newJobOffer->errors['type'];?></p>
                                         </div>
                                     <?php endif; ?>
                                     <fieldset>
                                         <legend class="form__label form__label--block">Type d'emploi <b>*</b></legend>
                                         <div class="resolved__form__chackbox">
                                             <input type="radio" id="full_time" name="type" class="input__radio" value="Temps plein">
                                             <label for="full_time" class="form__label form__label--radio">Temps plein</label>
                                         </div>

                                         <div class="resolved__form__chackbox">
                                             <input type="radio" id="part_time" name="type" class="input__radio" value="Temps partiel">
                                             <label for="part_time" class="form__label--radio">Temps partiel</label>
                                         </div>

                                         <div class="resolved__form__chackbox">
                                             <input type="radio" id="internship" name="type" class="input__radio" value="Stage">
                                             <label for="internship" class="form__label--radio">Stage</label>
                                         </div>
                                     </fieldset>
                                 </div>

                                 <div>
                                     <?php if($newJobOffer->errors['profilepicture']): ?>
                                         <div class="section__info--alert">
                                             <p><?= $newJobOffer->errors['profilepicture'];?></p>
                                         </div>
                                     <?php endif; ?>
                                     <fieldset>
                                         <legend class="form__label form__label--block">Logo de l'agence <b>*</b></legend>
                                         <label for="profilepicture" class="form__label">Choisir une image (jpg, jpeg, png)</label>
                                         <input type="file" id="profilepicture" name="profilepicture" class="input--image">
                                     </fieldset>

                                 </div>

                             </div>
                            <div class="mandatory__fields">
                                <p><b>*</b> : Champs obligatoires</p>
                            </div>
                             <div>
                                 <button class="button--blue">Poster une annonce</button>
                             </div>
                         </form>
                <?php endif; ?>
            </div>
        </section>
    </main>
    <footer class="skew--blue">
<?php get_footer();?>
