<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property string $Nombre
 * @property string $Apellido
 * @property string $Pais
 * @property string $Estado
 * @property string $Email
 * @property integer $Telefono
 * @property string $Documentoid
 * @property string $Contrase
 * @property string $Foto
 * @property string $Tipo
 * @property string $Estatus
 * @property integer $UsuarioID
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Telefono'], 'integer'],
            [['Foto'], 'string'],
            [['Nombre', 'Apellido', 'Pais', 'Estado', 'Email', 'Documentoid', 'Contrase', 'Tipo', 'Estatus'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Nombre' => 'Nombre',
            'Apellido' => 'Apellido',
            'Pais' => 'Pais',
            'Estado' => 'Estado',
            'Email' => 'Email',
            'Telefono' => 'Telefono',
            'Documentoid' => 'Documentoid',
            'Contrase' => 'Contraseña',
            'Foto' => 'Foto',
            'Tipo' => 'Tipo',
            'Estatus' => 'Estatus',
            'UsuarioID' => 'Usuario ID',
        ];
    }
}
