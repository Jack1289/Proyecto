<?php
    session_start();

    $servername = "50.62.176.63";
    $username = "admincinema";
    $password = "sysadmin";
    $dbname = "cinemas_delicias";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT src FROM asientos WHERE sala='Sala 1'";
    $result = mysqli_query($conn, $sql);
    $i=0;
    $arr=[];
    while($row = mysqli_fetch_assoc($result)) {
       $arr[$i]=$row;
        $i=$i+1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cinemas Delicias - Oficial Site</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

</head>
<body  background="../img/h.jpg">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default navbar-inverse" style="background-color: dimgray" role="navigation">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> <a class="navbar-brand" href="../index.html">Cinemas Delicias</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li>
                            <a href="pelicula.php">CARTELERA</a>
                        </li>

                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-default">
                            Submit
                        </button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">

                    </ul>
                </div>

            </nav>
        </div>
    </div>
</div>
<br><br><br><br><br>
<div style="padding-left: 18%">

<div>
    <img  onclick="taquito(this);" src="<?php echo $arr[0]['src']; ?>" width="50" style="float: left; padding-left: .5%">
</div>
<div>
    <img onclick="taquito(this);" src="<?php echo $arr[1]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
</div>
<div>
    <img onclick="taquito(this);" src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png"  width="50" style="float: left; padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
</div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png"  width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>


</div>
<br><br><br>



<div style="padding-left: 18%">
<div>
    <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png"  width="50" style="float: left; padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
</div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>




</div>

<br><br><br>

<div style="padding-left: 18%">
<div>
    <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
</div>
<div>
    <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
</div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>


</div>

s<br><br><br>

<div style="padding-left: 18%">
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>


</div>


<br><br><br>

<div style="padding-left: 18%">
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>


</div>

<br><br><br>

<div style="padding-left: 18%">
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>


</div>


<br><br><br>

<div style="padding-left: 18%">
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>


</div>
<br><br><br>

<div style="padding-left: 18%">
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>


</div>

<script type="text/javascript" src="../js/asientos.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>