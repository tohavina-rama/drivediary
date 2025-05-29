<div class="popup-overlay" id="popupOverlay" onclick="closePopupOnOverlay(event)">
    <div class="popup">
        <button class="close-btn" onclick="closePopup()">&times;</button>
        <h2>Nouvelle Expérience</h2>
        <div class="popupContainer">
            <div class="popupLeft">
                <form id="addForm" method="post">
                    <div class="form-group">
                        <label for="heure_depart">Heure de départ</label>
                        <input type="datetime-local" id="heure_depart" name="heure_depart" required>
                    </div>

                    <div class="form-group">
                        <label for="heure_arrivee">Heure d'arrivée</label>
                        <input type="datetime-local" id="heure_arrivee" name="heure_arrivee" required>
                    </div>

                    <div class="form-group">
                        <label for="distance_parcourue">Distance parcourue en KM</label>
                        <input type="number" id="distance_parcourue" name="distance_parcourue" required>
                    </div>

                    <div class="form-group">
                        <label for="meteo">Méteo :</label>
                        <select id="meteo" name="meteo" required>
                            <?php
                            $meteo = $pdo->query("SELECT * FROM meteo")->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($meteo as $row) {
                                $key = htmlspecialchars($row['meteo_id']);
                                $value = htmlspecialchars($row['meteo']);

                                echo "<option value=" . $key . ">" . $value . "</option>";
                            }
                            ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="route">Type de route :</label>
                        <select id="route" name="route" required>
                            <?php
                            $route = $pdo->query("SELECT * FROM route")->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($route as $row) {
                                $key = htmlspecialchars($row['route_id']);
                                $value = htmlspecialchars($row['type_route']);

                                echo "<option value=" . $key . ">" . $value . "</option>";
                            }
                            ?>

                        </select>
                    </div>



            </div>
            <div class="popupRight">
                <div class="form-group">
                    <label>Type de Manoeuvre :</label>
                    <?php
                    $manoeuvre = $pdo->query("SELECT * FROM manoeuvre")->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($manoeuvre as $row) {
                        $key = htmlspecialchars($row['manoeuvre_id']);
                        $value = htmlspecialchars($row['type_manoeuvre']);

                        echo '<div class="checkbox">
                                <input type="checkbox" name="manoeuvre[]" id="manoeuvre_' . $key . '" value="' . $key . '">
                                <label for="manoeuvre_' . $key . '">' . $value . '</label>
                              </div>';
                    }
                    ?>

                </div>
            </div>
        </div>



        <div class="form-buttons">
            <button type="submit" class="btn btn-submit">Ajouter</button>
            <button type="button" class="btn btn-cancel" onclick="closePopup()">Annuler</button>
        </div>
        </form>
    </div>
</div>