<?php

class WordsFrequency {

    public array $count = [];

    /**
     * @param String[] $book
     */
    function __construct($book) {
        $this->count = array_count_values($book);
    }

    /**
     * @param String $word
     * @return Integer
     */
    function get($word) {
        return $this->count[$word] ?? 0;
    }
}

/**
 * Your WordsFrequency object will be instantiated and called as such:
 * $obj = WordsFrequency($book);
 * $ret_1 = $obj->get($word);
 */

$c = new WordsFrequency(["i", "have", "an", "apple", "he", "have", "a", "pen"]);

var_dump($c->get('have'));