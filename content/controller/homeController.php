<?php
namespace content\controller;

use content\component\headElement as headElement;
// use content\component\initComponent as initComponent;
use content\models\homeModel as homeModel;
use content\models\notificacionesModel as notificacionesModel;

// $init = new initComponent;
$head = new headElement();

$noticias=homeModel::consultarNoticiasHome();
$conteo = count(notificacionesModel::notificacionesNoLeidas()); 

require_once("view/homeView.php");

?>