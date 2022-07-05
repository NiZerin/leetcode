<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */


class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val)
    {
        $this->val = $val;
    }
}

class Solution
{
    /**
     * @param ListNode $headA
     * @param ListNode $headB
     * @return ListNode
     */
    function getIntersectionNode(ListNode $headA, ListNode $headB)
    {
        $cur1 = $headA;
        $cur2 = $headB;

        while ($cur1->val == $cur2->val) {
            $cur1 = $cur1 == null ? $headB : $cur1->next;
            $cur2 = $cur2 == null ? $headA : $cur2->next;
        }

        return $cur1;
    }
}