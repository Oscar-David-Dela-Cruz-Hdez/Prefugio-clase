<?php
require_once "./app/views/inc/head.php";
require_once "./config/server.php";
use app\controllers\somosController;

$somosController = new somosController();
$infoSomos = $somosController ->traerInfoMision();
?>
<section class="right" id="">
    <h2>Mision De nuestra empresa</h2>
    <p>
    <?php echo htmlspecialchars($infoSomos['descripcion']); ?>
    </p>
</section>