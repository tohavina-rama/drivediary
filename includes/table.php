<div class="statTable">
    <div class="tableScroll">
        <?php
            // Déterminer l'ordre de tri (ascendant ou descendant)
            $order = 'ASC';
            $orderIcon = '▲';
            if (isset($_GET['order']) && strtolower($_GET['order']) === 'desc') {
                $order = 'DESC';
                $orderIcon = '▼';
            }

            // Générer l'URL pour inverser l'ordre
            $currentUrl = strtok($_SERVER["REQUEST_URI"], '?');
            $toggleOrder = ($order === 'ASC') ? 'desc' : 'asc';
            $queryString = http_build_query(array_merge($_GET, ['order' => $toggleOrder]));
            $sortUrl = $currentUrl . '?' . $queryString;
        ?>

        <table>
            <thead>
                <tr>
                    <th>
                        <a href="<?php echo htmlspecialchars($sortUrl); ?>" style="text-decoration:none;color:inherit;">
                            <?php echo $orderIcon; ?> Date de début
                        </a>
                    </th>
                    <th>Date de fin</th>
                    <th>Distance</th>
                    <th>Météo</th>
                    <th>Trafic</th>
                    <th>Manoeuvre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once 'dbconnection.php';

                    try {
                        $sql = "
                            SELECT e.*, 
                                   m.meteo, 
                                   r.type_route
                            FROM experience e
                            JOIN meteo m ON e.meteo_id = m.meteo_id
                            JOIN route r ON e.route_id = r.route_id
                            ORDER BY e.heure_depart $order
                        ";
                        $experiences = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

                        $sqlManoeuvres = "
                            SELECT em.experience_id, type_manoeuvre AS manoeuvre
                            FROM experience_manoeuvre em
                            JOIN manoeuvre man ON em.manoeuvre_id = man.manoeuvre_id
                        ";
                        $allManoeuvres = $pdo->query($sqlManoeuvres)->fetchAll(PDO::FETCH_ASSOC);

                        $manoeuvresParExperience = [];
                        foreach ($allManoeuvres as $item) {
                            $manoeuvresParExperience[$item['experience_id']][] = $item['manoeuvre'];
                        }

                        foreach ($experiences as $experience) {
                            $experience_id = (int)$experience['experience_id'];

                            $date_debut = date('d/m/Y à H:i', strtotime($experience['heure_depart']));
                            $date_fin = date('d/m/Y à H:i', strtotime($experience['heure_arrivee']));
                            $distance = htmlspecialchars($experience['distance_parcourue']);
                            $meteo = htmlspecialchars($experience['meteo']);
                            $route = htmlspecialchars($experience['type_route']);

                            $manoeuvres = $manoeuvresParExperience[$experience_id] ?? [];
                            $manoeuvresList = htmlspecialchars(implode(', ', $manoeuvres));

                            echo "<tr>
                                <td>$date_debut</td>
                                <td>$date_fin</td>
                                <td>$distance km</td>
                                <td>$meteo</td>
                                <td>$route</td>
                                <td>$manoeuvresList</td>
                            </tr>";
                        }
                    } catch (PDOException $e) {
                        echo "Erreur lors de la récupération des données : " . $e->getMessage();
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
