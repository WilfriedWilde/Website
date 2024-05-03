<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Adresse email de réception
    $to = "votreadresseemail@example.com";

    // Sujet du message
    $subject = "Nouveau message de contact de $name";

    // Contenu du message
    $body = "Nom: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // En-têtes additionnels
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès!";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
} else {
    echo "Une erreur s'est produite lors de l'envoi du formulaire.";
}
?>
