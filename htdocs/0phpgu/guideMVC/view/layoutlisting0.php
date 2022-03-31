<?php
$chaine="<table class='table table-dark table-over'>";
    $chaine.="<tr>";
    //var_dump($data[0]);
                foreach ($data[0] as $key => $value) {
         {
                        $chaine.="<th>";
                        $chaine.=$value;
                        $chaine.="</th>";
                       
                    
                }

            }
            $chaine.="</tr>";
            //var_dump($chaine);

            echo $chaine;

?>