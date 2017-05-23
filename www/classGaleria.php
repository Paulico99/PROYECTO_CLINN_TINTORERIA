<div id="classGaleria" class="wrapper">
		<?php 
			 //extensiones validas 
			 $arr_ext=array("jpg","png","gif");

			 //directorio donde se encuentran 
			 $mydir=opendir("img/"); 
			 //leer archivos 
			 while($archivo=readdir($mydir)) 
			 { 
			 $ext=substr($archivo,-3); 
			 //si la extension del archivo es correcta muestra la imagen 
			 if(in_array($ext,$arr_ext)) 
			 { 
			 echo '<a href="/img/'.$archivo.'" rel="lightbox[roadtrip]"> <center> <br> <img src="/img/'.$archivo.'" width="600" height="550"</center></a>'; 
			 echo '<br>';
			 } 
			 } 


			 echo '<footer class="text-center">';
			 	echo '<a href="/img/"'.$archivo.' rel="lightbox[roadtrip]" title="PAUL."></a>';
			 	echo '<a class="up-arrow" href="#" data-toggle="tooltip" title="INICIO">';
			    echo '<span class="glyphicon glyphicon-chevron-up"></span></a>';
			echo '</footer>';
				
			echo '<div id="lightboxOverlay" class="lightboxOverlay" style="width: 1099px; height: 800px; display: block;"></div>';

			//echo '<div id="lightbox" class="lightbox" style="display: block; top: 150px; left: 0px;">';
			//echo	'<div class="lb-outerContainer" style="width: 259px; height: 454px;">';
			//	echo	'<div class="lb-container">';
			//		echo	'<img class="lb-image" src="/img/P1.jpg" style="display: block; width: 259px; height: 454px;">';
			//			echo '<div class="lb-nav" style="display: block;">';
			//				echo '<a class="lb-prev" href="" style="display: block;"></a>';
			//				echo '<a class="lb-next" href="" style="display: block;"></a>';
			//			echo '</div>';
			//			echo '<div class="lb-loader" style="display: none; opacity: 1;">';
			//			echo '<a class="lb-cancel"></a>';
			//			echo '</div>';
			//	echo	'</div>';
			echo '</div>';

			//echo '<div class="lb-dataContainer" style="display: block; width: 259px;">';
			//		echo '<div class="lb-data">';
			//			echo '<div class="lb-details">';
			//				echo '<span class="lb-caption" style="display: inline;">VIEW PUL SORO.</span>';
			//				echo '<span class="lb-number">Image 9 of 48</span>';
			//			echo '</div>';
			//			echo '<div class="lb-closeContainer">';
			//				echo '<a class="lb-close"></a>';
			//			echo '</div>';
			//		echo '</div>';
			//	echo '</div>';
			//echo '</div>';


		?> 
		
</div>  