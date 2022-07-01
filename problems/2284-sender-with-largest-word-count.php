<?php

class Solution {

    /**
     * @param String[] $messages
     * @param String[] $senders
     * @return String
     */
    function largestWordCount(array $messages, array $senders) {
        $senderCount = [];

        foreach ($messages as $k => $message) {
            $wordCount = count(explode(' ', $message));
            $name = $senders[$k];

            if (!array_key_exists($name, $senderCount)) {
                $senderCount[$name] = $wordCount;
            } else {
                $senderCount[$name] += $wordCount;
            }
        }

        krsort($senderCount);
        arsort($senderCount);

        var_dump($senderCount);

        return array_key_first($senderCount);
    }
}


$messages = ["How is leetcode for everyone","Leetcode is useful for practice", "i am god"];

$senders = ["Bob","Charlie", "ae"];

$c = new Solution();

$c->largestWordCount($messages, $senders);

