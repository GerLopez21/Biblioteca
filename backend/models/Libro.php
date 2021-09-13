<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "libro".
 *
 * @property int $id
 * @property string|null $titulo
 * @property string|null $autor
 * @property int|null $anio_publicacion
 * @property bool|null $disponible
 *
 * @property Prestamo[] $prestamos
 */
class Libro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'libro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['anio_publicacion'], 'default', 'value' => null],
            [['anio_publicacion'], 'integer'],
            [['disponible'], 'boolean'],
            [['titulo', 'autor'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'autor' => 'Autor',
            'anio_publicacion' => 'Anio Publicacion',
            'disponible' => 'Disponible',
        ];
    }

    /**
     * Gets query for [[Prestamos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPrestamos()
    {
        return $this->hasMany(Prestamo::className(), ['libro_id' => 'id']);
    }
}
