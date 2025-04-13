<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController {

  private array $messages = [
    "hi", "hello", "hey", "how are you", "goodbye"
  ];


  #[Route('/{limit<\d+>?3}', name: 'app_index')]
  public function index(int $limit): Response {
    return new Response(implode(',', array_slice($this->messages, 0, $limit)));
  }

  #[Route('/messages/{id<\d+>}', name: 'app_show_one')]
  public function showOne($id): Response {
    return new Response($this->messages[$id]);
  }

}