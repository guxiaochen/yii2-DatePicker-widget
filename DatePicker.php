<?php
namespace app\components;
use yii\bootstrap\Html;
use yii\helpers\Json;
use app\assets\DatePickerAsset;

class DatePicker extends \yii\bootstrap\InputWidget{
    public $attributes;
    
    public function init() {
        parent::init();
    }
    
    public function run(){
        $view = $this->getView();
        $this->attributes['id']=$this->options['id'];
        $def = [
            'class' => 'Wdate form-control input-sm',
            'style' => 'height:auto;width:150px',
            'onfocus' => 'WdatePicker()',
        ];
        $options = \yii\helpers\ArrayHelper::merge($def, $this->options);
        if($this->hasModel()){
            echo Html::activeInput('text',$this->model,  $this->attribute, $options);
        }else{
            echo Html::input('text',$this->name,  $this->attribute,$options);
        }
        DatePickerAsset::register($view);//将Ueditor用到的脚本资源输出到视图
    }
}
