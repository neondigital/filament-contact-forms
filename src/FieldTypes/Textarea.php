<?php

namespace NeonDigital\ContactForms\FieldTypes;

use NeonDigital\ContactForms\Concerns\HasValidation;

class Textarea extends Field
{
    use Concerns\HasDefault;
    use HasValidation;
}
