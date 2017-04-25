<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\layer;

use Yii;
use yii\web\AssetBundle;

/**
 * Class LayerAsset
 * @package xutl\layer
 */
class LayerAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@vendor/xutl/yii2-layer-widget/assets';

    /**
     * @inherit
     */
    public $js = [
        'layer.js',
    ];

}