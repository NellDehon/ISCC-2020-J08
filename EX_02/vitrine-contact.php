<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style/vitrine.css">
    </head>
    <body>
    <?php $nav_en_cours = 'contacts'; ?>
 
        <h2>Contact</h2>
        <form action="contact-form.php" method="post">
            <div class="p6">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name">
                <label for="mail"><br>e-mail :</label>
                <input type="email" id="mail" name="user_mail">
                <label for="msg"><br>Message :</label>
                <textarea id="msg" name="user_message"></textarea>
            </div>
            <div class="button">
            <input type="submit" value="validé">
        </div>
        </form>
    </html>