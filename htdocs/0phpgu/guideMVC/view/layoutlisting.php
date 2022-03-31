<?php
    $chaine="<table class='table table-dark table-over'> ";

    //var_dump($data);
    $chaine.="<tr>";
    for ($i=0; $i <count($tete) ; $i++) { 

     $chaine.="<td>".$tete[$i]."</td>";

        # code...
    }
    $chaine.="</tr>";
    //var_dump($this->lol);
    
    //
    //$chaine.=$this->infoTable();
    //

    for ($i=0; $i < count($data); $i++) { 
        # code...
    
        $chaine.="<tr>";
        
        //$chaine.="<td><a href='detail.php?lol=".$row[0]."'>modifier</a></td>";

        //var_dump($row);
        
        for ($i=0; $i < count($data); $i++) { 
            $o=true;
            for ($j=0; $j < count($data[$i]); $j++) { 
                # code...
            
                $chaine.="<td>".$data[$i][$j];
                if ($o==true) {
                    //var_dump($data[1][0]);
                    $chaine.="<form action='../view/detail.php' method='POST' enctype='multipart/form-data' /><input type='hidden' value=".$data[$i][0]."' name='modif' ><input type='submit' name='btn_modif' value='modifier' id='btn_modif' /></form>";
                    $chaine.="<form action='../controler/suppr.php' method='POST' enctype='multipart/form-data' /><input type='hidden' value=".$data[$i][0]."' name='suppr' ><input type='submit' name='btn_suppr' value='supprimer' id='btn_modif' /></form>";
                    //$_SESSION['id']=$row[0];
                    //var_dump($row[0]);
                }
                $chaine.="</td>";
                $o=false;
            }
            $chaine.="</tr>";
        }

        
    }
    $chaine.="</table>";

    echo $chaine;
?>