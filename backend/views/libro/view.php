<?php

use kartik\grid\GridView;
use kartik\helpers\Html;
use yii\widgets\DetailView;
/*use yii\helpers\Html;
use yii\widgets\DetailView;*/

/* @var $this yii\web\View */
/* @var $model app\models\Libro */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Libros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<p><?= Html::a('Update',['update','id' => $model->id],['class'=>'btn btn-primary']) ?>
   <?= Html::a('Delete',['delete','id' => $model->id],[
    'class'=>'btn btn-danger',
    'data'=>[
    'confirm' => 'Esta seguro que desea borrar este item?',
    'method' => 'post',
    ],
    ]) ?>
</p>
<?php
    echo DetailView::widget([
        'model'=>$model,
        'condensed'=>true,
        'boxer'=>true,
        'mode'=>'view',
        'panel'=>[
            'heading'=>'Libro #' . $model->id,
            'type' =>'info',
        ],
        'attributes'=>[
            'id',
            'titulo',
            'autor',
            ['attribute'=>'anio_publicacion','type'=>'\kartik\widgets\DatePicker'],
            'disponible:boolean',   

        ]
        
        ]);
?>




<!--<div class="libro-view">

    <h1>?= Html::encode($this->title) ?></h1>

    <p>
        ?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
         Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ,
         ?>
    </p>

    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'titulo',
            'autor',
            'anio_publicacion',
            'disponible:boolean',
        ],
    ]) ?>

</div>
