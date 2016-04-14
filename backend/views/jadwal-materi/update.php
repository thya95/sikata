<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalMateri */

$this->title = 'Update Jadwal Materi: ' . ' ' . $model->jadwalID;
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Materis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jadwalID, 'url' => ['view', 'jadwalID' => $model->jadwalID, 'kelasID' => $model->kelasID, 'mapelID' => $model->mapelID, 'noBab' => $model->noBab, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwal-materi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
