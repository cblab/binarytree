<?php
require __DIR__ . '/../vendor/autoload.php';
require 'container.php';

$item_values  = $container->getParameter('binary.tree');
$item_factory = $container->get('factory.itemfactory');
$binary_tree  = $container->get('binarytree');

foreach($item_values as $item_value) {
    $item = $item_factory->createItem($item_value);
    $binary_tree->insertItem($item);
}

echo "traverseInOrder:" . PHP_EOL;
$binary_tree->traverseInOrder();

echo "traversePreOrder:" . PHP_EOL;
$binary_tree->traversePreOrder();

echo "traversePostOrder:" . PHP_EOL;
$binary_tree->traversePostOrder();

echo "breadthFirstSearch:" . PHP_EOL;
$binary_tree->breadthFirstSearch();