<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\builder\Form;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Paciente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paciente-form">

    <?php $form = ActiveForm::begin();
    echo Form::widget([
        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [
            'nome' => [
                'type' => Form::INPUT_TEXT
            ],
            'nascimento' => [
                'type'=>Form::INPUT_WIDGET,
                'widgetClass' => '\yii\widgets\MaskedInput',
                'options'=>[
                    'mask' => ['99/99/9999'],
                    'clientOptions'=>['removeMaskOnSubmit' => false]
                ],
            ],
            'telefone' => [
                'type'=>Form::INPUT_WIDGET,
                'widgetClass' => '\yii\widgets\MaskedInput',
                'options'=>[
                    'mask' => ['(99)9999-9999','(99)9-9999-9999'],
                    'clientOptions'=>['removeMaskOnSubmit' => true]
                ],
            ]
        ]
    ]);?>

    <div class="form-group">
        <?= Html::submitButton('Adicionar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
