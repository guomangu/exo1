<?php
    $chaine = json_decode('
    [
        {
            "source":"src=/volcan/photo/1.jpg",
            "alt": "photo",
            "legend": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili)"
        },
        {
            "source":"src=/volcan/photo/2.jpg",
            "alt": "photo",
            "legend": "Le volcan Agung, Bali."
        },
        {
            "source":"src=/volcan/photo/3.jpg",
            "alt": "photo",
            "legend": "Construction d’une embarcation traditionnelle, Lovina Beach, Bali"
        },
        {
            "source":"src=/volcan/photo/4.jpg",
            "alt": "photo",
            "legend": "Coucher de soleil depuis la plage de sable"
        },
        {
            "source":"src=/volcan/photo/5.jpg",
            "alt": "photo",
            "legend": "Groupe au crépuscule se préparant à monter sur la crête sommitale ."
        },
        {
            "source":"src=/volcan/photo/6.jpg",
            "alt": "photo",
            "legend": "Echange spirituel au temple hindou « Pura Ulun Danu », Bali"
        },
        {
            "source":"src=/volcan/photo/7.jpg",
            "alt": "photo",
            "legend": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili)"
        },
        {
            "source":"src=/volcan/photo/8.jpg",
            "alt": "photo",
            "legend": "Le volcan Agung, Bali."
        },
        {
            "source":"src=/volcan/photo/9.jpg",
            "alt": "photo",
            "legend": "Construction d’une embarcation traditionnelle, Lovina Beach, Bali"
        },
        {
            "source":"src=/volcan/photo/10.jpg",
            "alt": "photo",
            "legend": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili)"
        },
        {
            "source":"src=/volcan/photo/11.jpg",
            "alt": "photo",
            "legend": "Le volcan Agung, Bali."
        },
        {
            "source":"src=/volcan/photo/12.jpg",
            "alt": "photo",
            "legend": "Construction d’une embarcation traditionnelle, Lovina Beach, Bali"
        },
        {
            "source":"src=/volcan/photo/13.jpg",
            "alt": "photo",
            "legend": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili)"
        },
        {
            "source":"src=/volcan/photo/14.jpg",
            "alt": "photo",
            "legend": "Le volcan Agung, Bali."
        },
        {
            "source":"src=/volcan/photo/15.jpg",
            "alt": "photo",
            "legend": "Construction d’une embarcation traditionnelle, Lovina Beach, Bali"
        },
        {
            "source":"src=/volcan/photo/16.jpg",
            "alt": "photo",
            "legend": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili)"
        },
        {
            "source":"src=/volcan/photo/17.jpg",
            "alt": "photo",
            "legend": "Le volcan Agung, Bali."
        },
        {
            "source":"src=/volcan/photo/18.jpg",
            "alt": "photo",
            "legend": "Construction d’une embarcation traditionnelle, Lovina Beach, Bali"
        },
        
        {
            "source":"src=/volcan/photo/19.jpg",
            "alt": "photo",
            "legend": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili)"
        },
        {
            "source":"src=/volcan/photo/20.jpg",
            "alt": "photo",
            "legend": "Le volcan Agung, Bali."
        },
        {
            "source":"src=/volcan/photo/21.jpg",
            "alt": "photo",
            "legend": "Construction d’une embarcation traditionnelle, Lovina Beach, Bali"
        },
        {
            "source":"src=/volcan/photo/22.jpg",
            "alt": "photo",
            "legend": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili)"
        },
        {
            "source":"src=/volcan/photo/23.jpg",
            "alt": "photo",
            "legend": "Le volcan Agung, Bali."
        },
        {
            "source":"src=/volcan/photo/24.jpg",
            "alt": "photo",
            "legend": "Construction d’une embarcation traditionnelle, Lovina Beach, Bali"
        }
        
    ]');

    if(!empty($_POST['min'])){

        $min = intval($_POST['min'])-1;

    }
    else{
        $min = 0;
    }

    if(!empty($_POST['max'])){

        $max = intval($_POST['max']);

    }
    else{
        $max = 23;
    }

    $longueur = $max - $min;

    echo json_encode(array_slice($chaine, $min, $longueur));


?>