<?php

namespace app\core\form;

use app\core\Model;

class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
    }

    public static function end()
    {
        echo '</form>';
    }

    public function input(Model $model, $label ,$attribute)
    {
        return new InputField($model, $label, $attribute);
    }

    public function textArea(Model $model, $label, $attribute)
    {
        return new TextareaField($model, $label, $attribute);
    }
}

?>