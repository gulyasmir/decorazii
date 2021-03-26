<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Bottom */

$this->title = 'Создать ';
$this->params['breadcrumbs'][] = ['label' => 'Информация внизу на главной', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bottom-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
