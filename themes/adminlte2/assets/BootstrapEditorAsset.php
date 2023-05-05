<?php
/**
 * Created by PhpStorm.
 * User: ks
 * Date: 24/6/2561
 * Time: 1:54 น.
 */
namespace app\themes\adminlte2\assets;

use yii\web\AssetBundle;

class BootstrapEditorAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/adminlte2/dist';
    public $css = [
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css'
    ];

    public $js = [
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}