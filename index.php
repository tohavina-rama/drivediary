<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drivediary</title>
</head>

<body>

    <?php include __DIR__ . '/includes/header.php'; ?>

    <form method="post" action="">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <button type="submit">Valider</button>
    </form>
</body>

</html>