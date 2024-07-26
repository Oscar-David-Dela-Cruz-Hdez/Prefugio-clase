<?php
require_once "./app/views/inc/head.php";
require_once "./config/server.php";
use app\controllers\visionController;

$visionController = new visionController();
$infoVision = $visionController->traerInfoVision();
?>
<section class="right" id="">
    <h2>Visión de nuestra empresa</h2>
    <p>
    <?php echo htmlspecialchars($infoVision['descripcion']); ?>
    </p>
</section>
