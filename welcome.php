<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
//	$ declares a variable
$url = "http://www.wetter.com/suche/?q=";
$city= $_POST["name"]." ".$_POST["email"];
echo $url;

/*	Initialising variable output on the fly and then calling one of the internal functions 
to PHP call file_get_contents(), which goes to an url or file and pulls every data out of it */	

 $data = file_get_contents($url . urlencode($city));
//echo $data;

//	Or better
//	Initialize library CURL as handle this is where this specific instance is initialized to be stored to that we can work with it.
//$handle = curl_init($url);

/*	Set first option in CURL to know what is gonna do when executed. Setting an option in the handle created. Option: CURLOPT_REturntransfer return the transfer to a variable (curl_scraped_page, not on the screen). Else would be just on screen. True otherwise nothing happens */
//curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

//	Run all the stuff and into the variable (All the same as to file_get_contents)
//$data = curl_exec($handle);
//curl_close($handle);

// q=site%3Afroogle.com, field (q=query) always before equals sign and value after,
/* (.+?) match everything starting from the text, opening anchor text here (.+?) closing anchor here. Always use forward /.*/
$regex = '/<title>(.+?)<\/title>/';

//	For wetter.de
//$temperature = '/temperature-max\">(.+?)<\/span>/';

//	For wetter.com
$temperature = '/tip--trigger ]\">(.+?)C<\/div>/';
preg_match($temperature,$data,$match);
var_dump($match);
echo $match[1];


//echo curl_scraped_page;*/
?>

</body>
</html>