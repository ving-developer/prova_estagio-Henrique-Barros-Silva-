<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Formas de Pagamento';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formas-pagamento-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Adicionar Forma de Pagamento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
