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

    public function field(Model $model, $label ,$attribute)
    {
        return new Field($model, $label, $attribute);
    }
}

?>