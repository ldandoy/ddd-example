<?php

namespace App\UserInterface\Presenter;

use App\UserInterface\ViewModel\ChatViewModel;
use Domain\Response\ChatResponse;
use Domain\Presenter\ChatPresenterInterface;
use Domain\Entity\Message;

class ChatPresenter implements ChatPresenterInterface
{
    private ChatViewModel $chatViewModel;
    
    public function present(ChatResponse $chatResponse)
    {
        $this->chatViewModel = new ChatViewModel(
            array_map(fn(Message $message) => $message->getContent(), $chatResponse->getMessages())
        );
    }

    public function getChatViewModel(): ChatViewModel
    {
        return $this->chatViewModel;
    }
}