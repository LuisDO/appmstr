<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cobro".
 *
 * @property string $Descripcion
 * @property integer $Monto
 * @property string $Fecha
 * @property string $Hora
 * @property string $Estatus
 * @property integer $CobroID
 * @property integer $TipoventaID
 */
class Cobro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cobro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Monto', 'TipoventaID'], 'integer'],
            [['Fecha', 'Hora'], 'safe'],
            [['Descripcion', 'Estatus'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Descripcion' => 'Descripcion',
            'Monto' => 'Monto',
            'Fecha' => 'Fecha',
            'Hora' => 'Hora',
            'Estatus' => 'Estatus',
            'CobroID' => 'Cobro ID',
            'TipoventaID' => 'Tipoventa ID',
        ];
    }
}
