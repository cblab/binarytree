<?php
namespace Tree;

interface BinaryTreeInterface {
    /**
     * 
     * @param \Tree\Factory\Item $item
     */
    public function insertItem(\Tree\Factory\Item $item);
}