<?php

namespace NeonDigital\ContactForms;

class ContactFormManager
{
    protected array $forms = [];

    public function register(Form $form): void
    {
        $this->forms[$form->getHandle()] = $form;

        // Do we need this?
        //$form->register();
    }

    public function getForms(): array
    {
        return $this->forms;
    }

    public function get(string $handle): Form
    {
        return $this->forms[$handle];
    }
}
