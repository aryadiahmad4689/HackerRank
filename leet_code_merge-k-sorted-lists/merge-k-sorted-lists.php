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

    /**
     * @param ListNode[] $lists
     * @return ListNode
     */
    public $head = null;
    public $tail = null;
    function mergeKLists($lists){
        $data=[]; // O(n)        
        for($i=0; $i<count($lists); $i++){ // O(n^2)
                array_push($data,$lists[$i]->val);
                $head =$lists[$i]->next;
                while($head != null){
                    array_push($data,$head->val);
                    $head = $head->next; 
                }
        }
    
        sort($data); // O(n)
        $node = new Solution; // O(n)
        for($i=0; $i<count($data);$i++){ // O(n)
            if ($data[$i] != null || $data[$i] > -1){
                 $node->createNode($data[$i]);
            }
            
        }
        return $node->head;
    }
    
    function createNode($value){
        $node =new ListNode($value);// O(n)

        if($this->head == null)
        {
            $this->head = $node;
            $this->tail = $node;
        }else{
            $this->tail->next = $node;
        
            $this->tail = $node;
        }
    }
    
   
}