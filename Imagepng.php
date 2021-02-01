<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);
imagestring($image, 5, 450, 150, "Certificado", $titleColor);
imagestring($image, 5, 440, 350, "Nome", $titleColor);
imagestring($image, 3, 440, 370, "Concluido em: ".date("d/m/y"), $titleColor);

header("Content-type: image/jpeg");
imagejpeg($image, "certifiado-".date("d/m/y").".jpg", 10);
imagedestroy($image);

?>