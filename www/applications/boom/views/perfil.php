<center><div style="position:relative; top:50px;">
<h4>¿Qué estás pensando?</h4>
<form action="<?php print get('webURL')._sh.'boom/registrandoPublicacion/'.SESSION('id') ?>" method="post">
	<textarea style="width:500px" name="publicacion" placeholder="¿Cuál es tu estado de ánimo?..."></textarea>
	<p>
		<input type="submit" class="nice green button radius" value="Publicar">
	</p>
	<p>&nbsp;</p>
</form>

</div></center>
<hr>

<?php if($publicaciones == NULL) { ?>
	<div class="alert alert-success">
		<h3>Has una publicación y busca amigos...</h3>
	</div>
<?php } else foreach ($publicaciones as $pub) {  //print $pub['id_publicacion'].'---'.$id_usuario ?>

<div style="background: #eeeeee">
	<img style="float:left; margin: 10px;" src="<?php print path("www/lib/images/usuarios/".$pub['foto'],true) ?>" width="80" height="80"> 
	<div style="foat:left">
		<?php print '<a href="'.get('webURL')._sh.'boom/perfil/'.$pub['id_usuario'].'">'.$pub['nombre'].' '.$pub['apellidos'].'</a><br>'.$pub['texto_publicacion'] ?>
	</div>
	<hr>
	<?php $lks=0; $usuario = false; if($likes) foreach ($likes as $like) {
		if($like['id_publicacion'] == $pub['id_publicacion'])
		{
			$lks++;
			if($like['id_usuario'] == SESSION('id'))
				$usuario = true;
		}
			
	} ?>
	<div>A <?php print $lks ?> personas les gusta</div>

	<div>
		<?php if($usuario == false){ ?>
		 <a class="small nice black button radius" href="<?php print get('webURL')._sh.'boom/like/'.$pub['id_publicacion']._sh.$id_usuario ?>">Me gusta</a>&nbsp;
			<?php }else{ ?>
	     <a class="small nice black button radius" href="<?php print get('webURL')._sh.'boom/noLike/'.$pub['id_publicacion']._sh.$id_usuario ?>">Ya no me gusta</a>
		<?php } ?>
	</div>
	

	<hr style="border-top: 1px solid yellow">
	<?php if($comentarios!=NULL) foreach ($comentarios as $com) if($com['id_publicacion'] == $pub['id_publicacion']){ ?>
	<!-- COMENTARIOS -->
	<div class="well">
		<img style="float:left; margin-left: 10px; margin-right: 10px" src="<?php print get('webURL')._sh.'www/lib/images/usuarios/'.$com['foto'] ?>" width="80" height="80"> 
		<div style="foat:left">
			<?php print '<a href="'.get('webURL')._sh.'boom/perfil/'.$com['id_usuario'].'">'.$com['nombre'].' '.$com['apellidos'].'</a><br>'. $com['texto_comentario'] ?>
		</div>
		<hr>
	
	</div>
		<?php } ?>
	<!--formulario COMENTAR -->
	<form action="<?php print get('webURL')._sh.'boom/registrandoComentario' ?>" method="post">
		<img src="<?php print get('webURL')._sh.'www/lib/images/usuarios/'.SESSION('foto') ?>" style="float:left; margin-right: 10px; margin-left: 50px;" width="80" height="80">
		<div style="float:left; width: 500px;">
		<textarea name="comentario" style="width:100%" placeholder="Escribe un comentario"></textarea>
		<input type="hidden" name="publicacion" value="<?php print $pub['id_publicacion'] ?>">
		</div>
		<p>
			<input type="submit" class="nice green button radius" value="Comentar">
		</p>
		<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	</form>
</div>
<hr>
<?php } ?>



