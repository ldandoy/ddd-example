<?php

namespace Domain\Request;

class SendRequest
{
    private string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function getMessage():string
    {
        return $this->message;
    }
}