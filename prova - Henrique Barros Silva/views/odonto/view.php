<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Odonto */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Odontos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="odonto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Deseja realmente excluir este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nome:ntext',
            'cpf',
            'cro:ntext',
            'sobrenome:ntext',
        ],
    ]) ?>

</div>
