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
    
    
    imagepng ($img1, "img_code1".date(si).".png");
    echo "Входное изображение: <img src='img_code1".date(si).".png' 	width='400px'>";
    $size = getimagesize($_POST[url_img]);
    $w = $size[0];
    $h = $size[1];
    
    $x = $y = 0;
    $length = strlen($_POST[stego_code]);
    $code = $_POST[stego_code];
    while ($length--) {
        $color_pixel = imagecolorat ($img1, $x, $y);
        $color_pixel_RGB = imagecolorsforindex ($img1, $color_pixel);
        $color_pixel_RGB[blue] = ord ($code[$length]); 
        $color_new_pixel =
 imagecolorclosest ($img1, $color_pixel_RGB[red],$color_pixel_RGB[green], $color_pixel_RGB[blue]);
        imagesetpixel ($img1, $x, $y, $color_new_pixel);
        $x+=50; 
        if ($x>$w) {$x=0; $y++;}
    }
    
    $color_new_pixel = imagecolorclosest ($img1, 1, $color_pixel_RGB[green],  $color_pixel_RGB[blue]);
    imagesetpixel ($img1, $x, $y, $color_new_pixel);
        
    imagepng ($img1, "img_code2".date(si).".png");
    echo "Зашифрованное: <img src='img_code2".date(si).".png'  	width='400px'>";
?>