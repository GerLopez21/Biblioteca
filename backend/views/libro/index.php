<?php


use kartik\grid\GridView;
use kartik\helpers\Html;
use kartik\icons\Icon;
Icon::map($this);  

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\LibroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Libros Disponibles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="libro-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Agregar Libro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 

    $gridColumns =[
        ['class' => 'kartik\grid\SerialColumn'],
        'id',
        'titulo',
        'autor',
        'anio_publicacion',
        'disponible:boolean',
        ['class' => 'kartik\grid\ActionColumn',
        'template' => '{update}{view}{delete}',
        'buttons'=>[],
        ],
    ]
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,
        'panel' =>[
            'type' => GridView::TYPE_INFO,
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i> Feriados cargados</h3>',
        ],
    ]);
 ?>



