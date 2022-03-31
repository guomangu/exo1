<?php
include( "pdo.php");
// session_destroy();
$tab=[];
if (isset($_POST['choix'])) {
    foreach ($_POST['choix'] as $key => $value) {
        $tab[]=$value;
    }
}

?>


<form name="selection" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
      <label for="dep">Choisisser votre département : </label>
      <select name="dep"  id="dep"  style=" max-width:200px">
    
       <option value="" >Choisir un Département</option>
      


      <?php
      $connect=maConnection::getInstance();
      $rq="SELECT * from departements";
      $state=$connect->prepare($rq);
      $state->execute();
         while( $ligne=$state->fetch())//recuperation lance à incendie resultat ligne par ligne
         {
             var_dump($ligne["id_dep"]);
            if($ligne['id_dep']==$_POST["dep"])
            {
                echo '<option value="'.$ligne["id_dep"].'" selected="true" >'.$ligne["Name"].'</option>';
            }
            else
            {
                echo '<option value="'.$ligne["id_dep"].'" >'.$ligne["Name"].'</option>';
            }
        } 
        ?>
        

 </select><br><hr><br>
 <fieldset>
      <legend> Sélectionner votre type d\'établissement</legend>
      
      <div>
     <input type="checkbox" name="choix[]" value="TPE" id="tpe" <?php foreach ($tab as $key => $value) {if($value=="TPE"){ echo("checked=true"); }} ?>/>
     <label for="tpe">TPE </label>
     </div>
     <div>
     <input type="checkbox" name="choix[]" value="PME" id="pme" <?php foreach ($tab as $key => $value) {if($value=="PME"){ echo("checked=true"); }} ?>/>
    <label for="pme">PME</label>
    </div>
  <div>
     <input type="checkbox" name="choix[]" value="GE" id="ge" <?php foreach ($tab as $key => $value) {if($value=="GE"){ echo("checked=true"); }} ?>/>
     <label for="ge">GRANDE ENTREPRISE</label>
     </div>
    <div>
     <input type="checkbox" name="choix[]" value="CT" id="ct" <?php foreach ($tab as $key => $value) {if($value=="CT"){ echo("checked=true"); }} ?>/>
    <label for="ct"> COLLECTIVITE TERRITORIALE</label>
     </div>
   <div>
     <input type="checkbox" name="choix[]" value="ASSOC" id="assoc" <?php foreach ($tab as $key => $value) {if($value=="ASSOC"){ echo("checked=true"); }} ?>/>
     <label for="assoc">ASSOCIATION</label>
     </div>
     <div>
     <input type="checkbox" name="choix[]" value="AUTRES" id="autre" <?php foreach ($tab as $key => $value) {if($value=="AUTRES"){ echo("checked=true"); }} ?>/>
     <label for="autre">AUTRES (secteur public)</label>
     </div>
    </fieldset>
      <div>
     <input type="submit" value="Valider" name="validation" style="margin-left:400px;" />
     <input type="button" onclick="javascript: window.print()" value="imprimer" />
      </div>
    </form>
</section>
</main>
</div>
<?php
     if(isset($_POST['validation']))
     {
       if(!empty($_POST['choix']))
       { // echo var_dump($_POST['choix']);
 $meschoix="";
            for($i=0; $i<count($_POST["choix"]);$i++)
            {
                // $_SESSION["lol".$i]=$_POST["choix"][$i];
                $meschoix.=",'".$_POST["choix"][$i]."'";
            } 
       $meschoix2=substr($meschoix,1);
       // $chaine = implode('","', $_POST['choix']);
        $finrq = ' AND type_etab IN ('. $meschoix2.')';
      }
      else
      {
        $finrq = '';
      }
      $sql = 'SELECT nom_etab, type_etab, nom_resp, adresse, cp, ville, Telephone, email FROM institutions WHERE depart=:depart'.$finrq.';';
     // echo $sql;
        $connect=maConnection::getInstance();
      $state=$connect->prepare($sql);
      $state->execute(array(":depart"=>$_POST["dep"]));
      echo '<div style="clear:both"></div>
      <hr>
      <br />
      <table align="center" cellpadding="5" cellspacing="0" style="width:800px; display:block;"  >
      <caption align="center"> Liste des éléments </caption>
      <thead style="background-color:blue; color:white">
      <tr><th>Nom Etab</th><th>Type Etab</th><th>Nom Resp</th><th>Adresse</th><th>Code Postal</th><th>ville</th><th>Telephone</th><th>Email</th>
      </tr>
      </thead>';
      $num_ligne=0;
      while($objligne = $state->fetch(PDO::FETCH_ASSOC))
      {
        if(($num_ligne%2)==0)
        {
         echo '<tr style=" background-color:#E9F5F4" >';
       }
       else
       {
        echo'<tr>';
      }     
      foreach($objligne as $value)
      { 
        echo '<td>'.$value.'</td>';
      }
      echo '</tr>'; 
      $num_ligne++;                 
    }
    echo '</table>';
  }

  ?>