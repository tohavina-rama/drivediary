<?php
$pageTitle = "Dashboard";
include __DIR__ . '/includes/head.php';
?>


<body>

    <?php include __DIR__ . '/includes/header.php'; ?>
    <main>

        <button class="buttonNew" onclick="openPopup()">
            + Nouvelle expérience
        </button>

        <?php include __DIR__ . '/includes/form.php'; ?>

        </div>
        <div class="statSection">
            <div class="statTitle">📊 Aperçu</div>
            <div class="statGrid">
                <div class="statCard">
                    <div class="statNumber">--</div>
                    <div class="statLabel">Km</div>
                </div>
                <div class="statCard">
                    <div class="statNumber">--</div>
                    <div class="statLabel">Hr</div>
                </div>
                <div class="statCard">
                    <div class="statNumber">--</div>
                    <div class="statLabel">Manoeuvre</div>
                </div>
            </div>
        </div>
        <div class="statTable">
            <div class="tableScroll">
                <table>
                    <thead>
                        <tr>
                            <th>Numéro</th>
                            <th>Heure de début</th>
                            <th>Heure de fin</th>
                            <th>Météo</th>
                            <th>Manoeuvre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>08:00</td>
                            <td>09:00</td>
                            <td>Ensoleillé</td>
                            <td>Créneau</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>09:15</td>
                            <td>10:00</td>
                            <td>Pluie</td>
                            <td>Marche arrière</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>09:15</td>
                            <td>10:00</td>
                            <td>Pluie</td>
                            <td>Marche arrière</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>09:15</td>
                            <td>10:00</td>
                            <td>Pluie</td>
                            <td>Marche arrière</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>09:15</td>
                            <td>10:00</td>
                            <td>Pluie</td>
                            <td>Marche arrière</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>09:15</td>
                            <td>10:00</td>
                            <td>Pluie</td>
                            <td>Marche arrière</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>09:15</td>
                            <td>10:00</td>
                            <td>Pluie</td>
                            <td>Marche arrière</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>09:15</td>
                            <td>10:00</td>
                            <td>Pluie</td>
                            <td>Marche arrière</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>


</body>