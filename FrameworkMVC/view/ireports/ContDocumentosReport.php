<?php

#<?php
#Importas la librer�a PhpJasperLibrary
include_once('PhpJasperLibrary/class/tcpdf/tcpdf.php');
include_once("PhpJasperLibrary/class/PHPJasperXML.inc.php");
include_once ('conexion.php');
#Conectas a la base de datos
$server  = server;
$user    = user;
$pass    = pass;
$db      = db;
$driver  = driver;
ini_set('display_errors', 0);

$variable_nombre_archivo = '';


////ver que tipo de documentos es


//// recuperar el nombre del cliente + el juicio + fecha y hora actual

///repositorio

/////buscar en la tabla de la base en docu,mentos y guardar el camino + nombre del documentos

#aqu� va el reporte
$directorio = $_SERVER['DOCUMENT_ROOT'].'/documentos/Reportes/';

$PHPJasperXML = new PHPJasperXML();
//$PHPJasperXML->debugsql=true;
$PHPJasperXML->arrayParameter=array();
$PHPJasperXML->load_xml_file("DocumentosReport.jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db, $driver);
$PHPJasperXML->outpage("I",$directorio.'Providencia.pdf');
$directorio = $_SERVER['DOCUMENT_ROOT'].'/documentos/Reportes/';
$PHPJasperXML = new PHPJasperXML();




//$PHPJasperXML->debugsql=true;
$PHPJasperXML->arrayParameter=array();
$PHPJasperXML->load_xml_file("DocumentosReport.jrxml");
$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db, $driver);
$PHPJasperXML->outpage("F",$directorio. $variable_nombre_archivo .'.pdf'); //page output method I:standard output D:Download file, F =save as filename and submit 2nd parameter as destinate file name /$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file
?>