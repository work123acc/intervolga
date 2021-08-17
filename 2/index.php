<meta charset="utf-8"/>


<?
	$img = './img.png';
	$newimg = './img2.png';
	
	function imageresize($outfile,$infile,$neww,$newh,$quality) {
		
		//$im=imagecreatefromjpeg($infile);
		$im=imagecreatefrompng($infile);
		$im1=imagecreatetruecolor($neww,$newh);
		imagecopyresampled($im1,$im,0,0,0,0,$neww,$newh,imagesx($im),imagesy($im));
		
		//imagejpeg($im1,$outfile,$quality);
		imagepng($im1,$outfile,$quality) ;
		
		imagedestroy($im);
		imagedestroy($im1);
	}
	
	imageresize($newimg,$img,200,100,9);
?>

Обрезанное изображение :<br>
<img src="<?= $newimg ?>"/>
<br>

Исходное изображение :<br>
<img src="<?= $img ?>"/>
<br>


