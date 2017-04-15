<?php
namespace Tree;

final class BinaryTree implements BinaryTreeInterface {
    protected $root; // the root node of our tree

    public function __construct() {
        $this->root = null;
    }

    public function isEmpty() {
        return $this->root === null;
    }
    
    /**
     * Insert Item into BinaryNode
     * 
     * @param type $item some item
     */
    public function insertItem(\Tree\Factory\Item $item) {
        $node = new BinaryNode($item);
        if ($this->isEmpty()) {
            // special case if tree is empty
            $this->root = $node;
        } else {
            // insert the node somewhere in the tree starting at the root
            $this->insertNode($node, $this->root);
        }
    }
  
    /**
     * Insert Node into Tree
     * 
     * @param \BinaryTree\BinaryNode $node
     * @param \BinaryTree $subtree
     */
    protected function insertNode(BinaryNode $node, BinaryNode &$subtree=null) {
        if ($subtree === null) {
            // insert node here if subtree is empty
            $subtree = $node;
        } else {
            if ($node->value > $subtree->value) {
                // keep trying to insert right
                $this->insertNode($node, $subtree->right);
            }
            else if ($node->value < $subtree->value) {
                // keep trying to insert left
                $this->insertNode($node, $subtree->left);
            }
            else {
                // reject duplicates
            }
        }
    }
    
    public function printTree() {
        
        if ($this->root == null) {
                return;
        }
        
        $queue = [$this->root];
        
            while (!empty($queue)) {
                    $size = count($queue);
                    
                    error_log(json_encode($queue));
                    
                    for ($i = 0; $i < $size; $i++) {
                        
                            $node = $queue[$i];
                            unset($queue[$i]);
                            echo $node->value . " ";
                            
                            if ($node->left != null) {
                                    array_push($queue, $node->left);
                            }
                            
                            if ($node->right != null) {
                                    array_push($queue, $node->right);
                            }
                            
                            echo "\n";
                            
                            die();
                            
                    }
            }
    }
}