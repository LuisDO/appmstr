<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipo".
 *
 * @property integer $id
 * @property integer $id_Marca
 * @property string $Codigo
 * @property string $Nombre
 * @property string $Descripcion
 * @property string $DepreciacionAlquiler
 * @property string $Precio
 */
class Equipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_Marca', 'Precio'], 'required'],
            [['id_Marca'], 'integer'],
            [['Descripcion'], 'string'],
            [['DepreciacionAlquiler', 'Precio'], 'number'],
            [['Codigo'], 'string', 'max' => 50],
            [['Nombre'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_Marca' => 'Id  Marca',
            'Codigo' => 'Codigo',
            'Nombre' => 'Nombre',
            'Descripcion' => 'Descripcion',
            'DepreciacionAlquiler' => 'Depreciacion Alquiler',
            'Precio' => 'Precio',
        ];
    }
}
