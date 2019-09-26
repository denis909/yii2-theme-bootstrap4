<?php

namespace denis909\bootstrap4;

class Theme extends \denis909\theme\Theme
{

    const ACTIVE_FORM = ActiveForm::class;    

    const SELECT2 = Select2::class;

    const DATE_PICKER = DatePicker::class;

    const TIME_PICKER = TimePicker::class;

    const DATETIME_PICKER = DateTimePicker::class;

    public function date(array $options = [])
    {
        return $this->widget(static::DATE_PICKER, $options);
    }

    public function datetime(array $options = [])
    {
        return $this->widget(static::DATETIME_PICKER, $options);
    }

    public function time(array $options = [])
    {
        return $this->widget(static::TIME_PICKER, $options);
    }

    public function select2(array $options = [])
    {
        return $this->widget(static::SELECT2, $options);
    }
    
}