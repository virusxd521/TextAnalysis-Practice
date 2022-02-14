<?php 
    class Text{
        public $text;
        
        function __construct($text){
            $this->text = $text;
        }
        // Getting the length of the entire string
        // Done
        function getLength(){
            return strlen($this->text);
        }
        
        function getNrOfWords(){
            $the_pattern = "/\w{1,}(?=\,)|[^\s]\w{1,}/";
            $result = preg_match_all($the_pattern, $this->text, $matches);
            return $result;
        }
        
        function getNrOfSentences(){
            function multipleexplode ($delimiters,$string) {
                $phase = str_replace($delimiters, $delimiters[0], $string);
                $processed = explode($delimiters[0], $phase);
                return  $processed;
            }
            $sentences = multipleexplode(array('?', '!', '.'),$this->text);
            echo count($sentences);
        }

    }