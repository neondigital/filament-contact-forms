<?php

namespace NeonDigital\ContactForms\FieldTypes;

abstract class Field
{
    use Concerns\HasLabel;

    protected string $name;

    public static function make(string $name): static
    {
        $static = app(static::class);

        return $static->setName($name);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }
}
