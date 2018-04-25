# yii2-DatePicker-widget
适用于 Yii2 的日期小部件，样式基于My97DatePicker
可以直接放到组件使用
DatePicker.php
  public function run(){
        $view = $this->getView();
        $this->attributes['id']=$this->options['id'];
        $def = [
        /*自定义样式可以切换*/
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
	
	DatePickerAsset.php样式加载
	  public $js = [
        'WdatePicker.js'
    ];
    public $css = [
    ];
    public function init()
    {
        $this->sourcePath =__DIR__.'/../web/static/My97DatePicker'; //设置资源所处的目录
    }
    
 页面输出：
 use app\components\DatePicker;
 <?= DatePicker::widget([
            'name' => 'start',
            'id' => 'start',
            'options' => [
                'class' => 'Wdate form-control',
                'placeholder' => '开始时间',
            ],
 ])?>
