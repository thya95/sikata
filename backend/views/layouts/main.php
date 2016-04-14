<?php
use yii\helpers\Html;
use frontend\assets\AppAsset; 
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert; 
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="../web/bs/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../web/bs/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="barAtas">
    <img id="imgHeader" src="bta.png" alt="Logo BTA" ></img>
  <!--<a href="<?= Yii::$app->urlManager->createUrl("site/login") ?>" data-method="post"; style="float:right;margin-right:5%;margin-top:16pt;" class="btn btn-default">Logout</a>-->
    <?= Html::a('<div class=btn btn-default; style="float:right;margin-right:5%;margin-top:16pt;">Logout</div>', ['site/logout'], ['data-method' => 'post'])?>

<!-- <a href="<?= Yii::$app->request->baseUrl; ?>" /logout" style="float:right;margin-right:5%;margin-top:16pt;">Logout</a> -->
    </div>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
             <!--   <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li> -->
          
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="#">Profil</a>
                </li>
                 <li>
                    <a href="#">Pengguna</a>
                </li>
                <li>
                    <a href="#">Nilai</a>
                </li>
                <li>
                    <a href="#">Analisis</a>
                </li>
                <li>
                    <a href="#">Absensi</a>
                </li>
                <li>
                    <a href="#">Pengajar</a>
                </li>
                <li>
                    <a href="#">Prodi</a>
                </li>
                <li>
                    <a href="#">Jadwal</a>
                </li>
                <li>
                    <a href="../kelas/index.php">Kelas</a>
                </li>
                <li>
                    <a href="#">Pesan</a>
                </li>
     
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
     <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" style="margin-top:80px;">
                          <?= $content ?>
                      
                    </div>
                </div>
            </div>
        </div> 
        <!-- /#page-content-wrapper -->
      
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../web/bs/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../web/bs/js/bootstrap.min.js"></script>

    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <!-- Menu Toggle Script -->
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  
    </script>

</body>

</html>
