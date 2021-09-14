<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Libro;

/**
 * LibroSearch represents the model behind the search form of `app\models\Libro`.
 */
class LibroSearch extends Libro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'anio_publicacion'], 'integer'],
            [['titulo', 'autor'], 'safe'],
            [['disponible'], 'boolean'],
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
        $query = Libro::find();

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
            'anio_publicacion' => $this->anio_publicacion,
            'disponible' => $this->disponible,
        ]);

        $query->andFilterWhere(['ilike', 'titulo', $this->titulo])
            ->andFilterWhere(['ilike', 'autor', $this->autor]);

        return $dataProvider;
    }
}
