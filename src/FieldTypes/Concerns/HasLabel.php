<?php

namespace NeonDigital\ContactForms\FieldTypes\Concerns;

trait HasLabel
{
    protected string $label;

    public function getLabel(): string
    {
        return $this->label;
    }

    public function label(string $label): static
    {
        $this->label = $label;

        return $this;
    }
}
