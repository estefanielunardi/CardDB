<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Card;
use phpDocumentor\Reflection\Location;


class ApiCardController
{

    
    public function __construct(string $method, array $content = null, $id = null)
    {

        if ($method == "GET") {
            $this->index();
        }

        if ($method == "POST") {
            $this->store($content);  
        }

        if ($method == "DELETE") {
            $this->delete($id);
        }

        if ($method == "PUT") {
            $this->update($id);
        }
    }

    public function index(): void
    {
        $card = new Card();
        $cards = $card->all();
        $cardApi = [];
        
        foreach ($cards as $card) 
        {
           $cardsArray = 
           [ 
               "name" => $card->getName(),
               "title" =>$card->getTitle(),
               "id" => $card->getId(),
               "date" => $card->getDate(),
            ];
            array_push($cardApi, $cardsArray);
        }

        echo json_encode($cardApi);

    }

    public function store(array $request): void
    {
        $newCard = new Card($request["name"], $request["title"]);
        $newCard->save();
        
        $cards = $newCard->all();
        $cardApi = [];
        foreach ($cards as $card) 
        {
           $cardsArray = 
           [ 
               "name" => $card->getName(),
               "title" =>$card->getTitle(),
               "id" => $card->getId(),
               "date" => $card->getDate(),
            ];
            array_push($cardApi, $cardsArray);
        }

        echo json_encode($cardApi);

    }

    public function delete($id)
    {
        $cardHelper = new Card();
        $card = $cardHelper->findById($id);
        $card->delete();
    }

    public function update(array $request, $id)
    {
        $cardHelper = new Card();
        $card = $cardHelper->findById($id);
        $card->renameNameAndTitle($request["name"], $request["title"]);
        $card->update();  
    }
}
