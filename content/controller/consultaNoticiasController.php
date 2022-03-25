<?php
namespace content\controller;

use content\component\headElement as headElement;
// use content\component\initComponent as initComponent;
use content\models\homeModel as homeModel;

// $init = new initComponent;
$head = new headElement();
$noticias=homeModel::consultarNoticias();

?>