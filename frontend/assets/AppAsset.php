<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
		'css/style.css',
		'css/swipebox.css',
		'css/animate.css',
		'css/index.css',
    ];
    public $js = [
	'js/move-top.js',
	'js/easing.js',
	'js/wow.min.js',
	'js/responsiveslides.min.js',
	'js/script.js',
	'js/easyResponsiveTabs.js',
	'js/controls.js',
	'js/jquery.filterizr.js',
	
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
