<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de contact</title>
</head>
<body>
    <h1>Formulaire de contact</h1>
    <!-- Votre contenu HTML pour le formulaire de contact -->
    <form action="submit_contact.php" method="POST">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
