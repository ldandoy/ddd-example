<?php

namespace Domain\Gateway;

use Domain\Entity\Message;

interface MessageGateway
{
    public function add(Message $message): void;

    public function findAll(): array;
}