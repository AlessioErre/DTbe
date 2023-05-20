<?php

/*    EXAMPLE OF USE :         */
function Offusca(){
   // Result obfuscated file
   //$Mp3Crt = "/home/black-jack/Scrivania/k/Mp3Crt.php";
   $mp3f = "Mp3.php";
   $mp4f = "Mp4.php";
   $wavf = "Wav.php";
   //$wmaf = "Wma.php";
   $oggf = "Ogg.php";

   // Call the lib
   require_once(dirname(__FILE__) . '/' . 'pom' . '/' . 'file' . '/' . 'class' . '/' . 'lib_obfuscator.php');

   // Create the Obfuscator object
   $obfuscator = new Free_Obfusc();

   // Get the file content to obfuscate
   $mp3c = file_get_contents('Mp3.php');
   $mp4c = file_get_contents('Mp4.php');
   $wavc = file_get_contents('Wav.php');
   //$wmac = file_get_contents('Wma.php');
   $oggc = file_get_contents('Ogg.php');

   // 1 round of obfuscation iterations
   $it = 1;

   // Obfuscating the file
   // $c => the content to obfuscate
   // $it => number of obfuscation iterations
   $Mp3res = $obfuscator->doIt($mp3c, $it);
   $Mp4res = $obfuscator->doIt($mp4c, $it);
   $Wavres = $obfuscator->doIt($wavc, $it);
   //$Wmares = $obfuscator->doIt($wmac, $it);
   $Oggres = $obfuscator->doIt($oggc, $it);						


   // Write result in the $obf_file
   $mp3file = file_put_contents($mp3f, $Mp3res);
   $mp4file = file_put_contents($mp4f, $Mp4res);
   $wavfile = file_put_contents($wavf, $Wavres);
   //$wmafile = file_put_contents($wmaf, $Wmares);
   $oggfile = file_put_contents($oggf, $Oggres);


   // Array di nomi di file da sovrascrivere
   $file_names = array($mp3file, $mp4file, $wavfile, $oggfile);

   try{

      // Loop attraverso ogni nome di file nell'array
      foreach ($file_names as $file_name){
  
         // Apri il file in modalità scrittura sovrascrivendo il contenuto esistente
        $file = fopen($file_name, "w");
  
        // Scrivi il nuovo contenuto nel file
        fwrite($file, $file_name);
        fclose($file);}}
      catch(Exception $e){
      echo 'Errore - Codice Eccezione: ',  $e->getMessage(), "\n";
      fclose($file);}}
Offusca()


?>
