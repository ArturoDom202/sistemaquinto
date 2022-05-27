<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>CLIENTE</title>
	<link href="framework/bootstrap-4.5.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1"><br>	
	<link rel="shortcut icon" type="image/x-icon" href="img/icono.ico">
</head>

	<?php
		require("BD.php");
	?>
	
<body>
	<br>
	<br>
	<div class="container" style="background: #EBEBEB; border: 1px solid #D3D3D3; box-shadow: 5px 5px 5px rgba(0,0,0,0.5); padding:20px;">
	<form method="post">	
		<div class="row" style="padding:15px;">
			<div class="col-md-12" style="text-align: center; color:#001BFF;">
				<h3>FORMULARIO ABC - CLIENTE</h1>
			</div>
		</div>
		<hr>
		<div class="row" style="padding:5px;">
				<div class="col-md-2">
					<label>Código</label>
				</div>

				<div class="col-md-10">
					<input style="width: 150px;" class="form-control" type="text" name="txt_codigo" readonly>
				</div>	
		</div>
		
		<div class="row" style="padding:5px;">
			<div class="col-md-2">
				<label>Nombre:</label>
			</div>
			
			<div class="col-md-10">
				<input class="form-control" name="txt_nombre" type="text" maxlength="30" placeholder="Ingrese su nombre(s)" autofocus required>
			</div>
		</div>
		
		<div class="row" style="padding:5px;">
			<div class="col-md-2">
				<label>Apellido:</label>
			</div>
			
			<div class="col-md-10">
				<input class="form-control" name="txt_apellido" type="text" maxlength="35" placeholder="Ingrese sus apellidos" required>
			</div>
		</div>	
		
		<div class="row" style="padding:5px;">
			<div class="col-md-2">
				<label>Teléfono:</label>
			</div>
			
			<div class="col-md-10">
				<input style="width:200px;" class="form-control" name="txt_telefono" type="tel" maxlength="10" placeholder="Ingrese su número" required>
			</div>
		</div>		

		<div class="row" style="padding:5px;">
			<div class="col-md-2">
				<label>Dirección:</label>
			</div>
			
			<div class="col-md-10">
				<input class="form-control" name="txt_direccion" type="text" maxlength="50" placeholder="Ingrese su dirección" required>
			</div>
		</div>	
		
		
		<div class="row" style="padding:5px;">
			<div class="col-md-2">
				<label>Ciudad:</label>
			</div>
			
			<div class="col-md-10">
				<select name="cmb_ciudad" class="form-control">
					<option value="">--Elija una Ciudad--</option>
					<?php
						$sql = "SELECT * FROM ciudad ORDER BY ciudad";
					    $cnn="connect_db.php";
						$id = "id_ciudad";
					    $des= "ciudad";
						bd::combo($sql, $cnn, $id, $des);	
					?>
				</select>
			</div>
		</div>			
		
		<div class="row" style="padding:5px;">
			<div class="col-md-2">
				<label>Email:</label>
			</div>
			
			<div class="col-md-10">
				<input class="form-control" name="txt_email" type="email" maxlength="35" placeholder="Ingrese su correo electrónico" required>
			</div>
		</div>		
		
		<hr>
		
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<input class="btn btn-primary btn-lg" name="btn_guardar" type="submit" value="Guardar" style="width: 200px;">
			</div>
		</div>
																															 			     </form>
	</div>
	<br>
	<br>
	<br>
<?php
	if(isset($_POST["btn_guardar"])){
	   require("c_cliente.php");
	}
?>
	</body>
</html>