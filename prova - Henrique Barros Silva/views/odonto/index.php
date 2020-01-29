<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OdontoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Odontos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="odonto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Adicionar Odonto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'nome:ntext',
            'sobrenome:ntext',
            'cpf',
            'cro:ntext',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
