<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="Content-Type"
	content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"
	media="screen" />


<!--[if IE 8]>
    <script src="<?php echo get_template_directory_uri(); ?>/inc/scripts/html5.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/inc/scripts/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


<script src="js/vendors/jquery/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
<?php wp_head(); ?>

<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;     
      height: 300px;
     
      
  }
  </style>
</head>


<body id="myPage" data-spy="scroll" data-target=".navbar"
	data-offset="60">
	<header id="header" class="container">
		<div class="content">
			<div class="logo-container">
				<div class="logo-container__logo">
					<a href="<?php echo get_option('home');?>"> <img
						src="http://onthebass.com.br/logo.png" class="img-responsive"></a>
					<a href="https://www.facebook.com/belavistaagroecologico/?fref=ts"><img
						src="http://onthebass.com.br/icoFace.png" id="icoFace"
						class="img-responsive"></a> <a href="#"><img
						src="http://onthebass.com.br/icoyoutube.png" id="icoyoutube"
						class="img-responsive"></a> <a href="#"><img
						src="http://onthebass.com.br/icoTw.png" id="icoTw"
						class="img-responsive"></a>
				</div>
			</div>

			<div class="search-container">
				<form action="">
					<input class="form-control search-container__input" type="text"
						placeholder="Pesquisar no site">
				</form>
			</div>
		</div>
	</header>


	<!-- NAVEGCAO -->
	<div id="navegacao">
		<div class="container">
			<div id="navegacao__content">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed"
								data-toggle="collapse"
								data-target="#bs-example-navbar-collapse-1"
								aria-expanded="false">
								<span class="sr-only">Toggle navigation</span> <span
									class="icon-bar"></span> <span class="icon-bar"></span> <span
									class="icon-bar"></span>
							</button>

						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse"
							id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?php echo get_option('home');?>">Home
								</a></li>
								<li><a href="#sobre" data-scroll>Sobre</a></li>
								<li><a href="#servicos">Servicos</a></li>
								<li><a href="#produtos">Produtos</a></li>

								<li><a href="#localizacao">Localizacao</a></li>
								<li><a href="#contato">Contato</a></li>
								<li><?php wp_list_categories('title_li=');?> </li>
								<li><?php wp_list_categories('title_li=');?> </li>

							</ul>


						</div>
						<!-- /.navbar-collapse -->
					</div>
					<!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	</div>
	<!-- Fim navegação -->




	<div class="row">
		<div id="subRow"class="col-md-8">

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="http://onthebass.com.br/img2.jpg" alt="Chania">
						<div class="carousel-caption">
							<h3>Chania</h3>
							<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
						</div>
					</div>

					<div class="item">
						<img src="http://onthebass.com.br/img4.jpg" alt="Chania">
						<div class="carousel-caption">
							<h3>Chania</h3>
							<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
						</div>
					</div>

					<div class="item">
						<img src="http://onthebass.com.br/img2.jpg" alt="Flower">
						<div class="carousel-caption">
							<h3>Flowers</h3>
							<p>Beatiful flowers in Kolymbari, Crete.</p>
						</div>
					</div>

					<div class="item">
						<img src="http://onthebass.com.br/img3.jpg" alt="Flower">
						<div class="carousel-caption">
							<h3>Flowers</h3>
							<p>Beatiful flowers in Kolymbari, Crete.</p>
						</div>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button"
					data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
					aria-hidden="true"></span> <span class="sr-only">Previous</span>
				</a> <a class="right carousel-control" href="#myCarousel"
					role="button" data-slide="next"> <span
					class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>



		</div>




		<div class="col-md-4">					
						
							 
                               
                                <?php get_sidebar(); ?>
                              
                                
							
						</div>



	</div>



	<section id="header">
		<h3>header</h3>
		<a href="#myPage" title="To Top"> <span
			class="glyphicon glyphicon-chevron-up"></span>
	
	</section>

	<section id="sobre">
		<h3>SOBRE</h3>
		<a href="" title="To Top"> <span
			class="glyphicon glyphicon-chevron-up"></span>
		</a>
	</section>

	<section id="servicos">
		<h3>SERVICOS</h3>
		<a href="#myPage" title="To Top"> <span
			class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<div class="row">

			<div class="col-md-8" id="row_sidebar">
				<div class="panel panel-default">
					<div class="panel-body">
	 <?php 	if (have_posts ()) : while ( have_posts () ) : 	the_post ();?>				
				<div class="panel panel-default">
							<div class="panel-body">

								<div class="title">
									<a href="<?php the_permalink(); ?>"><h1><?php the_title();?></h1></a>
								</div>

								<div class="imagem">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(250,250))?></a>
								</div>


								<div class="texto">
									<a href="<?php the_permalink(); ?>">	<?php the_excerpt();?>	</a>
								</div>

								<div class="pub">
									<h4>
						Publicado por <?php the_author()?>
						 em <?php the_date("d/m/Y")?>
				- <?php comments_number("Nenhum Comentário","1 Comentário","% comentários")?>
				
				</h4>
								</div>


								<a href="<?php the_permalink(); ?>">
									<button type="button" class="btn btn-default">Continua Lendo</button>
								</a>
							</div>
						</div>
				
				<?php endwhile;  else :?>
				<p>Nenhum post</p>				
				<?php endif;?>
				
	         </div>
				</div>
			</div>


		</div>
	</section>

	<section id="produtos">
		<h3>PRODUTOS</h3>
		<a href="#myPage" title="To Top"> <span
			class="glyphicon glyphicon-chevron-up"></span>
		</a>
	</section>

	<section id="noticias">
		<h3>NOTICIAS</h3>
		<a href="#myPage" title="To Top"> <span
			class="glyphicon glyphicon-chevron-up"></span>
			<div class="row">
	
	</section>

	<section id="galeria">
		<h3>GALERIA</h3>
		<a href="#myPage" title="To Top"> <span
			class="glyphicon glyphicon-chevron-up"></span>
		</a>
	</section>

	<section id="localizacao">
		<h3>LOCALIZACAO</h3>

		<a href="#myPage" title="To Top"> <span
			class="glyphicon glyphicon-chevron-up"></span>
		</a>
	</section>


	<section id="contato">
		<h3>CONTATO</h3>

		<a href="<?php echo get_option('home');?>" title="To Top"> <span
			class="glyphicon glyphicon-chevron-up"></span>
		</a>
	</section>


<?php wp_footer();?>


	