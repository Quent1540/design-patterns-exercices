<?php
require('../vendor/autoload.php');
use App\Config;

# TODO: Récuperer une instance de Config
# Afficher une valeur contenu dans config.php
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques

$config = Config::getInstance();
echo("config key " . $config->get(). "<br><br>");

$config2 = Config::getInstance();
if($config===$config2)
    echo("memes instances de config");
else{
    echo("instances differentes");
}