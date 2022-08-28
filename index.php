<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/variables.css" type="text/css">
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/favicon.png">
    <title>Développeur web | Hugo Delbegue</title>
</head>

<body>
    <span id="top"></span>
    <header>
        <div class="content-header">
            <a href="./">
                <img src="./assets/images/logo.png" alt="logo primalprod" width="100" height="100">
            </a>
            <nav>
                <ul>
                    <li>
                        <a href="#presentation">
                            <i class="bi bi-easel-fill"></i>
                            Présentation
                        </a>
                    </li>
                    <li>
                        <a href="#projects">
                            <i class="bi bi-kanban-fill"></i>
                            Expérience
                        </a>
                    </li>
                    <li>
                        <a href="#about">
                            <i class="bi bi-file-person-fill"></i>
                            A propos
                        </a>
                    </li>
                    <li>
                        <a href="#contact">
                            <i class="bi bi-pen-fill"></i>
                            Contact
                        </a>
                    </li>
                </ul>
                <label id="icon-menu" for="menu">
                    <i class="bi bi-list"></i>
                </label>
                <input type="checkbox" id="menu">
                <div class="menu-items">
                    <a href="./">Présentation</a>
                    <hr class="line-menu">
                    <a href="#projects">Expérience</a>
                    <hr class="line-menu">
                    <a href="#about">A propos</a>
                    <hr class="line-menu">
                    <a href="#contact">Contact</a>
                </div>
            </nav>
        </div>
    </header>
    <section id="presentation">
        <div class="boxmodel">
            <div class="anchor"></div>
            <h1>Hugo Delbegue <span id="title-bar">|</span> développeur web</h1>
            <h2 style="font-variant-caps: all-small-caps;">Freelance</h2>
            <p class="presentation-text">Créateur de sites et projets web, je cherche continuellement à progresser et me
                donne les moyens de réaliser. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, quasi!</p>
        </div>
    </section>
    <hr class="line-body">
    <section id="projects">
        <div class="boxmodel">
            <h2>Projets</h2>
            <hr class="line-title">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex, aspernatur laborum nihil maxime tenetur
                temporibus cum asperiores illo consectetur, recusandae distinctio dolorum odit quam voluptates labore
                perferendis debitis quasi fugiat!</p>
            <hr class="line-content">
            <div id="projects-content">
                <div class="popup-projects" id="text1">
                    <div class="popup">
                        <i class="bi bi-x-lg close"></i>
                        <p>1Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo impedit quaerat sunt a quam
                            officia fugit id unde totam magnam nisi fugiat illum, voluptates saepe suscipit. Unde ullam
                            repellat assumenda eaque beatae placeat expedita deleniti natus sed laboriosam obcaecati iure
                            optio tempora eos ipsa neque quisquam soluta qui, consectetur quas.</p>
                        <a href="./projects/teacozy/index.html"><i class="bi bi-search visite"></i>visiter le projet</a>
                    </div>
                </div>
                <div class="popup-projects" id="text2">
                    <div class="popup">
                        <i class="bi bi-x-lg close"></i>
                        <p>2Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo impedit quaerat sunt a quam
                            officia fugit id unde totam magnam nisi fugiat illum, voluptates saepe suscipit. Unde ullam
                            repellat assumenda eaque beatae placeat expedita deleniti natus sed laboriosam obcaecati iure
                            optio tempora eos ipsa neque quisquam soluta qui, consectetur quas.</p>
                    </div>
                </div>
                <div class="popup-projects" id="text3">
                    <div class="popup">
                        <i class="bi bi-x-lg close"></i>
                        <p>3Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo impedit quaerat sunt a quam
                            officia fugit id unde totam magnam nisi fugiat illum, voluptates saepe suscipit. Unde ullam
                            repellat assumenda eaque beatae placeat expedita deleniti natus sed laboriosam obcaecati iure
                            optio tempora eos ipsa neque quisquam soluta qui, consectetur quas.</p>
                    </div>
                </div>
                <div class="popup-projects" id="text4">
                    <div class="popup">
                        <i class="bi bi-x-lg close"></i>
                        <p>4Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo impedit quaerat sunt a quam
                            officia fugit id unde totam magnam nisi fugiat illum, voluptates saepe suscipit. Unde ullam
                            repellat assumenda eaque beatae placeat expedita deleniti natus sed laboriosam obcaecati iure
                            optio tempora eos ipsa neque quisquam soluta qui, consectetur quas.</p>
                    </div>
                </div>
                <div class="popup-projects" id="text5">
                    <div class="popup">
                        <i class="bi bi-x-lg close"></i>
                        <p>5Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo impedit quaerat sunt a quam
                            officia fugit id unde totam magnam nisi fugiat illum, voluptates saepe suscipit. Unde ullam
                            repellat assumenda eaque beatae placeat expedita deleniti natus sed laboriosam obcaecati iure
                            optio tempora eos ipsa neque quisquam soluta qui, consectetur quas.</p>
                    </div>
                </div>
                <div id="projects-box">
                    <div class="card teacozy" onclick="clickProjects(1)" id="cardWidth">
                        <div class="fadedbox">
                            <i class="bi bi-search title text"><br>en savoir plus</i>
                        </div>
                    </div>

                    <div class="card mylinks" onclick="clickProjects(2)">
                        <div class="fadedbox">
                            <i class="bi bi-search title text"><br>en construction</i>
                        </div>
                    </div>
                    <div class="card" onclick="clickProjects(3)">
                        <div class="fadedbox">
                            <i class="bi bi-search title text"><br>en savoir plus</i>
                        </div>
                    </div>
                    <div class="card" onclick="clickProjects(4)">
                        <div class="fadedbox">
                            <i class="bi bi-search title text"><br>en savoir plus</i>
                        </div>
                    </div>
                    <div class="card" onclick="clickProjects(5)">
                        <div class="fadedbox">
                            <i class="bi bi-search title text"><br>en savoir plus</i>
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
            <p><img class="avatar" src="./assets/images/avatar.jpg" alt="avatar" width="150"> Lorem ipsum dolor, sit amet
                consectetur adipisicing elit. Quod, fuga ut labore sapiente libero, consectetur enim nihil neque ab iste
                officia at ullam reprehenderit corporis et suscipit reiciendis accusantium optio molestiae! Debitis eligendi
                minus sed dignissimos obcaecati mollitia atque delectus enim, cupiditate ab, voluptate illo recusandae,
                asperiores est quo dicta! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet cupiditate, culpa
                dolorum inventore dicta odit nisi libero sed repudiandae iusto esse illum a molestias, temporibus illo rerum
                asperiores accusamus ipsam in vero. Repellendus quisquam aspernatur optio corporis, unde iure obcaecati
                culpa tempore praesentium aut consequatur, maiores error explicabo, cupiditate quis velit et quidem
                voluptate sequi mollitia at! Facere, culpa? Aperiam provident dolorem vero excepturi perspiciatis dicta
                suscipit ipsa. Ducimus accusantium quia nobis excepturi voluptatem libero praesentium eius voluptate cum.
                Libero aperiam fuga quaerat temporibus!</p>
        </div>
    </section>
    <hr class="line-body">
    <section id="contact">
        <div class="boxmodel">
            <h2>Me contacter</h2>
            <hr class="line-title">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit sint fugit sunt error hic magnam iure.
                Rerum, aperiam incidunt. Aperiam doloribus neque tenetur maxime laborum quasi. Pariatur eaque accusamus
                suscipit cumque aspernatur temporibus laborum quas, perferendis distinctio mollitia quibusdam, explicabo
                totam. Distinctio, earum! Deserunt ipsam accusantium, fugit facilis numquam tenetur!</p>
            <hr class="line-content">
            <div id="form-contact">
                <form method="post">
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
                        <a class="legende iconform" href="mailto:hugodelbegue@gmail.com">
                            <i class="logo_mail"></i>
                            <div>
                                <div>hugodelbegue@gmail.com</div>
                                <div class="logo-label">Email</div>
                            </div>
                        </a>
                    </span>
                    <hr class="line-form_right">
                    <span>
                        <a class="legende iconform" href="tel:0638387707">
                            <i class="logo_phone"></i>
                            <div>
                                <div>06 38 38 77 07</div>
                                <div class="logo-label">Téléphone</div>
                            </div>
                        </a>
                    </span>
                    <hr class="line-form_right">
                    <span>
                        <a class="legende iconform" href="https://www.instagram.com/primalprod_freelance/" target="_blank">
                            <i class="logo_instagram"></i>
                            <div>
                                <div>PrimalProd</div>
                                <div class="logo-label">Instagram</div>
                            </div>
                        </a>
                    </span>
                    <hr class="line-form_right">
                    <span>
                        <a class="legende iconform" href="https://fr.linkedin.com/in/hugo-delbegue/" target="_blank">
                            <i class="logo_linkedin"></i>
                            <div>
                                <div>HugoDelbegue</div>
                                <div class="logo-label">Linkedin</div>
                            </div>
                        </a>
                    </span>
                    <hr class="line-form_right">
                    <span>
                        <a class="legende iconform" href="https://github.com/HUGODELBEGUE" target="_blank">
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
    <footer>
        <div class="content-footer boxmodel">
            <div id="footer-left" class="textmodel">
                <h4>Pour me contacter</h4>
                <ul>
                    <li>
                        <a href="mailto:hugodelbegue@gmail.com">
                            <span>
                                <i class="bi bi-send-fill"></i>
                                hugodelbegue@gmail.com
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/primalprod_freelance/" target="_blank">
                            <span>
                                <i class="bi bi-instagram"></i>
                                Instagram
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/primalprod.freelance" target="_blank">
                            <span>
                                <i class="bi bi-facebook"></i>
                                Facebook
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://fr.linkedin.com/in/hugo-delbegue/" target="_blank">
                            <span>
                                <i class="bi bi-linkedin"></i>
                                Linkedin
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/HUGODELBEGUE" target="_blank">
                            <span>
                                <i class="bi bi-github"></i>
                                Github
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="footer-right" class="textmodel">
                <h4>En savoir un peu plus..</h4>
                <p id="footer-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas maiores vero autem
                    aliquam cupiditate, sapiente velit maxime delectus adipisci placeat. Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Explicabo harum nisi cumque ipsum officiis corrupti voluptate provident
                    distinctio nemo quia!
                </p>
            </div>
        </div>
    </footer>
    <a href="#top" id="return-to-top" class="hide"></a>
    <script src="./assets/js/script.js"></script>
</body>

</html>

<?php

// Validation of contact form
if ($_REQUEST) {
    if ((isset($_POST['message'])) && (isset($_POST['email']))) {
        $message = "Tu as reçu un message du site primalprod.fr
                    Nom de l'expéditeur: " . $_POST['name'] . "
                    Mail: " . $_POST['email'] . "\r\n\r\n" . $_POST['message'];
        $back = mail("hugodelbegue@gmail.com", $_POST['subject'], $message, "From:contact@primalprod.fr" . "\r\n" . "Reply-to:" . $_POST['email']);
        if ($back) {
            echo '<p>Le formulaire a été validé.</p>';
            exit;
        }
    }
    header("Location: https://primalprod.fr/one-page/");
    exit;
}
?>