<?php 

include("config.php");

$response = array();
if(isset($_GET['version']) && $_GET['version']!='')
{
	$response['last_version'] = 1;
	$response['last_stable_version'] = 1;
}
else if(isset($_GET['hex']) && $_GET['hex']!='')
{
	$input = clear($_GET['hex']);
	if(substr($input,0,1) != '#') $input = '#'.$input;
	if(!preg_match('/^#[a-f0-9]{6}$/i', $input))
	{
		$response['status'] = 'failure';
		$response['message'] = 'Hex code is incorrect';
		echo json_encode($response, JSON_UNESCAPED_UNICODE);
		return 0;
	}
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
		$response['color_status'] = 'dark';
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

	for($i=0;$i<18;$i++)
	{	
		$newcolor = $color->darken('4');
		$color = new Color($newcolor);
		$dark_color  = $color->gethex();
		array_push($response['darker'], $dark_color);
	}
	$color = new Color($input);
	for($i=0;$i<18;$i++)
	{
		$newcolor = $color->lighten('4');
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
		$response['spectrum'] = 'Random';
		foreach (RandomColor::many(27) as $c){
			array_push($response['colors'], substr($c, -6));
		}
		break;

		case 'red':
		$response['spectrum'] = 'Red';
		foreach (RandomColor::many(27, array('hue'=>'red')) as $c){
			array_push($response['colors'], substr($c, -6));
		}
		break;

		case 'green':
		$response['spectrum'] = 'Green';
		foreach (RandomColor::many(27, array('hue'=>'green')) as $c){
			array_push($response['colors'], substr($c, -6));
		}
		break;

		case 'blue':
		$response['spectrum'] = 'Blue';
		foreach (RandomColor::many(27, array('hue'=>'blue')) as $c){
			array_push($response['colors'], substr($c, -6));
		}
		break;
		
		case 'yellow':
		$response['spectrum'] = 'Yellow';
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