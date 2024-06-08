<?php session_start(); ?>
<?php require_once "../include/db.php"; ?>

<?php
    $name = $_POST['nom'];
    $firstname = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $subject = $_POST['demande'];
    $message = $_POST['message'];
    $submitted_at = date('Y-m-d H:i:s', time());

    $sql = "INSERT INTO forms (
    name,
    firstname,
    email,
    telephone,
    subject,
    message,
    submitted_at
    ) 
    VALUES (
    ?,
    ?,
    ?,
    ?,
    ?,
    ?,
    ?
    )"; 
    
    $pdo->prepare($sql)->execute([
    $name,
    $firstname,
    $email,
    $telephone,
    $subject,
    $message,
    $submitted_at
    ]);

    $_SESSION['flash']['success'] = '<strong><i class="fa fa-check-circle"></i> Votre message a bien été envoyé !</strong> Je vous répondrais dans les meilleurs délais !';
    print("<script language=\"javascript\" type=\"text/javascript\">window.location.replace(\"../contact.php?\");</script>");
?>