<?php
if(isset($_POST["Envoyer"]))
{
$nom = stripslashes($_POST["nom"]);
$email = stripslashes($_POST["email"]);
$message = stripslashes($_POST["message"]);
 
if(empty($nom)){
echo 'Le nom est vide. <br/>';
}
else if(empty($email)){
echo 'Le mail est vide.<br/>';
}
else if(empty($message)){
echo 'Le message est vide.<br/>';
}
else
{
$mon_email = "vlecsei@gmail.com";
$mon_pseudo = "Vladimir";
$mon_url = "https://vlecsei.github.io/aide_chiens_berger/index.html";
$son_email = ''.$email.'';
 
// Envoie du mail
$entete = "From: " . $mon_pseudo . " <" . $email . ">\n";
$entete .= "MIME-Version: 1.0";
if (@mail($mon_email,$nom,$email,$entete))
{ 
echo "Votre message a été envoyé.<br />\n"; 
echo "<a href=\"" . $mon_url . "\">Retour</a>\n"; 
}
else 
{ 
echo "Un problème s'est produit lors de l'envoi du message.\n";
echo "<a href=\"".$_SERVER["PHP_SELF"]."\">Réessayez</a>\n";
}
//on ferme le else
}
//on ferme if(isset($_POST["Valider"]))
}
?>