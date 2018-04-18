<?php

namespace lito\cropper\assets;

use yii\web\AssetBundle;

/**
 * Widget asset bundle
 */
class CropperAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@budyaga/cropper/web/';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/cropper.css'
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/cropper.js'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'lito\cropper\assets\JcropAsset',
        'lito\cropper\assets\SimpleAjaxUploaderAsset',
    ];
}
