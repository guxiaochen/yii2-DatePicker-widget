<?php
/** 
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DatePickerAsset extends AssetBundle
{
    public $js = [
        'WdatePicker.js'
    ];
    public $css = [
    ];
    public function init()
    {
        $this->sourcePath =__DIR__.'/../web/static/My97DatePicker'; //设置资源所处的目录
    }
}
