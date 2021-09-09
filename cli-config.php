<?php

// Importation de l'autoloader de Composer
require_once 'vendor/autoload.php';
$pdo = new PDO('mysql:host=localhost;dbname=doctrine_exercice', 'root', '');

use Doctrine\ORM\Tools\Setup;

$config = Setup::createAnnotationMetadataConfiguration(['entities'], false);