<?php


namespace App\Controller;


use App\Entity\User;

class FetchImportantMessagesController
{
    public function __invoke(User $user): array
    {
        return [];
    }
}