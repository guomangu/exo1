<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espaceMembre','root', '');

if(isset($_POST['formInscription']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    

    if(!empty($_POST['pseudo'] AND $_POST['mail'] AND $_POST['mail2'] AND $_POST['mdp'] AND $_POST['mdp2']))
    {
        $speudolength = strlen($pseudo);
        if($speudolength <= 50)
        {
            
            $reqPseudo = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ?");
            $reqPseudo->execute(array($pseudo));
            $pseudoExist = $reqPseudo->rowcount();
            if($pseudoExist == 0)
            {

                if($mail == $mail2)
                {
                    if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                    {
                        $reqMail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
                        $reqMail->execute(array($mail));
                        $mailExist = $reqMail->rowcount();
                        if($mailExist == 0)
                        {
                            if($_POST['mdp'] == $_POST['mdp2'])
                            {
                                $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
                                $mdp2 = password_hash($_POST['mdp2'], PASSWORD_BCRYPT);

                                $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motDePasse) VALUES(?, ?, ?)");
                                $insertmbr->execute(array($pseudo, $mail, $mdp));
                                $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                            }
                            else
                            {
                                $erreur = "Vos mots de passe ne correspondent pas !";
                            }
                        }
                        else
                        {
                            $erreur = "Adresse mail déjà utilisée !";
                        }
                    }
                    else
                    {
                        $erreur = "Votre adresse mail n'est pas valide";
                    }
                        
                }
                else
                {
                    $erreur =  "Vos adresse mail ne correspondent pas !";
                }
            }
            else
            {
                $erreur = "Pseudo déjà utiliser";
            }
        }
        else
        {
            $erreur = "Votre pseudo ne doit pas dépasser 50 caractères !";
        }
    }
    else
    {
        $erreur =  "Tous les champs doivent être complétés !";
    }
}

?>

<html>
    <head>
        <title>Tuto PHP</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./CSS/formulaire.css">
    </head>

    <body>
        <div>
            <h2>Inscription</h2>
            <br><br>
            <form method="POST" action="">
                <table>
                    <tr>
                        <td>
                            <label for="pseudo">pseudo</label>
                        </td>
                        <td>
                            <input type="text" name="pseudo" id="pseudo" placeholder="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="mail">mail</label>
                        </td>
                        <td>
                            <input type="email" name="mail" id="mail" placeholder="mail" value="<?php if(isset($mail)) { echo $mail; } ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="mail2">Confirmation mail</label>
                        </td>
                        <td>
                            <input type="email" name="mail2" id="mail2" placeholder="confirmez votre mail" value="<?php if(isset($mail2)) { echo $mail2; } ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="mdp">Mot de passe</label>
                        </td>
                        <td>
                            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="mdp">Confirmation mot de passe</label>
                        </td>
                        <td>
                            <input type="password" name="mdp2" id="mdp2" placeholder="Confirmez votre mot de passe">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="formInscription" value="Je m'inscris"></td>
                    </tr>
            </table>
            </form>
            <p>Déjà isncrit ? cliquez <a href="connexion.php">ici</a></p>
            <?php 
            if(isset($erreur))
            {
                echo '<font color= "red">'.$erreur."</font>";
            }
            ?>
        </div>
    </body>
</html>