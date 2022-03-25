<?php
namespace content\controller;

use content\component\headElement as headElement;
// use content\component\initComponent as initComponent;
use content\models\notificacionesModel as notificacionesModel;

// $init = new initComponent;
$head = new headElement();
$conteo = count(notificacionesModel::notificacionesNoLeidas());   
$notiLeidas = notificacionesModel::notificacionesLeidas();  
notificacionesModel::modificarNotificacionesLeidas();

?>