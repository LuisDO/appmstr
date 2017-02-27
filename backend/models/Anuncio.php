<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anuncio".
 *
 * @property string $Nombre
 * @property string $Descripcion
 * @property integer $Precio
 * @property string $Ubicacion
 * @property string $Imagen
 * @property string $fechaCreacion
 * @property string $fechaCaducidad
 * @property string $Estatus
 * @property integer $AnuncioID
 * @property integer $CategoriaID
 */
class Anuncio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anuncio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Descripcion', 'Imagen'], 'string'],
            [['Precio', 'CategoriaID'], 'integer'],
            [['fechaCreacion', 'fechaCaducidad'], 'safe'],
            [['CategoriaID'], 'required'],
            [['Nombre', 'Ubicacion', 'Estatus'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Nombre' => 'Nombre',
            'Descripcion' => 'Descripcion',
            'Precio' => 'Precio',
            'Ubicacion' => 'Ubicacion',
            'Imagen' => 'Imagen',
            'fechaCreacion' => 'Fecha Creacion',
            'fechaCaducidad' => 'Fecha Caducidad',
            'Estatus' => 'Estatus',
            'AnuncioID' => 'Anuncio ID',
            'CategoriaID' => 'Categoria ID',
        ];
    }
}
