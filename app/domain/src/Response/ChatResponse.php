<?php

namespace Domain\Response;

class ChatResponse
{
    private array $messages = [];

    public function __construct(array $messages)
    {
        $this->messages = $messages;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }
}