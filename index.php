<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Post-It Wall Generator</title>
	<link rel="meta" type="application/rdf+xml" title="FOAF" href="/foaf.rdf">
	<link href="favicon.ico" type="image/x-icon" rel="icon" />
	<link rel="stylesheet" type="text/css" href="r/css/g.css" />
	<script type="text/javascript" src="r/js/jq1.6.2.js"></script>
	<script type="text/javascript" src="r/js/jq.ui.1.8.15.js"></script>
	<script type="text/javascript" src="r/js/farbtastic.js"></script>
	<script type="text/javascript" src="r/js/home.js"></script>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
	<div class="container">
	<?php include "r/php/ttl.php"; ?>
		
		<section class="choose">
		
			<h3><strong>Etape 1 :</strong> <br />Choisissez la couleurs de vos munitions </h3>
			<p>Vous pouvez choisir jusqu'à 10 couleurs différentes ! Prenez en une parmis celles proposés,
			ou customisez en une !</p>
		
			<div class="colLeft">
				<h3>Choisissez <span>(double clique ou drag'n'drop)</span> :</h3>
				<div class="list">
					<div data-color="1" data-valueColor="" class="post blue dr" title="Ajouter cette couleur">
						<span>+</span>
					</div>
					<div data-color="2" data-valueColor="" class="post darkBlue dr" title="Ajouter cette couleur">
						<span>+</span>
					</div>
					<div data-color="3" data-valueColor="" class="post purple dr" title="Ajouter cette couleur">
						<span>+</span>
					</div>
					<div data-color="4" data-valueColor="" class="post yellow dr" title="Ajouter cette couleur">
						<span>+</span>
					</div>
					<div data-color="5" data-valueColor="" class="post orange dr" title="Ajouter cette couleur">
						<span>+</span>
					</div>
					<div data-color="6" data-valueColor="" class="post fushia dr" title="Ajouter cette couleur">
						<span>+</span>
					</div>
					<div data-color="7" data-valueColor="" class="post green dr" title="Ajouter cette couleur">
						<span>+</span>
					</div>
					<div data-color="8" data-valueColor="" class="post darkGreen dr" title="Ajouter cette couleur">
						<span>+</span>
					</div>
					<div data-color="9" data-valueColor="" class="post rose dr" title="Ajouter cette couleur">
						<span>+</span>
					</div>
					<div class="post addNew default" title="Créer une couleur">
						<span>...</span>
					</div>
				</div>
				<!-- ColorPicker -->
				<form class="hwjs" id="colorpicker" action="#">
				  <div id="picker"></div>
				  <div class="form-item">
					  <div type="text" data-color="rainbow" data-valueColor="" id="color1" name="color1" class="colorwell dr">
						<span class="deco"></span>
					  </div>
				  </div>
				</form>
				
			</div>
			<div class="colRight">
				<h3>Votre sélection <span>(10 max)</span> :</h3>
				<div class="list">
					<div class="post default">
						<span data-color="1">?</span>
					</div>
				</div>
				<span class="hwjs warning">Vous avez atteint le nombre maximal de couleurs</span>
				
				<span class="nextStep inactive" title="Etape 2 : Choisissez une image"> Etape 2 ► </span>
			</div>
		</section>
		
		<section class="file hwjs">

			<h3><strong>Etape 2 :</strong> <br />Choisissez une photo ou une image que vous voulez post-esthétiser ! </h3>
			<p>Vous pouvez choisir n'importe quelle image, mais sachez qu'elle ne dépassera pas plus de 20 post-it de hauteur !</p>
			
			<div id="YourChoice" class="topBox box">
			
			</div>
			
			<form method="post" class="pushFile" action="postit.php" enctype="multipart/form-data">
			<div class="bottomBox box">
				<input type="hidden" name="MAX_FILE_SIZE" value="2097152">
				<input type="hidden" name="options" class="jsonValueColorPostIt" value="">    
				<input type="file" size="65" class="fileInput" name="image"><br />
				<p>
					Nous vous conseillons de vous baser sur une image de petite tailles aux couleurs nativement réduite, 
					sous peine d'avoir un résultat très moyen.
				</p>
			</div>
				<input type="submit" class="nextStep prevStep" value="◄ Revenir en arrière">
				<input type="submit" class="inactive nextStep" value="Générer">
			</form>
		</section>
		
	</div>
</body>
</html>