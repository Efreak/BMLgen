<?
$title=$_GET['title'];
$toaddr1=$_GET['toaddr1'];
$toaddr2=$_GET['toaddr2'];
$toaddr3=$_GET['toaddr3'];
$toaddr4=$_GET['toaddr4'];
$fromaddr1=$_GET['addr1'];
$fromaddr2=$_GET['addr2'];
$moocher=$_GET['moocher'];

$title				= "Title: $title";
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
imagettftext($image, 15, 0, 150, 115, $titlecolor, $font, $title);
imagettftext($image, 45, 0, 250, 200, $middle, $font, $toaddr1);
imagettftext($image, 45, 0, 250, 275, $middle, $font, $toaddr2);
imagettftext($image, 45, 0, 250, 350, $middle, $font, $toaddr3);
imagettftext($image, 45, 0, 250, 425, $middle, $font, $toaddr4);
header('Content-type: image/jpeg');
imagejpeg($image);
imagedestroy($image);
?>
