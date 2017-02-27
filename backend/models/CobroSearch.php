<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cobro;

/**
 * CobroSearch represents the model behind the search form about `app\models\Cobro`.
 */
class CobroSearch extends Cobro
{
    public function rules()
    {
        return [
            [['Descripcion', 'Fecha', 'Hora', 'Estatus'], 'safe'],
            [['Monto', 'CobroID', 'TipoventaID'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Cobro::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Monto' => $this->Monto,
            'Fecha' => $this->Fecha,
            'Hora' => $this->Hora,
            'CobroID' => $this->CobroID,
            'TipoventaID' => $this->TipoventaID,
        ]);

        $query->andFilterWhere(['like', 'Descripcion', $this->Descripcion])
            ->andFilterWhere(['like', 'Estatus', $this->Estatus]);

        return $dataProvider;
    }
}
