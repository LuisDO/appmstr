<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Anuncio;

/**
 * AnuncioSearch represents the model behind the search form about `app\models\Anuncio`.
 */
class AnuncioSearch extends Anuncio
{
    public function rules()
    {
        return [
            [['Nombre', 'Descripcion', 'Ubicacion', 'Imagen', 'fechaCreacion', 'fechaCaducidad', 'Estatus'], 'safe'],
            [['Precio', 'AnuncioID', 'CategoriaID'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Anuncio::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Precio' => $this->Precio,
            'fechaCreacion' => $this->fechaCreacion,
            'fechaCaducidad' => $this->fechaCaducidad,
            'AnuncioID' => $this->AnuncioID,
            'CategoriaID' => $this->CategoriaID,
        ]);

        $query->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Descripcion', $this->Descripcion])
            ->andFilterWhere(['like', 'Ubicacion', $this->Ubicacion])
            ->andFilterWhere(['like', 'Imagen', $this->Imagen])
            ->andFilterWhere(['like', 'Estatus', $this->Estatus]);

        return $dataProvider;
    }
}
