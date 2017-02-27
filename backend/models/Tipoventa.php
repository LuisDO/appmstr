<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipoventa".
 *
 * @property string $Descripcion
 * @property string $Estatus
 * @property integer $TipoventaID
 * @property integer $ServiciopostventaID
 * @property integer $VentaID
 */
class Tipoventa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipoventa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ServiciopostventaID', 'VentaID'], 'integer'],
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
            'TipoventaID' => 'Tipoventa ID',
            'ServiciopostventaID' => 'Serviciopostventa ID',
            'VentaID' => 'Venta ID',
        ];
    }
}
