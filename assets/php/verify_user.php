<?php
if (
    isset($_COOKIE['googleUserID']) || isset($_COOKIE['googleUserName']) ||
    isset($_COOKIE['facebookUserID']) || isset($_COOKIE['facebookUserName'])
) {
if (isset($_COOKIE['googleUserID'])) {
    $logado = $_COOKIE['googleUserID'];
    $userName = $_COOKIE['googleUserName'];
    $userID = "google_user_id";
} else {
    $logado = $_COOKIE['facebookUserID'];
    $userName = $_COOKIE['facebookUserName'];
    $userID = "facebook_user_id";
}

}else{
    header('Location: ../pages/login.php');
    exit();
}
?>