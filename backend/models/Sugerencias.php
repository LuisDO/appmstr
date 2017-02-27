<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sugerencias".
 *
 * @property string $Mensaje
 * @property string $Fecha
 * @property string $Estatus
 * @property integer $SugerenciasID
 */
class Sugerencias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sugerencias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Mensaje'], 'string'],
            [['Fecha'], 'safe'],
            [['Estatus'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Mensaje' => 'Mensaje',
            'Fecha' => 'Fecha',
            'Estatus' => 'Estatus',
            'SugerenciasID' => 'Sugerencias ID',
        ];
    }
}
