<?php

use kartik\helpers\Html;    
use kartik\form\ActiveForm;
use kartik\builder\Form;

/* @var $this yii\web\View */
/* @var $model app\models\Libro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="libro-form">

    <?php 
    $form = ActiveForm::begin(); 
    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>2,
        'attributes'=>[
            'titulo'=>['label'=>'Titulo','type'=>form::INPUT_TEXT, 'options'=>['placeholder'=>'']],
            'autor'=>['type'=>form::INPUT_TEXT, 'options'=>['placeholder'=>'']],
                ]
        ]);
    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>2,
        'attributes'=>[
            'anio_publicacion'=>['label'=>'Año de publicación','type'=>form::INPUT_TEXT, 'options'=>['placeholder'=>'']],
            'disponible'=>['type'=>form::INPUT_CHECKBOX, 'options'=>['placeholder'=>'']],
                ]
    ])
    ?>

    
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
