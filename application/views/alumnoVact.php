<body class="container col-md-5">
	<?php foreach ($datos as $val) { ?>
		<form id="formAlumno" action="<?= base_url('alumnoC/actualizar') ?>" method="POST" onsubmit="return validar();">
			<input type="hidden" name="id_alumno" id="id" value="<?= $val->id_alumno ?>">
			<div>
				<label>Nombre</label>
				<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese nombre de alumno..." maxlength="30" value="<?= $val->nombre ?>">
			</div>
			<div>
				<label>Apellido</label>
				<input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese nombre de alumno..." maxlength="30" value="<?= $val->apellido ?>">
			</div>
			<div>
				<label>Sexo</label>
				<select id="sexo" name="sexo" class="form-control">
					<option value="">Seleccion ua seccion</option>
					<?php foreach ($sexo as $va) { ?>
						<option value="<?= $va->id_sexo ?>" <?php if($va->id_sexo==$val->id_sexo){echo "Selected";} ?>><?= $va->sexo ?></option>
					<?php } ?>
				</select>
			</div>
			<div>
				<label>Seccion</label>
				<select id="seccion" name="seccion" class="form-control">
					<option value="">Seleccion ua seccion</option>
					<?php foreach ($seccion as $va) { ?>
						<option value="<?= $va->id_seccion ?>" <?php if($va->id_seccion==$val->id_seccion){echo "Selected";} ?>><?= $va->seccion ?></option>
					<?php } ?>
				</select>
			</div>

			<div>
				<label>Año</label>
				<input type="number" name="anio" id="anio" class="form-control" placeholder="Ingrese el Año.." value="<?= $val->anio ?>">
			</div>

		</div>

		<input type="submit" name="ACTUALIZAR" value="ACTUALIZAR" class="btn btn-primary">
		
	</form>

<?php }  ?>

<script>
	function validar(){
		var nombre = document.getElementById("nombre").value;
		var apellido = document.getElementById("apellido").value;
		var sexo = document.getElementById("sexo").selectedIndex;
		var seccion = document.getElementById("seccion").selectedIndex;
		var anio = document.getElementById("anio").value;

		if(nombre.length==0 || nombre.length>30){
			document.getElementById("nombre").style.borderColor="red";
			document.getElementById("nombre").placeholder="Campo Obligatorio";
			document.getElementById("nombre").style.boxShadow="0 0 5px red";
			return false;
		}else{
			document.getElementById("nombre").style.borderColor="green";
			document.getElementById("nombre").style.boxShadow="0 0 5px green";
		}

		if(apellido.length==0 || apellido.length>30){
			document.getElementById("apellido").style.borderColor="red";
			document.getElementById("apellido").placeholder="Campo Obligatorio";
			document.getElementById("apellido").style.boxShadow="0 0 5px red";
			return false;
		}else{
			document.getElementById("apellido").style.borderColor="green";
			document.getElementById("apellido").style.boxShadow="0 0 5px green";
		}

		if(sexo==''){
			document.getElementById("sexo").style.borderColor="red";
			document.getElementById("sexo").style.boxShadow="0 0 5px red";
			return false;
		}else{
			document.getElementById("sexo").style.borderColor="green";
			document.getElementById("sexo").style.boxShadow="0 0 5px green";
		}

		if(seccion==''){
			document.getElementById("seccion").style.borderColor="red";
			document.getElementById("seccion").style.boxShadow="0 0 5px red";
			return false;
		}else{
			document.getElementById("seccion").style.borderColor="green";
			document.getElementById("seccion").style.boxShadow="0 0 5px green";
		}

		if(anio.length==0){
			document.getElementById("anio").style.borderColor="red";
			document.getElementById("anio").placeholder="Campo Obligatorio";
			document.getElementById("anio").style.boxShadow="0 0 5px red";
			return false;
		}else{
			document.getElementById("anio").style.borderColor="green";
			document.getElementById("anio").style.boxShadow="0 0 5px green";
		}

		return true;
	}
</script>