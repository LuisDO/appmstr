<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Puntuacion;

/**
 * PuntuacionSearch represents the model behind the search form about `app\models\Puntuacion`.
 */
class PuntuacionSearch extends Puntuacion
{
    public function rules()
    {
        return [
            [['Puntaje', 'PuntuacionID', 'VentaID'], 'integer'],
            [['Descripcion', 'Estatus'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Puntuacion::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Puntaje' => $this->Puntaje,
            'PuntuacionID' => $this->PuntuacionID,
            'VentaID' => $this->VentaID,
        ]);

        $query->andFilterWhere(['like', 'Descripcion', $this->Descripcion])
            ->andFilterWhere(['like', 'Estatus', $this->Estatus]);

        return $dataProvider;
    }
}
