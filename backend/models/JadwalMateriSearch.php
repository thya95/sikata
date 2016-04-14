<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\JadwalMateri;

/**
 * JadwalMateriSearch represents the model behind the search form about `app\models\JadwalMateri`.
 */
class JadwalMateriSearch extends JadwalMateri
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jadwalID', 'kelasID', 'mapelID', 'noBab', 'tanggal', 'noSesi', 'sesiAwal', 'sesiAkhir', 'pengajar', 'pengganti'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
       $query = JadwalMateri::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

         /* $query = JadwalMateri::find()->
             select(['judul'])
       // ->groupBy(['mapelId','noBab'])
             ->joinWith('JADWAL_INSTANCE')//Tells Yii to use the complains relation that we define below. By default it is an inner join
            ->where(['JADWAL_INSTANCE.mapelId' => 'MATA_PELAJARAN.mapelId', 'JADWAL_INSTANCE.noBab' => ' Mata_Pelajaran.noBab']);
        
        $dataProvider= new ActiveDataProvider([
        'query' => $query,
        'pagination' => false,
        ]);*/

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'tanggal' => $this->tanggal,
            //'sesiAwal' => $this->sesiAwal,
            //'sesiAkhir' => $this->sesiAkhir,
        ]);

        $query->andFilterWhere(['like', 'jadwalID', $this->jadwalID])
            ->andFilterWhere(['like', 'kelasID', $this->kelasID])
            ->andFilterWhere(['like', 'mapelID', $this->mapelID])
            ->andFilterWhere(['like', 'noBab', $this->noBab])
            ->andFilterWhere(['like', 'noSesi', $this->noSesi])
            ->andFilterWhere(['like', 'pengajar', $this->pengajar])
            ->andFilterWhere(['like', 'pengganti', $this->pengganti]);

        return $dataProvider;
    }
}
