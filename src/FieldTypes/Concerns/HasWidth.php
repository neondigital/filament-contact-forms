<?php

namespace NeonDigital\ContactForms\FieldTypes\Concerns;

trait HasWidth
{
    protected int $width = 100;

    public function getWidth(): string
    {
        return $this->width;
    }

    public function width(int $width): static
    {
        $this->width = $width;

        return $this;
    }
}
