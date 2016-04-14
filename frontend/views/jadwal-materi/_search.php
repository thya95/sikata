<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\JadwalMateriSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-materi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!--<?= $form->field($model, 'jadwalID') ?>

    <?= $form->field($model, 'kelasID') ?>

    <?= $form->field($model, 'mapelID') ?>

    <?= $form->field($model, 'noBab') ?>-->

    <?= $form->field($model, 'tanggal') ?>
    

    <?php // echo $form->field($model, 'noSesi') ?>

    <?php // echo $form->field($model, 'sesiAwal') ?>

    <?php // echo $form->field($model, 'sesiAkhir') ?>

    <?php // echo $form->field($model, 'pengajar') ?>

    <?php // echo $form->field($model, 'pengganti') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <!--<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>-->
    </div>

    <?php ActiveForm::end(); ?>

</div>
