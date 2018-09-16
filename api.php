<?php 

include("src/Color.php");
include("src/config.php");

use Mexitek\PHPColors\Color;

$response = array();
if(isset($_GET['hex']) && $_GET['hex']!='')
{
	$input = clear($_GET['hex']);
	$input = explode('#',$input);
	$input = end($input);
	if(strlen($input)!=6) {
		$response['status'] = 'failure';
		$response['message'] = 'Hex code is incorrect';
		echo json_encode($response, JSON_UNESCAPED_UNICODE);
		return 0;
	}
	
}
else {
	$response['status'] = 'failure';
	$response['message'] = 'Required parameters not set in url';
	echo json_encode($response, JSON_UNESCAPED_UNICODE);
	return 0;
}
$response['color'] = $input;
$color = new Color($input);
if($color->isLight( $input ))
{
	$dl = 'light';
	$response['color_status'] = 'light';
	$response['text_color'] = 'black';
}
else if($color->isDark( $input ))
{
	$dl = 'dark';
	$response['status'] = 'dark';
	$response['text_color'] = 'white';
}
 
	$response['hex'] = $color->gethex();
	$rgb = hex2rgb($input);
	$response['rgb'] = [
		"R" => $rgb[0],
		"G" => $rgb[1],
		"B" => $rgb[2]
	];
	$response['hsl'] = $color->getHsl();
	$response['hex'] = $color->gethex();
	$response['darker'] = array();
	$response['brighter'] = array();

for($i=0;$i<10;$i++)
{	
	$newcolor = $color->darken('2');
	$color = new Color($newcolor);
	$dark_color  = $color->gethex();
	array_push($response['darker'], $dark_color);
}
for($i=0;$i<10;$i++)
{
	$newcolor = $color->lighten('2');
	$color = new Color($newcolor);
	$light_color  = $color->gethex();
	array_push($response['brighter'], $light_color);
}

		$response['status'] = 'success';
		$response['message'] = 'Everythings are ok';

		echo json_encode($response, JSON_UNESCAPED_UNICODE);

?>