<?php

function send_mail($categorie, $name, $email, $message){

    //En fonction de la catégorie
    switch($categorie){
        case 'marketing':
            $categorie = "Marketing";
            break;

        case 'sante':
            $categorie = "Santé - Pharama - Cosmétique";
            break;

        case 'newtech':
            $categorie = "Nouvelles technologies et Start Up";
            break;

        case 'finance':
            $categorie = "Finance";
            break;

        case 'transfert':
            $categorie = "Transfert technologique";
            break;

        case 'consulting':
            $categorie = "Consulting";
            break;

        case 'formation':
            $categorie = "Formation";
            break;
    }

    //Header
    $header = "MIME-Version: 1.0\r\n";
    $header.='From:"' . $name .  '"<' . $email .  '>'."\n";
    $header.='Content-Type:text/html; charset="utf-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';

    //Message
    $message = '
        <html>
            <body>
                <p>' . $message .  '</p>
            </body>
        </html>';

    //Envoi du mail
    mail("julienmaffar@gmail.com", $categorie, $message, $header);
}













