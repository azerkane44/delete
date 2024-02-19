<?php

// On récupère les variables du tableau post
$nom = $_POST['name'];
$Prenom = $_POST['Prenom'];
$phone = $_POST["phone"];
$email = $_POST['email'];
$message = $_POST['message'];

// Création du message
$message = "Nom : " . $nom . "\n" . "Prenom : " . $Prenom .  "\n" . "phone : " . $phone .  "\n" . " Email : " . $email . "\n" . " Message : " . $message;

// Import PHPMailer classes into the global namespace
// Ces lignes doivent être au début de votre script, pas à l'intérieur d'une fonction
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// On importe les fichiers importants de PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Création d'une instance PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuration du serveur SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'contactgarage.ecf@gmail.com';
    $mail->Password   = 'thod aoas thez funm';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Utilisez STARTTLS au lieu de SMTPS
    $mail->Port       = 587;

    // Destinataires
    $mail->setFrom('from@example.com', 'Nom Expéditeur');
    $mail->addAddress('benchrifmohamed79@gmail.com');

    // Contenu du message
    $mail->isHTML(true);
    $mail->Subject = 'Objet du message';
    $mail->Body    = $message;
    $mail->AltBody = 'Ceci est le corps du message en texte brut pour les clients de messagerie non-HTML';
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    // Envoi du message
    $mail->send();
    echo 'Le message a été envoyé avec succès';
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Erreur du transporteur : {$mail->ErrorInfo}";
}
