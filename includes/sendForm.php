<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'dbconnection.php';

    try {

        $pdo->beginTransaction();

        $datedepart = $_POST['heure_depart'];
        $datearrivee = $_POST['heure_arrivee'];
        $distance = $_POST['distance_parcourue'];
        $meteo = $_POST['meteo'];
        $route = $_POST['route'];
        $vehicule = 1;

        $sql = "
            INSERT INTO `experience` (
            `heure_depart`,
            `heure_arrivee`,
            `distance_parcourue`,
            `meteo_id`,
            `route_id`,
            `vehicule_id`
            ) 
            VALUES (
            :heure_depart,
            :heure_arrivee,
            :distance_parcourue,
            :meteo_id,
            :route_id,
            :vehicule_id
            )
        ";

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':heure_depart', $datedepart);
        $stmt->bindParam(':heure_arrivee', $datearrivee);
        $stmt->bindParam(':distance_parcourue', $distance);
        $stmt->bindParam(':meteo_id', $meteo);
        $stmt->bindParam(':route_id', $route);
        $stmt->bindParam(':vehicule_id', $vehicule);

        $stmt->execute();
        $experienceId = $pdo->lastInsertId();

        $manoeuvre = $_POST['manoeuvre'] ?? [];

        if (!empty($manoeuvres)) {
            $sqlManoeuvre = "INSERT INTO `experience_manoeuvre`(`experience_id`, `manoeuvre_id`) VALUES (:experience_id,:manoeuvre_id)";
            $stmtManoeuvre = $pdo->prepare($sqlManoeuvre);

            foreach ($manoeuvres as $manoeuvre) {
                $stmtManoeuvre->bindParam(':experience_id', $experienceId);
                $stmtManoeuvre->bindParam(':manoeuvre_id', $manoeuvre);

                $stmtManoeuvre->execute();
            }
        }

        $pdo->commit();
        header("Location: ".$_SERVER['PHP_SELF']);
        echo "Données insérées avec succès !";
    } catch (PDOException $e) {
        if ($pdo->inTransaction()) {
            $pdo->rollBack();
        }
        echo "Erreur de base de données : " . $e->getMessage();
    }
}
