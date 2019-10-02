<?php

namespace denis909\bootstrap4;

use yii\helpers\ArrayHelper;

class ActiveForm extends \denis909\theme\ActiveForm
{

    public $fieldClass = ActiveField::class;

    public $defaultSubmitButtonOptions = [
        'class' => 'btn btn-primary'
    ];

    public function submitButton($name, array $options = [])
    {
        $options = ArrayHelper::merge($this->defaultSubmitButtonOptions, $options);

        return parent::submitButton($name, $options);
    }
    
}