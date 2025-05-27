<?php
$pageTitle = "Accueil";
include __DIR__ . '/includes/head.php';
?>

<body>
    <form method="post" action="">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <button type="submit">Valider</button>
    </form>
</body>

</html>