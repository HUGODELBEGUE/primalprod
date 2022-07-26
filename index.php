<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/favicon.svg">
    <title>Freelance - Hugo Delbegue</title>
</head>

<body>
    <header>
        <div class="content-header">
            <img src="./assets/images/logo.png" alt="logo primalprod" width="100" height="100">
            <nav>
                <ul>
                    <li><a href="#presentation">Présentation</a></li>
                    <li><a href="#projects">Expérience</a></li>
                    <li><a href="#about">A propos</a></li>
                    <li><a href="#contact">Contact</a></li>
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
            <h1>Hugo Delbegue . Freelance</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, provident laborum, sed officia pariatur
                architecto deserunt laudantium numquam doloremque distinctio assumenda modi, debitis dolore voluptate aut
                eos atque corrupti ea minus nulla quasi tempora et cum eligendi? Dolores numquam hic pariatur minima qui
                facilis maxime, consectetur enim tenetur ipsa unde at, dolorum ratione non? Error labore, quisquam placeat
                aut ad eaque! Expedita, tenetur et enim quam amet saepe non, in commodi vero est adipisci quisquam, repellat
                odio id quas. Harum a maxime ipsa esse cupiditate numquam consequuntur illo dicta architecto, inventore,
                quaerat fugiat. Illo eligendi obcaecati corrupti libero eos neque?</p>
        </div>
    </section>
    <hr>
    <section id="projects">
        <div class="boxmodel">
            <h2>Projets</h2>
            <hr class="line-icon">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit rem voluptates illo qui, dicta esse doloremque perspiciatis eius aut veniam libero repudiandae a reiciendis explicabo, consectetur fuga? Perspiciatis sed iusto inventore aliquid sapiente ducimus blanditiis. Quaerat enim ad itaque voluptates eveniet animi unde optio corrupti accusamus. Rem atque maiores error?</p>
            <div id="projects-box">
                <div class="card">
                    <img src="./assets/images/TeaCozy.png" alt="" width="250" height="250">
                </div>
                <div class="card"></div>
                <div class="card"></div>
                <div class="card"></div>
                <div class="card"></div>
                <div class="card"></div>
            </div>
        </div>
    </section>
    <hr>
    <section id="about">
        <div class="boxmodel">
            <h2>A propos</h2>
            <hr class="line-icon">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, fuga ut labore sapiente libero, consectetur enim nihil neque ab iste officia at ullam reprehenderit corporis et suscipit reiciendis accusantium optio molestiae! Debitis eligendi minus sed dignissimos obcaecati mollitia atque delectus enim, cupiditate ab, voluptate illo recusandae, asperiores est quo dicta!</p>
        </div>
    </section>
    <hr>
    <section id="contact">
        <div class="boxmodel">
            <h2>Me contacter</h2>
            <hr class="line-icon">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit sint fugit sunt error hic magnam iure. Rerum, aperiam incidunt. Aperiam doloribus neque tenetur maxime laborum quasi. Pariatur eaque accusamus suscipit cumque aspernatur temporibus laborum quas, perferendis distinctio mollitia quibusdam, explicabo totam. Distinctio, earum! Deserunt ipsam accusantium, fugit facilis numquam tenetur!</p>
            <div id="form-contact">
                <form method="post">
                    <label>
                        <p class="textinput">
                            Votre nom
                        </p>
                        <input type="text" name="name" placeholder="Tom Sawyer" size="50" required>
                    </label>
                    <br>
                    <label>
                        <p class="textinput">
                            Votre adresse email
                        </p>
                        <input type="email" name="email" placeholder="tom.sawyer@aventure.com" size="50" required>
                    </label>
                    <br>
                    <label>
                        <p class="textinput">
                            L'objet de votre demande
                        </p>
                        <input type="text" name="subject" placeholder="Sujet du message.." size="50" required>
                    </label>
                    <br>
                    <textarea name="message" cols="30" rows="10" placeholder="Ecrivez votre demande ici.." required></textarea>
                    <br>
                    <input class="submit-button" type="submit" value="Envoyer">
                </form>
                <div id="form-right">
                    <span><i class="bi bi-envelope"></i>
                        hugodelbegue@gmail.com
                    </span>
                    <span><i class="bi bi-phone"></i>
                        06 38 38 77 07
                    </span>
                    <span><i class="bi bi-instagram"></i></i>
                        instagram
                    </span>
                    <span><i class="bi bi-linkedin"></i>
                        dhfdfh
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
                            <i class="bi bi-tornado"></i>
                        </span>
                        hugodelbegue@gmail.com
                    </li>
                    <li>
                        <span>
                            <i class="bi bi-tropical-storm"></i>
                        </span>
                        06 38 38 77 07
                    </li>
                    <li>
                        <span>
                            <i class="bi bi-vector-pen"></i>
                        </span>
                        site
                    </li>
                    <li>
                        <span>
                            <i class="bi bi-stack"></i>
                        </span>
                        formulaire
                    </li>
                </ul>
            </div>
            <div id="footer-right" class="textmodel">
                <h4>Hugo Delbegue</h4>
                <p id="footer-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas maiores vero autem aliquam cupiditate, sapiente velit maxime delectus adipisci placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo harum nisi cumque ipsum officiis corrupti voluptate provident distinctio nemo quia!
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