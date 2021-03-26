<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Example */

$this->title = 'Создать ';
$this->params['breadcrumbs'][] = ['label' => 'Раздел  Наример на главной', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="example-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
