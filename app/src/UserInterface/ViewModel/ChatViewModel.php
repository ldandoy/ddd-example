<?php

namespace App\UserInterface\ViewModel;

class ChatViewModel {
    private array $messages = [];

    public function __construct($messages)
    {
        $this->messages = $messages;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }
}