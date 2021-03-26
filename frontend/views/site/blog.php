<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
use yii\helpers\Html;

$this->title = 'Блог';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1 class="title"><?= Html::encode($this->title) ?><span></span></h1>
	<?php foreach ($blogs as $blog)  { ?>
		<div class="services-gds">
			<h3><?=$blog->title?></h3>
			<?=$blog->text?>
		</div>
	<?php } ?>
	
	<div class="pull-right">
				
	<?= LinkPager::widget([
		'pagination' => $pagination,
		'firstPageLabel' => 'В начало',
		'lastPageLabel' => 'В конец',
		'prevPageLabel' => '&laquo;',
		'options' => [
		   'class' => 'pagination' 
		]
	]) ?>
	</div>		
</div>