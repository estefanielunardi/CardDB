<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Card;
use phpDocumentor\Reflection\Location;

class CardController
{

    public function __construct()
    {
        if (isset($_GET) && ($_GET["action"] == "create")) {
            $this->create();
            return;
        }

        if (isset($_GET) && ($_GET["action"] == "store")) {
            $this->store($_POST);
            return;
        }

        if (isset($_GET) && ($_GET["action"] == "edit")) {
            $this->edit($_GET["id"]);
            return;
        }

        if (isset($_GET) && ($_GET["action"] == "update")) {
            $this->update($_POST, $_GET["id"]);
            return;
        }

        if (isset($_GET) && ($_GET["action"] == "delete")) {

            $this->delete($_GET["id"]);
            return;
        }

        $this->index();
    }

    public function index(): void
    {

        $card = new Card();
        $cards = $card->all();

        new View("CardsList", [
            "cards" => $cards,
        ]);
    }

    public function create(): void
    {
        new View("CreateCard");
    }

    public function store(array $request): void
    {
        $newCard = new Card($request["name"], $request["title"]);
        $newCard->save();

        $cards = $newCard->all();

        new View("CardsList", [
            "cards" => $cards,
        ]);
    }

    public function delete($id)
    {
        $cardHelper = new Card();
        $card = $cardHelper->findById($id);
        $card->delete();

        $newCard = new Card();
        $cards = $newCard->all();

        new View("CardsList", [
            "cards" => $cards,
        ]);
    }

    public function edit($id)
    {
        
        $cardHelper = new Card();
        $card = $cardHelper->findById($id);
    
        new View("EditCard", ["card" => $card]);
    }

    public function update(array $request, $id)
    {
        
        $cardHelper = new Card();
        $card = $cardHelper->findById($id);
        $card->renameNameAndTitle($request["name"], $request["title"]);
        $card->update();
        
        $cards = $card->all();

        new View("CardsList", [
            "cards" => $cards,
        ]);
    }
}
