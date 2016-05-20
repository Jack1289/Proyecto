<?php
    //Conexion usando libreria adodb 5.1.7
    include('../adodb/adodb5/adodb.inc.php');
    $db=NewADOConnection('mysqli');
    //inciso a y b
    //$db->Connect('localhost','root','','test');
    $db->Connect('50.62.176.63','admincinema','sysadmin','cinemas_delicias');
    
    
    //$db1=NewADOConnection('mysqli'); ///En caso de necesitarse
    ///$db2=NewADOConnection('mysqli');
    //$db2->Connect('50.62.176.63','admincinema','sysadmin','cinemas_delicias');
    //if($db1==false)die ('Error');
     //$db1->Connect('50.62.176.63','admincinema','sysadmin','cinemas_delicias');
    //if($db1==false)die ('Error');
?>