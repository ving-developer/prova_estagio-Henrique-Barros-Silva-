<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\builder\Form;
use app\models\Paciente;
use app\models\Odonto;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Financeiro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="financeiro-form">
    <?php
        $pacientes = ArrayHelper::map(Paciente::find()->orderBy('nome')->asArray()->all(),'id','nome');
        $doutores = ArrayHelper::map(Odonto::find()->orderBy('nome')->asArray()->all(),'id','nome');
        $pagamentos = ArrayHelper::map(\app\models\FormasPagamento::find()->orderBy('id')->asArray()->all(),'id','nome');
    ?>

    <?php $form = ActiveForm::begin();
    echo Form::widget([
        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [
            'id_cliente' => ['type' => Form::INPUT_WIDGET,
                'widgetClass' => '\kartik\widgets\Select2',
                'options' => [
                    'options' => [
                        'placeholder' => 'Selecione o Paciente'
                    ],
                    'pluginOptions' => [
                        'autoclose' => true
                    ],
                    'data' => $pacientes
                ]
            ],
            'id_dr' => ['type' => Form::INPUT_WIDGET,
                'widgetClass' => '\kartik\widgets\Select2',
                'options' => [
                    'options' => [
                        'placeholder' => 'Selecione o Paciente'
                    ],
                    'pluginOptions' => [
                        'autoclose' => true
                    ],
                    'data' => $doutores
                ]
            ],
            'data' => ['type' => Form::INPUT_WIDGET,'columnOptions' => ['colspan' => 1],
                'widgetClass' => '\kartik\widgets\DatePicker',
                'options' => [
                    'options' => [
                        'placeholder' => 'Entre com a data'
                    ],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'dd/mm/yyyy'
                    ]
                ]
            ],
            'valor' => ['type' => Form::INPUT_WIDGET,
                'type'=>Form::INPUT_WIDGET,
                'widgetClass' => '\yii\widgets\MaskedInput',
                'columnOptions' => ['colspan' => 1],
                'options'=>[
                    'mask' => ['9','9,99','99,99','999,99','9.999,99','99.999,99'],
                    'clientOptions'=>['removeMaskOnSubmit' => false]
                ],
            ],
            'forma' => ['type' => Form::INPUT_WIDGET,
                'widgetClass' => '\kartik\widgets\Select2',
                'options' => [
                    'data' => $pagamentos,
                    'options' => [
                        'id' => 'forma',
                        'placeholder' => 'Selecione a forma de pagamento',
                        'onchange' => '
                                    var formaPag = $(this).val();
                                    if (formaPag == 1){
                                        $(\'#parcelamentocartao-form\').show();
                                        $(\'#data_cheque-form\').hide();
                                        
                                    }else if (formaPag == 2){
                                        $(\'#data_cheque-form\').show();
                                        $(\'#parcelamentocartao-form\').hide()
                                    }else{
                                        $(\'#data_cheque-form\').hide();
                                        $(\'#parcelamentocartao-form\').hide()
                                    }
                                '
                    ],
                    'pluginOptions' => [
                        'autoclose' => true
                    ]
                ]
            ],
        ]
    ]);
    ?>

    <div id="parcelamentocartao-form">
        <?=Form::widget([
            'model' => $model,
            'form' => $form,
            'columns' => 1,
            'attributes' => [
                    'parcelamentocartao' =>[
                        'type' => Form::INPUT_TEXT,
                    ]
            ]
        ]);

        $hide_cartao = '$(\'#parcelamentocartao-form\').hide()';
        $this->registerJs($hide_cartao);
        ?>
        <hr>
    </div>

    <div id="data_cheque-form">
        <?=Form::widget([
            'model' => $model,
            'form' => $form,
            'columns' => 1,
            'attributes' => [
                'data_cheque' =>[
                    'type' => Form::INPUT_WIDGET,'columnOptions' => ['colspan' => 1],
                    'widgetClass' => '\kartik\widgets\DatePicker',
                    'options' => [
                        'options' => [
                            'placeholder' => 'Entre com a data'
                        ],
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'dd/mm/yyyy'
                        ]
                    ]
                ]
            ]
        ]);

        $hide_cheque = '$(\'#data_cheque-form\').hide()';
        $this->registerJs($hide_cheque);
        ?>
        <hr>
    </div>

    <div class="form-group">
        <?= Html::a('Cadastrar Uma Forma de Pagamento',['/formas-pagamento/create'], ['class' => 'btn btn-warning'])?>
        <hr>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
