<?php
$transkey_de = [
    "a" => "Rot",
    "b" => "Braun",
    "c" => "Silber",
    "d" => "Grau",
    "e" => "Orange",
    "f" => "Schwarz",
    "g" => "Sand (trocken)",
    "h" => "Durchsichtig",
    "i" => "Gelb",
    "j" => "Orange",
    "k" => "Beige",
    "l" => "Hellblau",
    "m" => "Dunkelblau",
    "n" => "Hellblau",
    "o" => "Schwarz",
    "p" => "Schwarz",
    "q" => "Tuerkies",
    "r" => "Dunkelrot",
    "s" => "Weiß",
    "t" => "Schwarz",
    "u" => "Gruen",
    "v" => "Blasslila (glaenzend)",
    "w" => "Blasslila (nicht glaenzend)",
    "x" => "Sand (nass)",
    "y" => "Orange",
    "z" => "Schwarz",];

/**
 * Replaces all chars in a string with Alina-Colours
 * 
 * @param string $input Input text as string
 * 
 * @return string String with replaced chars
 */
function convertToColour(string $input){
    $input = strtolower($input);
    $words = explode(" ", $input);
    $output = "";
    foreach($words as $word){
        $output .= wordToAlina($word) . ";";
    }
    return $output;
}


/**
 * Convert a single Word into Alina-Colours
 * 
 * @param string $input A single word to convert
 * 
 * @return string converted string with colours
 */
function wordToAlina(string $input){
    global $transkey_de;
    $chars = str_split($input, 1);
    $textout = "";
    $keys = array_keys($transkey_de);
    foreach($chars as $char){
        if(in_array($char, $keys)){
            $textout .= " " . $transkey_de[$char];
        continue 1;
    }
    $textout .= $char;
    }
    return $textout;
}