<?php
namespace Php2\Oop\Core;

class Field
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public $type;
    public $attribute;

    public function __construct(string $attribute)
    {
        $this->attribute = $attribute;
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function __toString()
    {
        return sprintf('<div class="form-group">
            <label for="%s">%s</label>
            <input type="%s" name="%s">
            </div>', $this->attribute, $this->getLabel($this->attribute), $this->type, $this->attribute);
    }

    public function getLabel($attribute)
    {
        $labels = [
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'confirmPassword' => 'Confirm Password'
        ];
        return $labels[$attribute] ?? $attribute;
    }
}


