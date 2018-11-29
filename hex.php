<?php 

include("src/Color.php");
include("src/config.php");

use Mexitek\PHPColors\Color;

if(isset($_GET['hex']) && $_GET['hex']!='')
{

	$input = clear($_GET['hex']);
	if(!preg_match('/^[a-f0-9]{6}$/i', $input) && !isset($_GET['hex_code']))
	{
		header('Location: index.php');
	}
	$input = explode('#',$input);
	$input = end($input);
	if(strlen($input)!=6) header('Location: index.php');
	$ok=1;
}
if(isset($_GET['hex_code']) && $_GET['hex_code']!='')
{
	$input = clear($_GET['hex_code']);
	if(substr($input,0,1) != '#') $input = '#'.$input;
	if(!preg_match('/^#[a-f0-9]{6}$/i', $input))
	{
		header('Location: index.php');
	}
	$input = explode('#',$input);
	$input = end($input);
	if(strlen($input)!=6) die();
	$ok=1;
}
if($ok!=1) die();

$color = new Color($input);

if($color->isLight( $input ))
	$dl = 'light';
else if($color->isDark( $input ))
	$dl = 'dark';

if($dl=='light') 
{
	$txtcol = 'black';
	$txtback = $input;
	$txt = "روشن";
}
else if($dl=='dark')
{
	$txtcol = 'white';
	$txtback = $input;
	$txt = "تیره";
}

include("src/header.php");

