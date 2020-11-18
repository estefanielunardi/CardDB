<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Card;
use phpDocumentor\Reflection\Location;
use App\Logger\Log;

class CardController
{

    public function __construct()
    {
        if (isset($_GET) && !isset($_GET["action"])) {
            $this->index();
            return;
        }

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

        if (isset($_GET) && ($_GET["action"] == "checked")) {
            $this->checked($_GET["id"]);
            return;
        }

        if (isset($_GET) && ($_GET["action"] == "archiveview")) {
            $this->archivedView();
            return;
        }
        
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
        $log = new Log("Create","Created a new Card");
        $log-> logInFile();

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
        $log = new Log("Delete","Card deleted", $id);
        $log-> logInFile();

        new View("CardsList", [
            "cards" => $cards,
        ]);
    }

    
    public function edit($id)
    {
        
        $cardHelper = new Card();
        $card = $cardHelper->findById($id);

        $log = new Log("Edit","Edit page", $id);
        $log-> logInFile();
    
        new View("EditCard", ["card" => $card]);
    }

    public function update(array $request, $id)
    {
        $cardHelper = new Card();
        $card = $cardHelper->findById($id);
        $card->renameNameAndTitle($request["name"], $request["title"]);
        $card->update();
        
        $cards = $card->all();

        $log = new Log("Update","Updated Card", $id);
        $log-> logInFile();

        new View("CardsList", [
            "cards" => $cards,
        ]);
    }
    
    public function checked($id)
    {
        $cardDone = new Card();
        $card = $cardDone->findById($id);

        $card->archiveDB();
        $cardFunction = new Card(); 
        $cardDoneList = $cardFunction->archivedList();
        
        $newCard = new Card();
        $cards = $newCard->all(); 
        
        new View("CardsList", [
            "cards" => $cards,
        ]);
        
    }
    
    public function archivedView()
    { 
        $cardFunction = new Card(); 
        $cardDoneList = $cardFunction->archivedList();

        new View("ArchivedCardList", ["card" => $cardDoneList]); 
    }
    
}
