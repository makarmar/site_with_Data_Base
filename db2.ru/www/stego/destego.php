<?php
    if (!$_POST[url_img]) { echo "Введите все данные"; exit(); }
    
    $type_img = explode (".", $_POST[url_img]);

    switch(strtolower($type_img[count($type_img)-1])) {
        case "png": $img1 = imagecreatefrompng($_POST[url_img]); break;
        case "jpg": $img1 = imagecreatefromjpeg($_POST[url_img]); break;
        case "jpeg": $img1 = imagecreatefromjpeg($_POST[url_img]); break;
        case "gif": $img1 = imagecreatefromgif($_POST[url_img]); break;
        default: $img1 = imagecreatefromgd ($_POST[url_img]); break;
    }
    
    echo "Входное изображение: <img src='".$_POST[url_img]."' 	width='400px'>    ";
    echo "Код: ";
    $size = getimagesize($_POST[url_img]);
    $w = $size[0];
    $h = $size[1];
    
    $x = $y = 0;

    while ($color_pixel_RGB[red]!=1)  {
        $color_pixel = imagecolorat ($img1, $x, $y);
        $color_pixel_RGB = imagecolorsforindex ($img1, $color_pixel);
        $text = chr($color_pixel_RGB[blue]).$text;
        $x+=50;  if ($x>$w) {$x=0; $y++;}
    } ;

    $text[0] = "";
    echo $text;
?>