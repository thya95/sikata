<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JadwalMateriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jadwal Materi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-materi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model'=>$searchModel]);?>

    <p>
       <?= Html::a('Create Jadwal Materi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'], 

            //'jadwalID',
            'kelasID',
            'mapelID',
            'noBab',
            'tanggal',
            // 'noSesi',
             'sesiAwal',
             'sesiAkhir',
            // 'pengajar',
            // 'pengganti',
            
            ['class' => 'yii\grid\ActionColumn'],

        ],
    ]); ?>

</div>
