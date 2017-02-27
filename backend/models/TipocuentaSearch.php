<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tipocuenta;

/**
 * TipocuentaSearch represents the model behind the search form about `app\models\Tipocuenta`.
 */
class TipocuentaSearch extends Tipocuenta
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
        $query = Tipocuenta::find();

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
