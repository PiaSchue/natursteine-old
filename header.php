<!doctype html>
<html lang="de">
  <head>
    <!-- Favicon = Icon im Browser-Tab
    <link rel="icon" type="image/png" href="img/.png">
    -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <!-- Websiten-Titel (Tab-Anzeige)-->
    <title>
    	Natursteine Schürmann: Ihr Steinmetz in Coesfeld
    </title>
    <!-- Required meta tags -->
    <!--Meta-Daten für SEO-Optimierung-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="keywords" content="HTML, Natursteine, Steinmetz, Coesfeld, Fensterbänke, Arbeitsplatten, Treppen, Böden"/>
    <meta name="author" content="Natursteine Schürmann"/>
    <meta name="robots" content="index, follow"/>
    <meta http-equiv="cache-control" content="max-age=31536000" />
    <!-- habe diese drei srces aus dem footer hier eingefügt, weil popovers sonst nicht funktioniert haben-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Google fonts NEU-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <!--Google fonts alt (AHAG)
  	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700|Roboto:300,300i,400,500,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300;400;600&display=swap" rel="stylesheet">
    -->
  	<!-- Google Icons-->
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<!-- eigene CSS-->
    <link rel="stylesheet" type="text/css" href="CSS/schuermann.css">
    <!--Icons Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!--Popper-Integration für Tooltips (muss vor Bootstrap eingefügt sein)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Popover ermöglichen -->
 
    <script>
    $(document).ready(function(){
      $('[data-toggle="popover"]').popover(); 
      });
    </script>
    <script>
    $(function () {
    $('[data-toggle="popover"]').popover()
    })
    </script>
    <!-- Bootstrap-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- cookiealert.css -->
    <link rel="stylesheet" href="js/Bootstrap4cookieAlert/cookiealert.css">  
    <!-- Google Captcha für Kontaktformular (aktuell nicht notwendig)
    <script src='https://www.google.com/recaptcha/api.js'></script>
    --> 
  </head>

<body>
<!--Cookie-Text-->
<div class="alert alert-dismissible text-center cookiealert" role="alert">
  <div class="cookiealert-container">
      <b>Magst du Cookies?</b> &#x1F36A; Für die beste Nutzererfahrung sammeln wir Cookies auf unserer Website. <a href="http://cookiesandyou.com/" target="_blank">Mehr dazu</a>
      <button type="button" class="btn customdarkblue bg-light btn-sm acceptcookies" aria-label="Close">
          Ich stimme zu
      </button>
  </div>
</div>

<!--Cookie-Skript-->
<script src="js/Bootstrap4cookieAlert/cookiealert.js"></script>

<!--header-->
  <div class="container head py-0">
  	<h4 class="py-0 my-0">Natursteine Schürmann </h4>  
  </div>
  <nav id="naav" class="pt-0 pb-0 active navbar sticky-top navbar-expand-lg navbar-light naav border-top-0 border-black border text-uppercase" role="navigation"><?php include('nav.php');?></nav>