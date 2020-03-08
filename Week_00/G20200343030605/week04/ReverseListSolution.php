<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */


class ReverseListSolution {
    /** @var ListNode */
    public $head;
    public $length;

    /**
     * @param $val
     * @return bool
     */
    public function insert($val) {
        $newNode = new ListNode($val);

        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $currentNode = $this->head;
            while ($currentNode->next != null) {
                $currentNode = $currentNode->next;
            }

            $currentNode->next = $newNode;
        }

        return true;
    }

    public function reverseList(ListNode $head)
    {
        // 无需反转空或仅一个元素的单链表
        if ($head != null) {
            if ($head->next != null) {
                $reveredList = null;
                $next = null;
                $currentNode = $head;

                // 迭代整个链表
                while ($currentNode != null) {
                    /** @var ListNode $currentNode */
                    $next = $currentNode->next;
                    $currentNode->next = $reveredList;
                    $reveredList = $currentNode;
                    $currentNode = $next;
                }

                $head = $reveredList;
            }
        }

        return $head;
    }
}

class ListNode {
    public $val = 0;
    /** @var ListNode */
    public $next = null;
    public function __construct($val)
    {
        $this->val = $val;
    }
}

$linkList = new ReverseListSolution();
$linkList->insert(1);
$linkList->insert(2);
$linkList->insert(3);
var_dump($linkList->reverseList($linkList->head)->val); // 3


