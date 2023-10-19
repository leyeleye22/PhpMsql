<?php
include_once '../Controller/MesFuction.php';
if (!empty($_POST)) {
    $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8');
    $prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES, 'UTF-8');
    $email = $_POST['email'];
    $pas = $_POST['motdepasse'];
    $verifpass = $_POST['confirmermotdepasse'];
    $tel = $_POST['telephone'];
    $max = MrLeye($email);
    $pattern = '/\d/';
    preg_match_all($pattern, $nom, $matches);
    preg_match_all($pattern, $prenom, $matchs);
    if ((count($matches[0]) == 0 && count($matchs[0]) == 0) && (strlen($nom) >= 2 && strlen($prenom) > 3)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (empty($max)) {

                if (strlen($pas) >= 8 && $pas == $verifpass) {

                    if (substr($tel, 0, 2) == "77" || substr($tel, 0, 2) == "70" || substr($tel, 0, 2) == "78" || substr($tel, 0, 2) == "76" || substr($tel, 0, 2) == "75" && strlen($tel) == 9) {
                        $passw = md5($pas);


                        $dateActuelle = date("Y-m-d");


                        insertUser($nom, $prenom, $email, $passw, $tel, $dateActuelle);
                    }
                }
            }
        }
    }
}
