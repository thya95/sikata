<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JadwalMateri */

$this->title = 'Create Jadwal Materi';
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Materis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-materi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
