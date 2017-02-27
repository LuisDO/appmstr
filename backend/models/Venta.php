<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "venta".
 *
 * @property string $Descripcion
 * @property string $Fecha
 * @property integer $Monto
 * @property string $Hora
 * @property string $Estatus
 * @property integer $VentaID
 * @property integer $AnuncioID
 */
class Venta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'venta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Fecha', 'Hora'], 'safe'],
            [['Monto', 'AnuncioID'], 'integer'],
            [['AnuncioID'], 'required'],
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
            'Fecha' => 'Fecha',
            'Monto' => 'Monto',
            'Hora' => 'Hora',
            'Estatus' => 'Estatus',
            'VentaID' => 'Venta ID',
            'AnuncioID' => 'Anuncio ID',
        ];
    }
}
