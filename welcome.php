<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
//	$ declares a variable
$url = "http://www.wetter.com/suche/?q=";
//echo $url; 
$url_online = "http://www.wetteronline.de/wetter/";
$cit= $_POST["name"]." ".$_POST["email"];
$city = $_POST["name"];

/*	Initialising variable output on the fly and then calling one of the internal functions 
to PHP call file_get_contents(), which goes to an url or file and pulls every data out of it */	

echo $url . urlencode($cit);
 $data = file_get_contents($url . urlencode($cit));
 //$dataOnline = file_get_contents('http://www.wetteronline.de');//$url_online . urlencode($city));

//echo $data;
//echo $dataOnline;


//echo $data;
//allow_url_fopen = On;
//	Or better

/*function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);

    $return = curl_exec($ch); curl_close ($ch);
  	echo $return;
    return $return;
}


$handle = curl_init("https://www.google.co.uk/?gws_rd=ssl");
echo $handle;
echo "ncurses_assume_default_colors(fg, bg)";
/*
/*	Set first option in CURL to know what is gonna do when executed. Setting an option in the handle created. Option: CURLOPT_REturntransfer return the transfer to a variable (curl_scrape_page, not on the screen). Else would be just on screen. True otherwise nothing happens*/


//function get_data($url_in){
	$string =$url . $cit;
	 $url_in = $url . $_POST["name"] . " " . $_POST["email"];//"http://www.oooff.com/php-scripts/basic-curl-scraping-php/basic-scraping-with-curl.php";
	$url_re = str_replace( ' ', '%20', trim($url_in));
	echo $url_re;
function get_data($url_in){
	//	Initialize library CURL as handle this is where this specific instance is initialized to be stored to that we can work with it.
	$ch = curl_init(); 
	// Some options 
	curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url_in);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
    //	For website which have a usercheck.
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:19.0) Gecko/20100101 Firefox/19.0");
//	Run all the stuff and into the able (All the same as to file_get_contents)
	//$data = curl_exec($ch);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}
$data =get_data($url_re);


$temperature = '/tip--trigger ]\">(.+?)C<\/div>/';
preg_match($temperature,$data,$match);
//
var_dump($match);
echo $match[1];
echo "\n";
$data_online = get_data($url_online . $_POST["name"]);
//echo $data_online;
//$data_online = get_file_contents($url_online .$_POST["name"]);
$temperature_online = '/temperature tooltip gt0\">(.+?)<\/span>/';
preg_match($temperature_online,$data_online,$match_1);
var_dump($match_1);
echo "                     ";
echo $match_1[1];
//echo $data_online;


//echo $data_online;
//echo get_data($string);

// q=site%3Afroogle.com, field (q=query) always before equals sign and value after,
/* (.+?) match everything starting from the text, opening anchor text here (.+?) closing anchor here. Always use forward /.
$regex = '/<title>(.+?)<\/title>/';

//	For wetter.de
$temperature = '/temperature-max\">(.+?)<\/span>/';

//	For wetter.com

//	For wetter_online
<span class="fav-tmax ">20 °C</span>






//echo curl_scraped_page;*/
?>

</body>
</html>