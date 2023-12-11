<?php

namespace NeonDigital\ContactForms\Facades;

use Closure;
use Illuminate\Support\Facades\Facade;
use NeonDigital\ContactForms\ContactFormManager;
use NeonDigital\ContactForms\Form;

/**
 * @see ContactFormManager
 */
class ContactForm extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'contact-form';
    }

    public static function registerForm(Form | Closure $form): void
    {
        static::getFacadeApplication()->resolving(
            static::getFacadeAccessor(),
            fn (ContactFormManager $contactFormManager) => $contactFormManager->registerForm(value($form)),
        );
    }
}
