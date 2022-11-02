<?php 

$conex = mysqli_connect("localhost","root","","proyecto");

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
	    $consulta = "INSERT INTO registro(Cedula, Nombres, Apellidos, Telefono, Correo, Contraseña)
                    VALUES ('$Documento','$Nombres','$Apellidos','$Telefono','$Correo','$Contraseña')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?>
	    	<script>window.alert('¡Te has registrado!');
                window.location.href="registrarse.php";</script>
           <?php
	    } else {
	    	?> 
                <script>window.alert('¡Ups ha ocurrido un error!');
                window.location.href="registrarse.php";</script>
           <?php
	    }
    }   else {
	    	?> 
                <script>window.alert('¡Por favor complete los campos!');
                window.location.href="registrarse.php";</script>
           <?php
    }
}
?>
