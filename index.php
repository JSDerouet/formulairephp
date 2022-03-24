<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title>Your first HTML form</title>
    </head>

    <body>
        <form action="renvoi.php" method="post">
            <ul>
                <li>
                    <label for="firstname">FirstName:</label>
                    <input type="text" id="firstname" name="firstname" />
                </li>
                <li>
                    <label for="lastname">LastName:</label>
                    <input type="text" id="lastname" name="lastname" />
                </li>
                <li>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" />
                </li>
                <li>
                    <label for="tel">Telephone:</label>
                    <input type="tel" id="tel" name="tel">
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
                    <textarea id="msg" name="message"></textarea>
                </li>
                <li class="button">
                    <button type="submit">Send your message</button>
                </li>
            </ul>
        </form>
    </body>
</html>