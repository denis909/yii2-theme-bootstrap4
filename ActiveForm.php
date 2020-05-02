<?php

namespace denis909\bootstrap4;

use denis909\yii\ActiveFormInterface;
use denis909\yii\ActiveFormTrait;

class ActiveForm extends \yii\bootstrap4\ActiveForm implements ActiveFormInterface
{

    use ActiveFormTrait;

    public $fieldClass = ActiveField::class;

    public $submitButtonOptions = ['class' => 'btn btn-primary'];

    public $saveButtonOptions = ['class' => 'btn btn-light'];

    public $enableAjaxValidation = false;

    public $enableClientValidation = false;

    public $enableClientScript = false;
    
}