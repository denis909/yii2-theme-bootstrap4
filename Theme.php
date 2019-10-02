<?php

namespace denis909\bootstrap4;

use Yii;
use yii\helpers\ArrayHelper;

class Theme extends \denis909\theme\Theme
{

    const ACTIVE_FORM = ActiveForm::class;    

    const SELECT2 = Select2::class;

    const DATE_PICKER = DatePicker::class;

    const TIME_PICKER = TimePicker::class;

    const DATETIME_PICKER = DateTimePicker::class;

    const DATERANGE_PICKER = DateRangePicker::class;

    public function date(array $options = [])
    {
        Yii::$app->params['bsDependencyEnabled'] = false;

        return $this->widget(static::DATE_PICKER, $options);
    }

    public function datetime(array $options = [])
    {
        Yii::$app->params['bsDependencyEnabled'] = false;

        return $this->widget(static::DATETIME_PICKER, $options);
    }

    public function daterange(array $options = [])
    {
        Yii::$app->params['bsDependencyEnabled'] = false;

        return $this->widget(static::DATERANGE_PICKER, $options);
    }

    public function time(array $options = [])
    {
        Yii::$app->params['bsDependencyEnabled'] = false;
        
        return $this->widget(static::TIME_PICKER, $options);
    }

    public function select2(array $options = [])
    {
        $options['theme'] = ArrayHelper::getValue($options, 'theme', 'krajee-bs4');

        Yii::$app->params['bsDependencyEnabled'] = false;

        return $this->widget(static::SELECT2, $options);
    }
    
}