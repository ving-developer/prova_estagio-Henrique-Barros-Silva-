<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FinanceiroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="financeiro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'data') ?>

    <?= $form->field($model, 'forma') ?>

    <?= $form->field($model, 'valor') ?>

    <?= $form->field($model, 'id_dr') ?>

    <?php // echo $form->field($model, 'id_cliente') ?>

    <?php // echo $form->field($model, 'data_cheque') ?>

    <?php // echo $form->field($model, 'parcelamentocartao') ?>

    <div class="form-group">
        <?= Html::submitButton('Procurar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Apagar', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
