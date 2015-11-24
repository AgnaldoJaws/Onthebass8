<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	 <script type="text/javascript">
<!--[if IE 8]>
    <script src="<?php echo get_template_directory_uri(); ?>/inc/scripts/html5.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/inc/scripts/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class('custombody'); ?>>


<header id="hom">
	<div class="imgTop"></div>
		<div id="flip">
				<div class= "top">
					<h3 id="a">Menu</h3>
					<h2><a href="<?php echo get_option('home');?>">DIARIO CAICARA</a></h2>
				</div>
			
			<div id="menu">
			<h3 id="logo">Diário Popular Caiçara</h3>
				<ul id="ulMenu">				
				<li><a href="<?php echo get_option('home');?>">HOME</a></li>
				 <li><?php wp_list_categories('title_li=');?>    </li>  
				<li><a href="<?php echo get_option('home');?>">NOTÍCIAS</a></li>
				<li><a href="<?php echo get_option('home');?>">CONTRIBUA</a></li>
				<li><a href="<?php echo get_option('home');?>">CONTATO</a></li>  
						</ul>
			</div>
		</div>

		<div id="panel">
			<ul>
				<li><a href="<?php echo get_option('home');?>">HOME</a></li>
			       <li><?php wp_list_categories('title_li=');?>    </li>  
					
			
			</ul>
		</div>
		
	</header>

	<!-- Final Menu -->

	<div class="imgCel"></div>


	<script> 
$(document).ready(function(){
    $("#a").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
<div class="espaco"></div>
	