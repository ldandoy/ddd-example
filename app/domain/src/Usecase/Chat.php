<?php

namespace Domain\Usecase;

use Domain\Gateway\MessageGateway;
use Domain\Presenter\ChatPresenterInterface;
use Domain\Response\ChatResponse;

class Chat
{
    private MessageGateway $messageGateway;

    public function __construct(MessageGateway $messageGateway)
    {
        $this->messageGateway = $messageGateway;
    }

    public function execute(ChatPresenterInterface $presenter): void
    {
        $presenter->present(new ChatResponse($this->messageGateway->findAll()));
    }
}