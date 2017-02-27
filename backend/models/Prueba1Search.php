<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Prueba1;

/**
 * Prueba1Search represents the model behind the search form about `app\models\Prueba1`.
 */
class Prueba1Search extends Prueba1
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['tipo_cuenta'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Prueba1::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'tipo_cuenta', $this->tipo_cuenta]);

        return $dataProvider;
    }
}
