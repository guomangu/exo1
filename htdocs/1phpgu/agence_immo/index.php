

<?php
spl_autoload_register(function($class) {include  "models/".$class.".php";} );

/* HEADER entete avec dépendances CSS 
  ================================================== */
include( "header.php");

// include("test.js");
 
 
 /*NAVBAR
    ================================================== */
include("menu.php");

 /* Carousel
    ================================================== */

include("slider.php");


   /*  Marketing mainpage 
    ================================================== 
   Wrap the rest of the page in another container to center all the content. */
//$categorie à definir en fonction de la catégorie de bien choisie dans le formulaire.       
 $categorie="A définir";

	    
		 echo'<h1>Liste des biens immobiliers</h1>';
		 
		
		 
		  echo'<form  action="#">
				 <fieldset><legend>Rechercher un Bien immobilier</legend>
				 
				  <div class="form-group">
 <input type="hidden" name="lib_cat" value="'.$categorie.'" id="lib_cat" />
 
 <label for="dept">Choisir le département</label>';
 
 echo '<select name="dep"  id="dep" class="form-control"  style=" max-width:300px">';

 echo'<option value="0">min</option>';
 $connect=connection::getInstance();
 $rq="SELECT * FROM `departements`";
 $state=$connect->prepare($rq);
 $state->execute();
 while( $ligne=$state->fetch())//recuperation lance à incendie resultat ligne par ligne
 {
	echo'<option value="'.$ligne["id_dep"].'">'.$ligne["nom_dep"].'</option>';
 }


 echo '</select>';
 echo' </div>
 <div class="form-group">
 
 <label for="budget">Montant budget maximum</label>
 	<span class="currencyinput">€
<input type="number"  step="10000" id="bugdet" name="budget" placeholder="Budget Max"  min="50000" max="900000000" />
</span>
</div>

<div class="form-group">
 <label for="nbpiece" >Nombre de pièces souhaitées:</label>';
 
 echo '<select name="nbpieces"  id="nbre" class="form-control"  style=" max-width:300px">';
 echo'<option value="0">swo</option>';

 $connect=connection::getInstance();
 $rq="SELECT DISTINCT nbr_pieces FROM `biens_immobiliers`";
 $state=$connect->prepare($rq);
 $state->execute();
//  $ligne=[];
 $ligne=$state->fetchAll();
 var_dump($ligne);
 
foreach ($ligne as $key => $value) {
	foreach ($value as $key => $value2) {
		echo'<option value="'.$value2.'">'.$value2.'</option>';
	}
}



 
echo"</select></div>";
  
 echo  '
         <div class="form-group form-button" id="btnsub" >				  
 <button type="submit" class="btn btn-primary" name="envoi">Submit</button>
	</div>
	</fieldset>
	 </form>
	 <div id="sup" class="sup"></div>'; 



if (isset($_GET["lib_cat"]) && $_GET["lib_cat"]=="appartement") {
	$connect=connection::getInstance();
	$rq="SELECT * FROM `biens_immobiliers` WHERE id_categorie = 1";
	$state=$connect->prepare($rq);
	$state->execute();
	// var_dump($rq);
	while( $ligne=$state->fetch())//recuperation lance à incendie resultat ligne par ligne
	{
		// var_dump($ligne);
		echo("
		
			<div class='sup'>
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
			</div>

		");
	} 
}else if(isset($_GET["lib_cat"]) && $_GET["lib_cat"]=="maison individuelle"){
	$connect=connection::getInstance();
	$rq="SELECT * FROM `biens_immobiliers` WHERE id_categorie = 2";
	$state=$connect->prepare($rq);
	$state->execute();
	// var_dump($rq);
	while( $ligne=$state->fetch())//recuperation lance à incendie resultat ligne par ligne
	{
		// var_dump($ligne);
		echo("
		
			<div class='sup'>
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
			</div>

		");
	} 
}else{
	echo"SWIRL";
}
		  
		
			
include( "acces_membre.php");  
		  
		  
		  
/* Pied de page avec dépendances Javascript...
    ================================================== */
 include( "footer.php");

 ?>

		
          
   


