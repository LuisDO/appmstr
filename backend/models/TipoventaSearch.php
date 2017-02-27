<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tipoventa;

/**
 * TipoventaSearch represents the model behind the search form about `app\models\Tipoventa`.
 */
class TipoventaSearch extends Tipoventa
{
    public function rules()
    {
        return [
            [['Descripcion', 'Estatus'], 'safe'],
            [['TipoventaID', 'ServiciopostventaID', 'VentaID'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Tipoventa::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'TipoventaID' => $this->TipoventaID,
            'ServiciopostventaID' => $this->ServiciopostventaID,
            'VentaID' => $this->VentaID,
        ]);

        $query->andFilterWhere(['like', 'Descripcion', $this->Descripcion])
            ->andFilterWhere(['like', 'Estatus', $this->Estatus]);

        return $dataProvider;
    }
}
