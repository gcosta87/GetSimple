<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		templateLimpia.php
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
	<title><?php  get_site_name() ?> - <?php get_page_clean_title() ?></title>
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
			<main>
				<div class="eleven columns alpha">
					<h2><i class="fa  fa-bookmark-o"></i>	<?php get_page_title() ?></h2>
				</div>	
				<div class="five columns omega" style="text-align:right;">
					<span class="data">
						<span title="Autor"><i class="fa fa-user"></i> <?php getPageField(return_page_slug(),'author') ?></span>
						<span title="Fecha de última actualización"><i class="fa fa-clock-o"></i> <?php get_page_date('d.m.Y') ?></span>
					</span>
				</div>
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
