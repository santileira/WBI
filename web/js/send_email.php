<?php
	if(isset($_POST["Nombre"]) && isset($_POST["Email"]) && isset($_POST["Mensaje"]) ){
		$to = "santiagoleira10@gmail.com, bifreelancer27@gmail.com";
		$subject = "WEB Contacto";
		$contenido .= "Nombre: ".$_POST["Nombre"]."\n";
		$contenido .= "Email: ".$_POST["Email"]."\n";
		$contenido .= "Telefono: ".$_POST["Telefono"]."\n";
		$contenido .= "Contenido: ".$_POST["Mensaje"]."\n\n";
		$header = "From: consultas@bifreelancer.com.ar\n";
		$header .= "Mime-Version: 1.0\n";
		$header .= "Content-Type: text/plain";
		if(mail($to, $subject, $contenido ,$header))
			echo 1;
		else
			echo 0;
	}
?>