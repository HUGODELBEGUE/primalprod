<?php include '../templates/header.html.php' ?>

<section id="presentation">
    <div class="boxmodel">
        <div class="anchor"></div>
        <h1>Hugo&nbsp;Delbegue <span id="title-bar">|</span> développeur&nbsp;web</h1>
        <p class="presentation-text">Créateur de sites internet et projets web, je réalise vos demandes sur mesure
            et de manière éthique.</p>
        <h2 id="effect_title" style="font-variant-caps: small-caps;"></h2>
    </div>
</section>
<hr class="line-body phrase1">
<section id="projects">
    <div>
        <div class="boxmodel" style="padding-bottom: 0">
            <h2>Mes projets</h2>
            <hr class="line-title">
            <p>Voici une liste de mes projets réalisés..</p>
            <hr class="line-content">
        </div>
        <div id="projects-content">
            <div class="popup-projects" id="text1">
                <div class="popup">
                    <i class="bi bi-x-circle-fill close"></i>
                    <div class="language_projects">
                        <div class="language">HTML</div>
                        <div class="language">CSS</div>
                        <div class="language">Flexbox</div>
                        <div class="language">Responsive</div>
                    </div>
                    <p>Réalisation du projet Teacozy, qui est un site d'entraînement sur le positionnement des
                        conteneurs de manière harmonieuse avec Flexbox et avec une partie responsive pour une
                        adaptation
                        sur toutes tailles d'écrans.</p>
                    <div class="img_projects">
                        <a href="./assets/images/img_projects/teacozy1.png"><img src="./assets/images/img_projects/teacozy1.png" class="imgProjects"></a>
                        <a href="./assets/images/img_projects/teacozy2.png"><img src="./assets/images/img_projects/teacozy2.png" class="imgProjects"></a>
                        <a href="./assets/images/img_projects/teacozy3.png"><img src="./assets/images/img_projects/teacozy3.png" class="imgProjects"></a>
                    </div>
                    <div class="div-popup">
                        <a href="https://hugodelbegue.github.io/teacozy/" class="links-popup">visiter le projet</a>
                        <a href="https://github.com/HUGODELBEGUE/teacozy" class="links-popup">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="popup-projects" id="text2">
                <div class="popup">
                    <i class="bi bi-x-circle-fill close"></i>
                    <div class="language_projects">
                        <div class="language">HTML</div>
                        <div class="language">CSS</div>
                        <div class="language">SASS</div>
                        <div class="language">Flexbox</div>
                        <div class="language">Responsive</div>
                    </div>
                    <p>2Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo impedit quaerat sunt a quam
                        officia fugit id unde totam magnam nisi fugiat illum.</p>
                    <div class="img_projects">
                        <a href="./assets/images/img_projects/cleanFast1.png"><img src="./assets/images/img_projects/cleanFast1.png" class="imgProjects"></a>
                        <a href="./assets/images/img_projects/cleanFast2.png"><img src="./assets/images/img_projects/cleanFast2.png" class="imgProjects"></a>
                    </div>
                    <div class="div-popup">
                        <a href="./projects/cleanFast/index.html" class="links-popup" style="pointer-events: none; opacity: .3;">Visiter le projet</a>
                        <a href="https://github.com/HUGODELBEGUE/cleanFast" class="links-popup">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="popup-projects" id="text3">
                <div class="popup">
                    <i class="bi bi-x-circle-fill close"></i>
                    <div class="language_projects">
                        <div class="language">HTML</div>
                        <div class="language">CSS</div>
                        <div class="language">Bootstrap</div>
                        <div class="language">PHP</div>
                        <div class="language">mySQL</div>
                    </div>
                    <p>3Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo impedit quaerat sunt a quam
                        officia fugit id unde totam magnam nisi fugiat illum, voluptates saepe suscipit. Unde ullam
                        repellat assumenda eaque beatae placeat expedita deleniti natus sed laboriosam obcaecati
                        iure
                        optio tempora eos ipsa neque quisquam soluta qui, consectetur quas.</p>
                    <div class="div-popup">
                        <a href="" class="links-popup" style="pointer-events: none; opacity: .3;">visiter le
                            projet</a>
                        <a href="https://github.com/HUGODELBEGUE/my-links" class="links-popup">GitHub</a>
                    </div>
                </div>
            </div>
            <div id="projects-box">
                <div class="card teacozy" onclick="clickProjects(1)" id="cardWidth">
                    <div class="fadedbox">
                        <i class="bi bi-search title text"><br>en savoir plus</i>
                    </div>
                </div>
                <div class="card cleanfast" onclick="clickProjects(2)">
                    <div class="fadedbox">
                        <i class="bi bi-search title text"><br>en savoir plus</i>
                    </div>
                </div>
                <div class="card mylinks" onclick="clickProjects(3)">
                    <div class="fadedbox">
                        <i class="bi bi-search title text"><br>en construction</i>
                    </div>
                </div>
                <div class="card" id="card-end">
                    <img src="./assets/images/suite.svg" alt="etiquette suite prochainement">
                </div>
            </div>
        </div>
        <div class="button">
            <div id="button_left">
                <img src="./assets/images/arrow_left.svg" alt="">
            </div>
            <div id="button_right">
                <img src="./assets/images/arrow_right.svg" alt="">
            </div>
        </div>
        <div id="overlay"></div>
    </div>
