<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuario;

/**
 * UsuarioSearch represents the model behind the search form about `app\models\Usuario`.
 */
class UsuarioSearch extends Usuario
{
    public function rules()
    {
        return [
            [['Nombre', 'Apellido', 'Pais', 'Estado', 'Email', 'Documentoid', 'Contrase', 'Foto', 'Tipo', 'Estatus'], 'safe'],
            [['Telefono', 'UsuarioID'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Usuario::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Telefono' => $this->Telefono,
            'UsuarioID' => $this->UsuarioID,
        ]);

        $query->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Apellido', $this->Apellido])
            ->andFilterWhere(['like', 'Pais', $this->Pais])
            ->andFilterWhere(['like', 'Estado', $this->Estado])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Documentoid', $this->Documentoid])
            ->andFilterWhere(['like', 'Contrase', $this->Contrase])
            ->andFilterWhere(['like', 'Foto', $this->Foto])
            ->andFilterWhere(['like', 'Tipo', $this->Tipo])
            ->andFilterWhere(['like', 'Estatus', $this->Estatus]);

        return $dataProvider;
    }
}
