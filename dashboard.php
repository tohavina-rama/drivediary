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
        <?php include __DIR__ . '/includes/table.php'; ?>
    </main>


</body>