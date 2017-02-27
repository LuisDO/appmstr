<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Administrador;

/**
 * AdministradorSearch represents the model behind the search form about `app\models\Administrador`.
 */
class AdministradorSearch extends Administrador
{
    public function rules()
    {
        return [
            [['Nombre', 'Contrase', 'Estatus'], 'safe'],
            [['AdministradorID'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Administrador::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'AdministradorID' => $this->AdministradorID,
        ]);

        $query->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Contrase', $this->Contrase])
            ->andFilterWhere(['like', 'Estatus', $this->Estatus]);

        return $dataProvider;
    }
}
