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
                    <th>Distance parcourue</th>
                    <th>Météo</th>
                    <th>Trafic</th>
                    <th>Manoeuvre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $experienceManoeuvres = $pdo->query("SELECT * FROM experience_manoeuvre")->fetchAll(PDO::FETCH_ASSOC);

                $experiences = $pdo->query("SELECT * FROM experience ORDER BY heure_depart $order")->fetchAll(PDO::FETCH_ASSOC);
                foreach ($experiences as $experience) {
                    $date_debut_raw = $experience['heure_depart'];
                    $date_debut = date('d/m/Y à H:i', strtotime($date_debut_raw));

                    $date_fin_raw = htmlspecialchars($experience['heure_arrivee']);
                    $date_fin = date('d/m/Y à H:i', strtotime($date_fin_raw));

                    $distance_parcourue = htmlspecialchars($experience['distance_parcourue']);

                    $meteo_id = htmlspecialchars($experience['meteo_id']);
                    $meteo = $pdo->query("SELECT `meteo` FROM `meteo` WHERE meteo_id = $meteo_id;")->fetchColumn();

                    $route_id = htmlspecialchars($experience['route_id']);
                    $route = $pdo->query("SELECT `type_route` FROM `route` WHERE route_id = $route_id;")->fetchColumn();


                    echo "<tr>
                                    <td>$date_debut</td>
                                    <td>$date_fin</td>
                                    <td>$distance_parcourue km</td>
                                    <td>$meteo</td>
                                    <td>$route</td>
                                </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>