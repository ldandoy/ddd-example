<?php

namespace App\UserInterface\Controller;

use App\UserInterface\Presenter\ChatPresenter;
use Domain\Usecase\Chat;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

class ChatController
{
    public function __invoke(
        Chat $chat, 
        SerializerInterface $serializer
    ): JsonResponse
    {
        $presenter = new ChatPresenter();
        $chat->execute($presenter);

        return new JsonResponse($serializer->serialize($presenter->getChatViewModel(), 'json'), 200, [], true);
    }
}