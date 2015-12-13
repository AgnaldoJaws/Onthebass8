<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  
	
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<style>
img, 
.wp-caption {
	max-width: 100%;
	height: 300px;
	
	
}

.title{	
	margin-left:auto;
	
	}
	
	.texto {
	width: 90%;
	text-align: justify;
	
	}
	
	.btn {
	margin-left:30%;
	}
	
	.sidebar .widgets {
	box-shadow: 2px 2px 2px #888888;
	width: 100%;
	background-color:white;
	border: 1px solid white;
	padding: 18px;
	font-family: Helvetica;
	font-size: 20px;
	color: #333333;
	margin-top: 1px;
	
	opacity:0.9;
	
}
	.widgets h4{
	
	margin-left: 35%;
	margin-top: -5px;
	color: #065206;
}

.sidebar .widgets a {
	
	font-size: 18px;
}
.sidebar .widgets a:hover {
	font-family: Helvetica;
	color: #065206;
	list-style: none;
	text-decoration:none; 
}

.sidebar .widgets ul {
	
	list-style-type: none;
}

.widgets a {
	
	color: black;
	
}
</style>

<body>		
	
		<div class="row" >
	
	

	<div id ="singleBorder2" class="col-md-offset-2 col-md-8">
		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content', 'search'); ?>
			
			<?php endwhile;
			
		endif;
				
		?>
		</div>
	
	</div>
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	


<?php get_footer(); ?>