<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		ProyectoWeb theme for GetSimple CMS
* @Author:		Gonzalo Gabriel Costa - www.libreware.com.ar
*
*****************************************************/
?>
<!--
   «ProyectoWeb»
   
   Copyright 2014 Gonzalo Gabriel Costa «www.libreware.com.ar»
   
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 3 of the License, or
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
	<title><?php get_site_name() ?> -	<?php get_page_clean_title() ?></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<?php get_header(); ?>
	<meta name="generator" content="GetSimple CMS" />
	<link rel="stylesheet" href="<?php get_theme_url() ?>/style.css" type="text/css" />
	<link rel="shortcut icon" href="<?php get_theme_url() ?>/images/favicon.png" type="image/x-icon" /> 
	
	<!--Fuentes-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
</head>

<body>
	<div class="header">
		<div class="siteName">			
			<h1>
				<img src="<?php get_theme_url() ?>/images/logo.png" alt="logo"/>
				<a href="<?php get_site_url() ?>" name="top"><?php get_site_name() ?></a>
			</h1>	
		</div>
		<div class="menu">
			<ul>
				<?php get_navigation(return_page_slug()) ?>
			</ul>
		</div>
	</div>
	<div class="page">
			<div class="redesSociales">				
				<a href="#" title="Sumate a nuestro facebook" target="_blank"><i class="fa fa-facebook "></i></a>
				<a href="#" title="Visita nuestro Google+" target="_blank"><i class="fa fa-google-plus "></i></a>
				<a href="#" title="Encontranos en Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="#" title="Visita nuestro canal en Youtube" target="_blank"><i class="fa fa-youtube"></i></a>
			</div>
			<div class="presentacion">
				<div class="slogan">
						<?php get_component('tagline') ?>
				</div>
				
				<div class="descripcion">
					<p>Este proyecto consiste en la utilización de tecnologías al alcance de todos para ser utilizada en usuarios que posean...Edite este texto desde «home.php»</p>
					<p>Esta template fue hecha «artesanalmente» usando <a href="http://www.geany.org/" target="_blank">Geany</a> y la fotografía pertenece a <a href="" target="_blank">fotogrph</a>, se titula «Keyboard» y fue liberada bajo la licencia CCA v3</p>
				</div>
				
			</div>
			<div class="columnaDe3">
				<div class="itemColumna">
					<i class="fa fa-check-square-o fa-4x"></i>
					<h3>Titulo de la sección</h3>
					<p>Este es el texto que se supone describe esto mismo.</p>
				</div>
				<div class="itemColumna">
					<i class="fa fa-pencil-square-o fa-4x"></i>
					<h3>Titulo de la sección</h3>
					<p>Este es el texto que se supone describe esto mismo.</p>
				</div>
				<div class="itemColumna">
					<i class="fa fa-picture-o fa-4x"></i>
					<h3>Titulo de la sección</h3>
					<p>Este es el texto que se supone describe esto mismo.</p>
				</div>
				<br style="clear:both;"/>
			</div>
			<div class="conteiner">
				<h2><i class="fa  fa-file-o"></i> <?php get_page_title() ?> <span class="data"><span title="Autor"><i class="fa fa-user"></i> <?php getPageField(return_page_slug(),'author') ?></span><span title="Fecha de ultima actualización"><i class="fa fa-clock-o"></i> <?php get_page_date('d.m.Y') ?></span></span></h2>
				<div class="content">
					<?php get_page_content() ?>
				</div>
			</div>

			<div class="footer">
				<p class="nombre"><?php get_site_name() ?></p>
				<p class="data"><i class="fa fa-home"></i> 20 nº 1234 e/1 y 2 <i class="fa  fa-map-marker "></i> La Plata, Argentina<br/><i class="fa fa-phone"></i> (0221) 123-0123 <i class="fa fa-envelope"></i> alguncorreo@dominio.com.ar</p>
				<p class="creditos"><?php get_site_credits(); ?>| Diseño <a href="http://www.libreware.com.ar/" target="_blank">Gonzalo Gabriel Costa</a></p>
			</div>
	</div>
	
</body>

</html>
