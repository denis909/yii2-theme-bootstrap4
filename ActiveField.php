<?php

namespace denis909\bootstrap4;

class ActiveField extends \denis909\theme\ActiveField
{

    const SELECT2 = Theme::SELECT2;

    const DATE_PICKER = Theme::DATE_PICKER;

    const TIME_PICKER = Theme::TIME_PICKER;

    const DATETIME_PICKER = Theme::DATETIME_PICKER;

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