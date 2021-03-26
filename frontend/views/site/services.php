<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Услуги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1 class="title"><?= Html::encode($this->title) ?><span></span></h1>
	<?php foreach ($services as $service)  { ?>
		<div class="services-gds">
			<h3><?=$service->title?></h3>
			<?=$service->text?>
		</div>
	<?php } ?>
</div>