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
					              <?php if($grupos!=NULL) foreach ($grupos as $grupo) { ?>
						<p><a href="<?php print get('webURL')._sh.'boom/grupos/'.$grupo['id_grupo'] ?>"><?php print $grupo['nombre_grupo'] ?></a></p>
					<?php } ?>		        
					              <li><strong>Amigos recientes</strong></li>
					              <?php foreach ($amigos as $amigo ) { ?>
					             <a href="<?php print get('webURL')._sh.'boom/perfil/'.$amigo['id_usuario'] ?>">
					              <img class="animacion" style="margin-left: 5px; margin-top: 5px;" src="<?php print get('webURL')._sh.'www/lib/images/usuarios/'.$amigo['foto'] ?>" width="40" height="40">	
					              </a>
					              <?php } ?>
					              
					             
		            		</ul>

						</div>
		          
		          </div><!--/.well -->
			</div>
		    <div style="padding:50px;">
				<?php $this->load(isset($view) ? $view : NULL, TRUE); ?>
			</div>

<?php } ?>