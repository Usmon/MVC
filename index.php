<?php
/* Project: Zadachnik
 * Directory SYSTEM - Core
 * Directory APP - Application source
 */
//Get Autoloader
include 'system/autoloader.php';

use app\controllers\ZadachaController;
$app = new ZadachaController();

$app->index();