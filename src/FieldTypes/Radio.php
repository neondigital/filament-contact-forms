<?php

namespace NeonDigital\ContactForms\FieldTypes;

use NeonDigital\ContactForms\Concerns\HasValidation;

class Radio extends Field
{
    use Concerns\HasDefault;
    use Concerns\HasOptions;
    use HasValidation;
}
