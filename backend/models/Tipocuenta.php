<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipocuenta".
 *
 * @property integer $id
 * @property string $tipo_cuenta
 */
class Tipocuenta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipocuenta';
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
            'tipo_cuenta' => 'Descripción',
        ];
    }
}
