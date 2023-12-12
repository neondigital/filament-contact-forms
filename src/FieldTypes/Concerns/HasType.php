<?php

namespace NeonDigital\ContactForms\FieldTypes\Concerns;

trait HasType
{
    protected string $type = 'text';

    public function getType(): string
    {
        return $this->type;
    }

    public function type(string $type): static
    {
        $this->type = $type;

        return $this;
    }
}
