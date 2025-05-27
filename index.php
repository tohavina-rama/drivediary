<?php
$pageTitle = "Tableau de bord";
include 'head.php';
?>

<body>

    <?php include __DIR__ . '/includes/header.php'; ?>

    <form method="post" action="">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <button type="submit">Valider</button>
    </form>
</body>

</html>