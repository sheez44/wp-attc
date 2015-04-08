<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
	  <meta charset="<?php bloginfo('charset'); ?>">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <title><?php bloginfo('name'); ?></title>
	  <meta name="description" content="Dit is de officiele website van ATTC'77. ATTC'77 is een tafeltennisvereniging uit Aarle-Rixtel en speelt in de gymzaal aan de Jan van Rixtelstraat 30.">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

	<div class="wrapper">
	  <header>
	    <div class="header--logo">
	      <h1><a href="<?php echo home_url(); ?>">ATTC '77</a></h1>
	    </div>
	    <div class="menu">
	      Menu<i class="fa fa-reorder fa-1x"></i>
	    </div>
	    <nav>
	      <ul>
	        <li>
	          <a class="header__links" href="#">Home</a>
	        </li>
	        <li>
	          <a class="header__links" href="views/competitie.html">Competitie</a>
	        </li>
	        <li>
	          <a class="header__links" href="views/fotos.html">Foto's</a>
	        </li>
	        <li>
	          <a class="header__links" href="views/algemene-informatie.html">Algemene informatie</a>
	        </li>
	        <li>
	          <a class="header__links" href="views/gastenboek.html">Gastenboek</a>
	        </li>
	      </ul>
	    </nav>

	  </header>
	  <div class="container">