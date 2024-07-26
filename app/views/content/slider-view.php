<?php
require_once "./app/views/inc/head.php";
require_once "./config/server.php";
use app\controllers\sliderController;
////otro
$sliderController = new sliderController();
$imagenesSlider = $sliderController->seleccionarImgSlider();

?>

<section class="middle">
    <div class="slider-frame">
        <ul>
            <?php foreach ($imagenesSlider as $imagen): {?>
                <li><img width="300px" height="300px" src="<?php echo $imagen['slider_url']; ?>"></li>
            <?php }endforeach; ?>
        </ul>
    </div>
</section>  