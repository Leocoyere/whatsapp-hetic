<?php

namespace App\Entity;

use App\Repository\ChatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChatRepository::class)]
class Chat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $topic;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTopic(): ?int
    {
        return $this->topic;
    }

    public function setTopic(int $topic): self
    {
        $this->topic = $topic;

        return $this;
    }
}
