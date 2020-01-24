<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Financeiro';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="financeiro-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Adicionar Financeiro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= /** @var TYPE_NAME $searchModel */
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['attribute' =>'data',
                'value'=>function($model){
                    return Yii::$app->formatter->asDate($model->data,Yii::$app->formatter->dateFormat);
                }
            ],
            'forma',
            'valor',
            ['attribute' =>'id_dr',
                'value' => function($model){
                    return \app\models\Odonto::find()->where(['id'=>$model->id_dr])->one()->nome;
                },
                'filterType' => \kartik\grid\GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Odonto::find()->asArray()->orderBy('nome')->all(),'id','nome'),
                'filterWidgetOptions' =>[
                    'pluginOptions' => ['allowClear' => true, 'placeholder' => 'Doutor']
                ],
            ],
            ['attribute' =>'id_cliente',
                'value' => function($model){
                    return \app\models\Paciente::find()->where(['id'=>$model->id_cliente])->one()->nome;
                },
                'filterType' => \kartik\grid\GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Paciente::find()->asArray()->orderBy('nome')->all(),'id','nome'),
                'filterWidgetOptions' =>[
                    'pluginOptions' => ['allowClear' => true, 'placeholder' => 'Cliente']
                ],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
