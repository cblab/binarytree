<?php
namespace Tree;

interface BinaryTreeInterface {
    /**
     * 
     * @param \Tree\Factory\Item $item
     */
    public function insertItem(\Tree\Factory\Item $item);
    public function traverseInOrder();
    public function traversePreOrder();
    public function traversePostOrder();
    public function breadthFirstSearch();
    public function printTree();
}