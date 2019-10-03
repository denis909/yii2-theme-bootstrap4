<?php

namespace denis909\bootstrap4;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class ActiveForm extends \yii\bootstrap4\ActiveForm
{

    public $fieldClass = ActiveField::class;

    public $defaultSubmitButtonOptions = [
        'class' => 'btn btn-primary'
    ];

    public function submitButton($name, array $options = [])
    {
        $options = ArrayHelper::merge($this->defaultSubmitButtonOptions, $options);

        return Html::submitButton($name, $options);
    }
    
}