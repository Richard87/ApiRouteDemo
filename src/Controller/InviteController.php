<?php declare(strict_types=1);


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class InviteController
{
    public function __invoke(): \DateTime
    {
        return new \DateTime();
    }
}