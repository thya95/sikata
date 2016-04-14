<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalMateri */

$this->title = $model->jadwalID;
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Materis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-materi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'jadwalID' => $model->jadwalID, 'kelasID' => $model->kelasID, 'mapelID' => $model->mapelID, 'noBab' => $model->noBab, 'tanggal' => $model->tanggal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'jadwalID' => $model->jadwalID, 'kelasID' => $model->kelasID, 'mapelID' => $model->mapelID, 'noBab' => $model->noBab, 'tanggal' => $model->tanggal], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'jadwalID',
            'kelasID',
            'mapelID',
            'noBab',
            'tanggal',
            'noSesi',
            'sesiAwal',
            'sesiAkhir',
            'pengajar',
            'pengganti',
        ],
    ]) ?>

</div>
