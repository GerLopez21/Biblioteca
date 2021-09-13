<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\PrestamoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prestamos en vigencia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prestamo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Agregar prestamo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'libro_id',
            'socio_id',
            'fecha_prestamo',
            'fecha_entrega',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
