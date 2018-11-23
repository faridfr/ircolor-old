<?php 

include("src/Color.php");
include 'src/RandomColor.php';
include("src/config.php");

use Mexitek\PHPColors\Color;
use \Colors\RandomColor;

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

	
}
else if(isset($_GET['spectrum']) && $_GET['spectrum']!='')
{
	$response['colors'] = array();

	switch ($_GET['spectrum']) {
		case 'random':
			foreach (RandomColor::many(27) as $c){
				array_push($response['colors'], substr($c, -6));
			}
			break;

		case 'red':
		foreach (RandomColor::many(27, array('hue'=>'red')) as $c){
			array_push($response['colors'], substr($c, -6));
		}
		break;

		case 'green':
		foreach (RandomColor::many(27, array('hue'=>'green')) as $c){
			array_push($response['colors'], substr($c, -6));
		}
		break;

		case 'blue':
		foreach (RandomColor::many(27, array('hue'=>'blue')) as $c){
			array_push($response['colors'], substr($c, -6));
		}
		break;
		
		case 'yellow':
		foreach (RandomColor::many(27, array('hue'=>'yellow')) as $c){
			array_push($response['colors'], substr($c, -6));
		}
		break;

		default:
			$response['status'] = 'failure';
			$response['message'] = 'Required parameters not set in url';
			unset($response['colors']);
			echo json_encode($response, JSON_UNESCAPED_UNICODE);
			return 0;
		break;
	}
	
}
else {
	$response['status'] = 'failure';
	$response['message'] = 'Required parameters not set in url';
	echo json_encode($response, JSON_UNESCAPED_UNICODE);
	return 0;
}

$response['status'] = 'success';
$response['message'] = 'Everythings are ok';

echo json_encode($response, JSON_UNESCAPED_UNICODE);

?>