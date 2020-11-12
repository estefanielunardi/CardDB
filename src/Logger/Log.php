<?php

namespace App\Logger;
use App\Card;


class Log
{
    public function __construct(string $action = '', string $message = '', int $id = null)
    {
        $this->time = date("d-m-Y H:i:s");
        $this->action = $action;
        $this->message = $message;
        $this->id = $id;
    }
    
    public function logInFile(): void
    {
        $data = array
        (
            'time'=> $this->time, 
            'action' => $this->action, 
            'message' => $this->message,
            'id' =>  $this->id
        );
        
        $json_string = json_encode($data, JSON_PRETTY_PRINT);
        $logFile = fopen("src/logger/log.json", "a");
        fwrite($logFile, $json_string . "\n");
        fclose($logFile);  
    }
    
}


?>

