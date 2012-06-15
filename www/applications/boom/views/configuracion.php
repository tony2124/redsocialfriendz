<form action="<?php print get('webURL')._sh.'boom/saveConfig' ?>" method="post" enctype="multipart/form-data">
<table width="100%">
	<tr>
		<td>

			<p><b>FOTO ACTUAL</b></p>
<div style="width: 300px; height: 210px; background-size: cover; background: url('<?php print get('webURL')._sh.'www/lib/images/usuarios/'.$usuario['foto'] ?>')"></div>
<input class="nice green button radius" type="file" name="foto">


		</td>
		<td>
			<p><b>DATOS PERSONALES</b></p>
<label>Nombre</label><input type="text" name="nombre" value="<?php print $usuario['nombre'] ?>">
<label>Apellidos</label><input type="text" name="apellidos" value="<?php print $usuario['apellidos'] ?>">
<label>Cambia tu contraseña</label><input type="password" name="clave" value="<?php print $usuario['password'] ?>">
<label>E-mail</label><input type="text" name="email" value="<?php print $usuario['email'] ?>">


		</td>
	</tr>
</table>

<table width="100%">
	<tr>
		<td valign="top">
			<p><b>TUS ESTUDIOS</b></p>
<label>¿Donde estás estudiando?</label>
<input type="text" name="estudio" value="<?php print $usuario['estudio'] ?>"> 
<p>¿De dónde eres?</p>
<input type="text" name="lugar" value="<?php print $usuario['lugar'] ?>"> 

		</td>
		<td>

			<p><b>TINTERESES</b></p>
<label>Equipo de futbol</label>
<input type="text" name="futbol" value="<?php print $usuario['futbol'] ?>"> 
<label>Política</label>
<textarea name="politica"><?php print $usuario['politica'] ?></textarea>

		</td>
	</tr>
</table>
<hr>
<input type="submit" value="Guardar datos" class="nice green button radius">
<hr>
</form>
