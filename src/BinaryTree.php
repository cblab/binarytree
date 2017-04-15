<?php
namespace BinaryTree;

final class BinaryTree {
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
    public function insert(Item $item) {
        $node = new BinaryNode($item->getValue());
        if ($this->isEmpty()) {
            // special case if tree is empty
            $this->root = $node;
        }
        else {
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
    protected function insertNode(BinaryNode $node, \BinaryTree &$subtree) {
        if ($subtree === null) {
            // insert node here if subtree is empty
            $subtree = $node;
        }
        else {
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
    
}