<?php
namespace Tree;

final class BinaryNode {
    public $value;    // contains the node item
    public $left;     // the left child BinaryNode
    public $right;    // the right child BinaryNode
    public $level;    // the tree depth level

    /**
     * @param \BinaryTree\Item $item
     */
    public function __construct(\Tree\Factory\Item $item) {
        $this->value = $item->getValue();
        // new nodes are leaf nodes
        $this->left = null;
        $this->right = null;
        $this->level = null;
    }
    
    //  (symmetric) – traverse left first, process the current node, and then traverse right.
    public function traverseInOrder() {
        if ($this->left !== null) {
            $this->left->traverseInOrder();
        }
        
        echo $this->value . PHP_EOL;
        
        if ($this->right !== null) {
            $this->right->traverseInOrder();
        }
    }
    
    // process the current node and then traverse the left and right sub-trees.
    public function traversePreOrder() {
        echo $this->value . PHP_EOL;
        
        if ($this->left !== null) {
            $this->left->traversePreOrder();
        }
        
        if ($this->right !== null) {
            $this->right->traversePreOrder();
        }
    }
    
    // traverse left and right first and then process the current node.
    public function traversePostOrder() {
        
        if ($this->left !== null) {
            $this->left->traversePostOrder();
        }
        
        if ($this->right !== null) {
            $this->right->traversePostOrder();
        }
        
        echo $this->value . PHP_EOL;
    }
    
    public function breadthFirstSearch() {
        $queue = new \SplQueue();
        $queue->enqueue($this);
        
        while(!($queue->isEmpty())){
            
            $node = $queue->dequeue();
            
            if ($node->left !== null) {
                $queue->enqueue($node->left);
            }
        
            if ($node->right !== null) {
                $queue->enqueue($node->right);
            }
            
            echo $node->value . PHP_EOL;
        }
    }
}