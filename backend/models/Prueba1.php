<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prueba1".
 *
 * @property integer $id
 * @property string $tipo_cuenta
 */
class Prueba1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prueba1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo_cuenta'], 'required'],
            [['tipo_cuenta'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo_cuenta' => 'Tipo Cuenta',
        ];
    }
}
