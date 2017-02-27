<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "serviciopostventa".
 *
 * @property string $Descripcion
 * @property string $Estatus
 * @property integer $ServiciopostventaID
 * @property integer $VentaID
 */
class Serviciopostventa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'serviciopostventa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['VentaID'], 'required'],
            [['VentaID'], 'integer'],
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
            'Estatus' => 'Estatus',
            'ServiciopostventaID' => 'Serviciopostventa ID',
            'VentaID' => 'Venta ID',
        ];
    }
}