</section>
<hr class="line-about">
<section id="about">
    <div class="boxmodel">
        <h2>A propos</h2>
        <hr class="line-title">
        <p style="text-align: right; margin-bottom: initial;"><img class="avatar" src="./assets/images/avatar.jpg" alt="avatar" width="150">Comme vous l'avez vu dans le titre, je m'appelle Hugo et habite dans la ville de Grenoble. Depuis maintenant environ 3 ans, je suis accompagné de ma chienne tout droit venue des Antilles, le résultat d'un mélange de plusieurs races, ce qui lui donne une très belle robe et un caractère tout aussi affectueux et attachant. Bien que passionné par ce métier et passant la plupart de mon temps devant un ordinateur, j'ai aussi d'autres passion qui anime ma vie, dont, écouter la musique pendant des heures, danser à en avoir le tournis, de longues promenades dans la forêt et bien sûr la mécanique et le bricolage en tout genre. Je pose également régulièrement comme modèle vivant pour différents ateliers de peinture. J'ai grandi à la campagne entouré d'animaux et de nature. Je suis particulièrement sensible aux rapports avec celle-ci et à ces bienfaits. La terre est unique et mérite d'être respectée, c'est pourquoi je construis ma vie de manière à la préserver.</p>
        <h3 style="margin: 1.5em 0;">Mon parcours..</h3>
        <p style="text-align: left; margin-top: initial;">Avant de m’intéresser au domaine du développement web, je travaillais dans un secteur bien différent. En effet, j’ai d’abord suivi un apprentissage en coiffure et exercé cette profession. J'ai pratiqué ce métier pendant 7 ans puis j'ai décidé de me reconvertir pour me laisser une chance de découvrir un domaine dans lequel je puisse m’épanouir pleinement. Après un moment de réflexion, j'ai fait quelques essais dans divers secteurs d'activités, réparateur vélo, vendeur en magasin Bio, mais sans vraiment avoir trouvé ce quelque chose qui me motive chaque jour.
            <br>
            Après m'être beaucoup posé de questions sur mon avenir professionnel, un ami m'a parlé de ce métier, développeur web. J'ai aiguisé ma curiosité et commencé à me renseigner sur le sujet. En me cultivant et en me formant, j'ai appris les bases, et cela m'a vraiment plu. Maintenant, avec un diplôme de Développeur web/mobile en poche, je me sens complètement capable de grandir dans ce domaine. Je cherche constamment à évoluer, et continue à me former davantage pour donner de plus en plus de qualités dans mes services.
        </p>
        <img src="./assets/images/photofunky.png" alt="smile emoji" width="50">
    </div>
</section>
<hr class="line-body phrase2">
<section id="contact">
    <div class="boxmodel">
        <h2>Me contacter</h2>
        <hr class="line-title">
        <p>Si vous êtes intéressé par mon profil, et que vous avez une idée ou que vous cherchez une collaboration,
            ou encore si vous souhaitez un simple renseignement, n'hésitez pas à m'écrire un message.
            <br>
            Vous pouvez aussi me contacter par <a class="lines-links" href="tel:0638387707" style="font-size: 15px; color: var(--logo-color)">téléphone</a>,
            si vous préférez échanger de vive voix..
            <br>
            Mon adresse email est également présente en bas de la page.
            <br>
            <br>
            A bientôt..
            <br>
            <i class="bi bi-bicycle"></i>
        </p>
        <hr class="line-content">
        <div id="form-contact">
            <form method="post" name="contact_mail">
                <label class="textinput">
                    Votre nom
                    <input type="text" name="name" placeholder="Tom Sawyer" size="50" required>
                </label>
                <label class="textinput">
                    Votre adresse email
                    <input type="email" name="email" placeholder="tom.sawyer@aventure.com" size="50" required>
                </label>
                <label class="textinput">
                    L'objet de votre demande
                    <input type="text" name="subject" placeholder="Sujet du message.." size="50" required>
                </label>
                <textarea name="message" cols="30" rows="10" placeholder="Ecrivez votre demande ici.." required></textarea>
                <input class="submit-button" type="submit" value="Envoyer">
            </form>
            <div id="form-right">
                <span>
                    <a class="legende" href="mailto:hugodelbegue@gmail.com">
                        <i class="logo_mail"></i>
                        <div>
                            <div>hugodelbegue@gmail.com</div>
                            <div class="logo-label">Email</div>
                        </div>
                    </a>
                </span>
                <hr class="line-form_right">
                <span>
                    <a class="legende" href="tel:0638387707">
                        <i class="logo_phone"></i>
                        <div>
                            <div>06 38 38 77 07</div>
                            <div class="logo-label">Téléphone</div>
                        </div>
                    </a>
                </span>
                <hr class="line-form_right">
                <span>
                    <a class="legende" href="https://www.instagram.com/primalprod_freelance/" target="_blank">
                        <i class="logo_instagram"></i>
                        <div>
                            <div>PrimalProd</div>
                            <div class="logo-label">Instagram</div>
                        </div>
                    </a>
                </span>
                <hr class="line-form_right">
                <span>
                    <a class="legende" href="https://fr.linkedin.com/in/hugo-delbegue/" target="_blank">
                        <i class="logo_linkedin"></i>
                        <div>
                            <div>HugoDelbegue</div>
                            <div class="logo-label">Linkedin</div>
                        </div>
                    </a>
                </span>
                <hr class="line-form_right">
                <span>
                    <a class="legende" href="https://github.com/HUGODELBEGUE" target="_blank">
                        <i class="logo_github"></i>
                        <div>
                            <div>HugoDelbegue</div>
                            <div class="logo-label">Github</div>
                        </div>
                    </a>
                </span>
            </div>
        </div>
    </div>
</section>

<?php include '../templates/footer.html.php' ?>