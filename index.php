<?php
// Logica para capturar la pantalla que queremos abrir
$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'home';

// Agrego cabecera
require_once 'header.php';

// Estoy usando require en vez de include, el parámetro enviado tiene el mismo nombre del archivo a cargar
require_once $pagina . '.php';

// Agrego pie
require_once 'footer.php';


?>



    
