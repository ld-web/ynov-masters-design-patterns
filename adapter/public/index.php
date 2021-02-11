<?php

use App\Env\IEnvLoader;
use App\Env\SfEnvAdapter;
use App\Env\VLucasEnvAdapter;

require_once '../vendor/autoload.php';

// Ici la partie chargée de récupérer l'env loader
// Du point de vue d'index.php, on sait juste qu'on aura affaire à une instance de IEnvLoader
// Cette fonction pourrait donc être dans un autre fichier, ou bien l'interface pourrait être utilisée
// avec l'injection de dépendances pour abstraire le type concret dont notre fichier est dépendant
// Le principal est de disposer de l'interface de chargement de fichier
function getEnvLoader(): IEnvLoader
{
  // return new SfEnvAdapter();
  return new VLucasEnvAdapter();
}

$envLoader = getEnvLoader();
// Ici on peut donc consommer le loader sans se soucier de son implémentation
$envLoader->loadEnvFile(__DIR__ . '/../.env');

var_dump($_ENV);
