<?php

namespace App\Infrastructure\Ports;

use Domain\Gateway\MessageGateway;
use Domain\Entity\Message;

class MessageRepository implements MessageGateway
{
    public function add(Message $message): void
    {

    }

    public function findAll(): array
    {
        /*
        return [
            new Message("Message 1"),
            new Message("Message 2"),
            new Message("Message 3"),
            new Message("Message 4")
        ];
        */
        return array_fill(0, 10, new Message("Message"));
    }
}