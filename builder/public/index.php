<?php

use App\MySQLQueryBuilder;

require('../vendor/autoload.php');


# TODO: Creer un QueryBuilder
# Ecrire une requête en chainant des methodes
# Afficher la requête
$sql = (new MySQLQueryBuilder())
    ->table('test')
    ->select(['testselect', 'testselect2'])
    ->build();
echo('doit afficher select testselect,testselect2 from test: <br>' . $sql . '<br><br>');

$sql2 = (new MySQLQueryBuilder())
    ->table('test')
    ->where('testfield', '=', 'testfieldegal')
    ->build();
echo('doit afficher select * from test where testfield = testfieldegal: <br>' . $sql2 . '<br>');