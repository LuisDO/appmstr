<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuariopremium;

/**
 * UsuariopremiumSearch represents the model behind the search form about `app\models\Usuariopremium`.
 */
class UsuariopremiumSearch extends Usuariopremium
{
    public function rules()
    {
        return [
            [['Tipo', 'Estatus'], 'safe'],
            [['UsuariopremiumID'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Usuariopremium::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'UsuariopremiumID' => $this->UsuariopremiumID,
        ]);

        $query->andFilterWhere(['like', 'Tipo', $this->Tipo])
            ->andFilterWhere(['like', 'Estatus', $this->Estatus]);

        return $dataProvider;
    }
}
