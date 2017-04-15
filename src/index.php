<?php
require __DIR__ . '/../vendor/autoload.php';
require 'container.php';

$item = $container->get('item');

/**
 * @var $binary_tree \Tree\BinaryTree
 */
$binary_tree = $container->get('binarytree');
$binary_tree->insertItem($item);

$item->setValue(111);
$binary_tree->insertItem($item);

$item->setValue(222);
$binary_tree->insertItem($item);

var_dump($binary_tree);