<?php

namespace App\UserInterface\Controller;

use Domain\Usecase\Send;
use Domain\Request\SendRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

class SendController
{
    public function __invoke(
        Send $send, 
        Request $request,
        SerializerInterface $serializer
    ): JsonResponse
    {
        $request = $serializer->deserialize($request->getContent(), SendRequest::class, 'json');
        $send->execute($request);

        return new JsonResponse(null, Response::HTTP_CREATED);
    }
}