<?php

namespace Guess\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function index(): Response
    {
        return new Response("HI!");
    }
}