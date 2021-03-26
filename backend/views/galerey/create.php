<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Galerey */

$this->title = 'Создать ';
$this->params['breadcrumbs'][] = ['label' => 'Галерея', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="galerey-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
