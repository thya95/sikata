<?php

/* @var $this yii\web\View */

$this->title = 'SIKATA';
?>

<div class="site-index">

    <div class="jumbotron">
     <div class="header1">  
     <h1 style="color:black;font-size:72px;font-style:italic;">Welcome to SIKATA! </h1> </div>

        <p class="lead">A Web-Based Information System for BTA 8 Jakarta .</p>

        <!--- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </div>

    <div class="body-content">
        <table align="center">
        <tr>
        <th>
        <a href="<?= Yii::$app->urlManager->createUrl("site/signup") ?>" 
            style="width:200px;height:50px;border-radius:10pt;color:white;background-color:#9F2727;">Register</a>
        <a href="<?= Yii::$app->urlManager->createUrl("site/login") ?>" 
            style="width:200px;height:50px;border-radius:10pt;color:white;background-color:#9F2727;">Login</a>
           

        
        </th>
        </tr>
        </table>

        </div>

    </div>