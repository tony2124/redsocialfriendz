<center><div style="position:relative; top:50px;">
	<h4>Amigos encontrados</h4>

</div></center>
<hr>
Amigos encontrados, que quizas conozcas<br><br>
<?php if($amigos!=NULL) foreach ($amigosBusqueda as $amigo) { ?>
  <div style="padding: 3px;">
	<table>
		<tr><td>
	<div style="width: 80px; height: 80px; background-size: cover; background: url('<?php print get('webURL')._sh.'www/lib/images/usuarios/'.$amigo['foto'] ?>')"></div>
		</td>
		<td>
			<strong><a href="<?php print get('webURL')._sh.'boom/perfil/'.$amigo['id_usuario'] ?>"><?php print $amigo['nombre'].' '.$amigo['apellidos'] ?></a><br>
			Lugar: <?php print $amigo['lugar'] ?><br>
			Equipo de futbol favorito: <?php print $amigo['futbol'] ?><br>
			Estudios: <?php print $amigo['estudio'] ?><br></strong>
		</td>
	</tr>
	</table>
  </div>
<?php } ?>