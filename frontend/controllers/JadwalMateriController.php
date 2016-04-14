<?php

namespace frontend\controllers;

use Yii;
use app\models\JadwalMateri;
use frontend\models\JadwalMateriSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JadwalMateriController implements the CRUD actions for JadwalMateri model.
 */
class JadwalMateriController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all JadwalMateri models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JadwalMateriSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JadwalMateri model.
     * @param string $jadwalID
     * @param string $kelasID
     * @param string $mapelID
     * @param string $noBab
     * @param string $tanggal
     * @return mixed
     */
    public function actionView($jadwalID, $kelasID, $mapelID, $noBab, $tanggal)
    {
        return $this->render('view', [
            'model' => $this->findModel($jadwalID, $kelasID, $mapelID, $noBab, $tanggal),
        ]);
    }

    /**
     * Creates a new JadwalMateri model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new JadwalMateri();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'jadwalID' => $model->jadwalID, 'kelasID' => $model->kelasID, 'mapelID' => $model->mapelID, 'noBab' => $model->noBab, 'tanggal' => $model->tanggal]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing JadwalMateri model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $jadwalID
     * @param string $kelasID
     * @param string $mapelID
     * @param string $noBab
     * @param string $tanggal
     * @return mixed
     */
    public function actionUpdate($jadwalID, $kelasID, $mapelID, $noBab, $tanggal)
    {
        $model = $this->findModel($jadwalID, $kelasID, $mapelID, $noBab, $tanggal);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'jadwalID' => $model->jadwalID, 'kelasID' => $model->kelasID, 'mapelID' => $model->mapelID, 'noBab' => $model->noBab, 'tanggal' => $model->tanggal]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing JadwalMateri model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $jadwalID
     * @param string $kelasID
     * @param string $mapelID
     * @param string $noBab
     * @param string $tanggal
     * @return mixed
     */
    public function actionDelete($jadwalID, $kelasID, $mapelID, $noBab, $tanggal)
    {
        $this->findModel($jadwalID, $kelasID, $mapelID, $noBab, $tanggal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the JadwalMateri model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $jadwalID
     * @param string $kelasID
     * @param string $mapelID
     * @param string $noBab
     * @param string $tanggal
     * @return JadwalMateri the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($jadwalID, $kelasID, $mapelID, $noBab, $tanggal)
    {
        if (($model = JadwalMateri::findOne(['jadwalID' => $jadwalID, 'kelasID' => $kelasID, 'mapelID' => $mapelID, 'noBab' => $noBab, 'tanggal' => $tanggal])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
