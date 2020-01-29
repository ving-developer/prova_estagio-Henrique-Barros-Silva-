<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FormasPagamento */

$this->title = 'Adicionar Formas Pagamento';
$this->params['breadcrumbs'][] = ['label' => 'Formas Pagamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formas-pagamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
