<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/variables.css" type="text/css">
    <link rel="stylesheet" href="assets/css/mediasQuery.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/favicon.png">
    <title>Développeur web | Hugo Delbegue</title>
</head>

<body>
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
                        <i class="bi bi-person-lines-fill"></i>
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
        <h1>Hugo DELBEGUE | Développeur web</h1>
        <h2 style="font-variant-caps: all-small-caps;">Freelance</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, provident laborum, sed officia pariatur
            architecto deserunt laudantium numquam doloremque distinctio assumenda modi, debitis dolore voluptate aut
            eos atque corrupti ea minus nulla quasi tempora et cum eligendi? Dolores numquam hic pariatur minima qui
            facilis maxime ?</p>
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
        <span id="width"></span>
        <div id="projects-content">
            <div class="popup-projects" id="text1">
                <div class="popup">
                    <i class="bi bi-x-lg close"></i>
                    <p>1Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo impedit quaerat sunt a quam
                        officia fugit id unde totam magnam nisi fugiat illum, voluptates saepe suscipit. Unde ullam
                        repellat assumenda eaque beatae placeat expedita deleniti natus sed laboriosam obcaecati iure
                        optio tempora eos ipsa neque quisquam soluta qui, consectetur quas.</p>
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
                <div class="card" onclick="clickProjects(1)" id="cardWidth">
                    <!-- <a href="./projects/teacozy/"> -->
                    <img class="img-project" src="./assets/images/teacozy.png" alt="site teacozy">
                    <div class="fadedbox">
                        <i class="bi bi-search title text"><br>Flexbox<br>site entrainement</i>
                    </div>
<!--                    </a>-->
                </div>

                <div class="card" onclick="clickProjects(2)">
                    <img class="img-project" src="./assets/images/my-links.png" alt="sit my-links">
                    <div class="fadedbox">
                        <i class="bi bi-search title text"><br>My links<br>en construction</i>
                    </div>
                </div>
                <div class="card" onclick="clickProjects(3)">
                    <img class="img-project" src="" alt="">
                    <div class="fadedbox">
                        <i class="bi bi-search title text"><br></i>
                    </div>
                </div>
                <div class="card" onclick="clickProjects(4)">
                    <img class="img-project" src="" alt="">
                    <div class="fadedbox">
                        <i class="bi bi-search title text"><br></i>
                    </div>
                </div>
                <div class="card" onclick="clickProjects(5)">
                    <img class="img-project" src="" alt="">
                    <div class="fadedbox">
                        <i class="bi bi-search title text"><br></i>
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
<hr class="line-body" style="top: -30px;">
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
            Libero aperiam fuga quaerat temporibus! Aliquam veritatis voluptatum similique ad. Maxime ipsum eius at,
            tenetur voluptatem, fuga similique enim perferendis molestiae eligendi saepe? Culpa quod delectus maiores
            omnis blanditiis et voluptate officiis rerum dolor corporis odit, a porro iure distinctio cum veritatis
            adipisci consequuntur id vel error debitis sint alias nostrum. Quod harum, asperiores suscipit iure placeat
            aut reiciendis assumenda debitis id necessitatibus, rerum fuga nihil voluptas eius maiores minima distinctio
            dolorum eaque eligendi cumque explicabo est error ullam delectus? Fugit enim libero officia, eaque incidunt
            optio nemo, cum vitae ullam aliquid quis sed, itaque et distinctio excepturi in maiores cumque quaerat
            officiis ad? Ipsum amet tempore aperiam porro eligendi expedita optio fugit reiciendis odio, ea facere eaque
            aut! Deserunt, commodi!</p>
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
                <textarea name="message" cols="30" rows="10" placeholder="Ecrivez votre demande ici.."
                          required></textarea>
                <input class="submit-button" type="submit" value="Envoyer">
            </form>
            <div id="form-right">
                    <span><i class="bi bi-envelope iconlegende"></i>
                        hugodelbegue@gmail.com
                    </span>
                <span><i class="bi bi-phone iconlegende"></i>
                        06 38 38 77 07
                    </span>
                <span><i class="bi bi-instagram iconlegende"></i>
                        instagram
                    </span>
                <span><i class="bi bi-linkedin iconlegende"></i>
                        linkedin.com/hugo-delbegue
                    </span>
                <span><i class="bi bi-github iconlegende"></i>
                        github.com/HUGODELBEGUE
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
                        <span>
                            <i class="bi bi-tornado iconlegende"></i>
                            hugodelbegue@gmail.com
                        </span>
                </li>
                <li>
                        <span>
                            <i class="bi bi-tropical-storm iconlegende"></i>
                            autres
                        </span>
                </li>
                <li>
                        <span>
                            <i class="bi bi-vector-pen iconlegende"></i>
                            site
                        </span>
                </li>
                <li>
                        <span>
                            <i class="bi bi-stack iconlegende"></i>
                            formulaire
                        </span>
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