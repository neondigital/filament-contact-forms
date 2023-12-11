<?php

namespace NeonDigital\ContactForms\Facades;

use Illuminate\Support\Facades\Facade;
use NeonDigital\ContactForms\ContactFormManager;

/**
 * @see ContactFormManager
 */
class ContactForm extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'contact-form';
    }
}
