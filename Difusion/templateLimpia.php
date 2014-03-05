<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		templateLimpia.php
* @Package:		GetSimple
* @Action:		Difusion theme for GetSimple CMS
* @Author:		Gonzalo Gabriel Costa - www.libreware.com.ar
*
*****************************************************/
?>
<!doctype html>
<html>
  <head>
  	<title><?php get_site_name() ?> - <?php get_page_clean_title() ?></title>
  	<meta charset="utf-8"/>
  	<meta name="generator" content="GetSimple CMS"/>
    <?php get_header() ?>
	
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
    <div class="container page">
		<div class="sixteen columns clearfix">		
			<div class="redesSociales">
				
				<a href="#" title="Visita nuestro Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
				<a href="#" title="Forma parte de nuestros circulos"><i class="fa fa-google-plus-square fa-2x"></i></a>
				<a href="#" title="Síguenos en Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
				<a href="#" title="Mirá nuestro canal de Youtube"><i class="fa fa-youtube-square fa-2x"></i></a>
			</div>
		</div>

		<div class="sixteen columns clearfix ">
			<div class="seven columns alpha ">
				<header>
					<h1><i class="fa fa-bullhorn logo" ></i> <a href="<?php get_site_url(); ?>"><?php get_site_name() ?></a><br/><span><?php get_component('tagline') ?></span></h1>
				</header>
			</div>
			<div class="nine columns omega ">
				<nav>
					<ul>
						<?php get_navigation(return_page_slug());?>
					</ul>
				</nav>
			</div>		
		</div>		
		<div class="sixteen columns clearfix">
			<main>
			
					<div class="four columns alpha data">
						<span title="Autor"><i class="fa fa-user"></i> <?php getPageField(return_page_slug(),'author') ?></span>					
						<span title="Fecha de ultima actualización"><i class="fa fa-clock-o"></i> <?php get_page_date('d.m.Y') ?></span>
					</div>
					<div class="twelve columns omega" style="text-align:right;">
						<span class="compartir">
							<a href="http://www.facebook.com/sharer/sharer.php?u=<?php get_page_url(); ?>" target="_blank" title="Compartir vía Facebook"><i class="fa fa-facebook-square"></i></a> 
							<a href="https://plus.google.com/share?url=<?php get_page_url(); ?>" target="_blank" title="Compartir vía Google+"><i class="fa fa-google-plus-square"></i></a> 
							<a href="http://twitter.com/home?status=<?php get_page_url(); ?>" target="_blank" title="Compartir vía Twitter"><i class="fa fa-twitter-square"></i></a> 
						</span>
					</div>
			
				<div class="sixteen alpha columns add-half-bottom">									
					<h2><?php get_page_title(); ?></h2>
				</div>
				<div class="sixteen columns alpha content">
					<?php get_page_content(); ?>
				</div>
			</main>
		</div>
		<footer>
			<p class="nombre"> <i class="fa fa-bullhorn logo"></i><br/><?php get_site_name(); ?></p>
			<p class="data">« <?php get_component('tagline') ?> »</p>
			<p class="creditos"><?php get_site_credits(); ?> | Diseño <a href="http://www.libreware.com.ar" target="_blank">Gonzalo Gabriel Costa</a>		</p>
		</footer>
	</div>
  </body>
</html>
