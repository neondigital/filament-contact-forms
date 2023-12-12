<?php

namespace NeonDigital\ContactForms\FieldTypes\Concerns;

trait HasOptions
{
    protected array $options = [];

    public function getOptions(): array
    {
        return $this->options;
    }

    public function options(array $options): static
    {
        $this->options = $options;

        return $this;
    }
}
