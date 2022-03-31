<?php
    $chaine="<table class='table table-dark table-over'>";
    $chaine.="<tr>";

    $o=true;
    for ($i=0; $i < count($data); $i++) { 
        $chaine.="<td>".$data[$i];

        if ($o==true) {
            $chaine.=
            "<form action='../view/detail.php' method='POST' enctype='multipart/form-data' />
                <input type='hidden' value=".$data[0]."' name='modif' >
                <input type='submit' name='btn_modif' value='modifier' id='btn_modif' />
            </form>";
            $chaine.=
            "<form action='../controler/suppr.php' method='POST' enctype='multipart/form-data' />
                <input type='hidden' value=".$data[0]."' name='suppr' >
                <input type='submit' name='btn_suppr' value='supprimer' id='btn_modif' />
            </form>";
        }

        $chaine.="</td>";
        $o=false;
    }

    $chaine.="</tr>";
    $chaine.="</table>";

    echo $chaine;
?>