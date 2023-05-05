<?php
/**
 * Created by PhpStorm.
 * User: ks
 * Date: 24/6/2561
 * Time: 1:54 น.
 */
namespace app\themes\adminlte2\assets;

use yii\web\AssetBundle;

class AdminleAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/adminlte2/dist';
    public $css = [
        'css/AdminLTE.min.css',
        'css/skins/skin-blue.min.css'
    ];

    public $js = [
        'js/adminlte.min.js',
    ];

    public $depends = [
        'app\themes\adminlte2\assets\FontAwesomeAsset'
    ];
}