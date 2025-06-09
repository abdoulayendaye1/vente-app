<?php

function getProduits(): array
{
    if (!isset($_SESSION['produits'])) {
        $_SESSION['produits'] = [
            1 => [
                'id' => 1,
                'nom' => 'Sindidi',
                'prix' => 50,
                'image' => 'images/sindidi.jpg' // chemin vers l'image
            ],
            2 => [
                'id' => 2,
                'nom' => 'Mawahibou ',
                'prix' => 20,
                'image' => 'images/mawahibou.jpg'
            ],
            3 => [
                'id' => 3,
                'nom' => 'MafatikhoulBisri',
                'prix' => 70,
                'image' => 'images/sindidi.jpg'
            ],
            4 => [
                'id' => 4,
                'nom' => 'Wakana',
                'prix' => 70,
                'image' => 'images/wakana.png'
            ],
        ];
    }

    return $_SESSION['produits'];
}

function ajouterProduit(string $nom, float $prix, string $imagePath = ''): void
{
    $produits = getProduits();
    $nouvelId = !empty($produits) ? max(array_keys($produits)) + 1 : 1;

    $_SESSION['produits'][$nouvelId] = [
        'id' => $nouvelId,
        'nom' => $nom,
        'prix' => $prix,
        'image' => $imagePath,
    ];
}

