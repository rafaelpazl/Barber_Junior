<?php
if (
    isset($_COOKIE['googleUserID']) || isset($_COOKIE['googleUserName']) ||
    isset($_COOKIE['facebookUserID']) || isset($_COOKIE['facebookUserName']) ||
    isset($_COOKIE['emailID']) || isset($_COOKIE['nomeID'])
) {
    if (isset($_COOKIE['googleUserID'])) {
        $logado = $_COOKIE['googleUserID'];
        $userName = $_COOKIE['googleUserName'];
        $userID = "google_user_id";
    } elseif (isset($_COOKIE['facebookUserID'])) {
        $logado = $_COOKIE['facebookUserID'];
        $userName = $_COOKIE['facebookUserName'];
        $userID = "facebook_user_id";
    } elseif (isset($_COOKIE['emailID'])) {
        $logado = $_COOKIE['emailID'];
        $userName = $_COOKIE['nomeID'];
        $userID = "email";
    }
} else {
    header('Location: ../pages/login.php');
    exit();
}
