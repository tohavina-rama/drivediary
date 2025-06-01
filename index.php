<?php
$pageTitle = "Drivediary";
include __DIR__ . '/includes/head.php';
?>

<body>

 

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
                        <?php include __DIR__ . '/includes/distanceKM.php'; ?>
                        <div class="statLabel">Km</div>
                    </div>
                    <div class="statCard">
                        <?php include __DIR__ . '/includes/duree.php'; ?>
                        <div class="statLabel">Hr</div>
                    </div>
                    <div class="statCard">
                        <div class="statNumber" id="goalNumber"></div>
                        <div class="statLabel">Objectif Hr</div>
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
                </div>


            </div>
            <div class="objectiveForm">
                <div class="formTitle">🎯 Définir mon objectif</div>

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