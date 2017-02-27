<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sugerencias;

/**
 * SugerenciasSearch represents the model behind the search form about `app\models\Sugerencias`.
 */
class SugerenciasSearch extends Sugerencias
{
    public function rules()
    {
        return [
            [['Mensaje', 'Fecha', 'Estatus'], 'safe'],
            [['SugerenciasID'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Sugerencias::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Fecha' => $this->Fecha,
            'SugerenciasID' => $this->SugerenciasID,
        ]);

        $query->andFilterWhere(['like', 'Mensaje', $this->Mensaje])
            ->andFilterWhere(['like', 'Estatus', $this->Estatus]);

        return $dataProvider;
    }
}
