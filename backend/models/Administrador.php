<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "administrador".
 *
 * @property string $Nombre
 * @property string $Contrase
 * @property string $Estatus
 * @property integer $AdministradorID
 */
class Administrador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'administrador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'Contrase', 'Estatus'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Nombre' => 'Nombre',
            'Contrase' => 'Contrase',
            'Estatus' => 'Estatus',
            'AdministradorID' => 'Administrador ID',
        ];
    }
}
