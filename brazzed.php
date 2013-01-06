<?PHP


function brazzed($url=false, $position='bottomright'){
  
    if(!$url){
        return;
    }
    
    $position = $position ? $position : 'bottomright';
    
    $url = filter_var($url, FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_LOW | FILTER_FLAG_ENCODE_HIGH);
  
	//356x90
	$brazzers = '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';
	$brazzers = imagecreatefromstring(base64_decode($brazzers));
	$sx = imagesx($brazzers);
	$sy = imagesy($brazzers);
	
	$im = imagecreatefromstring(file_get_contents($url));
	
	// Set the margins for the stamp and get the height/width of the stamp image
	
	$margin = 5;
	
	
	switch($position){
		case 'topleft':
			$posx = $margin;
			$posy = $margin;
		break;
		case 'topright':
			$posx = imagesx($im) - $sx - $margin;
			$posy = $margin;
		break;
		case 'bottomleft':
			$posx = $margin;
			$posy = imagesy($im) - $sy - $margin;
		break;
		case 'bottomright':
			$posx = imagesx($im) - $sx - $margin;
		  $posy = imagesy($im) - $sy - $margin;
		break;
	}
	
	
	imagecopy($im, $brazzers, $posx, $posy, 0, 0, $sx, $sy);
	
	header('Content-type: image/jpeg');
	imagepng($im);
	imagedestroy($im);
	
}

// Lets uhh... do this...
brazzed($_GET['url'], $_GET['position']);

?>