<?php
include("config.php");
Theme::header();
?>

	<div class="container" style="background:white;">
		<div class="row" style='font-size:20px; font-weight:200;'>

			<div class="row animated fadeIn" style="background-color:#fdf2f2; color:#57100e; padding:15px; padding-bottom:10px; border-radius:5px;">
				<div class="col-sm-6 col-xs-12"><p style="color:#57100e;">برای شروع یک رنگ را انتخاب کنید</p></div>
				<div class="col-sm-6 hidden-xs"><hr  style="margin-left:10px; margin-top:15px; border-top: 0.1px dashed grey; opacity:0.3; "></div>
			</div>

			<div class="mor  animated bounce" style="margin-top:25px;">
				<?=Ircolor::RandomColors(54)?>
			</div>
			
			<style>
			.mor2 {margin-top:100px;}
			.mor2 span { display:inline-block; width:51px; height:47px; margin:2px; border-radius:10%;  }
			</style>

			<div class="row" style="margin-top:25px;">

			<div class="col-sm-3" style="padding-left:0px;">
			
			<div class="row animated fadeIn" style="background-color:#fdf2f2; color:#57100e; padding:15px; padding-bottom:10px; border-radius:5px;">
				<div class="col-sm-6 "><p style="color:#57100e;">طیف قرمز</p></div>
				<div class="col-sm-6 hidden-xs"><hr  style="margin-left:10px; margin-top:15px; border-top: 0.1px dashed grey; opacity:0.3; "></div>
			</div>

			<div class="mor2" style="margin-top:15px;">
			  <?=Ircolor::RandomColorsInHue(12,'red')?>
			</div>
  				
  			</div>

  			<div class="col-sm-3">
			
			<div class="row animated fadeIn" style="background-color:#fdf2f2; color:#57100e; padding:15px; padding-bottom:10px; border-radius:5px;">
				<div class="col-sm-6 col-xs-12"><p style="color:#57100e;">طیف سبز</p></div>
				<div class="col-sm-6 hidden-xs"><hr  style="margin-left:10px; margin-top:15px; border-top: 0.1px dashed grey; opacity:0.3; "></div>
			</div>

			<div class="mor2" style="margin-top:15px;">
              <?=Ircolor::RandomColorsInHue(12,'green')?>
			</div>

			</div>

			<div class="col-sm-3" style="padding-left:0px;">
			

			<div class="row animated fadeIn"  style="background-color:#fdf2f2; color:#57100e; padding:15px; padding-bottom:10px; border-radius:5px;">
				<div class="col-sm-6 col-xs-12"><p style="color:#57100e;">طیف آبی</p></div>
				<div class="col-sm-6 hidden-xs"><hr  style="margin-left:10px; margin-top:15px; border-top: 0.1px dashed grey; opacity:0.3; "></div>
			</div>


			<div class="mor2" style="margin-top:15px;">
              <?=Ircolor::RandomColorsInHue(12,'blue')?>
            </div>
			
			</div>

			<div class="col-sm-3">
			


			<div class="row animated fadeIn" style="background-color:#fdf2f2; color:#57100e; padding:15px; padding-bottom:10px; border-radius:5px;">
				<div class="col-sm-6 col-xs-12"><p style="color:#57100e;">طیف زرد</p></div>
				<div class="col-sm-6 hidden-xs"><hr  style="margin-left:10px; margin-top:15px; border-top: 0.1px dashed grey; opacity:0.3; "></div>
			</div>


			<div class="mor2" style="margin-top:15px;">
              <?=Ircolor::RandomColorsInHue(12,'yellow')?>
			</div>
			
			</div>

			</div>
			<div class="row">
		<div class="mor2" style="margin-top:35px;" style="font-weight:300;">		
