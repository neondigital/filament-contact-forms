<?php

namespace NeonDigital\ContactForms\Concerns;

trait HasValidation
{
    protected array $validation = [];

    public function getValidation(): array
    {
        return $this->validation;
    }

    public function validation(array $validation): static
    {
        $this->validation = $validation;

        return $this;
    }
}
