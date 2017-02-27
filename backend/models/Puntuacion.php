<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "puntuacion".
 *
 * @property integer $Puntaje
 * @property string $Descripcion
 * @property string $Estatus
 * @property integer $PuntuacionID
 * @property integer $VentaID
 */
class Puntuacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'puntuacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Puntaje', 'VentaID'], 'integer'],
            [['VentaID'], 'required'],
            [['Descripcion', 'Estatus'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Puntaje' => 'Puntaje',
            'Descripcion' => 'Descripcion',
            'Estatus' => 'Estatus',
            'PuntuacionID' => 'Puntuacion ID',
            'VentaID' => 'Venta ID',
        ];
    }
}
