<?php
session_start();
require_once "privado/bd.php";
require_once "Sigma.php";
$opc=$_GET['opc'];
$tpl= new HTML_Template_Sigma("plantillas","plantillas-compiladas");
$tpl->loadTemplateFile("cabecera.tpl");
$tpl->setVariable(array("mensaje"=>"Bienvenido al sistema"));
$tpl->parse("bienvenida");
$tpl->show();

switch($opc) {
	case '': $tpl->loadTemplateFile("centro.tpl"); $tpl->show();break;
	case 'ola': echo "hoooola"; break;
}

$tpl->loadTemplateFile("pie.tpl");
$tpl->show();
?>