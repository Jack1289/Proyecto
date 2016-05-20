<?php
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];
     foreach($_POST as $key=>$value){
         $swap=$key;
         $$swap=$value;
        }
    require_once('conexion-adodb.php');
   
    //var_dump($sql);
    $sql="select usuario from admin where usuario='$usuario' and contrasena='$contrasena'";
    $sentencia=$db->Execute($sql);
     
    if($sentencia->fields('usuario')==""){
        ?>
        <script type="text/javascript">
            window.location="iniciar_sesion.php"
        </script>
        <?php
    }
    else{
        session_start();
        $_SESSION['usuario']=$sentencia->fields('usuario');
        ?>
        <script type="text/javascript">
            window.location="boruto.php"
        </script>
        <?php
    }
    