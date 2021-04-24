<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class IndexController
{
    public function indexAction(): Response {
        return new Response("Hello world!");
    }
}