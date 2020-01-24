<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Odonto */

$this->title = 'Create Odonto';
$this->params['breadcrumbs'][] = ['label' => 'Odontos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="odonto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
