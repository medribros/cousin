<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;400;500&family=Rock+Salt&display=swap" rel="stylesheet">
	<title>Mi cv</title>
</head>
<body>
	<div class="contfull">	



<p>ad</p>
	<header>	
				<div class="about-me-container">
					<div class="male-img">
						
				<img  id="maleimg" class="male" src="images/male.png" alt="">	
					</div>
					
						<div class="intro">
							
<p class="introduction">	My name is Leopoldo, student of social work at the university of Buenos Aires (UBA). I'm just getting started at web design, however , i would like not to only design but also to programming more deeply. I'm also looking forward helping the community with programming in a near future. </p>
						</div>
					

				</div>	
			<div class="header-content">
			<div class="todo">	

					<h1 id="tittle"> Cousin Design</h1>
					<img id="tittle2"class="guitarone"src="images/guitar.png" alt="">
						<a id="works" class="works-link" href="#">Works</a>
						<a id="works" class="contact-link" href="#">Contact</a>

					<img class="amplifier2" src="images/amplifier2.png" alt="">
					<div class="amplicont">	

					<img class="amplifier3" src="images/rolling.png" alt="">
					<img class="amplifier4" src="images/laveinti.jfif" alt="">
					<img class="amplifier5" src="images/viejas.jpg" alt="">
						<img class="amplifier6" src="images/larenga.jpg" alt="">
					</div>
					
					<img class="mic1" src="images/micuno.png" alt="">
			</div>	
			</div>	

	</header>

		<div class="rollinguno">	
			<img class="rlg" src="images/srv.jpg" alt="">
			<p class="whom"> Stevie Ray Vaughan born and raised in Dallas (October 3 1954 - August 27 1990)</p>
		</div>
		<div class="rollingdos">	
			<p class="whom2">Norberto <i>"Pappo"</i> Napolitano  was born in Lujan Province of Buenos Aires. (March 10 1950 - February 25 2005)	</p>
			<img class="rlg" src="images/pappo.jpg" alt="">
		</div>

	<body>
		<div id="skills" class="skills">	
		<h2>Skills</h2>
		<div class="javascript-content">	
				<img  id="skillimage"class="java-img" src="images/javascript.png" alt="">
		</div>	
			<div class="javascript-content">	
				<img  id="skillimage"class="java-img" src="images/php-logo.png" alt="">
		</div>	
		<div class="javascript-content">	
				<img  id="skillimage"class="java-img" src="images/mysql.png" alt="">
		</div>	
		<div class="javascript-content">	
				<img  id="skillimage"class="java-img" src="images/html.png" alt="">
		</div>	
		<div id="skillimage" class="javascript-content">	
				<img class="java-img-boot" src="images/bootstrap.png" alt="">
		</div>	
		<div id="skillimage" class="javascript-content">	
				<img class="java-img" src="images/sass.png" alt="">
		</div>	

<div class="javascript-content">	
				<img  id="skillimage"class="java-img" src="images/css-3.png" alt="">
		</div>	

<div class="javascript-content">	
				<img class="java-img" src="images/github.png" alt="">
		</div>	


</div>

		
		<div class="works">	
				<h4>Works</h4>
			<div class="workunocontainer">	

			<a href="www.portalnotice.com">
				
				<img class="workuno" src="images/workuno.png" alt="">
			</a>
				<p>	Just a personal project</p>
					
			</div>
		</div>	
<div class="contact-container">
	<h5>Contact Me</h5>
	<form action="<?php 	echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
		<input type="text" placeholder="Nombre:" name="nombre" id="nombre" class="nombre">
		<input type="text" placeholder="Apellido:" name="apellido" id="apellido" class="apellido">
		<textarea placeholder="Mensaje:" name="mensaje" id="mensaje"></textarea>

			<?php if (!empty($errores)): ?>
				<?php echo 	$errores; ?>
		<?php elseif($enviado) : ?>
			
				<?php 	echo 'bien'; ?>
			
			<?php endif ?>

		<div class="input">	
<input type="submit"  class="btn-submit" name="submit" value="Enviar" >
		</div>	

	</form>
</div>
	</body>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.js"></script>
	</div>
</body>
</html>