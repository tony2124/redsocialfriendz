<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
	if(isMobile()) {
		include "mobile/content.php";
	} else {
?>
<div style="width:100%">
	<div >
		<div >
			<div >
				<div>
					<div style="float:left; margin-left:40px; padding:10px">
					&nbsp;<a href="<?php print get('webURL')._sh.'boom/configuracion' ?>">Cambia tu foto</a><br>
					<img src="<?php print path("www/lib/images/usuarios/".SESSION('foto'),true) ?>" width="200" height="200"><br>

					</div>
						<div class="noticias">
						  	<ul >
		       
				           
					              <li><strong>Grupos</strong></li>
					              <li><a href="#">Instituto tecnológico</a></li>
					              <li><a href="#">Clubes de ciencia</a></li>
					              <li><a href="#">Sistemas generación</a></li>		        
					              <li><strong>Amigos recientes</strong></li>
					              <?php foreach ($amigos as $amigo ) { ?>
					              <img class="animacion" style="margin-left: 5px; margin-top: 5px;" src="<?php print get('webURL')._sh.'www/lib/images/usuarios/'.$amigo['foto'] ?>" width="40" height="40">	
					              <?php } ?>
					              
					              <!--<img style="margin-left: 5px; margin-top: 5px;" src="" width="40" height="40">
					              <img style="margin-left: 5px; margin-top: 5px;" src="" width="40" height="40">
					              <img style="margin-left: 5px; margin-top: 5px;" src="" width="40" height="40">
					              <img style="margin-left: 5px; margin-top: 5px;" src="" width="40" height="40">
					              <img style="margin-left: 5px; margin-top: 5px;" src="" width="40" height="40">
					              <img style="margin-left: 5px; margin-top: 5px;" src="" width="40" height="40">
					              <img style="margin-left: 5px; margin-top: 5px;" src="" width="40" height="40">-->
		             
		            		</ul>

						</div>
		          
		          </div><!--/.well -->
			</div>
		    <div style="padding:50px;">
				<?php $this->load(isset($view) ? $view : NULL, TRUE); ?>
			</div>

<?php } ?>