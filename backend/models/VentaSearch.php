<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Venta;

/**
 * VentaSearch represents the model behind the search form about `app\models\Venta`.
 */
class VentaSearch extends Venta
{
    public function rules()
    {
        return [
            [['Descripcion', 'Fecha', 'Hora', 'Estatus'], 'safe'],
            [['Monto', 'VentaID', 'AnuncioID'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Venta::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Fecha' => $this->Fecha,
            'Monto' => $this->Monto,
            'Hora' => $this->Hora,
            'VentaID' => $this->VentaID,
            'AnuncioID' => $this->AnuncioID,
        ]);

        $query->andFilterWhere(['like', 'Descripcion', $this->Descripcion])
            ->andFilterWhere(['like', 'Estatus', $this->Estatus]);

        return $dataProvider;
    }
}
