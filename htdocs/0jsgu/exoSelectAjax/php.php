<?php
    
    $tabObjet=json_decode('[
    {
        "id": "1",
        "titre": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili)",
        "alt": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili) volcan indonésie",
        "src":"img_saint_valery/0_arbre.jpg"
    },
    {
        "id": "2",
        "titre": "Le volcan Agung, Bali.",
        "alt": "Le volcan Agung, Bali. volcan indonésie",
        "src":"img_saint_valery/0_bateau.jpg"
    },
    {
        "id": "3",
        "titre": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili)",
        "alt": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili) volcan indonésie",
        "src":"img_saint_valery/0_escalier.jpg"
    },
    {
        "id": "4",
        "titre": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili)",
        "alt": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili) volcan indonésie",
        "src":"img_saint_valery/0_horizon.jpg"
    },
    {
        "id": "5",
        "titre": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili)",
        "alt": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili) volcan indonésie",
        "src":"img_saint_valery/0_peuple.jpg"
    },
    {
        "id": "6",
        "titre": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili)",
        "alt": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili) volcan indonésie",
        "src":"img_saint_valery/0_plage.jpg"
    },
    {
        "id": "7",
        "titre": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili)",
        "alt": "L’Ile de Lombok vue depuis l’île de Trawangan (Iles Gili) volcan indonésie",
        "src":"img_saint_valery/0_sable.jpg"
    }
    ]');

    $min=$_GET["min"];
    $max=$_GET["max"];
    $long=$max-$min;

    $tabTravaux=array_slice(
        $tabObjet,
        $min,
        $long
    );

    $json=json_encode($tabTravaux);
    echo $json;
?>