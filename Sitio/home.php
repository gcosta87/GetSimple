<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		home.php
* @Package:		GetSimple
* @Action:		Sitio theme for GetSimple CMS
* @Author:		Gonzalo Gabriel Costa - www.libreware.com.ar
*
*****************************************************/
?>
<!--
   «Sitio»
   
   Copyright 2014 Gonzalo G. Costa <gonzalogcosta@yahoo.com.ar>
   
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
   
   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.
   
   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
   MA 02110-1301, USA.
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
	<title><?php  get_site_name() ?> - <?php get_component('tagline') ?></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />  	
  	<?php get_header() ?>
  	<meta name="generator" content="GetSimple CMS"/>
    
	
	<!-- Skeleton --> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url() ?>/skeleton/skeleton.css" />
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url() ?>/skeleton/layout.css" />
	<!-- /Skeleton --> 
	
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url() ?>/style.css" />

	<link rel="shortcut icon" href="<?php get_theme_url() ?>/images/favicon.png" type="image/x-icon" /> 
	
	<!--Fuentes-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>


	<!-- ResponsiveSlides -->
	<link rel="stylesheet" href="<?php get_theme_url() ?>/rensponsiveSlides/estilo.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="<?php get_theme_url() ?>/rensponsiveSlides/responsiveslides.min.js"></script>
	
	<script>    
    $(function () {
		  // Slideshow 4
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 900,
			timeout: 4000, 
			namespace: "callbacks"
		  });
    });
  </script>

</head>
<body>
	<div class="container">
		<div class="redesSociales">
			<a href="#" title="Visite nuestro Facebook"><i class="fa fa-facebook-square"></i></a>
			<a href="#" title="Visite nuestra página de Google+"><i class="fa fa-google-plus-square"></i></a>
			<a href="#" title="Síganos en Twitter"><i class="fa fa-twitter-square"></i></a>
			<a href="#" title="Únete en Linkedin"><i class="fa  fa-linkedin-square"></i></a>
			<a href="#" title="Mire nuestro canal de Youtube"><i class="fa fa-youtube-square"></i></a>
		</div>
		<div class="sixteen columns">			
			<header>
				<h1><a href="<?php get_site_url() ?>"><img src="<?php get_theme_url() ?>/images/logo.png" alt="Logo"/> <?php get_site_name() ?></a></h1><br/>
				<span><?php get_component('tagline')  ?></span>
			</header>
		</div>
		
		<div class="sixteen columns">
			<nav>
				<ul>
					<?php get_navigation(return_page_slug()) ?>
				</ul>
			</nav>
		</div>
		<div class="sixteen columns">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li><a href="#"><img alt="" src="<?php get_theme_url() ?>/images/01.jpg" /></a>
						<p class="caption">Tu frase aquí, no cuesta nada cambiarla</p>
					</li>
					<li><a href="#"><img alt="" src="<?php get_theme_url() ?>/images/02.jpg" /></a>
						<p class="caption">Otra cosa que desees decir</p>
					</li>
					<li><a href="#"><img alt="" src="<?php get_theme_url() ?>/images/03.jpg" /></a>
						<p class="caption">Puedes cambiarlas desde la template</p>
					</li>
				</ul>
			</div>
		</div>		
		
		<div class="sixteen columns">
			<div class="one-third alpha column caja">
				<i class="fa fa-bookmark-o fa-3x"></i>
				<h3>Titulo del concepto</h3>
				<p>El texto que describe el concepto que se desea desarrollar.</p>
			</div>
			<div class="one-third  column caja">
				<i class="fa fa-user fa-3x"></i>
				<h3>Titulo del concepto</h3>
				<p>El texto que describe el concepto que se desea desarrollar.</p>
			</div>
			<div class="one-third omega column caja">
				<i class="fa fa-share fa-3x"></i>
				<h3>Titulo del concepto</h3>
				<p>El texto que describe el concepto que se desea desarrollar.</p>
			</div>
		</div>
		<div class="sixteen columns">
			<main>
				<div class="sixteen columns alpha">
					<article>
						<?php get_page_content() ?>
					</article>
				</div>
			</main>
		</div>
		<div class="sixteen columns">
			<footer>
				<p class="nombre"><?php get_site_name() ?></p>
				<p class="data"><?php get_component('tagline') ?></p>
				<p class="creditos">Fotos de <a href="http://fotogrph.com/grassy-green-461872367/" target="_blank">Fotogrph</a> | Diseño <a href="http://www.libreware.com.ar" target="_blank">Gonzalo Gabriel Costa</a></p>
			</footer>
		</div>
	</div>
</body>
</html>
