<?php

namespace NeonDigital\ContactForms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Form
{
    use Concerns\HasSchema;
    use Concerns\HasValidation;

    protected string $handle;

    protected string $mailableClass;

    protected array $recipients = [];

    //    TODO: protected array $cc = [];
    //    TODO: protected array $bcc = [];
    //    TODO: protected bool $loopRecipients = true;
    //    TODO: protected string $mailer = 'default';
    //    TODO: protected bool $queue = false;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public static function make(string $handle): static
    {
        $static = app(static::class);

        return $static->setHandle($handle);
    }

    public function getHandle(): string
    {
        return $this->handle;
    }

    public function setHandle(string $handle): static
    {
        $this->handle = $handle;

        return $this;
    }

    public function mailable(string $mailable): static
    {
        $this->mailableClass = $mailable;

        return $this;
    }

    public function recipients(array $recipients): static
    {
        $this->recipients = $recipients;

        return $this;
    }

    public function submit(Request $request)
    {
        // Validate
        $request->validate($this->getValidationRules());

        // TODO: Save to DB

        // Send mailable
        $this->sendMail($request->only($this->getNames()));
    }

    protected function getValidationRules(): array
    {
        $rules = [];

        foreach ($this->getSchema() as $field) {
            $rules[$field->getName()] = $field->getValidation();
        }

        return array_merge($rules, $this->validation);
    }

    protected function sendMail(array $data)
    {
        Mail::to($this->recipients)
            ->send(new $this->mailableClass($data));
    }
}
