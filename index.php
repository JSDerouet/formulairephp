<?php 
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contact = array_map('trim', $_POST);

    if (empty($contact['firstname'])) {
        $errors[] = 'Le prénom est obligatoire';
    }

    if (empty($contact['lastname'])) {
        $errors[] = 'Le nom est obligatoire';
    }

    if (empty($contact['email'])) {
        $errors[] = 'L\'email est obligatoire';
    }

    if (!filter_var($contact['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Mauvais format pour l\'email ' . htmlentities($contact['email']);
    }

    if (empty($contact['tel'])) {
        $errors[] = 'Le telephone est obligatoire';
    }

    if (!key_exists($contact['select'], $countries)) {
        $errors[] = 'Le choix est invalide';
    }

    if (empty($contact['message'])) {
        $errors[] = 'Le message est obligatoire';
    }

    if (empty($errors)) {
        include 'renvoi.php';
    }
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title>Your first HTML form</title>
    </head>

    
    <body>
        <?php if (!empty($errors)) {
            var_dump ($errors);
        }
        ?>
        <form action="renvoi.php" method="post">
            <ul>
                <li>
                    <label for="firstname">FirstName:</label>
                    <input type="text" id="firstname" name="firstname" require/>
                </li>
                <li>
                    <label for="lastname">LastName:</label>
                    <input type="text" id="lastname" name="lastname" require/>
                </li>
                <li>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" require/>
                </li>
                <li>
                    <label for="tel">Telephone:</label>
                    <input type="tel" id="tel" name="tel" require>
                </li>
                <li>
                    <label for="select">Sujet</label>
                    <select type="select" id="select" name="select">
                           <option valeur="Choix 1">Choix 1</option>
                           <option valeur="Choix 2">Choix 2</option>
                           <option valeur="Choix 3">Choix 3</option>
                    </select>
                </li>
                <li>
                    <label for="msg">Message:</label>
                    <textarea id="msg" name="message" require></textarea>
                </li>
                <li class="button">
                    <button type="submit">Send your message</button>
                </li>
            </ul>
        </form>
    </body>
</html>