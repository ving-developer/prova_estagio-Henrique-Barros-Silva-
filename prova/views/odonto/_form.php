<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Odonto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="odonto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cpf')->textInput() ?>

    <?= $form->field($model, 'cro')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sobrenome')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
