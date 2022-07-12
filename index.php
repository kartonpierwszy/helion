
<?php

// 1.
$url = "https://dlabystrzakow.pl/xml/produkty-dlabystrzakow.xml";
$xml = simplexml_load_file($url) or die("Plik niedostępny");
// echo json_encode($xml);

foreach($xml as $record) {
    echo " | " .$record->ksiazka->ident." | ".$record->ksiazka->tytul['language'] ." | ".$record->ksiazka->liczbastron."s. | ".$record->ksiazka->datawydania." |";
}

// echo"--------------------------------------------------------";

//2. 
// $xmlString = file_get_contents("https://dlabystrzakow.pl/xml/produkty-dlabystrzakow.xml");
// $xml = new SimpleXMLElement($xmlString);
// echo $xml->lista->ksiazka[52]->isbn;
// $xmlArray - json_decode(json_encode($xml), TRUE);

//
// 3.
// $url = "./produkty-dlabystrzakow.xml";
// $xml = simplexml_load_file($url);
// var_dump($xml);
// echo json_encode($xml);

?>
</body>
</html>