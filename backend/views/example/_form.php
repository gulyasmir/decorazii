<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use dosamigos\tinymce\TinyMce;
/* @var $this yii\web\View */
/* @var $model backend\models\Example */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="example-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php echo $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
  
  <p>Оптимальный размер изображения 255х320 пикселей</p>
  
	<?= $form->field($model, 'file')->fileInput() ?>


	<?php if(!empty($model->image)){
    echo Html::img($model->image, $options = ['class' => 'postImg', 'style' => ['width' => '180px']]);
} ?>



   
   <?=$form->field($model, 'text')->widget(TinyMce::className(), [
    'options' => ['rows' => 6],
    'language' => 'ru',
    'clientOptions' => [
        'plugins' => [
            'advlist autolink lists link charmap hr preview pagebreak',
            'searchreplace wordcount textcolor visualblocks visualchars code fullscreen nonbreaking',
            'save insertdatetime media table contextmenu template paste image responsivefilemanager filemanager',
        ],
        'toolbar' => 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | responsivefilemanager link image media',
        'external_filemanager_path' => '/backend/web/plugins/responsive_filemanager/filemanager/',
        'filemanager_title' => 'Responsive Filemanager',
        'external_plugins' => [
            //Иконка/кнопка загрузки файла в диалоге вставки изображения.
            'filemanager' => '/backend/web/plugins/responsive_filemanager/filemanager/plugin.min.js',
            //Иконка/кнопка загрузки файла в панеле иснструментов.
            'responsivefilemanager' => '/backend/web/plugins/responsive_filemanager/tinymce/plugins/responsivefilemanager/plugin.min.js',
        ],        
    ]
]);?>

    <?= $form->field($model, 'sort_order')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
