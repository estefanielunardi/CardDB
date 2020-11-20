<?php


namespace App\Models;


use App\Database;

class Card
{
    private string $name;
    private string $title;
    private string $date;
    private ?int  $id;
    private $database;
    private $table = "enquiry_cards_table";

    public function __construct(string $name = '', string $title = '',  string $date = '', int $id =  null)
    {
        $this->name = $name;
        $this->title = $title;
        $this->date = $date;
        $this->id = $id;
        
        if (!$this->database) {
            $this->database = new Database();
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getId()
    {
        return $this->id;
    }

    public function renameNameAndTitle($name, $title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    public function save(): void
    {
        $this->database->mysql->query("INSERT INTO `{$this->table}` (`name`,`title`) VALUES ('$this->name', '$this->title');");
    }
    
    public function all()
    {
        $query = $this->database->mysql->query("SELECT * FROM {$this->table} WHERE `archive`= 0");
        $cards = $query->fetchAll();
        $cardList = [];
        foreach ($cards as $card) {
            $cardItem = new Card($card["name"], $card["title"], $card["date"], $card["id"]);
            array_push($cardList, $cardItem);
        }
        return $cardList;
    }  
    
    public function delete()
    {
        $query = $this->database->mysql->query("DELETE FROM `enquiry_cards_table` WHERE `enquiry_cards_table`.`id` = {$this->id}");
    }    

    public function findById($id)
    {
        $query = $this->database->mysql->query("SELECT * FROM `enquiry_cards_table` WHERE `id` = {$id}");
        $result = $query->fetchAll();

        return new Card($result[0]["name"], $result[0]["title"], $result[0]["date"], $result[0]["id"]);
    }
   
    public function Update()
    {
        $this->database->mysql->query("UPDATE `enquiry_cards_table` SET `name` =  '{$this->name}', `title` = '{$this->title}' WHERE `id` = {$this->id}");
    }

    public function archiveDB()
    {
       $this->database->mysql->query("UPDATE `enquiry_cards_table` SET `archive` = 1  WHERE `id` = {$this->id}");
    }

    public function archivedList()
    {
        $query = $this->database->mysql->query("SELECT * FROM `enquiry_cards_table` WHERE `archive`= 1");
        $cards = $query->fetchAll();
        $cardList = [];
        foreach ($cards as $card) 
        {
            $cardItem = new Card($card["name"], $card["title"], $card["date"], $card["id"]);
            array_push($cardList, $cardItem);
        }
        return $cardList;
    }

    public function lastCard()
    {
        $database = new Card();
        $query = $database->mysql->query("SELECT * FROM `enquiry_cards_table` ORDER BY id DESC LIMIT 1");
        $card = $query->fetchAll();
        return new Card ($card[0]["name"], $card[0]["title"], $card[0]["date"], $card[0]["id"]);
    }


}
