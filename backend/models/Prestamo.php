<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "prestamo".
 *
 * @property int $id
 * @property int|null $libro_id
 * @property int|null $socio_id
 * @property string|null $fecha_prestamo
 * @property string|null $fecha_entrega
 *
 * @property Libro $libro
 * @property Socio $socio
 */
class Prestamo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prestamo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['libro_id', 'socio_id'], 'default', 'value' => null],
            [['libro_id', 'socio_id'], 'integer'],
            [['fecha_prestamo', 'fecha_entrega'], 'safe'],
            [['libro_id'], 'exist', 'skipOnError' => true, 'targetClass' => Libro::className(), 'targetAttribute' => ['libro_id' => 'id']],
            [['socio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Socio::className(), 'targetAttribute' => ['socio_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'libro_id' => 'Libro ID',
            'socio_id' => 'Socio ID',
            'fecha_prestamo' => 'Fecha Prestamo',
            'fecha_entrega' => 'Fecha Entrega',
        ];
    }

    /**
     * Gets query for [[Libro]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLibro()
    {
        return $this->hasOne(Libro::className(), ['id' => 'libro_id']);
    }

    /**
     * Gets query for [[Socio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSocio()
    {
        return $this->hasOne(Socio::className(), ['id' => 'socio_id']);
    }
}
