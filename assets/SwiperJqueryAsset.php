<?php
namespace dareks84\yii2\swiper\assets;

use yii\web\AssetBundle;

/**
 * Class SwiperJqueryAsset
 *
 * @package dareks84\yii2\swiper\assets
 */
class SwiperJqueryAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/swiper/dist';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/swiper.jquery.js'
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'css/swiper.css',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}