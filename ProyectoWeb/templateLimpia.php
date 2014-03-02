<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		templateLimpia.php
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
