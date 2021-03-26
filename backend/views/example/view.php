<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Example */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Раздел  Наример на главной', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="example-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'image:image',
            'text:ntext',
            'sort_order',
        ],
    ]) ?>

</div>
