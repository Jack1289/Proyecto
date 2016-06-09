<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Juan Carlos
 * Date: 24/05/2016
 * Time: 11:20 AM
 */

$_SESSION['idPelicula']=$_POST['idPelicula'];
$_SESSION['sala']=$_POST['sala'];
$_SESSION['pelicula']=$_POST['pelicula'];
//////////////////////////
$_SESSION['horario']=$_POST['horario'];

$_SESSION['poster']=$_POST['poster'];
///var_dump($_SESSION['sala']);

