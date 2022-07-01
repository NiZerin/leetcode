<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    public array $allVal = [];
    public int $size = 0;

    /**
     * @param ListNode $head
     */
    function __construct(ListNode $head) {
        while ($head) {
            $this->allVal[] = $head->val;
            $this->size ++;

            $head = $head->next;
        }
    }

    /**
     * @return Integer
     */
    function getRandom() {
        $node = rand(0, $this->size -1);

        return $this->allVal[$node];
    }
}

/**
 * Your Solution object will be instantiated and called as such:
 * $obj = Solution($head);
 * $ret_1 = $obj->getRandom();
 */