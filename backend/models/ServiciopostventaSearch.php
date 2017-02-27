<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Serviciopostventa;

/**
 * ServiciopostventaSearch represents the model behind the search form about `app\models\Serviciopostventa`.
 */
class ServiciopostventaSearch extends Serviciopostventa
{
    public function rules()
    {
        return [
            [['Descripcion', 'Estatus'], 'safe'],
            [['ServiciopostventaID', 'VentaID'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Serviciopostventa::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ServiciopostventaID' => $this->ServiciopostventaID,
            'VentaID' => $this->VentaID,
        ]);

        $query->andFilterWhere(['like', 'Descripcion', $this->Descripcion])
            ->andFilterWhere(['like', 'Estatus', $this->Estatus]);

        return $dataProvider;
    }
}
