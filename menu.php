<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="framework/bootstrap-4.5.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1"><br>	
<link rel="shortcut icon" type="image/x-icon" href="img/icono.ico">
	<?php
		require("encabezado.php");
	?>
</head>

<body>
	<div class="content">
		<div class="row">
			<div class="col-md-12" style="text-align:center; padding:20px;">
				<h3>MENÚ DEL SISTEMA</h3>
			</div>
		</div>
		<div class="row" style="padding-left: 100px; padding-right: 100px;">
			<div class="col-md-12" style="border: #E0E0E0 solid 1px; background: #E7E7E7;">
				<a href="frm_cliente.php">Cliente</a>
			</div>
			<div class="col-md-12" style="border: #E0E0E0 solid 1px;">
				<a href="frm_vendedor.php">Vendedor</a>
			</div>	
			<div class="col-md-12" style="border: #E0E0E0 solid 1px; background: #E7E7E7;">
				<a href="frm_docente.php">Docente</a>
			</div>				
		</div>
	</div>
</body>
</html>