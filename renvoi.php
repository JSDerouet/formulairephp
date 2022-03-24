<?php
echo "Merci ". $_POST['firstname']. " ". $_POST['lastname']. " de nous avoir contacté à propos de '". $_POST['select']. "'.
Un de nos conseiller vous contactera soit à l’adresse ". $_POST['email']. " ou par téléphone au ". $_POST['tel']. " dans les plus brefs délais pour traiter votre demande : ".
$_POST['message']
?>