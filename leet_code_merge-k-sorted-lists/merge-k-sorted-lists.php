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
        $data=[];        
        for($i=0; $i<count($lists); $i++){
                array_push($data,$lists[$i]->val);
                $head =$lists[$i]->next;
                while($head != null){
                    array_push($data,$head->val);
                    $head = $head->next; 
                }
        }
    
        sort($data);
        $node = new Solution;
        for($i=0; $i<count($data);$i++){
            if ($data[$i] != null || $data[$i] > -1){
                 $node->createNode($data[$i]);
            }
            
        }
        // var_dump($node->head);
        return $node->head;
    }
    
    function createNode($value){
        $node =new ListNode($value);

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