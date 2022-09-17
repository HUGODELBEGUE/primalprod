<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--    <meta name="description" content="Site web PrimalProd">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/variables.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/responsive.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/favicon.png">
    <title><?= $title ?></title>
</head>

<body>
    <span id="top"></span>
    <header>
        <div class="content-header">
            <a href="./">
                <img src="./assets/images/logo.png" alt="logo primalprod" id="logo_primalprod" width="100" height="100">
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