<?php 

$conex = mysqli_connect("localhost","root","","intento1");

if (isset($_POST['Registro'])) {
    if (strlen($_POST['Documento']) >= 1 && strlen($_POST['Nombres']) >= 1
            && strlen($_POST['Apellidos']) >= 1 && strlen($_POST['Telefono']) >= 1
            && strlen($_POST['Correo']) >= 1 && strlen($_POST['Contraseña']) >= 1) {
	    $Documento = trim($_POST['Documento']);
	    $Nombres = trim($_POST['Nombres']);
            $Apellidos = trim($_POST['Apellidos']);
            $Telefono = trim($_POST['Telefono']);
            $Correo = trim($_POST['Correo']);
            $Contraseña = trim($_POST['Contraseña']);
	    $consulta = "INSERT INTO usuarios(Documento, Nombres, Apellidos, Telefono, Correo, Contraseña)
                    VALUES ('$Documento','$Nombres','$Apellidos','$Telefono','$Correo','$Contraseña')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?>
	    	<h3 class="ok">¡Te has registrado!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
