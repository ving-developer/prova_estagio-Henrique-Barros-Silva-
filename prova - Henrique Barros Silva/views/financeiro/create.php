<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Financeiro */

$this->title = 'Adicionar Financeiro';
$this->params['breadcrumbs'][] = ['label' => 'Financeiro', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="financeiro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
