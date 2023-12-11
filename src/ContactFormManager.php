<?php

namespace NeonDigital\ContactForms;

class ContactFormManager
{
    protected array $forms = [];

    public function registerForm(ContactForm $form): void
    {
        $this->forms[$form->getId()] = $form;

        // Do we need this?
        $form->register();
    }
}
