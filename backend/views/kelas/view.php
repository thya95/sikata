<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\Kelas */

//$this->title = $model->ID;
    $this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Kelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelas-view">

   <!-- <h1><?= Html::encode($this->title) ?></h1> -->
     <h1> DATA KELAS <?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
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
            'ID',
            'nama',
            'kapasitas',
            'periode',
            'PID',
        ],
    ]) ?>

        <h1> PESERTA KELAS <?= Html::encode($this->title) ?> </h1>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         /*   'ID',
            'nama',
            'kapasitas',
            'periode',
            'PID',
            */

            'username',
            'namaDpn',
            'namaBlkg',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
