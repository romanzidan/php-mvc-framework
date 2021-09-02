<?php

namespace app\core\form;

class InputField extends BaseField
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';
    public const TYPE_EMAIL = 'email';
    public const TYPE_FILE = 'file';

    public string $type = self::TYPE_TEXT;

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function numberField()
    {
        $this->type = self::TYPE_NUMBER;
        return $this;
    }

    public function emailField()
    {
        $this->type = self::TYPE_EMAIL;
        return $this;
    }

    public function fileField()
    {
        $this->type = self::TYPE_EMAIL;
        return $this;
    }

    public function renderInput()
    {
        return sprintf('
        <input type="%s" name="%s" value="%s" class="form-control %s"/>
        ',
            $this->type,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? 'is-invalid' : '',
        );
    }
}

?>