<?php

class Chemin_Composant
{
    const DOSSIER_COMPOSANTS = __DIR__ . '/../composants';

    public static function obtenir_chemin_complet(string $chemin_relatif): string
    {
        return self::DOSSIER_COMPOSANTS . '/' . $chemin_relatif;
    }
}
