<?php
namespace BinaryTree;

final class BinaryNode {
    public $value;    // contains the node item
    public $left;     // the left child BinaryNode
    public $right;    // the right child BinaryNode

    /**
     * @param \BinaryTree\Item $item
     */
    public function __construct(Item $item) {
        $this->value = $item->getValue();
        // new nodes are leaf nodes
        $this->left = null;
        $this->right = null;
    }
}