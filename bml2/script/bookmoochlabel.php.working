<?
$titleone=$_GET['titleone'];
$titletwo=$_GET['titletwo'];
$titlethree=$_GET['titlethree'];
$toaddr=$_GET['toaddr'];
$fromaddr1=$_GET['addr'];
$moocher=$_GET['moocher'];
$resizewidth=$_GET['width'];

$titleone			= "Title: $titleone";
$titletwo			= "Title: $titletwo";
$titlethree			= "Title: $titlethree";
$from				= "From Bookmoocher: $moocher";
$file				= 'Blank_Label.jpg';
$dim				= getimagesize($file);
$imagewidth			= $dim[0];
$imageheight			= $dim[1];
$image				= imagecreatefromjpeg($file);
$top 				= imagecolorallocate($image, 122, 197, 205);
$titlecolor			= imagecolorallocate($image, 95, 159, 159);
$middle				= imagecolorallocate($image, 0, 0, 0);
$font 				= "./Arial-Black.ttf";
imagettftext($image, 20, 0, 470, 25, $top, $font, $from);
imagettftext($image, 20, 0, 550, 55, $top, $font, $fromaddr1);
imagettftext($image, 20, 0, 550, 85, $top, $font, $fromaddr2);
imagettftext($image, 15, 0, 150, 115, $titlecolor, $font, $titleone);
imagettftext($image, 15, 0, 150, 145, $titlecolor, $font, $titletwo);
imagettftext($image, 15, 0, 150, 175, $titlecolor, $font, $titlethree);
imagettftext($image, 45, 0, 250, 230, $middle, $font, $toaddr);


$width = imagesx($image);
$height = imagesy($image);
$new_width = $resizewidth;
$new_height = $height * ($new_width/$width); 
$image_resized = imagecreatetruecolor($new_width, $new_height);
imagecopyresampled($image_resized, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

header('Content-type: image/jpeg');
imagejpeg($image_resized);
imagedestroy($image_resized);
imagedestroy($image);

?>
