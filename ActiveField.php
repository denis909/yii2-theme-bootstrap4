<?php

namespace denis909\bootstrap4;

class ActiveField extends \denis909\theme\ActiveField
{

    const DATE_INPUT = DateInput::class;

    const TIME_INPUT = TimeInput::class;

    const DATETIME_INPUT = DateTimeInput::class;

    public function date(array $options = [])
    {
        return $this->widget(static::DATE_INPUT, $options);
    }

    public function datetime(array $options = [])
    {
        return $this->widget(static::DATETIME_INPUT, $options);
    }

    public function time(array $options = [])
    {
        return $this->widget(static::TIME_INPUT, $options);
    }
    
}