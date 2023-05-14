<?php

namespace Domain\Presenter;

use Domain\Response\ChatResponse;

interface ChatPresenterInterface
{
    public function present(ChatResponse $chatResponse);
}