<?php

namespace NeonDigital\ContactForms;

use Illuminate\Mail\Mailable;
use Filament\Forms\Concerns\CanBeValidated;
use Filament\Forms\Concerns\HasComponents;

class Form
{
    use CanBeValidated;
    use HasComponents;

    protected string $handle;
    protected string $mailableClass;
    protected array $recipients = [];
//    protected array $cc = [];
//    protected array $bcc = [];
//    protected bool $loopRecipients = true;
//    protected string $mailer = 'default';
//    protected bool $queue = false;

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
}
