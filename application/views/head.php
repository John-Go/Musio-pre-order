<?php 
    require('./application/controllers/countryclassify.php');
    $countryclassifyClass = new CountryClassify;
    $countryclassifyClass->setLanguage();
?>
<!DOCTYPE html>
<html lang="en">
  	<head>
	  	<!-- Facebook Conversion Code for landing --> 
		<script>
			(function() { 
				var _fbq = window._fbq || (window._fbq = []); 
				if (!_fbq.loaded) { 
					var fbds = document.createElement('script'); 
					fbds.async = true; 
					fbds.src = '//connect.facebook.net/en_US/fbds.js'; 
					var s = document.getElementsByTagName('script')[0]; 
					s.parentNode.insertBefore(fbds, s); 
					_fbq.loaded = true; 
				} 
			})(); 
			window._fbq = window._fbq || []; 
			window._fbq.push(['track', '6027564273940', {'value':'1.00','currency':'KRW'}]); 
		</script> 

		<noscript>
			<img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6027564273940&amp;cd[value]=1.00&amp;cd[currency]=KRW&amp;noscript=1" />
		</noscript>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <meta property="og:url" content="http://akaintelligence.com/musio/" />
		<meta property="og:image" content="http://akaintelligence.com/musio/images/logo_musio.png" />
		<meta property="og:title" content="Musio: Meet your very first A.I. friend" />
		<meta property="og:description" content="Musio is the first A.I. robot that comprehends, learns, and thinks." />

		<title>Musio</title>

	    <!-- Bootstrap core CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">	    
	    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

	    <!-- Custom styles for this template -->	    
		<link href="./public/css/main.css" type="text/css" rel="stylesheet">
		<link href="./public/remodal/remodal-default-theme.css" type="text/css" rel="stylesheet">
		<link href="./public/remodal/remodal.css" type="text/css" rel="stylesheet">
		<link href="./public/css/effect.css" type="text/css" rel="stylesheet">

	    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	    <script src="./public/js/ie-emulation-modes-warning.js"></script>
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>
	
	    