<center><div>
	<h4>Tus amigos...</h4>

</div></center>
<hr>
<div style="position:relative;">
		<strong>Amigos</strong><br><br>
		<?php if($amigos!=NULL) foreach ($amigos as $amigo) { ?>
		  <div style="padding: 10px;">
			<table>
				<tr><td>
			<div style="width: 80px; height: 80px; background-size: cover; background: url('<?php print get('webURL')._sh.'www/lib/images/usuarios/'.$amigo['foto'] ?>')"></div>
				</td>
				<td>
					<a href="<?php print get('webURL')._sh.'boom/perfil/'.$amigo['id_usuario'] ?>"><?php print $amigo['nombre'].' '.$amigo['apellidos'] ?></a><br>
					<strong>Lugar: <?php print $amigo['lugar'] ?></strong><br>
					<strong>Equipo de futbol favorito: <?php print $amigo['futbol'] ?></strong><br>
					<strong>Estudios: <?php print $amigo['estudio'] ?><br></strong>
				</td>
			</tr>
			</table>
		  </div>
		<?php } ?>


</div>