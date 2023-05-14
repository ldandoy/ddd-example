<?php

namespace Domain\Usecase;

use Domain\Entity\Message;
use Domain\Gateway\MessageGateway;
use Domain\Request\SendRequest;

class Send
{
    private MessageGateway $messageGateway;

    public function __construct(MessageGateway $messageGateway)
    {
        $this->messageGateway = $messageGateway;
    }

    public function execute(SendRequest $request):void
    {
        $this->messageGateway->add(new Message($request->getMessage()));
    }
}