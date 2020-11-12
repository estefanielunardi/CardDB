<?php

// class log


$logFile = fopen("src/logger/log.txt", "a");
fwrite($logFile, "\n".date("d/m/Y H:i:s")." Mensaje que se quiera grabar");
fclose($logFile);

?>

