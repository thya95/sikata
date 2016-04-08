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
//	public $sourcePath = '@bower/backend';
    public $css = [
        'css/site.css',
	   'bs/css/bootstrap.css',
	   'bs/css/bootstrap.min.css',
	   'bs/css/simple-sidebar.css',
    ];
    public $js = [
	'bs/js/bootstrap.js',
		'bs/js/bootstrap.min.js',
		'bs/js/jquery.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
