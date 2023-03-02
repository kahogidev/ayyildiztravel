<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend-files';
    public $css = [
     "/img/favicon.ico",
     "img/apple-touch-icon-57x57-precomposed.png",
     "img/apple-touch-icon-72x72-precomposed.png",
     "img/apple-touch-icon-114x114-precomposed.png",
     "img/apple-touch-icon-144x144-precomposed.png",
    "https://fonts.googleapis.com/",
    "https://fonts.gstatic.com/",
    "https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap",
    "css/bootstrap.min.css",
    "css/style.css",
	"css/vendors.min.css",
    "css/custom.css",
        ];
    public $js = [

        "js/common_scripts.js",
        "js/common_functions.js",
        "js/datepicker_inline.js",
        "phpmailer/validate.js",
        "js/form.js",
    ];
  public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
