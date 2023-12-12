<?php

namespace NeonDigital\ContactForms\FieldTypes\Concerns;

trait HasDefault
{
    protected string $default = '';

    public function getDefault(): string
    {
        return $this->default;
    }

    public function default(string $default): static
    {
        $this->default = $default;

        return $this;
    }
}
