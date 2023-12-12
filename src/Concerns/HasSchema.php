<?php

namespace NeonDigital\ContactForms\Concerns;

use Illuminate\Support\Arr;
use NeonDigital\ContactForms\FieldTypes\Field;

trait HasSchema
{
    protected array $schema = [];

    public function getSchema(): array
    {
        return $this->schema;
    }

    public function schema(array $schema): static
    {
        $this->schema = $schema;

        return $this;
    }

    public function getNames(): array
    {
        return Arr::map($this->schema, function (Field $value) {
            return $value->getName();
        });
    }
}
