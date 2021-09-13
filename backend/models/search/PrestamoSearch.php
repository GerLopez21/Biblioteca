<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Prestamo;

/**
 * PrestamoSearch represents the model behind the search form of `app\models\Prestamo`.
 */
class PrestamoSearch extends Prestamo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'libro_id', 'socio_id'], 'integer'],
            [['fecha_prestamo', 'fecha_entrega'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Prestamo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'libro_id' => $this->libro_id,
            'socio_id' => $this->socio_id,
            'fecha_prestamo' => $this->fecha_prestamo,
            'fecha_entrega' => $this->fecha_entrega,
        ]);

        return $dataProvider;
    }
}
