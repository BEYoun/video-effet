<!DOCTYPE html>
<html>
<head>
	<title>cmd</title>
	<!-- <link href="http://vjs.zencdn.net/4.12.2/video-js.css" rel="stylesheet">
	<script src="lib/video-js/video.min.js"></script> -->
	<link href="demo.css" rel="stylesheet">
	<!--<link href="js/bootstrap.min.js" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	-->
	<script type="text/javascript">
 	function hello(p1){
 		var video = document.getElementById('principale')
 		var principale = document.querySelector('#principale source')
 		principale.setAttribute('src',document.getElementById('informations').innerHTML+'/'+p1+'.mp4');
 		video.load();
		video.play();
 	}
 	function selected(p1){
 		var nom = p1
 		var video = document.getElementById('principale')
 		document.getElementById('informations').innerHTML =p1
 		var principale = document.querySelector('#principale source')
 		principale.setAttribute('src',p1+'.mp4');
 		video.load();
		video.play();
 	}

 </script>
</head>
<body  style="background-color:#262626;">\
<div class="test">
<div class="hasna" style="background-color:#666666;width:30%;height:400px;float:left">
	<video width="80" id="selection" onclick="selected('video')">
  		<source src="video.mp4" type="video/mp4">

	</video>
	<video width="80" id="selection" onclick="selected('video3')">
  		<source src="video2.mp4" type="video/mp4">

	</video>
</div>

<div class="rachid" style="background-color:#666666;width:55%;height:400px;float:right">
<video id="principale" width="400" height="300" controls>
  <source src="video.mp4" type="video/mp4">

</video>
</div>
</div>
<!--<form method="post" action="">
	in : <input type="text" name="input">
	<br>
	<input type="submit" class="meteo" name="ok">
</form>
-->
<?php

if(true){
echo '<pre>';


 // Affiche le résultat de la commande "ls" et retourne
 // la dernière lignes dans $last_line. Stocke la valeur retournée







 // par la commande shelle dans $retval.


 // Affichage d'autres informations
 //print_r($last_line);

	/*@unlink('xpro.mp4') ;
	@unlink('willow.mp4') ;
	@unlink('nono.mp4') ;
	@unlink('nega.mp4') ;
	@unlink('valencia.mp4') ;
	@unlink('toaster.mp4') ;
	@unlink('sutro.mp4') ;
	@unlink('flou.mp4') ;
	@unlink('speed.mp4') ;
	@unlink('effetmiroir.mp4') ;*/
	
	/*$co1 = "ffmpeg -i video2.mp4 -vf eq=contrast=1.3:brightness=0.08:saturation=3 -c:a copy video3/xpro.mp4";
	$co2 = "ffmpeg -i video2.mp4 -vf eq=saturation=0.02:contrast=0.85:brightness=0.1 -c:a copy video3/willow.mp4";
	$co3 = "ffmpeg -i video2.mp4 -vf eq=contrast=4 -c:a copy video3/nono.mp4 > helo.txt";
	$co4 = "ffmpeg -i video2.mp4 -vf eq=contrast=-1 -c:a copy video3/nega.mp4 > helo.txt";
	$co5 = "ffmpeg -i video2.mp4 -vf eq=:contrast=0.9:saturation=1.5:gamma_r=8.4:gamma_g=2.7:gamma_b=2.5:gamma_weight=0.1 -c:a copy  video3/valencia.mp4";
	$co6 = "ffmpeg -i video2.mp4 -vf eq=contrast=0.67:saturation=2.5 -c:a copy video3/toaster.mp4";
	$co7 = "ffmpeg -i video2.mp4 -vf eq=contrast=1.3:brightness=0.3:gamma_r=0.5 -c:a copy video3/sutro.mp4";
	$co8 = "ffmpeg -i video2.mp4 -vf unsharp=7:7:-2:7:7:-2 video3/flou.mp4 ";
	$co9 = "ffmpeg -i video2.mp4 -filter_complex \"[0:v] setpts=0.5*PTS [v]; [0:a] atempo=2.0 [a]\" -map [v] -map [a] video3/speed.mp4";
	$co10 ="ffmpeg -i video2.mp4 -filter_complex \"split [left][tmp]; [tmp] hflip[right]; [left][right] hstack\" video3/effetmiroir.mp4";

	
	 
	  
	 	$last_line1 = system($co1, $retval);
	 	$last_line2 = system($co2, $retval);
	 	$last_line3 = system($co3, $retval);
	 	$last_line4 = system($co4, $retval);
	 	$last_line5 = system($co5, $retval);
	 	$last_line6 = system($co6, $retval);
	 	$last_line7 = system($co7, $retval);
	 	$last_line8 = system($co8, $retval);
	 	$last_line9 = system($co9, $retval);
	 	$last_line10 = system($co10, $retval);
	 */


	 ?>
	 <p id="informations" style="display: none;">dzahza</p>
	 
	 <div class="rach7" style="hight:100px;widhth:900px;overflow:auto;margin-top:30%;margin-left=30%;">
	 <table>
       <tr>
	   	<td><video   autoplay loop height='100' muted=""  ><source  src='video3.mp4' type='video/mp4'></video></td>
        <td><video  autoplay loop height='100'  muted="" ><source src='video3/xpro.mp4' type='video/mp4'></video></td>
        <td><video   autoplay loop height='100' muted=""  ><source src='video3/willow.mp4' type='video/mp4'></video></td> 
        <td><video   autoplay loop height='100' muted=""  ><source src='video3/valencia.mp4' type='video/mp4'></video></td>
        <td><video   autoplay loop height='100' muted=""  ><source src='video3/toaster.mp4' type='video/mp4'></video></td>
        <td><video  autoplay loop height='100'  muted="" ><source src='video3/sutro.mp4' type='video/mp4'></video></td>
        <td><video  autoplay loop height='100'  muted="" ><source src='video3/flou.mp4' type='video/mp4'></video></td>
        <td><video  autoplay loop height='100'  muted="" ><source src='video3/speed.mp4' type='video/mp4'></video></td>
        <td><video   autoplay loop height='100' muted=""  ><source src='video3/nono.mp4' type='video/mp4'></video></td>
        <td><video  autoplay loop height='100'  muted=""  ><source src='video3/effetmiroir.mp4' type='video/mp4'></video></td>
        <td><video   autoplay loop height='100' muted=""  ><source src='video3/nega.mp4' type='video/mp4'></video></td>
      </tr>

        <tr>
		 <td><button class="btn btn-sucess" onclick="hello('video3')">original</button></td>
		 <td><button class="btn btn-sucess" onclick="hello('xpro')">xpro</button></td>
         <td><button class="btn btn-sucess" onclick="hello('willow')">willow</button></td> 
         <td><button class="btn btn-sucess" onclick="hello('valencia')">valencia </button></td>
         <td><button class="btn btn-sucess" onclick="hello('toaster')">toaster</button></td>
         <td><button class="btn btn-sucess" onclick="hello('sutro')">sutro</button></td>
         <td><button class="btn btn-sucess" onclick="hello('flou')">flou</button></td>
         <td><button class="btn btn-sucess" onclick="hello('speed')">speed </button></td>
         <td><button class="btn btn-sucess" onclick="hello('nono')">nono </button></td>
         <td><button class="btn btn-sucess" onclick="hello('effetmiroir')">effetmiroir</button></td>
         <td><button class="btn btn-sucess" onclick="hello('nega')">nega</button></td>
     </tr>
    </table>
	</div>
    <?php	

    }



?> 	

<script type="text/javascript" src="app.js"></script>

</body>
</html>