<article style="font-weight:300;">
  
    <section id="red">
     <table class="table table-striped table-advance table-hover " style="float:left;text-align:left;direction:ltr; font-weight:300;">
        <tr class="head">
          <th style="direction:rtl;">اسامی رنگ های قرمز برای Html و CSS</th>
        </tr>
          <tr>
            <td>
              <a href="hex?hex=CD5C5C"  class="tooltips"  title="#CD5C5C" data-placement="bottom" data-toggle="tooltip"><span style="background:#CD5C5C;"></span></a>
            </td>
            <td>
              IndianRed
            </td>
            <td>
              #CD5C5C
            </td>
            <td>
              rgb(205, 92, 92)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
              <a href="hex?hex=F08080"  class="tooltips"  title="#F08080" data-placement="bottom" data-toggle="tooltip"><span style="background:#F08080;"></span></a>
            </td>
            <td>
              LightCoral
            </td>
            <td>
              #F08080
            </td>
            <td>
              rgb(240, 128, 128)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
               <a href="hex?hex=FA8072"  class="tooltips"  title="#FA8072" data-placement="bottom" data-toggle="tooltip"><span style="background:#FA8072;"></span></a>
            </td>
            <td>
              Salmon
            </td>
            <td>
              #FA8072
            </td>
            <td>
              rgb(250, 128, 114)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
               <a href="hex?hex=E9967A"  class="tooltips"  title="#E9967A" data-placement="bottom" data-toggle="tooltip"><span style="background:#E9967A;"></span></a>
            </td>
            <td>
              DarkSalmon
            </td>
            <td>
              #E9967A
            </td>
            <td>
              rgb(233, 150, 122)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFA07A"  class="tooltips"  title="#FFA07A" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFA07A;"></span></a>
            </td>
            <td>
              LightSalmon
            </td>
            <td>
              #FFA07A
            </td>
            <td>
              rgb(255, 160, 122)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
            <a href="hex?hex=DC143C"  class="tooltips"  title="#DC143C" data-placement="bottom" data-toggle="tooltip"><span style="background:#DC143C;"></span></a>
            </td>
            <td>
              Crimson
            </td>
            <td>
              #DC143C
            </td>
            <td>
              rgb(220, 20, 60)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
              <a href="hex?hex=FF0000"  class="tooltips"  title="#FF0000" data-placement="bottom" data-toggle="tooltip"><span style="background:#FF0000;"></span></a>
            </td>
            <td>
              Red
            </td>
            <td>
              #FF0000
            </td>
            <td>
              rgb(255, 0, 0)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=B22222"  class="tooltips"  title="#B22222" data-placement="bottom" data-toggle="tooltip"><span style="background:#B22222;"></span></a>
            </td>
            <td>
              FireBrick
            </td>
            <td>
              #B22222
            </td>
            <td>
              rgb(178, 34, 34)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
            <a href="hex?hex=8B0000"  class="tooltips"  title="#8B0000" data-placement="bottom" data-toggle="tooltip"><span style="background:#8B0000;"></span></a>
            </td>
            <td>
              DarkRed
            </td>
            <td>
              #8B0000
            </td>
            <td>
              rgb(139, 0, 0)
            </td>
          </tr>
      </table>
    </section>
    <section id="pink">
     <table class="table table-striped table-advance table-hover " style="float:left;text-align:left;direction:ltr; font-weight:300;">
        <tr class="head">
          <th style="direction:rtl;">اسامی رنگ های صورتی برای HTML و CSS</th>
        </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
            <a href="hex?hex=FFC0CB"  class="tooltips"  title="#FFC0CB" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFC0CB;"></span></a>
            </td>
            <td>
              Pink
            </td>
            <td>
              #FFC0CB
            </td>
            <td>
              rgb(255, 192, 203)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
            <a href="hex?hex=FFB6C1"  class="tooltips"  title="#FFB6C1" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFB6C1;"></span></a>
            </td>
            <td>
              LightPink
            </td>
            <td>
              #FFB6C1
            </td>
            <td>
              rgb(255, 182, 193)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
            <a href="hex?hex=FF69B4"  class="tooltips"  title="#FF69B4" data-placement="bottom" data-toggle="tooltip"><span style="background:#FF69B4;"></span></a>
            </td>
            <td>
              HotPink
            </td>
            <td>
              #FF69B4
            </td>
            <td>
              rgb(255, 105, 180)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
            <a href="hex?hex=FF1493"  class="tooltips"  title="#FF1493" data-placement="bottom" data-toggle="tooltip"><span style="background:#FF1493;"></span></a>
            </td>
            <td>
              DeepPink
            </td>
            <td>
              #FF1493
            </td>
            <td>
              rgb(255, 20, 147)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
            <a href="hex?hex=C71585"  class="tooltips"  title="#C71585" data-placement="bottom" data-toggle="tooltip"><span style="background:#C71585;"></span></a>
            </td>
            <td>
              MediumVioletRed
            </td>
            <td>
              #C71585
            </td>
            <td>
              rgb(199, 21, 133)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
            <a href="hex?hex=DB7093"  class="tooltips"  title="#DB7093" data-placement="bottom" data-toggle="tooltip"><span style="background:#DB7093;"></span></a>
            </td>
            <td>
              PaleVioletRed
            </td>
            <td>
              #DB7093
            </td>
            <td>
              rgb(219, 112, 147)
            </td>
          </tr>
      </table>
    </section>
    <section id="orange">
     <table class="table table-striped table-advance table-hover " style="float:left;text-align:left;direction:ltr; font-weight:300;">
        <tr class="head">
          <th style="direction:rtl;">اسامی رنگ های نارنجی برای HTML و CSS</th>
        </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
            <a href="hex?hex=FFA07A"  class="tooltips"  title="#FFA07A" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFA07A;"></span></a>
            </td>
            <td>
              LightSalmon
            </td>
            <td>
              #FFA07A
            </td>
            <td>
              rgb(255, 160, 122)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
            <a href="hex?hex=FF7F50"  class="tooltips"  title="#FF7F50" data-placement="bottom" data-toggle="tooltip"><span style="background:#FF7F50;"></span></a>
            </td>
            <td>
              Coral
            </td>
            <td>
              #FF7F50
            </td>
            <td>
              rgb(255, 127, 80)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FF6347"  class="tooltips"  title="#FF6347" data-placement="bottom" data-toggle="tooltip"><span style="background:#FF6347;"></span></a>
            </td>
            <td>
              Tomato
            </td>
            <td>
              #FF6347
            </td>
            <td>
              rgb(255, 99, 71)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FF4500"  class="tooltips"  title="#FF4500" data-placement="bottom" data-toggle="tooltip"><span style="background:#FF4500;"></span></a>

            </td>
            <td>
              OrangeRed
            </td>
            <td>
              #FF4500
            </td>
            <td>
              rgb(255, 69, 0)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FF8C00"  class="tooltips"  title="#FF8C00" data-placement="bottom" data-toggle="tooltip"><span style="background:#FF8C00;"></span></a>
            </td>
            <td>
              DarkOrange
            </td>
            <td>
              #FF8C00
            </td>
            <td>
              rgb(255, 140, 0)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFA500"  class="tooltips"  title="#FFA500" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFA500;"></span></a>
            </td>
            <td>
              Orange
            </td>
            <td>
              #FFA500
            </td>
            <td>
              rgb(255, 165, 0)
            </td>
          </tr>
      </table>
    </section>
    <section id="yellow">
     <table class="table table-striped table-advance table-hover " style="float:left;text-align:left;direction:ltr; font-weight:300;">
        <tr class="head">
          <th style="direction:rtl;">اسامی رنگ های زرد برای HTML و CSS</th>
        </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFD700"  class="tooltips"  title="#FFD700" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFD700;"></span></a>
            </td>
            <td>
              Gold
            </td>
            <td>
              #FFD700
            </td>
            <td>
              rgb(255, 215, 0)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFFF00"  class="tooltips"  title="#FFFF00" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFFF00;"></span></a>
            </td>
            <td>
              Yellow
            </td>
            <td>
              #FFFF00
            </td>
            <td>
              rgb(255, 255, 0)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFFFE0"  class="tooltips"  title="#FFFFE0" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFFFE0;"></span></a>
            </td>
            <td>
              LightYellow
            </td>
            <td>
              #FFFFE0
            </td>
            <td>
              rgb(255, 255, 224)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFFACD"  class="tooltips"  title="#FFFACD" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFFACD;"></span></a>
            </td>
            <td>
              LemonChiffon
            </td>
            <td>
              #FFFACD
            </td>
            <td>
              rgb(255, 250, 205)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FAFAD2"  class="tooltips"  title="#FAFAD2" data-placement="bottom" data-toggle="tooltip"><span style="background:#FAFAD2;"></span></a>
            </td>
            <td>
              LightGoldenrodYellow
            </td>
            <td>
              #FAFAD2
            </td>
            <td>
              rgb(250, 250, 210)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFEFD5"  class="tooltips"  title="#FFEFD5" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFEFD5;"></span></a>
            </td>
            <td>
              PapayaWhip
            </td>
            <td>
              #FFEFD5
            </td>
            <td>
              rgb(255, 239, 213)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFE4B5"  class="tooltips"  title="#FFE4B5" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFE4B5;"></span></a>
            </td>
            <td>
              Moccasin
            </td>
            <td>
              #FFE4B5
            </td>
            <td>
              rgb(255, 228, 181)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFDAB9"  class="tooltips"  title="#FFDAB9" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFDAB9;"></span></a>
            </td>
            <td>
              PeachPuff
            </td>
            <td>
              #FFDAB9
            </td>
            <td>
              rgb(255, 218, 185)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=EEE8AA"  class="tooltips"  title="#EEE8AA" data-placement="bottom" data-toggle="tooltip"><span style="background:#EEE8AA;"></span></a>
            </td>
            <td>
              PaleGoldenrod
            </td>
            <td>
              #EEE8AA
            </td>
            <td>
              rgb(238, 232, 170)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=F0E68C"  class="tooltips"  title="#F0E68C" data-placement="bottom" data-toggle="tooltip"><span style="background:#F0E68C;"></span></a>
            </td>
            <td>
              Khaki
            </td>
            <td>
              #F0E68C
            </td>
            <td>
              rgb(240, 230, 140)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=BDB76B"  class="tooltips"  title="#BDB76B" data-placement="bottom" data-toggle="tooltip"><span style="background:#BDB76B;"></span></a>
            </td>
            <td>
              DarkKhaki
            </td>
            <td>
              #BDB76B
            </td>
            <td>
              rgb(189, 183, 107)
            </td>
          </tr>
      </table>
    </section>
    <section id="purple">
     <table class="table table-striped table-advance table-hover " style="float:left;text-align:left;direction:ltr; font-weight:300;">
        <tr class="head">
          <th style="direction:rtl;">اسامی رنگ های بنفش برای HTML و CSS</th>
        </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=E6E6FA"  class="tooltips"  title="#E6E6FA" data-placement="bottom" data-toggle="tooltip"><span style="background:#E6E6FA;"></span></a>
            </td>
            <td>
              Lavender
            </td>
            <td>
              #E6E6FA
            </td>
            <td>
              rgb(230, 230, 250)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=D8BFD8"  class="tooltips"  title="#D8BFD8" data-placement="bottom" data-toggle="tooltip"><span style="background:#D8BFD8;"></span></a>
            </td>
            <td>
              Thistle
            </td>
            <td>
              #D8BFD8
            </td>
            <td>
              rgb(216, 191, 216)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=DDA0DD"  class="tooltips"  title="#DDA0DD" data-placement="bottom" data-toggle="tooltip"><span style="background:#DDA0DD;"></span></a>
            </td>
            <td>
              Plum
            </td>
            <td>
              #DDA0DD
            </td>
            <td>
              rgb(221, 160, 221)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=EE82EE"  class="tooltips"  title="#EE82EE" data-placement="bottom" data-toggle="tooltip"><span style="background:#EE82EE;"></span></a>
            </td>
            <td>
              Violet
            </td>
            <td>
              #EE82EE
            </td>
            <td>
              rgb(238, 130, 238)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=DA70D6"  class="tooltips"  title="#DA70D6" data-placement="bottom" data-toggle="tooltip"><span style="background:#DA70D6;"></span></a>
            </td>
            <td>
              Orchid
            </td>
            <td>
              #DA70D6
            </td>
            <td>
              rgb(218, 112, 214)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FF00FF"  class="tooltips"  title="#FF00FF" data-placement="bottom" data-toggle="tooltip"><span style="background:#FF00FF;"></span></a>
            </td>
            <td>
              Fuchsia
            </td>
            <td>
              #FF00FF
            </td>
            <td>
              rgb(255, 0, 255)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FF00FF"  class="tooltips"  title="#FF00FF" data-placement="bottom" data-toggle="tooltip"><span style="background:#FF00FF;"></span></a>
            </td>
            <td>
              Magenta
            </td>
            <td>
              #FF00FF
            </td>
            <td>
              rgb(255, 0, 255)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=BA55D3"  class="tooltips"  title="#BA55D3" data-placement="bottom" data-toggle="tooltip"><span style="background:#BA55D3;"></span></a>
            </td>
            <td>
              MediumOrchid
            </td>
            <td>
              #BA55D3
            </td>
            <td>
              rgb(186, 85, 211)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=9370DB"  class="tooltips"  title="#9370DB" data-placement="bottom" data-toggle="tooltip"><span style="background:#9370DB;"></span></a>
            </td>
            <td>
              MediumPurple
            </td>
            <td>
              #9370DB
            </td>
            <td>
              rgb(147, 112, 219)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=663399"  class="tooltips"  title="#663399" data-placement="bottom" data-toggle="tooltip"><span style="background:#663399;"></span></a>
            </td>
            <td>
              RebeccaPurple
            </td>
            <td>
              #663399
            </td>
            <td>
              rgb(102, 51, 153)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=8A2BE2"  class="tooltips"  title="#8A2BE2" data-placement="bottom" data-toggle="tooltip"><span style="background:#8A2BE2;"></span></a>
            </td>
            <td>
              BlueViolet
            </td>
            <td>
              #8A2BE2
            </td>
            <td>
              rgb(138, 43, 226)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=9400D3"  class="tooltips"  title="#9400D3" data-placement="bottom" data-toggle="tooltip"><span style="background:#9400D3;"></span></a>
            </td>
            <td>
              DarkViolet
            </td>
            <td>
              #9400D3
            </td>
            <td>
              rgb(148, 0, 211)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=9932CC"  class="tooltips"  title="#9932CC" data-placement="bottom" data-toggle="tooltip"><span style="background:#9932CC;"></span></a>
            </td>
            <td>
              DarkOrchid
            </td>
            <td>
              #9932CC
            </td>
            <td>
              rgb(153, 50, 204)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=8B008B"  class="tooltips"  title="#8B008B" data-placement="bottom" data-toggle="tooltip"><span style="background:#8B008B;"></span></a>
            </td>
            <td>
              DarkMagenta
            </td>
            <td>
              #8B008B
            </td>
            <td>
              rgb(139, 0, 139)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=800080"  class="tooltips"  title="#800080" data-placement="bottom" data-toggle="tooltip"><span style="background:#800080;"></span></a>
            </td>
            <td>
              Purple
            </td>
            <td>
              #800080
            </td>
            <td>
              rgb(128, 0, 128)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=4B0082"  class="tooltips"  title="#4B0082" data-placement="bottom" data-toggle="tooltip"><span style="background:#4B0082;"></span></a>
            </td>
            <td>
              Indigo
            </td>
            <td>
              #4B0082
            </td>
            <td>
              rgb(75, 0, 130)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=6A5ACD"  class="tooltips"  title="#6A5ACD" data-placement="bottom" data-toggle="tooltip"><span style="background:#6A5ACD;"></span></a>
            </td>
            <td>
              SlateBlue
            </td>
            <td>
              #6A5ACD
            </td>
            <td>
              rgb(106, 90, 205)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=483D8B"  class="tooltips"  title="#483D8B" data-placement="bottom" data-toggle="tooltip"><span style="background:#483D8B;"></span></a>
            </td>
            <td>
              DarkSlateBlue
            </td>
            <td>
              #483D8B
            </td>
            <td>
              rgb(72, 61, 139)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=7B68EE"  class="tooltips"  title="#7B68EE" data-placement="bottom" data-toggle="tooltip"><span style="background:#7B68EE;"></span></a>
            </td>
            <td>
              MediumSlateBlue
            </td>
            <td>
              #7B68EE
            </td>
            <td>
              rgb(123, 104, 238)
            </td>
          </tr>
      </table>
    </section>
    <section id="green">
     <table class="table table-striped table-advance table-hover " style="float:left;text-align:left;direction:ltr; font-weight:300;">
        <tr class="head">
          <th style="direction:rtl;">اسامی رنگ های سبز برای HTML و CSS</th>
        </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=ADFF2F"  class="tooltips"  title="#ADFF2F" data-placement="bottom" data-toggle="tooltip"><span style="background:#ADFF2F;"></span></a>
            </td>
            <td>
              GreenYellow
            </td>
            <td>
              #ADFF2F
            </td>
            <td>
              rgb(173, 255, 47)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=7FFF00"  class="tooltips"  title="#7FFF00" data-placement="bottom" data-toggle="tooltip"><span style="background:#7FFF00;"></span></a>
            </td>
            <td>
              Chartreuse
            </td>
            <td>
              #7FFF00
            </td>
            <td>
              rgb(127, 255, 0)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=7CFC00"  class="tooltips"  title="#7CFC00" data-placement="bottom" data-toggle="tooltip"><span style="background:#7CFC00;"></span></a>
            </td>
            <td>
              LawnGreen
            </td>
            <td>
              #7CFC00
            </td>
            <td>
              rgb(124, 252, 0)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=00FF00"  class="tooltips"  title="#00FF00" data-placement="bottom" data-toggle="tooltip"><span style="background:#00FF00;"></span></a>
            </td>
            <td>
              Lime
            </td>
            <td>
              #00FF00
            </td>
            <td>
              rgb(0, 255, 0)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=32CD32"  class="tooltips"  title="#32CD32" data-placement="bottom" data-toggle="tooltip"><span style="background:#32CD32;"></span></a>
            </td>
            <td>
              LimeGreen
            </td>
            <td>
              #32CD32
            </td>
            <td>
              rgb(50, 205, 50)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=98FB98"  class="tooltips"  title="#98FB98" data-placement="bottom" data-toggle="tooltip"><span style="background:#98FB98;"></span></a>
            </td>
            <td>
              PaleGreen
            </td>
            <td>
              #98FB98
            </td>
            <td>
              rgb(152, 251, 152)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=90EE90"  class="tooltips"  title="#90EE90" data-placement="bottom" data-toggle="tooltip"><span style="background:#90EE90;"></span></a>
            </td>
            <td>
              LightGreen
            </td>
            <td>
              #90EE90
            </td>
            <td>
              rgb(144, 238, 144)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=00FA9A"  class="tooltips"  title="#00FA9A" data-placement="bottom" data-toggle="tooltip"><span style="background:#00FA9A;"></span></a>
            </td>
            <td>
              MediumSpringGreen
            </td>
            <td>
              #00FA9A
            </td>
            <td>
              rgb(0, 250, 154)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=00FF7F"  class="tooltips"  title="#00FF7F" data-placement="bottom" data-toggle="tooltip"><span style="background:#00FF7F;"></span></a>
            </td>
            <td>
              SpringGreen
            </td>
            <td>
              #00FF7F
            </td>
            <td>
              rgb(0, 255, 127)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=3CB371"  class="tooltips"  title="#3CB371" data-placement="bottom" data-toggle="tooltip"><span style="background:#3CB371;"></span></a>
            </td>
            <td>
              MediumSeaGreen
            </td>
            <td>
              #3CB371
            </td>
            <td>
              rgb(60, 179, 113)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=2E8B57"  class="tooltips"  title="#2E8B57" data-placement="bottom" data-toggle="tooltip"><span style="background:#2E8B57;"></span></a>
            </td>
            <td>
              SeaGreen
            </td>
            <td>
              #2E8B57
            </td>
            <td>
              rgb(46, 139, 87)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=228B22"  class="tooltips"  title="#228B22" data-placement="bottom" data-toggle="tooltip"><span style="background:#228B22;"></span></a>
            </td>
            <td>
              ForestGreen
            </td>
            <td>
              #228B22
            </td>
            <td>
              rgb(34, 139, 34)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=008000"  class="tooltips"  title="#008000" data-placement="bottom" data-toggle="tooltip"><span style="background:#008000;"></span></a>
            </td>
            <td>
              Green
            </td>
            <td>
              #008000
            </td>
            <td>
              rgb(0, 128, 0)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=006400"  class="tooltips"  title="#006400" data-placement="bottom" data-toggle="tooltip"><span style="background:#006400;"></span></a>
            </td>
            <td>
              DarkGreen
            </td>
            <td>
              #006400
            </td>
            <td>
              rgb(0, 100, 0)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=9ACD32"  class="tooltips"  title="#9ACD32" data-placement="bottom" data-toggle="tooltip"><span style="background:#9ACD32;"></span></a>
            </td>
            <td>
              YellowGreen
            </td>
            <td>
              #9ACD32
            </td>
            <td>
              rgb(154, 205, 50)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=6B8E23"  class="tooltips"  title="#6B8E23" data-placement="bottom" data-toggle="tooltip"><span style="background:#6B8E23;"></span></a>
            </td>
            <td>
              OliveDrab
            </td>
            <td>
              #6B8E23
            </td>
            <td>
              rgb(107, 142, 35)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=808000"  class="tooltips"  title="#808000" data-placement="bottom" data-toggle="tooltip"><span style="background:#808000;"></span></a>
            </td>
            <td>
              Olive
            </td>
            <td>
              #808000
            </td>
            <td>
              rgb(128, 128, 0)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=556B2F"  class="tooltips"  title="#556B2F" data-placement="bottom" data-toggle="tooltip"><span style="background:#556B2F;"></span></a>
            </td>
            <td>
              DarkOliveGreen
            </td>
            <td>
              #556B2F
            </td>
            <td>
              rgb(85, 107, 47)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=66CDAA"  class="tooltips"  title="#66CDAA" data-placement="bottom" data-toggle="tooltip"><span style="background:#66CDAA;"></span></a>
            </td>
            <td>
              MediumAquamarine
            </td>
            <td>
              #66CDAA
            </td>
            <td>
              rgb(102, 205, 170)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=8FBC8B"  class="tooltips"  title="#8FBC8B" data-placement="bottom" data-toggle="tooltip"><span style="background:#8FBC8B;"></span></a>
            </td>
            <td>
              DarkSeaGreen
            </td>
            <td>
              #8FBC8B
            </td>
            <td>
              rgb(143, 188, 139)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=20B2AA"  class="tooltips"  title="#20B2AA" data-placement="bottom" data-toggle="tooltip"><span style="background:#20B2AA;"></span></a>
            </td>
            <td>
              LightSeaGreen
            </td>
            <td>
              #20B2AA
            </td>
            <td>
              rgb(32, 178, 170)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=008B8B"  class="tooltips"  title="#008B8B" data-placement="bottom" data-toggle="tooltip"><span style="background:#008B8B;"></span></a>
            </td>
            <td>
              DarkCyan
            </td>
            <td>
              #008B8B
            </td>
            <td>
              rgb(0, 139, 139)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=008080"  class="tooltips"  title="#008080" data-placement="bottom" data-toggle="tooltip"><span style="background:#008080;"></span></a>
            </td>
            <td>
              Teal
            </td>
            <td>
              #008080
            </td>
            <td>
              rgb(0, 128, 128)
            </td>
          </tr>
      </table>
    </section>
    <section id="blue">
     <table class="table table-striped table-advance table-hover " style="float:left;text-align:left;direction:ltr; font-weight:300;">
        <tr class="head">
          <th style="direction:rtl;">اسامی رنگ های آبی برای HTML و CSS</th>
        </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=00FFFF"  class="tooltips"  title="#00FFFF" data-placement="bottom" data-toggle="tooltip"><span style="background:#00FFFF;"></span></a>
            </td>
            <td>
              Aqua
            </td>
            <td>
              #00FFFF
            </td>
            <td>
              rgb(0, 255, 255)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=00FFFF"  class="tooltips"  title="#00FFFF" data-placement="bottom" data-toggle="tooltip"><span style="background:#00FFFF;"></span></a>
            </td>
            <td>
              Cyan
            </td>
            <td>
              #00FFFF
            </td>
            <td>
              rgb(0, 255, 255)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=E0FFFF"  class="tooltips"  title="#E0FFFF" data-placement="bottom" data-toggle="tooltip"><span style="background:#E0FFFF;"></span></a>
            </td>
            <td>
              LightCyan
            </td>
            <td>
              #E0FFFF
            </td>
            <td>
              rgb(224, 255, 255)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=AFEEEE"  class="tooltips"  title="#AFEEEE" data-placement="bottom" data-toggle="tooltip"><span style="background:#AFEEEE;"></span></a>
            </td>
            <td>
              PaleTurquoise
            </td>
            <td>
              #AFEEEE
            </td>
            <td>
              rgb(175, 238, 238)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=7FFFD4"  class="tooltips"  title="#7FFFD4" data-placement="bottom" data-toggle="tooltip"><span style="background:#7FFFD4;"></span></a>
            </td>
            <td>
              Aquamarine
            </td>
            <td>
              #7FFFD4
            </td>
            <td>
              rgb(127, 255, 212)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=40E0D0"  class="tooltips"  title="#40E0D0" data-placement="bottom" data-toggle="tooltip"><span style="background:#40E0D0;"></span></a>
            </td>
            <td>
              Turquoise
            </td>
            <td>
              #40E0D0
            </td>
            <td>
              rgb(64, 224, 208)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=48D1CC"  class="tooltips"  title="#48D1CC" data-placement="bottom" data-toggle="tooltip"><span style="background:#48D1CC;"></span></a>
            </td>
            <td>
              MediumTurquoise
            </td>
            <td>
              #48D1CC
            </td>
            <td>
              rgb(72, 209, 204)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=00CED1"  class="tooltips"  title="#00CED1" data-placement="bottom" data-toggle="tooltip"><span style="background:#00CED1;"></span></a>
            </td>
            <td>
              DarkTurquoise
            </td>
            <td>
              #00CED1
            </td>
            <td>
              rgb(0, 206, 209)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=5F9EA0"  class="tooltips"  title="#5F9EA0" data-placement="bottom" data-toggle="tooltip"><span style="background:#5F9EA0;"></span></a>
            </td>
            <td>
              CadetBlue
            </td>
            <td>
              #5F9EA0
            </td>
            <td>
              rgb(95, 158, 160)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=4682B4"  class="tooltips"  title="#4682B4" data-placement="bottom" data-toggle="tooltip"><span style="background:#4682B4;"></span></a>
            </td>
            <td>
              SteelBlue
            </td>
            <td>
              #4682B4
            </td>
            <td>
              rgb(70, 130, 180)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=B0C4DE"  class="tooltips"  title="#B0C4DE" data-placement="bottom" data-toggle="tooltip"><span style="background:#B0C4DE;"></span></a>
            </td>
            <td>
              LightSteelBlue
            </td>
            <td>
              #B0C4DE
            </td>
            <td>
              rgb(176, 196, 222)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=B0E0E6"  class="tooltips"  title="#B0E0E6" data-placement="bottom" data-toggle="tooltip"><span style="background:#B0E0E6;"></span></a>
            </td>
            <td>
              PowderBlue
            </td>
            <td>
              #B0E0E6
            </td>
            <td>
              rgb(176, 224, 230)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=ADD8E6"  class="tooltips"  title="#ADD8E6" data-placement="bottom" data-toggle="tooltip"><span style="background:#ADD8E6;"></span></a>
            </td>
            <td>
              LightBlue
            </td>
            <td>
              #ADD8E6
            </td>
            <td>
              rgb(173, 216, 230)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=87CEEB"  class="tooltips"  title="#87CEEB" data-placement="bottom" data-toggle="tooltip"><span style="background:#87CEEB;"></span></a>
            </td>
            <td>
              SkyBlue
            </td>
            <td>
              #87CEEB
            </td>
            <td>
              rgb(135, 206, 235)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=87CEFA"  class="tooltips"  title="#87CEFA" data-placement="bottom" data-toggle="tooltip"><span style="background:#87CEFA;"></span></a>
            </td>
            <td>
              LightSkyBlue
            </td>
            <td>
              #87CEFA
            </td>
            <td>
              rgb(135, 206, 250)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=00BFFF"  class="tooltips"  title="#00BFFF" data-placement="bottom" data-toggle="tooltip"><span style="background:#00BFFF;"></span></a>
            </td>
            <td>
              DeepSkyBlue
            </td>
            <td>
              #00BFFF
            </td>
            <td>
              rgb(0, 191, 255)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=1E90FF"  class="tooltips"  title="#1E90FF" data-placement="bottom" data-toggle="tooltip"><span style="background:#1E90FF;"></span></a>
            </td>
            <td>
              DodgerBlue
            </td>
            <td>
              #1E90FF
            </td>
            <td>
              rgb(30, 144, 255)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=6495ED"  class="tooltips"  title="#6495ED" data-placement="bottom" data-toggle="tooltip"><span style="background:#6495ED;"></span></a>
            </td>
            <td>
              CornflowerBlue
            </td>
            <td>
              #6495ED
            </td>
            <td>
              rgb(100, 149, 237)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=7B68EE"  class="tooltips"  title="#7B68EE" data-placement="bottom" data-toggle="tooltip"><span style="background:#7B68EE;"></span></a>
            </td>
            <td>
              MediumSlateBlue
            </td>
            <td>
              #7B68EE
            </td>
            <td>
              rgb(123, 104, 238)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=4169E1"  class="tooltips"  title="#4169E1" data-placement="bottom" data-toggle="tooltip"><span style="background:#4169E1;"></span></a>
            </td>
            <td>
              RoyalBlue
            </td>
            <td>
              #4169E1
            </td>
            <td>
              rgb(65, 105, 225)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=0000FF"  class="tooltips"  title="#0000FF" data-placement="bottom" data-toggle="tooltip"><span style="background:#0000FF;"></span></a>
            </td>
            <td>
              Blue
            </td>
            <td>
              #0000FF
            </td>
            <td>
              rgb(0, 0, 255)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=0000CD"  class="tooltips"  title="#0000CD" data-placement="bottom" data-toggle="tooltip"><span style="background:#0000CD;"></span></a>
            </td>
            <td>
              MediumBlue
            </td>
            <td>
              #0000CD
            </td>
            <td>
              rgb(0, 0, 205)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=00008B"  class="tooltips"  title="#00008B" data-placement="bottom" data-toggle="tooltip"><span style="background:#00008B;"></span></a>
            </td>
            <td>
              DarkBlue
            </td>
            <td>
              #00008B
            </td>
            <td>
              rgb(0, 0, 139)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=000080"  class="tooltips"  title="#000080" data-placement="bottom" data-toggle="tooltip"><span style="background:#000080;"></span></a>
            </td>
            <td>
              Navy
            </td>
            <td>
              #000080
            </td>
            <td>
              rgb(0, 0, 128)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=191970"  class="tooltips"  title="#191970" data-placement="bottom" data-toggle="tooltip"><span style="background:#191970;"></span></a>
            </td>
            <td>
              MidnightBlue
            </td>
            <td>
              #191970
            </td>
            <td>
              rgb(25, 25, 112)
            </td>
          </tr>
      </table>
    </section>
    <section id="brown">
     <table class="table table-striped table-advance table-hover " style="float:left;text-align:left;direction:ltr; font-weight:300;">
        <tr class="head">
          <th style="direction:rtl;">اسامی رنگ های قهوه ای برای HTML و CSS</th>
        </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFF8DC"  class="tooltips"  title="#FFF8DC" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFF8DC;"></span></a>
            </td>
            <td>
              Cornsilk
            </td>
            <td>
              #FFF8DC
            </td>
            <td>
              rgb(255, 248, 220)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFEBCD"  class="tooltips"  title="#FFEBCD" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFEBCD;"></span></a>
            </td>
            <td>
              BlanchedAlmond
            </td>
            <td>
              #FFEBCD
            </td>
            <td>
              rgb(255, 235, 205)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFE4C4"  class="tooltips"  title="#FFE4C4" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFE4C4;"></span></a>
            </td>
            <td>
              Bisque
            </td>
            <td>
              #FFE4C4
            </td>
            <td>
              rgb(255, 228, 196)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFDEAD"  class="tooltips"  title="#FFDEAD" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFDEAD;"></span></a>
            </td>
            <td>
              NavajoWhite
            </td>
            <td>
              #FFDEAD
            </td>
            <td>
              rgb(255, 222, 173)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=F5DEB3"  class="tooltips"  title="#F5DEB3" data-placement="bottom" data-toggle="tooltip"><span style="background:#F5DEB3;"></span></a>
            </td>
            <td>
              Wheat
            </td>
            <td>
              #F5DEB3
            </td>
            <td>
              rgb(245, 222, 179)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=DEB887"  class="tooltips"  title="#DEB887" data-placement="bottom" data-toggle="tooltip"><span style="background:#DEB887;"></span></a>
            </td>
            <td>
              BurlyWood
            </td>
            <td>
              #DEB887
            </td>
            <td>
              rgb(222, 184, 135)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=D2B48C"  class="tooltips"  title="#D2B48C" data-placement="bottom" data-toggle="tooltip"><span style="background:#D2B48C;"></span></a>
            </td>
            <td>
              Tan
            </td>
            <td>
              #D2B48C
            </td>
            <td>
              rgb(210, 180, 140)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=BC8F8F"  class="tooltips"  title="#BC8F8F" data-placement="bottom" data-toggle="tooltip"><span style="background:#BC8F8F;"></span></a>
            </td>
            <td>
              RosyBrown
            </td>
            <td>
              #BC8F8F
            </td>
            <td>
              rgb(188, 143, 143)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=F4A460"  class="tooltips"  title="#F4A460" data-placement="bottom" data-toggle="tooltip"><span style="background:#F4A460;"></span></a>
            </td>
            <td>
              SandyBrown
            </td>
            <td>
              #F4A460
            </td>
            <td>
              rgb(244, 164, 96)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=DAA520"  class="tooltips"  title="#DAA520" data-placement="bottom" data-toggle="tooltip"><span style="background:#DAA520;"></span></a>
            </td>
            <td>
              Goldenrod
            </td>
            <td>
              #DAA520
            </td>
            <td>
              rgb(218, 165, 32)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=B8860B"  class="tooltips"  title="#B8860B" data-placement="bottom" data-toggle="tooltip"><span style="background:#B8860B;"></span></a>
            </td>
            <td>
              DarkGoldenrod
            </td>
            <td>
              #B8860B
            </td>
            <td>
              rgb(184, 134, 11)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=CD853F"  class="tooltips"  title="#CD853F" data-placement="bottom" data-toggle="tooltip"><span style="background:#CD853F;"></span></a>
            </td>
            <td>
              Peru
            </td>
            <td>
              #CD853F
            </td>
            <td>
              rgb(205, 133, 63)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=D2691E"  class="tooltips"  title="#D2691E" data-placement="bottom" data-toggle="tooltip"><span style="background:#D2691E;"></span></a>
            </td>
            <td>
              Chocolate
            </td>
            <td>
              #D2691E
            </td>
            <td>
              rgb(210, 105, 30)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=8B4513"  class="tooltips"  title="#8B4513" data-placement="bottom" data-toggle="tooltip"><span style="background:#8B4513;"></span></a>
            </td>
            <td>
              SaddleBrown
            </td>
            <td>
              #8B4513
            </td>
            <td>
              rgb(139, 69, 19)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=A0522D"  class="tooltips"  title="#A0522D" data-placement="bottom" data-toggle="tooltip"><span style="background:#A0522D;"></span></a>
            </td>
            <td>
              Sienna
            </td>
            <td>
              #A0522D
            </td>
            <td>
              rgb(160, 82, 45)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=A52A2A"  class="tooltips"  title="#A52A2A" data-placement="bottom" data-toggle="tooltip"><span style="background:#A52A2A;"></span></a>
            </td>
            <td>
              Brown
            </td>
            <td>
              #A52A2A
            </td>
            <td>
              rgb(165, 42, 42)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=800000"  class="tooltips"  title="#800000" data-placement="bottom" data-toggle="tooltip"><span style="background:#800000;"></span></a>
            </td>
            <td>
              Maroon
            </td>
            <td>
              #800000
            </td>
            <td>
              rgb(128, 0, 0)
            </td>
          </tr>
      </table>
    </section>
    <section id="white">
     <table class="table table-striped table-advance table-hover " style="float:left;text-align:left;direction:ltr; font-weight:300;">
        <tr class="head">
          <th style="direction:rtl;">اسامی رنگ های سفید برای HTML و CSS</th>
        </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFFFFF"  class="tooltips"  title="#FFFFFF" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFFFFF;"></span></a>
            </td>
            <td>
              White
            </td>
            <td>
              #FFFFFF
            </td>
            <td>
              rgb(255, 255, 255)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFFAFA"  class="tooltips"  title="#FFFAFA" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFFAFA;"></span></a>
            </td>
            <td>
              Snow
            </td>
            <td>
              #FFFAFA
            </td>
            <td>
              rgb(255, 250, 250)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=F0FFF0"  class="tooltips"  title="#F0FFF0" data-placement="bottom" data-toggle="tooltip"><span style="background:#F0FFF0;"></span></a>
            </td>
            <td>
              HoneyDew
            </td>
            <td>
              #F0FFF0
            </td>
            <td>
              rgb(240, 255, 240)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=F5FFFA"  class="tooltips"  title="#F5FFFA" data-placement="bottom" data-toggle="tooltip"><span style="background:#F5FFFA;"></span></a>
            </td>
            <td>
              MintCream
            </td>
            <td>
              #F5FFFA
            </td>
            <td>
              rgb(245, 255, 250)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=F0FFFF"  class="tooltips"  title="#F0FFFF" data-placement="bottom" data-toggle="tooltip"><span style="background:#F0FFFF;"></span></a>
            </td>
            <td>
              Azure
            </td>
            <td>
              #F0FFFF
            </td>
            <td>
              rgb(240, 255, 255)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=F0F8FF"  class="tooltips"  title="#F0F8FF" data-placement="bottom" data-toggle="tooltip"><span style="background:#F0F8FF;"></span></a>
            </td>
            <td>
              AliceBlue
            </td>
            <td>
              #F0F8FF
            </td>
            <td>
              rgb(240, 248, 255)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=F8F8FF"  class="tooltips"  title="#F8F8FF" data-placement="bottom" data-toggle="tooltip"><span style="background:#F8F8FF;"></span></a>
            </td>
            <td>
              GhostWhite
            </td>
            <td>
              #F8F8FF
            </td>
            <td>
              rgb(248, 248, 255)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=F5F5F5"  class="tooltips"  title="#F5F5F5" data-placement="bottom" data-toggle="tooltip"><span style="background:#F5F5F5;"></span></a>
            </td>
            <td>
              WhiteSmoke
            </td>
            <td>
              #F5F5F5
            </td>
            <td>
              rgb(245, 245, 245)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFF5EE"  class="tooltips"  title="#FFF5EE" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFF5EE;"></span></a>
            </td>
            <td>
              SeaShell
            </td>
            <td>
              #FFF5EE
            </td>
            <td>
              rgb(255, 245, 238)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=F5F5DC"  class="tooltips"  title="#F5F5DC" data-placement="bottom" data-toggle="tooltip"><span style="background:#F5F5DC;"></span></a>
            </td>
            <td>
              Beige
            </td>
            <td>
              #F5F5DC
            </td>
            <td>
              rgb(245, 245, 220)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FDF5E6"  class="tooltips"  title="#FDF5E6" data-placement="bottom" data-toggle="tooltip"><span style="background:#FDF5E6;"></span></a>
            </td>
            <td>
              OldLace
            </td>
            <td>
              #FDF5E6
            </td>
            <td>
              rgb(253, 245, 230)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFFAF0"  class="tooltips"  title="#FFFAF0" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFFAF0;"></span></a>
            </td>
            <td>
              FloralWhite
            </td>
            <td>
              #FFFAF0
            </td>
            <td>
              rgb(255, 250, 240)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFFFF0"  class="tooltips"  title="#FFFFF0" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFFFF0;"></span></a>
            </td>
            <td>
              Ivory
            </td>
            <td>
              #FFFFF0
            </td>
            <td>
              rgb(255, 255, 240)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FAEBD7"  class="tooltips"  title="#FAEBD7" data-placement="bottom" data-toggle="tooltip"><span style="background:#FAEBD7;"></span></a>
            </td>
            <td>
              AntiqueWhite
            </td>
            <td>
              #FAEBD7
            </td>
            <td>
              rgb(250, 235, 215)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FAF0E6"  class="tooltips"  title="#FAF0E6" data-placement="bottom" data-toggle="tooltip"><span style="background:#FAF0E6;"></span></a>
            </td>
            <td>
              Linen
            </td>
            <td>
              #FAF0E6
            </td>
            <td>
              rgb(250, 240, 230)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFF0F5"  class="tooltips"  title="#FFF0F5" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFF0F5;"></span></a>
            </td>
            <td>
              LavenderBlush
            </td>
            <td>
              #FFF0F5
            </td>
            <td>
              rgb(255, 240, 245)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=FFE4E1"  class="tooltips"  title="#FFE4E1" data-placement="bottom" data-toggle="tooltip"><span style="background:#FFE4E1;"></span></a>
            </td>
            <td>
              MistyRose
            </td>
            <td>
              #FFE4E1
            </td>
            <td>
              rgb(255, 228, 225)
            </td>
          </tr>
      </table>
    </section>
    <section id="gray">
     <table class="table table-striped table-advance table-hover " style="float:left;text-align:left;direction:ltr; font-weight:300;">
        <tr class="head">
          <th style="direction:rtl;">اسامی رنگ های خاکستری برای HTML و CSS</th>
        </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=DCDCDC"  class="tooltips"  title="#DCDCDC" data-placement="bottom" data-toggle="tooltip"><span style="background:#DCDCDC;"></span></a>
            </td>
            <td>
              Gainsboro
            </td>
            <td>
              #DCDCDC
            </td>
            <td>
              rgb(220, 220, 220)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=D3D3D3"  class="tooltips"  title="#D3D3D3" data-placement="bottom" data-toggle="tooltip"><span style="background:#D3D3D3;"></span></a>
            </td>
            <td>
              LightGray
            </td>
            <td>
              #D3D3D3
            </td>
            <td>
              rgb(211, 211, 211)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=C0C0C0"  class="tooltips"  title="#C0C0C0" data-placement="bottom" data-toggle="tooltip"><span style="background:#C0C0C0;"></span></a>
            </td>
            <td>
              Silver
            </td>
            <td>
              #C0C0C0
            </td>
            <td>
              rgb(192, 192, 192)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=A9A9A9"  class="tooltips"  title="#A9A9A9" data-placement="bottom" data-toggle="tooltip"><span style="background:#A9A9A9;"></span></a>
            </td>
            <td>
              DarkGray
            </td>
            <td>
              #A9A9A9
            </td>
            <td>
              rgb(169, 169, 169)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=808080"  class="tooltips"  title="#808080" data-placement="bottom" data-toggle="tooltip"><span style="background:#808080;"></span></a>
            </td>
            <td>
              Gray
            </td>
            <td>
              #808080
            </td>
            <td>
              rgb(128, 128, 128)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=696969"  class="tooltips"  title="#696969" data-placement="bottom" data-toggle="tooltip"><span style="background:#696969;"></span></a>
            </td>
            <td>
              DimGray
            </td>
            <td>
              #696969
            </td>
            <td>
              rgb(105, 105, 105)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=778899"  class="tooltips"  title="#778899" data-placement="bottom" data-toggle="tooltip"><span style="background:#778899;"></span></a>
            </td>
            <td>
              LightSlateGray
            </td>
            <td>
              #778899
            </td>
            <td>
              rgb(119, 136, 153)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=708090"  class="tooltips"  title="#708090" data-placement="bottom" data-toggle="tooltip"><span style="background:#708090;"></span></a>
            </td>
            <td>
              SlateGray
            </td>
            <td>
              #708090
            </td>
            <td>
              rgb(112, 128, 144)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=2F4F4F"  class="tooltips"  title="#2F4F4F" data-placement="bottom" data-toggle="tooltip"><span style="background:#2F4F4F;"></span></a>
            </td>
            <td>
              DarkSlateGray
            </td>
            <td>
              #2F4F4F
            </td>
            <td>
              rgb(47, 79, 79)
            </td>
          </tr>
          <tr>
            <td class="color-swatch" title="Click to add to your palette">
             <a href="hex?hex=000000"  class="tooltips"  title="#000000" data-placement="bottom" data-toggle="tooltip"><span style="background:#000000;"></span></a>
            </td>
            <td>
              Black
            </td>
            <td>
              #000000
            </td>
            <td>
              rgb(0, 0, 0)
            </td>
          </tr>
      </table>
    </section>
		</article>
		</div>
			</div>
		</div>
	</div>



<?php
Theme::footer();
?>
