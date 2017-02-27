<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuariopremium".
 *
 * @property string $Tipo
 * @property string $Estatus
 * @property integer $UsuariopremiumID
 */
class Usuariopremium extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuariopremium';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tipo', 'Estatus'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Tipo' => 'Tipo',
            'Estatus' => 'Estatus',
            'UsuariopremiumID' => 'Usuariopremium ID',
        ];
    }
}
