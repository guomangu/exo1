<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css.css">

    <title>GUIDE RESTO</title>

    <style>
      input[type='text'] { margin:15px 20px; background-color:#E6E6E6;  }
      input[type='password'] { margin:15px 20px; background-color:#E6E6E6;  }
      label { margin-left:10px;margin-right:10px}
      fieldset {margin-top:50px; width:15%; margin-left:auto; margin-right:auto;}
      #btnsub { width:100%;text-align:center}
    </style>
  </head>
  
    <body>
        <video style="
            position: fixed; right: 0; bottom: 0;
            min-width: 100%; min-height: 100%;
            width: auto; height: auto; z-index: -100;
            background: url() no-repeat;
            background-size: cover;"
            autoplay muted loop>
            <source src="videoAccueil.mp4" type="video/mp4" />
        </video>

        <?php
        if ($pow=false) {

          "stop mdr";

          $pow=true;
        }
        ?>

        <main class="main">
            <form class="form" method="post" action="index.php">
                <label for="uno">Nom</label>
                <input type="text" placeholder="bonjour" name="uno" class="uno">

                <label for="dos">Prenom</label>
                <input type="text" placeholder="bonjour" name="dos" class="dos">

                <label for="tres">email</label>
                <input type="text" placeholder="bonjour" name="tres" class="tres">

                <label for="quatro">pass</label>
                <input type="text" placeholder="bonjour" name="quatro" class="quatro">

                <label for="cinco">verif pass</label>
                <input type="text" placeholder="bonjour" name="cinco" class="cinco">

                <label for="seis">dept</label>
                <select class="seis" name="seis">
                    <?php
                        // include "model/base.php";
                        // include "controler/ctrldetail.php";
                        include "connect.php";

                        $sql="SELECT id_dep,Name FROM departements;";
                        // echo ($sql);
                        $statement=$co->prepare($sql);
                        //var_dump($statement);
                        $statement->execute();
                        $donnees=$statement->fetchAll();
                        
                        foreach ($donnees as $key => $value) {
                          echo "<option value=".$value[0]."> ".$value[1]." </option>";
                        }
                        // var_dump($donnees);
                    ?>
                </select>

                <label for="siete">age</label>
                <input type="text" placeholder="bonjour" name="siete" class="siete">

                <input type="submit" name="go" style="float: right;">
            </form>
        

            <div class="ff">
       <?php

                        
                          # code...
                        
        if (isset($_POST['go']) ) {
          if ($_POST['cinco']==$_POST['quatro']) {
            # code...
          
            if (!empty($_POST['uno']) && !empty($_POST['dos']) && !empty($_POST['tres']) && !empty($_POST['quatro']) && !empty($_POST['cinco']) && !empty($_POST['seis']) && !empty($_POST['siete']) ) {
              # code...
            
              include "connect.php";
          
              $sql="INSERT INTO candidats (`lastname_user`, `firstname_user`, `mail_user`, `pass_user`, `departement_user`, `age_user`) VALUES (:nom,:prenom,:mail,:pass,:dept,:age)";
              $stat=$co->prepare($sql);

              $stat->bindParam(":nom",$_POST['uno'],PDO::PARAM_STR);
              $stat->bindParam(":prenom",$_POST['dos'],PDO::PARAM_STR);
              $stat->bindParam(":mail",$_POST['tres'],PDO::PARAM_STR);
              $beau=password_hash($_POST['quatro'],PASSWORD_BCRYPT);
              $stat->bindParam(":pass",$beau,PDO::PARAM_STR);
              $stat->bindParam(":dept",$_POST['seis'],PDO::PARAM_INT);
              $stat->bindParam(":age",$_POST['siete'],PDO::PARAM_INT);
              //var_dump($_id);
              $stat->execute();
              $nbLigne=$stat->rowCount();
              
              if ($nbLigne==1) {
                  echo "modif reussi";
                  $pow=false;
              }else {
                  echo "modif impossible";
              }
            }else {
              echo"veuillez remplir tous les champs";
            }
          }else {
            echo"Les mots de passe ne correspondent pas";
          }
        }else {
          echo"Je patiente";
        }
       ?>
       </div>
  </main>
    </body>

</html>