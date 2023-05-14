<?php

namespace Domain\Entity;

class Message
{
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }


    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent($content): void
    {
        $this->content = $content;
    }
}