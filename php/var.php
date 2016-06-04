<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Juan Carlos
 * Date: 24/05/2016
 * Time: 11:20 AM
 */
$_SESSION['idPelicula']=$_POST['idPelicula'];
$_SESSION['horario']=$_POST['horario'];
$_SESSION['pelicula']=$_POST['pelicula'];
$_SESSION['poster']=$_POST['poster'];