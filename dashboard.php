<?php
$pageTitle = "Dashboard";
include __DIR__ . '/includes/head.php';
?>

<body>

    <?php include __DIR__ . '/includes/header.php'; ?>
    <main>

        <div class="statSection">
            <div class="statsTitle">📊 Aperçu</div>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">--</div>
                    <div class="stat-label">Km</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">--</div>
                    <div class="stat-label">Hr</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">--</div>
                    <div class="stat-label">Manoeuvre</div>
                </div>
            </div>
        </div>
        <div class="stattable">
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
                </tbody>
            </table>
        </div>
    </main>


</body>