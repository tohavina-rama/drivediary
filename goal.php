<?php
$pageTitle = "Objectif";
include __DIR__ . '/includes/head.php';
?>

<body>

    <?php include __DIR__ . '/includes/header.php';  ?>

    <main>
       <button class="buttonNew" onclick="openPopup()">
            + Nouvelle expérience
        </button>

<?php include __DIR__ . '/includes/form.php'; ?>

        <div class="goalSection">
            <div class="statSection goalStatSection">
                <div class="statTitle">📊 Aperçu</div>
                <div class="statGrid">
                    <div class="statCard">
                        <div class="statNumber" id="doneNumber">--</div>
                        <div class="statLabel">Réalisé</div>
                    </div>
                    <div class="statCard">
                        <div class="statNumber" id="goalNumber">--</div>
                        <div class="statLabel">Objectif</div>
                    </div>
                    <div class="statCard">
                        <div class="statNumber" id="remainNumber">--</div>
                        <div class="statLabel">Restant</div>
                    </div>
                    <div class="statCard">
                        <div class="statNumber" id="moyNumber">--</div>
                        <div class="statLabel">Moyenne</div>
                    </div>
                </div>
                <div class="progressSection">
                    <div class="progressHeader">
                        <div class="progressTitle">🎯 Progression</div>
                        <div class="progressPercentage" id="progressPercent">0%</div>
                    </div>

                    <div class="progressBarContainer">
                        <div class="progressBar">
                            <div class="progressFill" id="progressFill"></div>
                        </div>
                    </div>

                    <div id="achievementBadge" style="display: none;">
                        <div class="achievementBadge">🎉 Félicitations ! Objectif atteint !</div>
                    </div>
                </div>


            </div>
            <div class="objectiveForm">
                <div class="formTitle">🎯 Définir mon objectif</div>

                <div class="unitSelector">
                    <button class="unitBtn active" onclick="selectUnit('heures')">⏰ Heures</button>
                    <button class="unitBtn" onclick="selectUnit('km')">🛣️ Kilomètres</button>
                </div>

                <div class="inputGroup">
                    <input type="number" id="objectiveInput" placeholder=" " min="1" max="1000">
                    <label class="inputLabel" id="input-Label">Nombre d'heures</label>
                </div>

                <button class="submitBtn" onclick="setObjective()">
                    🚀 Valider mon objectif
                </button>
            </div>

        </div>
        <?php include __DIR__ . '/includes/table.php'; ?>
    </main>



    </div>



</body>