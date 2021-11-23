<?php
      header ("Location: http://martinmele.com.ar/index.php");


      if ($_POST["submit"]) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'Formulario de contacto'; 
        $to = 'info@martinmele.com.ar'; 
        $subject = 'Mensaje desde el sitio web ';
        $fecha = date('d/m/Y', time());

        $body ="Enviado por: $name\n Fecha: $fecha\n E-Mail: $email\n Mensaje:\n $message";

        if (!$_POST['name']) {
          $errName = 'Por favor ingrese su nombre';
        }

        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
          $errEmail = 'Por favor ingrese un correo válido';
        }

        if (!$_POST['message']) {
          $errMessage = 'Por favor ingrese mensaje';
        }

        if (!$errName && !$errEmail && !$errMessage) {
          if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Gracias! Nos contactaremos a la brevedad</div>';
          } else {
            $result='<div class="alert alert-danger">Perdón, hubo un error. Por favor intentalo nuevamente más tarde.</div>';
          }
        }
      }
?>