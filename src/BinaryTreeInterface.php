<?php
namespace BinaryTree;

interface BinaryTreeInterface {
    /**
     * 
     * @param \BinaryTree\Item $item
     */
    public function insertItem(Item $item);
    
    /**
     * @param \BinaryTree\BinaryNode $node
     * @param \BinaryTree $subtree
     */
    public function insertNode(BinaryNode $node, \BinaryTree &$subtree);
}