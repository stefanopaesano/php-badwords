<?php
   $usertxt = $_GET['usertxt'];
   $censura = $_GET['censura'];

   echo "Paragrafo: $usertxt <br>";
   echo "Lunghezza del paragrafo: " . strlen($usertxt) . " caratteri <br>";

   
   $paragrafoCensurato = str_ireplace($censura, '***', $usertxt);

   
   echo "Paragrafo censurato: $paragrafoCensurato <br>";
   echo "Lunghezza del paragrafo censurato: " . strlen($paragrafoCensurato) . " caratteri";
?>