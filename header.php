<!doctype html>
<html lang="es">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Martin Mele Portfolio">
	<meta name="keywords" content="Martin Mele, Graphic Designer, UI, UX, HTML, CSS, XML, JavaScript, bootstrap, responsive, design">
	<meta name="author" content="Martin Mele">
	<meta property="og:title" content="Martin Mele Portfolio">
    <meta property="og:type" content="website portfolio">
    <meta property="og:description" content="Martin Mele Personal website">
    <meta property="og:image" content="http://martinmele.space/images/opengraph.png">
    <meta property="og:url" content="http://martinmele.space">

    <!-- GOOGLE ANALITICS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158688705-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-158688705-1');
    </script>

  <!--FIN GOOGLE ANALITICS-->

  <title>Martin Mele</title>
  <link rel="icon" href="favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="http://martinmele.space/images/apple-touch-icon.png">

  <!-- GOOGLE FONT -->
	<!--
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
-->
<!-- NORMALIZE -->
<link rel="stylesheet" href="css/normalize.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Oswald|Rubik:300,400,500,700,900" rel="stylesheet">
<!-- FONT AWESOME CDN -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!-- FONT AWESOME LOCAL 
<link rel="stylesheet" href="fontawesome5.8.1/css/all.css"/>
-->
<!-- BOOTSTRAP 4 CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- CUSTOM CSS -->
<link rel="stylesheet" href="css/estilos.css" type="text/css" />
<!-- MATERIAL CDN -->
<link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
</head>

<body>
	<!-- HEAD AND NAV -->

	<header class="d-print-none">

		<nav class="navbar navbar-dark fixed-top bg-dark navbar-expand-md " id="mainNav" role="navigation"><!-- Agregar para que no collapse: navbar-expand-md-->
			<div class="container ">
				<a class="navbar-brand <?php echo $pagina == 'home' ? 'active' : ''; ?>" href="?p=home"><img src="images/logo.svg" alt="Martin Mele"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"><i class="fa-li fa fa-spinner fa-spin"></i></span>
               </button>

               <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                   <ul class="nav justify-content-end">
                       <li class="nav-item agua <?php echo $pagina == 'portfolio' ? 'active' : ''; ?>"><a class="nav-link agua" href="?p=portfolio"><i class="fa fa-tree fa-2x" aria-hidden="true"></i></a></li>
                       <li class="nav-item verde <?php echo $pagina == 'hobbies' ? 'active' : ''; ?>"><a class="nav-link verde" href="?p=hobbies"><i class="fa fa-rocket fa-2x" aria-hidden="true"></i></a></li>
                       <li class="nav-item rojo <?php echo $pagina == 'access' ? 'active' : ''; ?>"><a class="nav-link rojo" href="?p=access"><i class="fa fa-umbrella fa-2x" aria-hidden="true"></i></a></li>
                   </ul>
               </div>
           </div>
       </nav>
   </header>
   <!-- END HEAD AND NAV -->
