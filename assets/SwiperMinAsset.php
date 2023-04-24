<?php
namespace dareks84\yii2\swiper\assets;


use yii\web\AssetBundle;

/**
 * Class SwiperMinAsset
 *
 * @package dareks84\yii2\swiper\assets
 */
class SwiperMinAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/swiper/dist';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/swiper.min.js'
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'css/swiper.css',
    ];

}