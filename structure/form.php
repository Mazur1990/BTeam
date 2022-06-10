<?php
session_start();
$myEmail = 'info@bteam.pl';
$_SESSION["messageForUser-form"] = "";

if(isset($_POST['g-recaptcha-response'])){
    $captcha=$_POST['g-recaptcha-response'];
}
if(!$captcha){
    $_SESSION["messageForUser-form"] = '<p class="text-danger">Potwierdź że nie jesteś robotem</p>';
    header('Location: ../index.php#kontakt');
    exit();
  }
  else {
    $_SESSION["messageForUser-form"] = '';
  }
$secretKey = "6LcnT3QaAAAAANmPuKVTakBhBSWMlnBIM8ltPDTO";
$ip = $_SERVER['REMOTE_ADDR'];
// post request to server
$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
$response = file_get_contents($url);
$responseKeys = json_decode($response,true);
if(!$responseKeys["success"]) {
    exit;
}

if (isset($_POST['name']) && $_POST['title'] && $_POST['email'] && $_POST['message']) {
    $message = htmlentities("Imie: " . $_POST['name'] . "\n e- mail: " . $_POST['email'] .
        "\n Tresc: " . $_POST['message']);
    $title = "Kontakt ze strony www.bteam.pl - " . htmlentities($_POST['title']);
    if (mail($myEmail, $title, $message, "Wiadomość ze strony")){
        $_SESSION["messageForUser-form"] = '<p class="text-success">Dziekujęmy za wysłanie wiadomości. Odpowiemy na Twoją wiadomość najszybciej, jak to będzie możliwe.</p>';
        header('Location: ../index.php#kontakt');
        exit();
    } else {
        $_SESSION["messageForUser-form"] = '<p class="text-danger">Wystąpił błąd. Napisz do nas wiadomość później lub zadzwoń do nas.</p>';
        header('Location: ../index.php#kontakt');
        exit();
    }

    header('Location: ../index.php#kontakt');
    exit();
} else {
    $_SESSION["messageForUser-form"] = '<p class="text-danger">Proszę o uzupełnienie wszystkich pól formularza.</p>';
    header('Location: ../index.php#kontakt');
    exit();
}
?>