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

error_log(json_encode($binary_tree));
//$binary_tree->printTree();