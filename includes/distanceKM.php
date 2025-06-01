<?php require_once 'dbconnection.php';

try {
    $sql = "SELECT distance_parcourue FROM experience";
    $distanceKM = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    $totalDistance = 0;
    foreach ($distanceKM as $row) {
        $totalDistance += (float)$row['distance_parcourue'];
    }

    echo '<div class="statNumber">' . $totalDistance . '</div>';
} catch (PDOException $e) {
    echo "Erreur lors de la récupération des données : " . $e->getMessage();
}
