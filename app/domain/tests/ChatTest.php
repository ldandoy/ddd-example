<?php

namespace Domain\Test;

use Domain\Entity\Message;
use Domain\Gateway\MessageGateway;
use Domain\Presenter\ChatPresenterInterface;
use Domain\Usecase\Chat;
use PHPUnit\Framework\TestCase;
use Domain\Response\ChatResponse;

class ChatTest extends TestCase
{
    private MessageGateway $messageGateway;
    private ChatPresenterInterface $presenter;

    protected function setUp(): void
    {
        $this->messageGateway = new class() implements MessageGateway {
            public function add(Message $message): void
            {

            }

            public function findAll() :array
            {
                return array_fill(0, 10, new Message("Message"));
            }
        };

        $this->presenter = new class() implements ChatPresenterInterface {
            public array $messages;

            public function present(ChatResponse $chatResponse)
            {
                $this->messages = array_map(fn(Message $message) => $message->getContent(), $chatResponse->getMessages());
            }
        };
    }

    public function test ()
    {
        $chat = new Chat($this->messageGateway);
        $chat->execute($this->presenter);

        $this->assertCount(10, $this->presenter->messages);
    }


}