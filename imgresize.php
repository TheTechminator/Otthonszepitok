<?php
	function show_image($image, $newWidth, $newHeight) {

		preg_match("'^(.*)\.(gif|jpe?g|png)$'i", $image, $ext);
	    switch (strtolower($ext[2])) {
	        case 'jpg' :
	        case 'jpeg': 
	        	$source = imagecreatefromjpeg ($image);
	            break;
	        case 'png' : 
	        	$source = imagecreatefrompng  ($image);
	            break;
	        default    : 
	        	$stop = true;
	            break;
	    }

	    if (!isset($stop)) {
			header('Content-Type: image/webp');

			list($width, $height) = getimagesize($image);

			if($width<$newWidth) {
				$newWidth = $width;
			}

			if($height<$newHeight) {
				$newHeight = $height;
			}

			$thumb = imagecreatetruecolor($newWidth, $newHeight);
			imagecopyresized($thumb, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
			imagewebp($thumb, NULL, 100);
		}
	}


	//echo $_SERVER['DOCUMENT_ROOT'];
	/*echo $_GET["width"];
	echo $_GET["height"];*/

	show_image($_SERVER['DOCUMENT_ROOT'].$_GET["name"], $_GET["width"], $_GET["height"]);

?>