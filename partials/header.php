<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="اولین و برترین وبسایت تخصصی کد رنگ فارسی,کد رنگ برای طراحی وب و طراحی گرافیک"/>
	<meta name="keywords" content="colorhex,colorcode,کد رنگ,رنگ های مشابه,رنگ های تیره تر یا روشن تر">
	<meta name="author" content="فرید فروزان">
	<link rel="shortcut icon" type="image/png" href="assets/img/ircolor.png"/>

	<title>وبسایت تخصصی کد رنگ</title>
	
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link href="assets/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet" />
	<link href="assets/css/yamm.css" rel="stylesheet">
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/style-responsive.css" rel="stylesheet" />
	<link href="assets/css/animate.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<style>
	body{
		background-color: #380909;
		background-image: url('assets/img/back.png');
	}
	p { margin-top:1em font-size:1.2em; color:#555; }
	h2, h3, pre { margin-top:2em; }
	.mor span { display:inline-block; width:47px; height:47px; margin:5px; border-radius:10%; }
	.footer { padding-top:40px; padding-bottom:40px; margin-top:40px; border-top:1px solid #EEE; }
	.btn-download { border-radius:22px; margin-top:2em; }
	.btn-reload { position:fixed; top:10px; left:10px; }
	.container {  padding:85px; padding-top: 90px;}
	.uptil span { display:inline-block; width:400px; height:200px; border-radius:5px;  }
	.uptil p { color:<?=$txtcol?>; position: relative; top: 40%; vertical-align: middle; text-align: center; text-shadow: 0 1px 1px #111111; }
</style>
</head>

<body>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-84101713-1', 'auto');
		ga('send', 'pageview');

	</script>


	<nav class="navbar navbar-default navbar-fixed-top" style="font-weight:200; padding-right:100px; padding-left:100px;">
		<div class="container-fluid">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">منو</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand hidden-xs" href="index" style=" padding:0px; margin:0px; padding-top:10px;"><img src="assets/img/ircolor.png" width="30" alt="سایت تخصصی کد رنگ"></a>
				<a class="navbar-brand" href="index" style="display:inline; padding:0px; margin:0px; padding-top:15px;"><img src="assets/img/logo.png" width="100" alt="سایت تخصصی کد رنگ"></a>

				<div class="form-group hidden-lg hidden-sm" style="display:inline; width:70px;padding-top:10px;">
					<a href="https://cafebazaar.ir/app/colors.ir.ircolor" target="_blank"><img src="assets/img/android.png" width="60" style="display:inline;" alt="دانلود اپ کد رنگ از کافه بازار"></a>
				</div>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


				<form class="navbar-form navbar-left" action="hex">

					<div class="form-group" style="width:70px;">
						<a href="https://cafebazaar.ir/app/colors.ir.ircolor" class="hidden-xs" target="_blank"><img src="assets/img/android.png" width="60" alt="دانلود اپ کد رنگ از کافه بازار"></a>
					</div>

					<div class="form-group" style="width:100px;">
					<a data-toggle='modal' href='#api'><img src="assets/img/api.png" width="90" alt="دانلود اپ کد رنگ از کافه بازار"></a>
					</div>

					<div class="form-group" style="width:150px;">
						<input type="text" name="hex_code" placeholder="جستجو با کد Hex" class="form-control">
					</div>

					<div class="form-group" style="width:150px;">
						<input type="color" name="hex" class="form-control" value="#<?=$input?>">
					</div>
					<button type="submit" class="btn btn-default"  style="font-weight:300;"><i class="fa fa-search"></i></button>
					
					<button data-toggle='modal' href='#admin' class="btn btn-default"  style="font-weight:300;">سازنده</button>


				</form>


			</div>
		</div>
	</nav>