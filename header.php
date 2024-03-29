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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<!-- CUSTOM CSS -->
<link rel="stylesheet" href="css/estilos.css" type="text/css" />
<!-- MATERIAL CDN -->
<link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>

<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("caramba");
var btns = header.getElementsByClassName("nav-link");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>

<!-- Hotjar Tracking Code for https://martinmele.com.ar/ -->
    <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3105735,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- Install this snippet AFTER the Hotjar tracking code. -->
<script>
var userId = your_user_id || null; // Replace your_user_id with your own if available.
window.hj('identify', userId, {
    // Add your own custom attributes here. Some EXAMPLES:
    // 'Signed up': '2019—06-20Z', // Signup date in ISO-8601 format.
    // 'Last purchase category': 'Electronics', // Send strings with quotes around them.
    // 'Total purchases': 15, // Send numbers without quotes.
    // 'Last purchase date': '2019-06-20Z', // Send dates in ISO-8601 format.
    // 'Last refund date': null, // Send null when no value exists for a user.
});
</script>
</head>

<body>
	<!-- HEAD AND NAV -->

	<header class="d-print-none">

		<nav class="navbar navbar-dark fixed-top bg-dark navbar-expand-md " id="mainNav" role="navigation"><!-- Agregar para que no collapse: navbar-expand-md-->
			<div class="container ">
				<a class="navbar-brand <?php echo $pagina == 'home' ? 'active' : ''; ?>" href="?p=home" ><img src="images/logo.svg" alt="Martin Mele Logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"><i class="fa-li fa fa-spinner fa-spin"></i></span>
               </button>

               <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                   <ul class="nav justify-content-end" id="caramba">
                       <li class="nav-item agua <?php echo $pagina == 'portfolio' ? 'active' : ''; ?>"><a class="nav-link agua" href="?p=portfolio" title="Home"><i class="fa fa-tree fa-2x" aria-hidden="true"></i></a></li>
                       <li class="nav-item verde <?php echo $pagina == 'hobbies' ? 'active' : ''; ?>"><a class="nav-link verde" href="?p=hobbies" title="Hobbies"><i class="fa fa-rocket fa-2x" aria-hidden="true"></i></a></li>
                       <li class="nav-item rojo <?php echo $pagina == 'access' ? 'active' : ''; ?>"><a class="nav-link rojo" href="?p=access" title="Access"><i class="fa fa-umbrella fa-2x" aria-hidden="true"></i></a></li>
                   </ul>
               </div>
           </div>
       </nav>
   </header>
   <!-- END HEAD AND NAV -->
