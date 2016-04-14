<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalMateri */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-materi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jadwalID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelasID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mapelID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noBab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'noSesi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sesiAwal')->textInput() ?>

    <?= $form->field($model, 'sesiAkhir')->textInput() ?>

    <?= $form->field($model, 'pengajar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengganti')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
