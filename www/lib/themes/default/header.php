<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
?>
<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php print $this->getTitle(); ?></title>
		<link href="<?php print path("vendors/css/frameworks/foundation/stylesheets/foundation.css", "zan"); ?>" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet">
		<script type="text/javascript" src="<?php print path("vendors/css/frameworks/foundation/javascripts/modernizr.foundation.js", "zan"); ?>"></script>
		<script type="text/javascript" src="<?php print path("vendors/css/frameworks/foundation/javascripts/jquery.min.js", "zan"); ?>"></script>
		<script type="text/javascript" src="<?php print path("vendors/css/frameworks/foundation/javascripts/foundation.js", "zan"); ?>"></script>
		<script type="text/javascript" src="<?php print path("vendors/css/frameworks/foundation/javascripts/app.js", "zan"); ?>"></script>

		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet">

	</head>

	<body>
		<?php if(SESSION('nombre')) { ?>
<div class="cabecera">   
    &nbsp;<span style="color:white;"><strong>FrendZ!</strong></span>
	  <?php 
		if(SESSION('nombre')){
?>
<div style="float:right">
	<form action="<?php print get('webURL')._sh.'/boom/buscarAmigos' ?>" method="post">
		<input type="text" placeholder="Escribe el nombre" name="amigo">
		<input type="submit" value="Buscar" class="nice green button radius">
	</form>
</div>

<?php 
	} 
?>
		<div style="position:relative; left:10px;">
			<a class="nice blue button radius" data-toggle="dropdown" href="#">
			 <?php print SESSION('nombre').' '.SESSION('apellidos') ?> 
		        
		        </a>
		    <ul class="cabecera1">
		         <a href="<?php print get('webURL')._sh.'boom/configuracion' ?>"> <li class="cabecera1 small nice red button radius">&nbsp; Configuración del perfil</li>	</a>          
		   
		         <a href="<?php print get('webURL')._sh.'boom/saliendo' ?>"> <li class="cabecera1 small nice red button radius">Salir sesion</li></a>
	        </ul>
	    </div></a>


	    <div class="info">
	        <ul>
		        <li class="active cabecera1"><a href="<?php print get('webURL') . _sh . 'boom/noticias' ?>">Noticias | </a></li>
		        <li class="cabecera1"><a href="<?php print get('webURL') . _sh . 'boom/perfil' ?>">Perfil | </a></li>
		        <li class="cabecera1"><a href="<?php print get('webURL') . _sh . 'boom/amigos' ?>">Amigos | </a></li>
		        <li class="cabecera1"><a href="<?php print get('webURL') . _sh . 'boom/fotos/'.SESSION('id') ?>">Fotos</a></li>
	        </ul>

	    </div><!--/.nav-collapse -->
	</div>

	
<?php }  else { ?>
<div style="width: 100%; height: 200px; background: green"></div>
<?php } ?>
<br>
