<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
	if(isMobile()) {
		include "mobile/content.php";
	} else {
?>

<div style="width:100%">
			<div>
				<div style="padding:20px; float:left" >
					<img  width="200" height="200" src="<?php print path("www/lib/images/usuarios/".$foto['foto'],true) ?>" >
		          

		          </div><!--/.well -->
			</div>

			<div class="noticias">
				<h4><a href="<?php print get('webURL').'/boom/perfil/'.$id_usuario ?>"><?php print $foto['nombre'].' '.$foto['apellidos'] ?></a></h3>
				<h5><?php print $foto['lugar'] ?>
		     	<h5><?php print $foto['estudio'] ?>
		     		<br><br>
		     	<?php if(isset($estado))
		     	{ 
		     		switch($estado)
		     		{
		     			case 'amigos': print 'Amigos'; break;
		     			case 'enviada': print 'SOLICITUD ENVIADA'; break;
		     			case 'aceptar': ?> 
		     				<a href="<?php print get('webURL')._sh.'boom/aceptarSolicitud/'.$foto['id_usuario'] ?>" class="btn btn-success btn-mini">Aceptar solicitud de amistad</a>
		     				<?php break;
		     		}
		     	echo "</div></div>";
		     	}
		     	else
		     	{ 
		     		?>
		     	<a href="<?php print get('webURL')._sh.'boom/solicitud/'.$foto['id_usuario'] ?>" class="btn btn-info btn-mini">Enviar solicitud de amistad</a>
		     	<?php 
		     	} ?>
		     	<br><br>
		     	<br><br>
				<?php $this->load(isset($view) ? $view : NULL, TRUE); ?>
			</div>
</div>

<?php } ?>