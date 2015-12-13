
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

.texto {
	width: 100%;
	text-align: justify;
	
	}

</style>
<body>



<div class="panel panel-default">
   			<div class="panel-body">
				<div class="title">
									<h3><?php the_title();?></h3>
								</div>

								<div class="imagem">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(900,900))?></a>
								</div>


								<div class="texto">
								<?php the_excerpt();?>	
								</div>
				<a href="<?php the_permalink(); ?>" class="btn btn-success" role="button">Continuar lendo</a>
				
				</div>
				</div>
</body>
</html>