?>
<style>body {background:#<?=$input?>;}</style>

<div class="container" style="background:white;">

	<div class="row" style='font-size:20px; font-weight:200;'>
		<div class="col-sm-6">
			<div class="uptil">
				<span style='background:#<?=$input?>; width:100%!important;'><p>#<?=$input?></p></span>

			</div>	
		</div>
		<div class="col-sm-6">

			<table class="table table-striped table-advance table-hover " style=" text-align:center;">

				<tbody>

					<tr style="height:70px;">

						<td style="background:#<?=$txtback?>; color:<?=$txtcol?>;"><span class="label label-default" style="font-size:12px;">این رنگ <?=$txt?> است</span></td>
						<td style="background:#<?=$txtback?>; color:<?=$txtcol?>; font-size:12px;">متن روی بلوک دارای پس زمینه با این رنگ</td>
					</tr>

					<tr>
						<td>Hex</td>
						<td>#<?php echo $color->gethex(); ?></td>
					</tr>

					<tr>
						<td>RGB</td>
						<?php $rgb = hex2rgb($input); ?>
						<td style="direction:ltr;">( <p style="display:inline; color:red;"><?=$rgb[0]?></p> , <p style="display:inline; color:green;"><?=$rgb[1]?></p> , <p style="display:inline; color:blue;"><?=$rgb[2]?></p> )</td>
					</tr>

					<tr>
						<td>HSL</td>
						<?php $hsl = $color->getHsl(); ?>
						<td style="direction:ltr;">( <?=round($hsl['H'],2)?> , <?=round($hsl['S'],2)?> , <?=round($hsl['L'],2)?> )</td>
					</tr>


				</tbody>
			</table>
		</div>
	</div>



	<div class="row" style='font-size:20px; font-weight:200; margin-top:35px;'>
		<div class="mor">
			<div class="row">
				<div class="col-sm-2"><p>رنگ های تیره تر</p></div>
				<div class="col-sm-10"><hr  style="margin-left:10px; margin-top:15px; border-top: 0.1px dashed grey; opacity:0.6; "></div>
			</div>



			<?php
			$color = new Color($input);
			$darken="";
			$lighten="";

			for($i=0;$i<18;$i++)
			{	
				$newcolor = $color->darken('2');
				$color = new Color($newcolor);
				$back  = $color->gethex();
				$darken .= "<a href='?hex=$back' class='tooltips'  title='#$back' data-placement='bottom' data-toggle='tooltip '><span style='background:#$back'></span></a>";
			}
			echo $darken;
			?>



			<div class="row">
				<div class="col-sm-2"><p>رنگ های روشن تر</p></div>
				<div class="col-sm-10"><hr  style="margin-left:10px; margin-top:15px; border-top: 0.1px dashed grey; opacity:0.6; "></div>
			</div>

			<?php 
			$color = new Color($input);
			for($i=0;$i<18;$i++)
			{
				$newcolor = $color->lighten('2');
				$color = new Color($newcolor);
				$back  = $color->gethex();
				$lighten .= "<a href='?hex=$back' class='tooltips'  title='#$back' data-placement='bottom' data-toggle='tooltip '><span style='background:#$back'></span></a>";
			}
			echo $lighten;
			$color = new Color($input);
			?>

			<div class="row">
				<div class="col-sm-2"><p>رنگ مکمل</p></div>
				<div class="col-sm-10"><hr  style="margin-left:10px; margin-top:15px; border-top: 0.1px dashed grey; opacity:0.6; "></div>
			</div>

			<div class="row">
				<div class="col-sm-12" style="padding-left:27px;">
					<?php 
					$color = new Color($input); 
					$complementary = $color->complementary();
					echo "<a href='?hex=$complementary' class='tooltips'  title='#$complementary' data-placement='bottom' data-toggle='tooltip '><span style='border-radius:5px;width:100%;background:#$complementary'></span></a>";
					?>
				</div>
			</div>
		</div>

	</div>








	<!-- advertise start -->
<!-- <div class="row">
	<div class="col-sm-12">
		<center>
		<hr>
			<script type="text/javascript">
			;!( function( w, d ) {
			'use strict';
			var ad = { user: "1537263719", width: 970, height: 90, id: 'anetwork-' + ~~( Math.random() * 999999  ) },
			h = d.head || d.getElementsByTagName( 'head' )[ 0 ],
			s = location.protocol + '//static-cdn.anetwork.ir/aw/aw.js';
			if ( typeof w.anetworkParams != 'object' )
			w.anetworkParams = {};
			d.write( '<div id="' + ad.id + '" style="display: inline-block"></div>' );
			w.anetworkParams[ ad.id ] = ad;
			d.write( '<script type="text/javascript" src="' + s + '" async></scri' + 'pt>' );
			})( this, document );</script>
		</center>
	</div> -->
	<!-- </div> -->
	<!-- advertise end -->

	<div class="row" style="font-size:20px; font-weight:200; margin-top:35px;">
		<p style="font-size:12px;"> <i class="fa fa-info-circle animated tada infinite"></i>  برای رنگ پس زمینه از کلاس <b>bgcolor</b> و برای رنگ متن از کلاس <b>forecolor</b> و برای رنگ قاب دور المان ها از کلاس <b>bordercolor</b> استفاده کنید</p>
<pre style="text-align:left; direction:ltr;">
<?php $str = "<style> 
.bgcolor { background-color:#$input; } 
.forecolor { color:#$input; } 
.bordercolor { border:3px solid #$input; }
</style>";
echo htmlentities($str); ?>
</pre>
</div>


<div class="row" style="font-size:20px; font-weight:200; margin-top:15px;">
	<p style="font-size:12px;"> <i class="fa fa-info-circle animated tada infinite"></i>  برای نوشتن یک متن با این رنگ می توانید از کد زیر استفاده کنید </p>
<pre style="text-align:left; direction:ltr;">
<?php $str = "<p style='color:#$input'>متن دلخواه شما</p>";
echo htmlentities($str); ?>
</pre>
</div>


<div class="row" style="font-size:20px; font-weight:200; margin-top:15px;">
	<p style="font-size:12px;"> <i class="fa fa-info-circle animated tada infinite"></i>  کد یک متن سایه دار با این رنگ </p>
<pre style="text-align:left; direction:ltr;">
<?php $str = "<p style='text-shadow: 4px 4px 2px rgba($rgb[0],$rgb[1],$rgb[2], 0.8);'>متن دلخواه سایه دار</p>";
echo htmlentities($str); ?>
</pre>
</div>



<div class="row" style="font-size:20px; font-weight:200; margin-top:15px;">
	<p style="font-size:12px;"> <i class="fa fa-info-circle animated tada infinite"></i>  ایجاد یک محیط (<b>div</b>) با رنگ پس زمینه </p>
<pre style="text-align:left; direction:ltr;">
<?php $str = "<div style='background-color:#$input'>محتوای محیط</div>";
echo htmlentities($str); ?>
</pre>
</div>

<div class="row" style="font-size:20px; font-weight:200; margin-top:15px;">
	<p style="font-size:12px;"> <i class="fa fa-info-circle animated tada infinite"></i>  ایجاد یک (<b>gradients</b>) برای css3 با پشتیبانی انواع مرورگرها </p>
<pre style="text-align:left; direction:ltr;">
<?php 
echo $color->getCssGradient();
?>
</pre>
</div>


</div>
<?php include("src/footer.php");?>
</body>
</html>
