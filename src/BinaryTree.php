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
    
    public function traverseInOrder() {
        //print_r($this->root);
        $this->root->traverseInOrder();
    }
    
    public function traversePreOrder() {
        //print_r($this->root);
        $this->root->traversePreOrder();
    }
    
    public function traversePostOrder() {
        //print_r($this->root);
        $this->root->traversePostOrder();
    }
    
    public function breadthFirstSearch() {
        $this->root->breadthFirstSearch();
    }
    
    
    public function printTree() {
        
        if ($this->root == null) {
                return;
        }
        
        $queue = [$this->root];
        
        $level = 1;
        while (!empty($queue)) {
                foreach ($queue as $index => $node) {
                    
                    $tab_base = (int) ((3 / $level * 3) * 0.5 ) + 10;
                    $tab = str_repeat(" ", $tab_base);
                    $half_tab = str_repeat(" ", $tab_base / 2);
                    
                    if ($level == 1) {
                        echo $half_tab . $tab . $node->value;
                    } else {
                        echo $tab . $node->value;
                    }
                    
                    $left = $right = false;
                    if ($node->left != null) { 
                            $queue[] = $node->left;
                            $left = true;
                    }

                    if ($node->right != null) {
                            $queue[] = $node->right;
                            $right = true;
                    }
                    
                    if ($left || $right) {
                        echo PHP_EOL;
                        $queue = array_values($queue);
                        
                        if ($left) {
                            echo $tab . "/";
                       }
                        
                        if ($right) {
                            echo $half_tab . $tab . "\\";
                        }
                    }
                    
                    foreach ($queue as $test_index => $test_node) {
                        if($node->value == $test_node->value) {
                            unset($queue[$test_index]);
                        }
                    }
                    
                }
                
                echo PHP_EOL;
                $level++;
        }
    }
}