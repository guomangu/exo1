<?php




spl_autoload_register(function($class) {include  "models/".$class.".php";} );


if (!empty($_GET["min"]) && $_GET["swo"] == 0) {
	$connect=connection::getInstance();
	$rq="SELECT * FROM `biens_immobiliers` WHERE num_departement =".$_GET["min"];
	$state=$connect->prepare($rq);
	$state->execute();
	// var_dump($rq);
	while( $ligne=$state->fetch())//recuperation lance à incendie resultat ligne par ligne
	{
		// var_dump($ligne);
		echo("
		
			
				<div class='ele'>".$ligne["titre"]."</div>
				<div class='ele'>".$ligne["nbr_pieces"]."</div>
				<div class='ele'>".$ligne["surface"]."</div>
				<div class='ele'>".$ligne["prix_vente"]."</div>
				<div class='ele'>".$ligne["description"]."</div>
				<div class='ele'>".$ligne["ges"]."</div>
				<div class='ele'>".$ligne["classe_eco"]."</div>
				<div class='ele'>".$ligne["meuble"]."</div>
				<div class='ele'>".$ligne["localisation"]."</div>
				<div class='ele'>".$ligne["num_departement"]."</div>
				<div class='ele'>".$ligne["ville"]."</div>
				<div class='ele'>".$ligne["charges_annuelles"]."</div>
				<div class='ele'>".$ligne["id_utilisateur_commercial"]."</div>
				<div class='ele'>".$ligne["id_categorie"]."</div>
				<div class='ele'>".$ligne["id_proprietaire"]."</div>
			

		");
	} 
}else if($_GET["min"]==0 && !empty($_GET["swo"])){
    $connect=connection::getInstance();
	$rq="SELECT * FROM `biens_immobiliers` WHERE nbr_pieces =".$_GET["swo"];
	$state=$connect->prepare($rq);
	$state->execute();
    // echo($state->execute());
	// var_dump($rq);
	while( $ligne=$state->fetch())//recuperation lance à incendie resultat ligne par ligne
	{
		// var_dump($ligne);
		echo("
		
			
				<div class='ele'>".$ligne["titre"]."</div>
				<div class='ele'>".$ligne["nbr_pieces"]."</div>
				<div class='ele'>".$ligne["surface"]."</div>
				<div class='ele'>".$ligne["prix_vente"]."</div>
				<div class='ele'>".$ligne["description"]."</div>
				<div class='ele'>".$ligne["ges"]."</div>
				<div class='ele'>".$ligne["classe_eco"]."</div>
				<div class='ele'>".$ligne["meuble"]."</div>
				<div class='ele'>".$ligne["localisation"]."</div>
				<div class='ele'>".$ligne["num_departement"]."</div>
				<div class='ele'>".$ligne["ville"]."</div>
				<div class='ele'>".$ligne["charges_annuelles"]."</div>
				<div class='ele'>".$ligne["id_utilisateur_commercial"]."</div>
				<div class='ele'>".$ligne["id_categorie"]."</div>
				<div class='ele'>".$ligne["id_proprietaire"]."</div>
			

		");
	} 
 } else if($_GET["min"]!=0 && $_GET["swo"]!=0){
    $connect=connection::getInstance();
	$rq="SELECT * FROM `biens_immobiliers` WHERE nbr_pieces =".$_GET["swo"]." AND num_departement =".$_GET["min"];
	$state=$connect->prepare($rq);
	$state->execute();
    // var_dump($state);
	// var_dump($rq);
	while( $ligne=$state->fetch())//recuperation lance à incendie resultat ligne par ligne
	{
		// var_dump($ligne);
		echo("
		
			
				<div class='ele'>".$ligne["titre"]."</div>
				<div class='ele'>".$ligne["nbr_pieces"]."</div>
				<div class='ele'>".$ligne["surface"]."</div>
				<div class='ele'>".$ligne["prix_vente"]."</div>
				<div class='ele'>".$ligne["description"]."</div>
				<div class='ele'>".$ligne["ges"]."</div>
				<div class='ele'>".$ligne["classe_eco"]."</div>
				<div class='ele'>".$ligne["meuble"]."</div>
				<div class='ele'>".$ligne["localisation"]."</div>
				<div class='ele'>".$ligne["num_departement"]."</div>
				<div class='ele'>".$ligne["ville"]."</div>
				<div class='ele'>".$ligne["charges_annuelles"]."</div>
				<div class='ele'>".$ligne["id_utilisateur_commercial"]."</div>
				<div class='ele'>".$ligne["id_categorie"]."</div>
				<div class='ele'>".$ligne["id_proprietaire"]."</div>
			

		");
	} 
 }else {
    echo"mystere et boule de swo";
 }



?>