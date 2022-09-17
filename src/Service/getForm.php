<?php

// Validation du formulaire de contact
if ($_REQUEST) {
    if ((isset($_POST['message'])) && (isset($_POST['email']))) {
        $message = "Tu as reçu un message du site primalprod.fr
                    Nom de l'expéditeur: " . $_POST['name'] . "
                    Mail: " . $_POST['email'] . "\r\n\r\n" . $_POST['message'];
        $back = mail("hugodelbegue@gmail.com", $_POST['subject'], $message, "From:contact@primalprod.fr" . "\r\n" . "Reply-to:" . $_POST['email']);
        if ($back) {
            //            echo '<p>Le formulaire a été validé.</p>';
            exit;
        }
    } else {
        header("Location: https://primalprod.fr/");
        exit;
    }
}
