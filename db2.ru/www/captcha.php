<?php
	require 'connect.php';
	session_start();
 
	// ������� ��������� ����� � ��������� � ������
 
	$randomnr = rand(1000, 9999);
	$_SESSION['randomnr2'] = md5($randomnr);
 
	//������� �����������
	$im = imagecreatetruecolor(200, 55);
 
	//�����:
	$white = imagecolorallocate($im, 255, 255, 255);
	$grey = imagecolorallocate($im, 128, 128, 128);
	$black = imagecolorallocate($im, 0, 0, 0);
 
	imagefilledrectangle($im, 0, 0, 200, 35, $black);
 
	//���� � ������:
 
	$font = '7fonts.ru_AftershockDebris.ttf';
 
	//������ �����:
	imagettftext($im, 35, 0, 22, 50, $grey, $font, $randomnr);
 
	imagettftext($im, 35, 0, 15, 44, $white, $font, $randomnr);
 
	// ������������� ����������� �� ������� ������������
	header("Expires: Wed, 1 Jan 1997 00:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
 
	//�������� ����������� ��������
	header ("Content-type: image/gif");
	imagegif($im);
	imagedestroy($im);
?>