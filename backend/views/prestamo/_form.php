<?php

use kartik\helpers\Html;    
use kartik\form\ActiveForm;
use kartik\builder\Form;
use backend\models\Libro;
use backend\models\Socio;
/* @var $this yii\web\View */
/* @var $model app\models\Prestamo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prestamo-form">

<?php 
    $libros = backend\models\Libro::find()->where(['disponible'=>true])->orderBy('titulo ASC')->all();
    $socios = backend\models\Socio::find()->orderBy('nombre ASC')->all();
    
    $form = ActiveForm::begin(); 
    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>2,
        'attributes'=>[
            'libro_id'=>[
            'label'=>'Libro',
            'type'=>form::INPUT_WIDGET,
            'widgetClass'=>'\kartik\widgets\select2',
            'options'=>['data'=>yii\helpers\ArrayHelper::map($libros,'id','titulo'),'options'=>['placeholder'=>'Libro']],
            ],
            'socio_id'=>[
            'label'=>'Socio',
            'type'=>form::INPUT_WIDGET,
            'widgetClass'=>'\kartik\widgets\select2',
            'options'=>['data'=>yii\helpers\ArrayHelper::map($socios,'id','nombre'),'options'=>['placeholder'=>'Socio']],
                ],
                ]
            ]);
    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>2,
        'attributes'=>[
            'fecha_prestamo'=>[
            'label'=>'Desde',
            'type'=>form::INPUT_WIDGET,
            'widgetClass'=>'\kartik\datecontrol\DateControl::class',
            'options'=>['type'=>kartik\datecontrol\DateControl::FORMAT_dATE,
            'widgetOptions'=>[
                'pluginOptions'=>[
                    'orientation'=>'bottom',
                    'autoclose'=>true,
                    'todayHighlight'=>true,
                ],
            ],
        ]
    ],
    'fecha_entrega'=>[
        'label'=>'Desde',
        'type'=>form::INPUT_WIDGET,
        'widgetClass'=>'\kartik\datecontrol\DateControl::class',
        'options'=>['type'=>kartik\datecontrol\DateControl::FORMAT_dATE,
        'widgetOptions'=>[
            'pluginOptions'=>[
                'orientation'=>'bottom',
                'autoclose'=>true,
                'todayHighlight'=>true,
            ],
        ],
    ]
    ]]]);
?>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


</div>
