<?php 
    require('./application/controllers/countryclassify.php');
    $countryclassifyClass = new CountryClassify;
    $countryclassifyClass->setLanguage();
?>
<!DOCTYPE html>
<html lang="en">
  	<head>
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
		
		<link href="./public/remodal/remodal-default-theme.css" type="text/css" rel="stylesheet">
		<link href="./public/remodal/remodal.css" type="text/css" rel="stylesheet">
		<link href="./public/css/effect.css" type="text/css" rel="stylesheet">
		<link href="./public/css/main.css" type="text/css" rel="stylesheet">
	</head>
	<body>
	
