<?php require_once 'dbconnection.php';

try {
    $sql = "SELECT 
    experience_id,
    heure_depart,
    heure_arrivee,
    TIMESTAMPDIFF(MINUTE, heure_depart, heure_arrivee) AS duree_mn
FROM experience;
";
    $hours = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    $totalHour = 0;
    foreach ($hours as $hour) {
        $totalHour += $hour['duree_mn'];
    }
    $totalHour = round($totalHour / 60, 2);

    echo '<div class="statNumber">' . $totalHour . '</div>';
} catch (PDOException $e) {
    echo "Erreur lors de la récupération des données : " . $e->getMessage();
}
