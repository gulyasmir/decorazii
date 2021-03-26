<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


 <?php  if (!(Yii::$app->user->isGuest)) {  ?>
 <nav id="column-left" class="active">
 <h4>Панель  управления </h4>
	<ul id="menu">
		<li>
			<a href="<?=Yii::$app->urlManager->createUrl(['banner/index'])?>" > Слайдер на главной </a>
		</li>
			<li>
			<a href="<?=Yii::$app->urlManager->createUrl(['example/index'])?>" >Например на главной</a>
		</li>
		
		<li>
			<a href="<?=Yii::$app->urlManager->createUrl(['bottom/index'])?>" >Информация внизу на главной</a>
		</li>
		
		<li>
			<a href="<?=Yii::$app->urlManager->createUrl(['galerey/index'])?>" > Галерея</a>
		</li>
		<li>
			<a href="<?=Yii::$app->urlManager->createUrl(['video/index'])?>" >Блог</a>
		</li>
		<li>
			<a href="<?=Yii::$app->urlManager->createUrl(['service/index'])?>" >Услуги</a>
		</li>
		
		<li>
			<a href="<?=Yii::$app->urlManager->createUrl(['contact/index'])?>" >Контакты</a>
		</li>
</ul>
	</nav>
 <?php  }  ?>
 
<div class="wrap">
 <?php
    NavBar::begin([
        'brandLabel' => 'Панель  управления ',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-fixed-left',
        ],
    ]);
    $menuItems = [
        ['label' => ' ', 'url' => ['/site/index']],
    ];
    if (!(Yii::$app->user->isGuest)){
        
   
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Выйти (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
	
	
	

		


    <div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Панель  управления   <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
